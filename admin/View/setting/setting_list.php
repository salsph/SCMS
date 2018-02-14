<?php Theme::header(); ?>

<div class="container">
    <div class="row">
        <div class="col page-title">
            <div class="col-md-12">
                <h2>General</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?php Theme::block('setting/tabs'); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <form id="setting_update">

            <?php foreach ($settings as $setting) :?>
                <?php if ($setting['field_key'] == 'language') : ?>

                    <p>
                    <div class="setting_name"><?=ucfirst($setting['name'])?></div>
                        <select class="input_1" name="<?= $setting['field_key'] ?>" >
                            <?php foreach ($languages as $lang) : ?>
                                <option value="<?=$lang['key']?>">
                                    <?=$lang['title']?>
                                </option>
                            <?php endforeach;?>
                        </select>

                    </p>

                    <?php else : ?>

                    <p>
                        <div class="setting_name"><?=ucfirst($setting['name'])?></div>
                        <input class="input_1" type="text" name="<?= $setting['field_key'] ?>" value="<?= $setting['value'] ?>">
                    </p>

                    <?php endif; ?>

            <?php endforeach; ?>

        </form>
            <a onclick="setting.update()" class="spec_link" href="#">Update</a>
        </div>


    </div>


</div>


<?php Theme::footer(); ?>