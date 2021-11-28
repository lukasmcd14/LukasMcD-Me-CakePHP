<?php
/**
 * @var \App\View\AppView $this
 */

$this->assign('title', 'Admin - Dashboard');
$this->Html->meta('description', 'The admin page.', ['block' => true]);
?>

Hello
<?= $this->Html->link('New Post', ['controller' => 'Admin', 'action' => 'newPost']) ?>
