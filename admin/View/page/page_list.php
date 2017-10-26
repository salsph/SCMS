<?php $this->theme->header() ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Pages</h3>

            <?php print_r($pages); ?>
            <table>
                <tr>
                    <td>
                        id
                    </td>

                    <td>
                        title
                    </td>

                    <td>
                        content
                    </td>
                    <td>
                        date
                    </td>
                </tr>
                <tr>
                    <td>
                        valera
                    </td>

                    <td>
                        geka
                    </td>

                    <td>
                        gus
                    </td>

                    <td>
                        gus
                    </td>
                </tr>
            </table>

            <a href="/admin/page/add">New Page</a>

        </div>
    </div>
</div>

<?php $this->theme->footer() ?>
