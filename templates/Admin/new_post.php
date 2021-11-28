<?php
/**
 * @var \App\View\AppView $this
 */

$this->assign('title', 'New Post');
$this->Html->meta('description', 'The admin page for adding project posts.', ['block' => true]);

$this->Html->css("new-post.min", ['block' => true])
?>


<form id='post' method="post">
    <div class="post-meta">
        <div class="post-thumbnail">
            <div>
                <label for="thumbnail">Thumbnail</label>
                <input id="thumbnail" name="thumbnail" type="file">
            </div>
            <!-- TODO Fix the sizing on the image so it doesn't look fucked -->
            <img id="thumbnail-preview" src="/imgs/upload_an_image.png">
        </div>
        <div class="post-info">
            <label for="title">Title</label>
            <input id="title" name="title" type="text">
            <label for="tags">Tags</label>
            <input id="tags" name="tags" type="text">
            <label for="slug">Slug</label>
            <input id="slug" name="slug" type="text">
        </div>
    </div>

    <br>
    <label for="editor">Body:</label>
    <textarea id="editor" name="body"></textarea>

    <input id='save' type="button" value="Save">
</form>

<?= $this->Html->script("tinymce/tinymce.min", ['block' => false]); ?>
<?= $this->Html->script("admin-add", ['block' => false]); ?>


