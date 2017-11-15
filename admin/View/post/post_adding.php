<?php $this->theme->header() ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Add new post</h3>

            <form>
                <input type="text" placeholder="Title" name="title" id="form_title">
                <textarea name="content" class="form_content" id="redactor" ></textarea>
            </form>
            <button class="add_click" onclick="post.add();">Add</button>

        </div>
    </div>
</div>

<?php $this->theme->footer() ?>
