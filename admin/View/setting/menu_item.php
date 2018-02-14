<li class="menu-item-<?= $id ?>" data-id="<?= $id ?>">
    <span class="menu_item"><i class="icon-pencil icons"></i> <input class="input_1" type="text" value="<?= $name ?>" onchange="menu.updateItem(<?=$id;?>,'name', this)"></span>
    <span class="menu_item"><i class="icon-link icons"></i> <input class="input_1" type="text" value="<?= $href ?>" onchange="menu.updateItem(<?=$id;?>,'link', this)"></span>
    <div class="menu-item-event">
        <button class="button-remove" onclick="menu.removeItem(<?= $id ?>)">
            <i class="icon-trash icons"></i>
        </button>
        <span class="move_item"><i class="fa fa-arrows" aria-hidden="true"></i></span>
    </div>
</li>