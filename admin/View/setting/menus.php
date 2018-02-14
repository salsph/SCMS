<?php Theme::header(); ?>
<div class="container">
    <div class="row">
        <div class="col page-title">
            <div class="col-md-12">
                <h2>Menus</h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?php Theme::block('setting/tabs'); ?>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="col-md-5">
                <h4 class="heading-setting-section">
                    <span class="fs_20">List menu</span>
                    <a href="javascript:void(0)" class="spec_link_2" data-toggle="modal" data-target="#addMenu" data-whatever="@getbootstrap">
                        Add Menu
                    </a>
                </h4>
                <?php if(!empty($menus)): ?>
                    <div class="menu-list">
                        <ul class="nav flex-column">
                            <?php foreach($menus as $menu): ?>
                                <li class="nav-item">
                                    <a class="nav-link<?php if (isset($menu_id) && $menu_id == $menu['id']) echo ' active'; ?>" href="?menu_id=<?php echo $menu['id'] ?>">
                                        <?php echo $menu['name'] ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php else: ?>
                    <div class="empty-items">
                        <p><span class="fs_20">You do not have any menu created</span></p>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-md-7">
                <?php if ($menu_id !== null): ?>
                    <h4 class="heading-setting-section">
                       <span class="fs_20">Edit menu</span>
                        <a href="#" class="spec_link_2" onclick="menu.addItem(<?php echo $menu_id ?>)">Add menu item</a>
                    </h4>
                    <br>
                    <input type="hidden" id="sortMenuId" value="<?php echo $menu_id ?>" />
                    <ol id="list_items" class="edit-menu">
                        <?php foreach($menu_items as $item) {
                            Theme::block('setting/menu_item', $item);
                        } ?>
                    </ol>

                <?php endif; ?>
            </div>

        </div>
    </div>

</div>

<div class="modal fade" id="addMenu" tabindex="-1" role="dialog" aria-labelledby="addMenuLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addMenuLabel">New menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="menuName" class="form-control-label">Name menu</label>
                        <input type="text" class="form-control" id="menuName">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary" onclick="menu.add();">
                    Save menu
                </button>
            </div>
        </div>
    </div>
</div>

<?php Theme::footer(); ?>
