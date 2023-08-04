{!! $html !!}
@include('partial_layouts.cropper.cropper_html')

<button id="btn1">add a story block</button>
<script>
    var memorial_id = '{!! $user_website->id !!}';
    var global_path = '{!! asset('/') !!}';
    var jsonString = '{!! json_encode($web_variable['gallery_photo_arr']) !!}';
    var gallery_images = JSON.parse(jsonString);
    console.log(gallery_images);
    $(document).ready(function() {
        // $("#btn1").click(function() {
        //     $(".add_tribute_append").append(review);
        // });

        set_dynamic_values();

        function set_dynamic_values() {
            initial_values();
            set_dynamic_tribute_images();
        }

        function initial_values(){
            $('.viw_para').html('{!! $user_website->total_views !!} Views');
            $('.pht_para').html('{!! count($web_variable['gallery_photo_arr']) !!} Photos');
            var images = '';
            if(!gallery_images.length){
                images = images + image_crousal('{!!asset("images/logo")!!}', 0);

            }
            for (var i = 0; i < gallery_images.length; i++) {
                images = images + image_crousal(gallery_images[i].image_show_var, i);
            }
            $('.carousel-inner').html(images);
        }

        function set_dynamic_tribute_images() {
            var dynamic_images = true;
            var candles_html = '';
            if (dynamic_images) {
                candles_html = `                
                <button class="bt_no dropbtn">
                    <div class="cand same">
                        <div class="ico_wri candle-select-icon">
                            <img class="candle-select-icon-img" src="{!! asset('user_templates/template_1/images/imgs/candle.png') !!}" alt="relative">
                            <span class="sp">Light a Candle</span>
                        </div>
                    </div>
                </button>
                `;
                // candles_html = candles_html + add_candles_list();
                candles_html = add_candles_list()+candles_html ;
            } else {

                candles_html = `                
                <button onclick="set_tribute('candle','{!! asset('user_templates/template_1/images/imgs/candle.png') !!}"')" class="bt_no ">
                    <div class="cand same">
                        <div class="ico_wri candle-select-icon">
                            <img candle-select-icon-img src="{!! asset('user_templates/template_1/images/imgs/candle.png') !!}" alt="relative">
                            <span class="sp">Light a Candle</span>
                        </div>
                    </div>
                </button>
                `;
            }

            console.log('candles_html',candles_html);
            $('.candle-select').html(candles_html);
        }

        function add_candles_list(){
            candle_list = `
            <div class="dropdown-content">
                <div class="flx">`;
            var candle_arr = [
                "{!! asset('user_templates/template_1/images/imgs/variations/6.png') !!}",
                "{!! asset('user_templates/template_1/images/imgs/variations/7.png') !!}",
                "{!! asset('user_templates/template_1/images/imgs/variations/8.png') !!}",
                "{!! asset('user_templates/template_1/images/imgs/variations/9.png') !!}",
                "{!! asset('user_templates/template_1/images/imgs/variations/10.png') !!}",
                "{!! asset('user_templates/template_1/images/imgs/candle.png') !!}"
            ];

            $(candle_arr).each(function (index,candle) {
                console.log('candles image',candle);
                candle_list = candle_list+`                
                
                    <div class="cand same" onclick="set_tribute('candle','`+candle+`')">
                        <div class="ico_wri">
                            <img src="`+candle+`" alt="relative">
                        </div>
                    </div>
                `;
            })
            candle_list = candle_list+`</div></div>`;
            return candle_list;
        }

        function image_crousal(img, i) {
            var active = '';
            if (i == 0) {
                active = 'active';
            }
            return `
            <div class="item ` + active + `"><img src="` + img + `" alt="responsive" style="width:100%; height: 100%;"></div>
            `;
        }


        $('#save_story').on('click', function() {
            var storyt = $('#story_title').val();
            var storyd = $('#story_details').val();
            var storyp = $('#upload-photo').val();
            if (storyt == "") {
                alert('Plz Write A Title');

                return;
            }
            if (storyd == "") {
                alert('Plz Write A detail');

                return;
            }
            if (storyp == "") {
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
                    if (res.response.type == 'video') {
                        $(".vid_row").append(get_gallery_video_html(res.response));
                        console.log(res.response.type, 'type is here');


                    } else if (res.response.type == 'photo') {
                        $(".gall_row").append(get_gallery_img_html(res.response));
                        console.log(res.response.type, 'type is here');


                    } else {
                        $(".uploaded_audio_area").append(get_gallery_audio_html(res.response));
                        console.log(res.response.type, 'type is here');

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
            if (aud == "") {
                // alert('Plz Write A Tribute');

                return;
            }
            upload_file($('input[name="upld_aud"]')[0].files[0]);
        });

        $('#save_media_image').on('click', function() {
            var img = $('#file_upload').val();
            if (img == "") {
                // alert('Plz Write A Tribute');

                return;
            }
            upload_file($('input[name="upld_file_hid"]').val());
        });

        $('#save_media_video').on('click', function() {
            var vid = $('.upld_video').val();
            if (vid == "") {
                // alert('Plz Write A Tribute');

                return;
            }
            upload_file($('input[name="upld_vid"]')[0].files[0]);
        });

        $('#save_trib').on('click', function() {
            var msg = $('#add_tibs').val();
            if (msg == "") {
                // alert('Plz Write A Tribute');

                return;
            }
            var formData = new FormData();
            formData.append('memorial_id', memorial_id);
            formData.append('details_show_var', msg);
            // formData.append('details_show_var', $('textarea[name="tribute"]').val());
            formData.append('type_var', $('#type_tribute').val());
            formData.append('image_tribute', $('#image_tribute').val());

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

    function set_tribute(type_tribute,tribute_image) {

        console.log('type tribute',type_tribute);
        console.log('tribute_image tribute',tribute_image);

        $('.same').removeClass('selected_tribute');
        var select_class = '';
        // selected_tribute
        if (type_tribute == 'candle') {
            select_class = 'cand';
            $('.candle-select-icon-img').attr('src',tribute_image);
        } else if (type_tribute == 'flower') {
            select_class = 'flower';
        } else { // feather
            select_class = 'feather';
        }
        $('.' + select_class).addClass('selected_tribute');
        $('#type_tribute').val(type_tribute);
        $('#image_tribute').val(tribute_image);
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
                // '<img src="' + global_path + '/user_templates/template_1/images/imgs/flower.png">';
                '<img src="' + $('#image_tribute').val() +'">';

            // '<img src="http://localhost/4_ever_memories/public/user_templates/template_1/images/imgs/flower.png">';

        } else if (type_var == 'candle') {
            type_var =
                // '<img src="' + global_path + '/user_templates/template_1/images/imgs/candle.png">';
                '<img src="' + $('#image_tribute').val() +'">';
        } else {
            type_var =
                // '<img src="' + global_path + '/user_templates/template_1/images/imgs/feather.png">';
                '<img src="' + $('#image_tribute').val() +'">';

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
        var image_show_var = `<video width="200" height="200" controls=""><source src="` + response.image_show_var +
            `" alt=""></video>`;
        console.log(image_show_var, 'image');

        var review = `
                    <div class="col-md-3 pic_gal_vid">
                    ` + image_show_var + ` 
                    </div>
        `;
        return review;

    }

    function get_gallery_audio_html(response) {
        var image_show_var = response.image_show_var;
        var date_show_var = response.date_show_var;
        var name_show_var = response.name_show_var;
        console.log(image_show_var, 'image');

        var review = `
                                        <div class="uploaded_audio_box">
                                            
                                            <h4><div class="new_tag">new</div>` + date_show_var + ` .by  ` +
            name_show_var + `</h4>
                                            <audio controls autoplay>
                                                <source src="` + image_show_var + `" type="audio/mpeg">
                                              </audio>
                                        </div>
        `;
        return review;

    }
</script>
