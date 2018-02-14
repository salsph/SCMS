<?php Theme::header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page_header">Edit the post</h2>

            <form>
                <input type="hidden" name="id" id="form_id" value="<?= $post['id'] ?>">
                <input class="input_1" type="text" placeholder="Title" name="title" id="form_title" value="<?=$post['title'] ?>">
                <input type="file" id="form_image" name="image">
                <textarea placeholder="Content" name="content" class="form_content textarea_1" id="redactor" ><?= $post['content'] ?></textarea>
            </form>
            <button class="add_click spec_link" onclick="post.update();">Update</button>

        </div>
    </div>
</div>

<?php Theme::footer(); ?>