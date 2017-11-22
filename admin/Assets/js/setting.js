var setting = {
    ajax_method : 'POST',

    update : function () {
        form_data = $('#setting_update').serialize();

        $.ajax({
            url : '/admin/settings/update',
            method : this.ajax_method,
            data : form_data,
            cache : false,
            success : function(data){
                console.log(data);
            }
        })
    }

};
