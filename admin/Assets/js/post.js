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
    },

    update: function(){
        form_data = new FormData();

        form_data.append('id',$('#form_id').val());
        form_data.append('title',$('#form_title').val());
        form_data.append('content',$('.form_content').val());

        $.ajax({

            url: '/admin/post/update',
            type: this.ajax_method,
            data: form_data,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function(){

            },
            success: function(){

            }

        });
    },

    delete: function(id){
        var form_data = new FormData();
        form_data.append('id', id);

        $.ajax({
            url: '/admin/post/delete',
            type: this.ajax_method,
            data: form_data,
            processData: false,
            contentType: false,
            cache: false,
            success: function(data){
                if(data){
                    $('#post-' + id).remove();
                }
            }
        });
    }
};