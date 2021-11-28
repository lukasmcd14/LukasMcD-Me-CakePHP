<?php

$menu = $this->Menu->create('main', [
    'templates' => [
        'menu' => '<ul class="admin-menu">{{items}}</ul>'
    ]
]);
$menu->addChild('Home', ['uri' => ['controller' => 'Admin', 'action' => 'index']]);

$menu->addChild('Projects', ['uri' => ['controller' => 'Admin', 'action' => 'listPosts']]);
$menu['Projects']->addChild('List Projects', ['uri' => ['controller' => 'Admin', 'action' => 'listPosts']]);
$menu['Projects']->addChild('New Project', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
?>

<div class="menu-header">
Menu
<a class="menu-toggle" href="javascript:toggleMenu()"><span class="material-icons">close</span></a>
</div>
<?= $this->Menu->render() ?>

