<?php

namespace App\Controller;

use App\Model\Entity\Project;
use App\Model\Entity\ProjectBody;
use Cake\Controller\ComponentRegistry;
use Cake\Error\Debugger;
use Cake\Event\EventInterface;
use Cake\Event\EventManagerInterface;
use Cake\Http\Response;
use Cake\Http\ServerRequest;
use Cake\ORM\TableRegistry;
use Cake\Routing\Router;
use Laminas\Diactoros\UploadedFile;
use Psr\Log\LogLevel;

class AdminController extends AppController {

    public function initialize(): void {
        parent::initialize();
        $this->viewBuilder()->setLayout("admin");
        $this->Projects = TableRegistry::getTableLocator()->get("Projects");
        $this->ProjectBody = TableRegistry::getTableLocator()->get("ProjectBody");
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index() {
    }

    public function listPosts() {
        $projects = $this->paginate($this->Projects->find("all", ['contain' => ['ProjectBody']]));

        $this->set(compact("projects"));
    }

    public function newPost() {
        /** @var Project $project */
        $project = $this->Projects->newEmptyEntity();
        /** @var ProjectBody $body */
        $body = $this->ProjectBody->newEmptyEntity();

        if ($this->request->is('post')) {
            $project = $this->Projects->patchEntity($project, $this->request->getData());

            // Upload thumbnail and rename it to a unique name
            /** @var UploadedFile $upload */
            $upload = $this->request->getData("thumbnail");

            if (!is_null($upload)) {
                $name = pathinfo($upload->getClientFilename(), PATHINFO_FILENAME);
                $ext = strtolower(pathinfo($upload->getClientFilename(), PATHINFO_EXTENSION));

                // Make the filename unique
                $filename = uniqid(md5($name . time())) . "-" . $name . "." . $ext;

                // Move the upload to the correct folder
                $upload->moveTo("uploads/$filename");
                $project->thumbnail = Router::url("/", true) . "uploads/$filename";
            }

            // Save post body first in separate table
            $body->body = $this->request->getData("body");;
            $savedBody = $this->ProjectBody->save($body);

            if ($savedBody) {
                // Update the submitted entity to point to the saved body
                $time = new \DateTime();
                // TODO Come back and add the user UUID to the post after implementing users
                // $project->createdby = UUID here;
                $project->body_id = $savedBody->id;
                $project->created = $time;
                $project->edited = $time;

                if ($this->Projects->save($project)) {
                    $this->Flash->success(__('The project has been saved.'));

                    return $this->redirect(['action' => 'listPosts']);
                }
            }
            $this->Flash->error(__('The project could not be saved. Please, try again.'));
        }


        $this->set("post", $project);
    }

}
