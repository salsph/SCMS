<li class="menu-item-<?= $id ?>" data-id="<?= $id ?>">
    <i class="icon-pencil icons"></i> <input type="text" value="<?= $name ?>">
    <i class="icon-link icons"></i> <input type="text" value="<?= $href ?>">
    <div class="menu-item-event">
        <button class="button-remove" onclick="menu.removeItem(<?= $id ?>)">
            <i class="icon-trash icons"></i>
        </button>
        <i class="fa fa-arrows" aria-hidden="true"></i>
    </div>
</li>