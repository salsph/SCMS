<?php $this->theme->header(); ?>

<div class="container">
    <div class="row">
        <div class="col page-title">
            <h3>General</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php $this->theme->block('setting/tabs'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <form id="setting_update">

            <?php foreach ($settings as $setting) :?>
                <?php if ($setting['field_key'] == 'language') : ?>

                    <p>
                        <?= $setting['name'] ?>
                        <select name="<?= $setting['field_key'] ?>" >
                            <?php foreach ($languages as $lang) : ?>
                                <option value="<?=$lang['key']?>">
                                    <?=$lang['title']?>
                                </option>
                            <?php endforeach;?>
                        </select>

                    </p>

                    <?php else : ?>

                    <p>
                        <?= $setting['name'] ?>
                        <input type="text" name="<?= $setting['field_key'] ?>" value="<?= $setting['value'] ?>">
                    </p>

                    <?php endif; ?>

            <?php endforeach; ?>

        </form>
            <button onclick="setting.update()">Update</button>
        </div>


    </div>


</div>


<?php $this->theme->footer(); ?>