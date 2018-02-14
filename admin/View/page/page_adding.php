<?php Theme::header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Add new page</h3>
            
            <form>
                <input class="input_1" type="text" placeholder="Title" name="title" id="form_title">
                <textarea name="content" class="form_content" id="redactor" ></textarea>
            </form>
            <button class="add_click spec_link" onclick="page.add();">Add</button>

        </div>
    </div>
</div>

<?php Theme::footer(); ?>
