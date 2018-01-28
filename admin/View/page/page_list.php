<?php $this->theme->header() ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Pages</h3>

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
                            <a href="/admin/page/edit/<?= $page['id'] ?>">Edit</a>
                        </td>

                        <td>
                            <button onclick="page.delete(<?= $page['id'] ?>);">Delete</button>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </table>


            <a href="/admin/page/create">New Page</a>

        </div>
    </div>
</div>

<?php $this->theme->footer() ?>
