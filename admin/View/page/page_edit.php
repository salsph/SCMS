<?php $this->theme->header() ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Edit the page</h3>

            <?php //print_r($page) ?>

            <form>
                <input type="hidden" name="id" id="form_id" value="<?= $page['id'] ?>">
                <input type="text" placeholder="Title" name="title" id="form_title" value="<?=$page['title'] ?>">
                <textarea name="content" class="form_content" id="redactor" ><?= $page['content'] ?></textarea>
            </form>
            <button class="add_click" onclick="page.update();">Update</button>

        </div>
    </div>
</div>

<?php $this->theme->footer() ?>
