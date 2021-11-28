<?php

$menu = $this->Menu->create('main', [
    'templates' => [
        'menu' => '<ul class="admin-menu">{{items}}</ul>'
    ]
]);
$menu->addChild('Home', ['uri' => ['controller' => 'Admin', 'action' => 'index']]);

$menu->addChild('Projects', ['uri' => ""]);
$menu->addChild('Projects2', ['uri' => ""]);
$menu['Projects']->addChild('List Projects', ['uri' => ['controller' => 'Admin', 'action' => 'listPosts']]);
$menu['Projects']->addChild('New Project', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects']->addChild('New Project1', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects']->addChild('New Project2', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects']->addChild('New Project3', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects']->addChild('New Project4', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects']->addChild('New Project5', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects']->addChild('New Project6', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects']->addChild('New Project7', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects']->addChild('New Project8', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects2']->addChild('New Project9', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects2']->addChild('New Project10', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects2']->addChild('New Project11', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects2']->addChild('New Project12', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects2']->addChild('New Project13', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects2']->addChild('New Project14', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects2']->addChild('New Project15', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects2']->addChild('New Project16', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects2']->addChild('New Project17', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects2']->addChild('New Project18', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects2']->addChild('New Project19', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects2']->addChild('New Project20', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects2']->addChild('New Project21', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects2']->addChild('New Project22', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects2']->addChild('New Project23', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects2']->addChild('New Project24', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects2']->addChild('New Project25', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects2']->addChild('New Project26', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects2']->addChild('New Project27', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects2']->addChild('New Project28', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects2']->addChild('New Project29', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects2']->addChild('New Project30', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects2']->addChild('New Project31', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects2']->addChild('New Project32', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects2']->addChild('New Project34', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
$menu['Projects2']->addChild('New Project35', ['uri' => ['controller' => 'Admin', 'action' => 'newPost']]);
?>

<div class="menu-header">
    Menu
    <a class="menu-toggle" href="javascript:toggleMenu()">
        <span class="material-icons">close</span>
    </a>
</div>
<?= $this->Menu->render() ?>

