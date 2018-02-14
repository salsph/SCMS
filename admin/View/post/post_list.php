<?php Theme::header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="page_header">Posts</h2>

            <table class="diff_table">
                <tr class="headers">
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
                        edit
                    </td>

                    <td>
                        delete
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
                            <a href="/admin/post/edit/<?= $post['id'] ?>">
                                <i class="fa fa-pencil icon_edit" aria-hidden="true"></i>
                            </a>
                        </td>

                        <td>
                            <i onclick="post.delete(<?=$post['id'];?>);" class="fa fa-times icon_delete" aria-hidden="true"></i>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </table>

            <a class="spec_link" href="/admin/post/create">New Post</a>


        </div>
    </div>
</div>

<?php Theme::footer(); ?>
