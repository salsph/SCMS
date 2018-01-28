var menu = {
    list_items: $('#list_items'),
    ajax_method: 'POST',

    add: function(){
        var form_data = new FormData();
        var menu_name = $('#menuName').val();
        form_data.append('name', menu_name);

        if(menu_name.length < 1){
            return false;
        }

        $.ajax({
            data: form_data,
            type: this.ajax_method,
            url: '/admin/settings/aj_menu_add',
            contentType: false,
            cache: false,
            processData: false,
            success: function(data){
                if(data > 0){
                    location.reload();
                }
            }

        });

    },

    addItem: function(menu_id){
        var form_data = new FormData();
        form_data.append('menu_id', menu_id);
        var _this = this;

        $.ajax({
            url: '/admin/settings/aj_menu_item_add',
            type: this.ajax_method,
            data: form_data,
            cache: false,
            processData: false,
            contentType: false,
            success: function(data){
                if(data){
                    _this.list_items.append(data);
                }
            }
        });
    },

    removeItem: function(item_id){
        if(!confirm('Are you sure to delete this item ?')){
            return false;
        }

        var form_data = new FormData();
        form_data.append('item_id', item_id);
        var _this = this;

        $.ajax({
            url: '/admin/settings/aj_menu_item_remove',
            type: this.ajax_method,
            data: form_data,
            cache: false,
            processData: false,
            contentType: false,
            success: function(data){
                if(data){
                    $('.menu-item-' + item_id).remove();
                }
            }
        });
    },

    updateItem: function(item_id, item_name, item) {
        var form_data = new FormData();

        form_data.append('id', item_id);
        form_data.append('name', item_name);
        form_data.append('value', $(item).val());

        $.ajax({
            type: this.ajax_method,
            url: '/admin/settings/aj_menu_item_update',
            data: form_data,
            cache: false,
            processData: false,
            contentType: false,
            success: function(){}
        });
    }
};
