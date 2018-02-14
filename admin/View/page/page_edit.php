<?php Theme::header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page_header">Edit the page</h2>

            <?php //print_r($page) ?>

            <form>
                <input type="hidden" name="id" id="form_id" value="<?= $page['id'] ?>">
                <input class="input_1" type="text" placeholder="Title" name="title" id="form_title" value="<?=$page['title'] ?>">
                <textarea name="content" class="form_content" id="redactor" ><?= $page['content'] ?></textarea>
            </form>
            <button class="add_click spec_link" onclick="page.update();">Update</button>

        </div>
    </div>
</div>

<?php Theme::footer(); ?>
