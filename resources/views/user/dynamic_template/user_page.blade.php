{!! $html !!}
@include('partial_layouts.cropper.cropper_html')

<button id="btn1">add a story block</button>
<script>
    $(document).ready(function() {
        // $("#btn1").click(function() {
        //     $(".add_tribute_append").append(review);
        // });


        $('#save_story').on('click', function() {

            var formData = new FormData();
            formData.append('memorial_id', '{!! $user_website->id !!}');
            formData.append('story_title_n', $('input[name="story_title_n"]').val());
            formData.append('story_details_n', $('#story_details').val());
            // formData.append('image', $('#upload-photo').files[0]);
            formData.append('story_image', $('input[name="story_image"]').val());
            // formData.append('image', $('input[type=file]')[0].files[0]);
            // formData.append('image', $('input[type=file].up_ld_file')[0].files[0]);
            // formData.append('image', $('.attch_icon').find('input[type=file]')[0].files[0]);


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
                    $(".story_blk").append(get_story_html(res.response));
                    
                },
                error: function(err) {
                    console.log('form failed', err);
                }
            })
        });


        $('#file_upload').on('click', function() {

            var formData = new FormData();
            formData.append('upld_img', $('input[type=file]')[0].files[0]);


            $.ajax({
                url: '{!! asset('user/upload_gallery_files') !!}',
                method: 'POST',
                data: formData,
                dataType: 'JSON',
                processData: false,
                contentType: false,
                cache: false,
                enctype: 'multipart/form-data',
                success: function(res) {
                    console.log('res', res)
                    $(".gallery_img").append(get_gallery_img_html(res.response));
                    
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
            // formData.append('details_show_var', $('textarea[name="tribute"]').val());
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
                    $(".add_tribute_append").append(get_review_html(res.response));

                    for (const value of formData.values()) {
                        console.log(value);
                    }
                },
                error: function(err) {
                    console.log('form failed', err);
                }
            })
        });

        // fetchRecords();

        // function fetchRecords() {

        //     $.ajax({
        //         url: '{!! asset('user/get_tribute') !!}',
        //         type: 'get',
        //         dataType: 'json',
        //         success: function(response) {
        //             console.log('response');
        //             var len = response['data'].length;
        //             console.log('response2');

        //             console.log(response, 'i am here');

        //             for (var i = 0; i < len; i++) {
        //                 console.log('my arr');
        //                 // $(".add_tribute_append").append(get_review_html(response['data'][i]));
        //             }
        //         }
        //     });
        // }


    });
    function set_tribute(type_tribute) {

        $('.same').removeClass('selected_tribute');
        var select_class = '';
        // selected_tribute
        if(type_tribute == 'candle'){
             select_class = 'cand';
        }
        else if(type_tribute == 'flower'){
             select_class = 'flower';
        }
        else{ // feather
             select_class = 'feather';
        }
        $('.'+select_class).addClass('selected_tribute');
        $('#type_tribute').val(type_tribute);
    }
    
    
    
    function set_media(media_type) {

        $('#media_type').val(media_type);
    }




    $(document).ajaxError(
        function(event, jqXHR, ajaxSettings, thrownError) {
            console.log('[event:' + event + '], [jqXHR:' + jqXHR + '], [ajaxSettings:' + ajaxSettings +
                '], [thrownError:' + thrownError + '])');
        });

    function get_review_html(response) {
        // alert('asd');

        // var id = response['data'][i].id;
        var user_name_show_var = response.user_name_show_var;
        var date_show_var = response.date_show_var;
        var details_show_var = response.details_show_var;
        var type_var = response.type_var;
        if (type_var == 'flower') {
            type_var =
                '<img src="http://localhost/4_ever_memories/public/user_templates/template_1/images/imgs/flower.png">';

        } else if (type_var == 'candle') {
            type_var =
                '<img src="http://localhost/4_ever_memories/public/user_templates/template_1/images/imgs/candle.png">';
        } else {
            type_var =
                '<img src="http://localhost/4_ever_memories/public/user_templates/template_1/images/imgs/feather.png">';
        }
        var review = `
                                    <div class="reviewBox">
                                        <div class="newTag">
                                            <span class="badge badge-secondary">New</span>
                                        </div>
                                        <ul class="reviewSection">
                                            <li>
                                                ` + type_var + `
                                            </li>
                                            <li>
                                                <h3>` + user_name_show_var + `</h3>
                                                <h5>` + date_show_var + `</h5>
                                                <p>` + details_show_var + `</p>
                                            </li>
                                        </ul>
                                    </div>
                                    `;
        return review;

    }



    function get_story_html(response) {
        // alert('asd');

        // var id = response['data'][i].id;
        var user_name_show_var = response.user_name_show_var;
        var date_show_var = response.date_show_var;
        var details_show_var = response.details_show_var;
        var story_title = response.story_title;
        var image_show_var =`<img src="` +response.image_show_var+ ` " alt="relative">`;
        console.log(image_show_var,'image');
       
        var review = `
        <div class="story_tab">
                                            <h3>`+ story_title +`</h3>
                                            <p>
                                        ` + date_show_var +`.by `+ user_name_show_var + `</p>
                                        `+ image_show_var +` 
                                    <div class="story_para">
                                        <p>`+ details_show_var +`
                                        </p>
                                        <div class="whole">
                                            <div class="flx">
                                                <div class="share">
                                                    <i class="fa fa-share-alt-square" aria-hidden="true"></i>
                                                </div>
                                                <div class="chr_p">
                                                    Share
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    `;
        return review;

    }

    function get_gallery_img_html(response) {
        var image_show_var =`<img src="` +response.image_url+ `">`;
        console.log(image_show_var,'image');
       
        var review = `
        <div class="gallery_img">
                                            <div class="row">
                                                <div class="col-md-3 pic_gal_img">
                                                    <img src="{!! asset('user_templates/template_1/images/download.jpg') !!}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    `;
        return review;

    }
</script>
