{!!$html!!}


<script>
    $('#save_story').on('click',function(){

        // $('.add_new_story').append(`
        //     <input type="hidden" name="memorial_id" value="{!!$user_website->memorial_id!!}">
        // `);

        // submit_form('.add_new_story','create_story');

        var formData = new FormData();
        formData.append('memorial_id','{!!$user_website->memorial_id!!}');
        formData.append('story_title_n',$('input[name="story_title_n"]').val());
        formData.append('story_details_n',$('#story_details').val());
        // formData.append('_token','{!!csrf_token()!!}');


        $.ajax({
            url:'{!!asset('user/storyform')!!}',
            method:'POST',
            data:formData,
            dataType: 'JSON',
            processData: false,
            contentType: false,
            cache: false,
            enctype: 'multipart/form-data',
            success:function(res){
                console.log('res',res)
            },
            error: function(err) {
                console.log('form failed', err);
            }
        })

    });


    function create_story(add_story, response) {
            console.log('res 1', response);
            if (response.status) {
                console.log('res 2', response);
                $(add_story + " input").val("");
                $(add_story + " textarea").val("");
                
            }
        }

    function set_tribute(type_tribute){
        $('#type_tribute').val(type_tribute);
    }


    $('#save_trib').on('click',function(){
        submit_form('add_new_trib','create_trib');
    });


    function create_trib(add_trib, response) {
            console.log('res 1', response);
            if (response.status) {
                console.log('res 2', response);
                $(add_trib + " input").val("");
                $(add_trib + " textarea").val("");
                
                
            }
        }
      
</script>