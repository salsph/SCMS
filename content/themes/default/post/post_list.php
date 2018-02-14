<?php ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Posts</h2>

            <?php
            foreach ($list as $post) {
                Theme::block('post/single_post', $post);
            }
            ?>

        </div>
    </div>
</div>

