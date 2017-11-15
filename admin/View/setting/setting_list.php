<?php $this->theme->header(); ?>

<div class="container">
    <row>

        <form action="#">

            <?php foreach ($settings as $setting) ?>
            <p>
                <?= $setting['name'] ?>
                <input type="text" name="<?= $setting['field_key'] ?>" value="<?= $setting['value'] ?>">
            </p>


        </form>

    </row>
</div>


<?php $this->theme->footer(); ?>