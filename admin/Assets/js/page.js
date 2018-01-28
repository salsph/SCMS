var page = {

  ajax_method : 'POST',

    add: function(){
      var form_data = new FormData();
      form_data.append('title', $('#form_title').val());
      form_data.append('content', $('.form_content').val());

      $.ajax({
          url: '/admin/page/add',
          type: this.ajax_method,
          data: form_data,
          contentType: false,
          cache: false,
          processData: false,
          beforeSend: function () {

          },
          success: function(data){
              //console.log(data);
          }
      });
    },

    update: function(){
        form_data = new FormData();

        form_data.append('id',$('#form_id').val());
        form_data.append('title',$('#form_title').val());
        form_data.append('content',$('.form_content').val());

        $.ajax({

            url: '/admin/page/update',
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
            url: '/admin/page/delete',
            data: form_data,
            cache: false,
            type: this.ajax_method,
            contentType: false,
            processData: false,
            success: function(data){
                if(data){
                    $('#page-' + id).remove();
                }
            }
        });
    }

};
