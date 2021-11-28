<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project $post
 */

$this->assign('title', 'New Post');
$this->Html->meta('description', 'The admin page for adding project posts.', ['block' => true]);

$this->Html->css("new-post.min", ['block' => true])
?>


<?= $this->Form->create($post, ["id" => "post", 'enctype' => 'multipart/form-data']) ?>
<div class="post-meta">
    <div class="post-thumbnail">
        <?= $this->Form->control("thumbnail", ['type' => 'file', 'id' => 'thumbnail']) ?>
        <img id="thumbnail-preview" alt="Shitty placeholder image" src="/imgs/upload_an_image.png">
    </div>
    <div class="post-info">
        <?= $this->Form->control("title", ['value' => 'cum']) ?>
        <?= $this->Form->control("tags", ['value' => 'cum']) ?>
        <?= $this->Form->control("slug", ['type' => 'text', 'value' => 'cum']) ?>
        <?= $this->Form->control("description", ['type' => 'textarea', 'value' => 'cum']) ?>
    </div>
</div>
<br>
<div class="post-body">
    <?= $this->Form->control("body", ['type' => 'textarea', 'id' => 'editor', 'value' => 'cum']) ?>
</div>

<?= $this->Form->button("Save", ['type' => 'button', 'id' => 'save']) ?>
<?= $this->Form->end() ?>

<?= $this->Html->script("tinymce/tinymce.min", ['block' => false]); ?>
<?= $this->Html->script("admin-add", ['block' => false]); ?>


