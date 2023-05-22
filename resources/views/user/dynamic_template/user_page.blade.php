{!! $html !!}
{{-- {!!dd($user_website->id)!!} --}}

<script>
    function set_tribute(type_tribute) {

        $('#type_tribute').val(type_tribute);
    }
    

    $('#save_story').on('click', function() {



        var formData = new FormData();
        formData.append('memorial_id', '{!! $user_website->id !!}');
        formData.append('story_title_n', $('input[name="story_title_n"]').val());
        formData.append('story_details_n', $('#story_details').val());
        formData.append('image', $('input[type=file]')[0].files[0]); 
        // formData.append('_token','{!! csrf_token() !!}');


        $.ajax({
            url: '{!! asset('user/storyform') !!}',
            method: 'POST',
            data: formData,
            dataType: 'JSON',
            processData: false,
            contentType: false,
            cache: false,
            enctype: 'multipart/form-data',
            success: function(res) {
                console.log('res', res)
            },
            error: function(err) {
                console.log('form failed', err);
            }
        })

    });


    $('#save_trib').on('click', function() {


        var formData = new FormData();
        formData.append('memorial_id', '{!! $user_website->id !!}');
        formData.append('details_show_var', $('#add_tibs').val());
        formData.append('details_show_var', $('textarea[name="tribute"]').val());
        formData.append('type_var', $('#type_tribute').val());



        $.ajax({
            url: '{!! asset('user/tributeform') !!}',
            method: 'POST',
            data: formData,
            dataType: 'JSON',
            processData: false,
            contentType: false,
            cache: false,
            enctype: 'multipart/form-data',
            success: function(res) {
                console.log('res', res)
            },
            error: function(err) {
                console.log('form failed', err);
            }
        })

    });
</script>
