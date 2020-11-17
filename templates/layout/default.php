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
        <?= $this->fetch('title') ?> | Lukas McDiarmid
    </title>

    <?= $this->Html->css(['main.min']) ?>
    <?= $this->fetch('css') ?>
</head>
<body>
<?= $this->Flash->render() ?>
<?= $this->fetch('content') ?>
<?= $this->fetch('script') ?>
</body>
</html>
