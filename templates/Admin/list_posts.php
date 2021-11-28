<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project[] $projects
 */
?>
<?php foreach ($projects as $project): ?>
    <div>
        <?= $project->title ?>
        <br>
        <?= $project->description ?>
        <br>
        <?= $project->created ?>
        <br>
        <?= $project->project_body->body ?>
    </div>
<?php endforeach; ?>
