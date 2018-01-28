<?php $this->theme->header() ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Posts</h3>

            <table>
                <tr>
                    <td>
                        id
                    </td>

                    <td>
                        title
                    </td>

                    <td>
                        date
                    </td>

                    <td>

                    </td>
                </tr>
                <?php foreach ($posts as $post) : ?>
                    <tr id="post-<?=$post['id'];?>">
                        <td>
                            <?= $post['id'] ?>
                        </td>

                        <td>
                            <?= $post['title']?>
                        </td>


                        <td>
                            <?= $post['reg_date']?>
                        </td>

                        <td>
                            <a href="/admin/post/edit/<?= $post['id'] ?>">Edit</a>
                        </td>

                        <td>
                            <button onclick="post.delete(<?=$post['id'];?>);">Delete</button>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </table>


            <a href="/admin/post/create">New Post</a>

        </div>
    </div>
</div>

<?php $this->theme->footer() ?>
