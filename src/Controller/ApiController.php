<?php

namespace App\Controller;

use Cake\Event\EventInterface;
use Cake\Routing\Router;
use Laminas\Diactoros\UploadedFile;

class ApiController extends AppController {

    /**
     * @throws \Exception
     */
    public function initialize(): void {
        parent::initialize();

        $this->loadComponent("RequestHandler");
        $this->viewBuilder()->setLayout("ajax");
        $this->viewBuilder()->setClassName("Json");
        $this->viewBuilder()->setOption('serialize', ['status', 'result']);
        $this->set('status', 501);
    }

    public function uploadImage() {
        $this->viewBuilder()->setOption('serialize', ['location']);

        /** @var UploadedFile $image */
        $upload = current($this->request->getUploadedFiles());

        $name = pathinfo($upload->getClientFilename(), PATHINFO_FILENAME);
        $ext = strtolower(pathinfo($upload->getClientFilename(), PATHINFO_EXTENSION));

        // Make the filename unique
        $filename = uniqid(md5($name . time())). "-" . $name . "." . $ext;

        // Move the upload to the correct folder
        $upload->moveTo("uploads/$filename");
        $this->set("location", Router::url("/", true) . "uploads/$filename");
    }

}
