$(function() {
    var group = $("ol.edit-menu").sortable({
        group: 'edit-menu',
        handle: 'i.fa-arrows',
        onDragStart: function ($item, container, _super) {
            // Duplicate items of the no drop area
            if(!container.options.drop)
                $item.clone().insertAfter($item);
            _super($item, container);
        },
        onDrop: function ($item, container, _super) {
            var data = group.sortable("serialize").get();
            var jsonString = JSON.stringify(data, null, ' ');
            var formData = new FormData();

            console.log(data);

            formData.append('data', jsonString);
            formData.append('menu_id', $('#sortMenuId').val());

            $.ajax({
                url: '/admin/setting/aj_menu_sort_items',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function(){

                },
                success: function(result){

                }
            });

            _super($item, container);
        }
    });
});