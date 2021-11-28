<?php
/**
 * @var \App\View\AppView $this
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>

    <title>
        <?= $this->fetch('title') ?> | Admin | Lukas McDiarmid
    </title>

    <?= $this->Html->css(['admin.min']) ?>
    <?= $this->fetch('css') ?>
</head>
<body>

<div class="top-bar">
    Admin
    <a class="menu-toggle" href="javascript:toggleMenu()">
        <span class="material-icons">menu</span>
    </a>
</div>

<div class="page-wrapper">
    <div id="menu-wrapper">
        <?= $this->element('admin-menu') ?>
    </div>
    <div class="admin-page-wrapper">
        <div class="admin-page">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </div>
</div>

<?= $this->Html->script('admin.min') ?>
<?= $this->fetch('script') ?>
</body>
</html>
