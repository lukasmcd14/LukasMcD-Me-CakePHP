<?php
/**
 * @var \App\Model\Entity\Project[] $projects
 * @var \App\View\AppView $this
 */

$this->assign('title', 'Projects');
$this->Html->meta('description', 'A list of projects I\'ve completed over the years.', ['block' => true]);

foreach ($projects as $project) {
    ?>
    <?= $project->title ?>
    <?php
}
