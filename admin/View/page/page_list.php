<?php Theme::header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Pages</h2>

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
                <?php foreach ($pages as $page) : ?>
                    <tr id="page-<?=$page['id']?>">
                        <td>
                            <?= $page['id'] ?>
                        </td>

                        <td>
                            <?= $page['title']?>
                        </td>


                        <td>
                            <?= $page['reg_date']?>
                        </td>

                        <td>
                            <a href="/admin/page/edit/<?= $page['id'] ?>">
                                <i class="fa fa-pencil icon_edit" aria-hidden="true"></i>
                            </a>
                        </td>

                        <td>
                            <i onclick="page.delete(<?= $page['id'] ?>);" class="fa fa-times icon_delete" aria-hidden="true"></i>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </table>


            <a class="spec_link" href="/admin/page/create">New Page</a>

        </div>
    </div>
</div>

<?php Theme::footer(); ?>
