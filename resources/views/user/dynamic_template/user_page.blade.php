{!! $html !!}
@include('partial_layouts.cropper.cropper_html')

<button id="btn1">add a story block</button>
<script>
    var memorial_id = '{!! $user_website->id !!}';
    var global_path = '{!! asset("/") !!}';

    $(document).ready(function() {
        // $("#btn1").click(function() {
        //     $(".add_tribute_append").append(review);
        // });


        $('#save_story').on('click', function() {
            var storyt = $('#story_title').val();
            var storyd = $('#story_details').val();
            var storyp = $('#upload-photo').val();
            if(storyt == "") {
                alert('Plz Write A Title');
                
                return;
            }
            if(storyd == "") {
                alert('Plz Write A detail');
                
                return;
            }
            if(storyp == "") {
                alert('Plz Add A Picture');
                
                return;
            }
            var formData = new FormData();
            formData.append('memorial_id', memorial_id);
            // formData.append('memorial_id', '{!! $user_website->id !!}');
            formData.append('story_title_n', $('input[name="story_title_n"]').val());
            formData.append('story_details_n', $('#story_details').val());
            formData.append('story_image', $('input[name="story_image"]').val());

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
                    $('input[type="text"],textarea').val('');
                    $('input[type="file"],textarea').val('');

                },
                error: function(err) {
                    console.log('form failed', err);
                }
            })
        });

        function upload_file(file) {

            var formData = new FormData();
            formData.append('media_type', $('input[name="media_type"]').val());
            formData.append('upload_file', file);
            formData.append('_token', ('{{ csrf_token() }}'));
            formData.append('memorial_id', memorial_id);

            $.ajax({
                url: '{!! asset('user/upload_gallery') !!}',
                method: 'POST',
                data: formData,
                dataType: 'JSON',
                // headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                processData: false,
                contentType: false,
                cache: false,
                enctype: 'multipart/form-data',
                success: function(res) {
                    console.log('res', res)
                    if(res.response.type == 'video' ){
                        $(".vid_row").append(get_gallery_video_html(res.response));
                        console.log(res.response.type,'type is here');


                    }else  if(res.response.type == 'photo' ){
                        $(".gall_row").append(get_gallery_img_html(res.response));
                        console.log(res.response.type,'type is here');


                    }else{
                        $(".uploaded_audio_area").append(get_gallery_audio_html(res.response));
                        console.log(res.response.type,'type is here');

                    }
                    $('input[type="hidden"],textarea').val('');
                    $('input[type="file"],textarea').val('');



                },
                error: function(err) {
                    console.log('form failed', err);
                }
            })
        }

        $('#save_media_audio').on('click', function() {
            var aud = $('.upld_audio').val();
            if(aud == "") {
                // alert('Plz Write A Tribute');
                
                return;
            }
            upload_file($('input[name="upld_aud"]')[0].files[0]);
        });

        $('#save_media_image').on('click', function() {
            var img = $('#file_upload').val();
            if(img == "") {
                // alert('Plz Write A Tribute');
                
                return;
            }
            upload_file($('input[name="upld_file_hid"]').val());
        });

        $('#save_media_video').on('click', function() {
            var vid = $('.upld_video').val();
            if(vid == "") {
                // alert('Plz Write A Tribute');
                
                return;
            }
            upload_file($('input[name="upld_vid"]')[0].files[0]);
        });

        $('#save_trib').on('click', function() {
            var msg = $('#add_tibs').val();
            if(msg == "") {
                // alert('Plz Write A Tribute');
                
                return;
            }
            var formData = new FormData();
            formData.append('memorial_id', memorial_id);
            formData.append('details_show_var', msg);
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
                    $('input[type="text"],textarea').val('');
                    $('input[type="hidden"],textarea').val('');

                    for (const value of formData.values()) {
                        console.log(value);
                    }
                },
                error: function(err) {
                    console.log('form failed', err);
                }
            })
        });

    });

    function set_tribute(type_tribute) {

        $('.same').removeClass('selected_tribute');
        var select_class = '';
        // selected_tribute
        if (type_tribute == 'candle') {
            select_class = 'cand';
        } else if (type_tribute == 'flower') {
            select_class = 'flower';
        } else { // feather
            select_class = 'feather';
        }
        $('.' + select_class).addClass('selected_tribute');
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
        var user_name_show_var = response.user_name_show_var;
        var date_show_var = response.date_show_var;
        var details_show_var = response.details_show_var;
        var type_var = response.type_var;
        if (type_var == 'flower') {
            type_var =
                '<img src="' + global_path + '/user_templates/template_1/images/imgs/flower.png">';
            // '<img src="http://localhost/4_ever_memories/public/user_templates/template_1/images/imgs/flower.png">';

        } else if (type_var == 'candle') {
            type_var =
                '<img src="' + global_path + '/user_templates/template_1/images/imgs/candle.png">';
        } else {
            type_var =
                '<img src="' + global_path + '/user_templates/template_1/images/imgs/feather.png">';
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
        
        var user_name_show_var = response.user_name_show_var;
        var date_show_var = response.date_show_var;
        var details_show_var = response.details_show_var;
        var story_title = response.story_title_show_var;
        var image_show_var = `<img src="` + response.image_show_var + ` " alt="relative">`;
        console.log(image_show_var, 'image');

        var review = `
        <div class="story_tab">
                    <h3>` + story_title + `</h3>
                    <p>
                ` + date_show_var + `.by ` + user_name_show_var + `</p>
                ` + image_show_var + ` 
            <div class="story_para">
                <p>` + details_show_var + `
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
        var image_show_var = `<img src="` + response.image_show_var + ` " alt="relative">`;
        console.log(image_show_var, 'image');

        var review = `
                    <div class="col-md-3 pic_gal_img">
                    ` + image_show_var + ` 
                    </div>
        `;
        return review;

    }

    function get_gallery_video_html(response) {
        var image_show_var = `<video width="200" height="200" controls=""><source src="` + response.image_show_var + `" alt=""></video>`;
        console.log(image_show_var, 'image');
        
        var review = `
                    <div class="col-md-3 pic_gal_vid">
                    ` + image_show_var + ` 
                    </div>
        `;
        return review;

    }
    function get_gallery_audio_html (response) {
        var image_show_var = response.image_show_var;
        var date_show_var = response.date_show_var;
        var name_show_var = response.name_show_var ;
        console.log(image_show_var, 'image');

        var review = `
                                        <div class="uploaded_audio_box">
                                            
                                            <h4><div class="new_tag">new</div>` + date_show_var + ` .by  ` + name_show_var + `</h4>
                                            <audio controls autoplay>
                                                <source src="` + image_show_var + `" type="audio/mpeg">
                                              </audio>
                                        </div>
        `;
        return review;

    }
</script>
