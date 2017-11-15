var post = {

    ajax_method : 'POST',

    add: function(){
        var form_data = new FormData();

        form_data.append('title', $('#form_title').val());
        form_data.append('content', $('.form_content').val());


        $.ajax({
            url: '/admin/post/add',
            type: this.ajax_method,
            data: form_data,
            contentType: false,
            processData: false,
            cache: false,
            beforeSend: function(){

            },
            success: function(data){
                console.log(data);
            }

        });
    }
};