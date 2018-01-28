<?php $this->theme->header() ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Edit the post</h3>

            <?php //print_r($post); die(); ?>

            <form>
                <input type="hidden" name="id" id="form_id" value="<?= $post['id'] ?>">
                <input type="text" placeholder="Title" name="title" id="form_title" value="<?=$post['title'] ?>">
                <textarea name="content" class="form_content" id="redactor" ><?= $post['content'] ?></textarea>
            </form>
            <button class="add_click" onclick="post.update();">Update</button>

        </div>
    </div>
</div>

<?php $this->theme->footer() ?>
