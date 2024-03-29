{!! $html !!}

<style>
    .sliderimageselect {
        background: black;
        border-color: white;
        color: white;
        font-size: 14px;
        font-weight: 500;
        width: 45%;
        padding: 8px;
        float: left;
        margin: 0px 1px;
        opacity: 0.5;
    }

    .sliderselimgtemp {
        position: relative;
    }

    .completwithd {
        width: 85% !important;
    }

    .picbtnoverlap {
        position: absolute;
        width: 50%;
        margin: 0px 30%;
    }
@media only screen and (max-width: 480px) {
    .sliderimageselect {
    width: auto;
    padding: 3px;
 
}
.picbtnoverlap {
    width: 100%;
    margin: 0px 0px;
    position: relative;
}
.view_btn {
    margin: 5px 0px;
}
.picbtnoverlap button {
    width: 100%;
    padding: 1px;
}
}
</style>

<script>
    console.log('checking***********1')
    var sliders_list = decodeURIComponent(`{!! $styles_json !!}`);
    sliders_list = JSON.parse(sliders_list);
    console.log('checking***********3')
    console.log("slider_list",sliders_list);
    $(function() {
        add_slider_select_theme();
    })
    console.log('checking***********4')

    function add_slider_select_theme() {
        $('head').append($('<link rel="stylesheet" type="text/css" />').attr('href', '{!! asset("public/user_templates/slider/css/slick.css") !!}'));
        $('head').append($('<link rel="stylesheet" type="text/css" />').attr('href', '{!! asset("public/user_templates/slider/css/slick-theme.css") !!}'));
        $('body').append(get_slider_html());
        $.getScript('{!! asset("public/user_templates/slider/js/slick.js") !!}', function() {
            $(".regular").slick({
                dots: true,
                infinite: true,
                autoplay: false,
                // autoplaySpeed: 1000,
                slidesToShow: 5,
                slidesToScroll: 5
            });
        });
    }

    function get_slider_html() {
        var slider_html = `<section class="regular slider custom-slider">`;

        $.each(sliders_list, function(index, item) {
            console.log('item.template_image', item.template_image);
            slider_html = slider_html +
                `<div class="sliderselimgtemp" onclick="change_css('` + item.css_files + `')">                        
                   <center>
                        <div class="picbtnoverlap">
                            <button class="btn btn-success sliderimageselect" onclick="save_css('` + item
                .id + `')">
                                Save
                            </button>    
                            <button class="btn btn-success sliderimageselect view_btn" onclick="change_css('` + item
                .css_files + `')">
                                View
                            </button>    
                        </div>
                    </center>

                    <img src="` + item.template_image + `" class="img-responsive">
                </div>`;
        })
        // slider_html += `<div> 

        //                 </div>`;
        slider_html = slider_html + `</section>`;
        return slider_html;
    }

    function change_css(css_file_path) {
        $("#template_css_link").attr("disabled", "disabled");
        $("#template_css_link").remove();
        $('head').append($('<link rel="stylesheet" type="text/css" id="template_css_link" />').attr('href',
            css_file_path));
    }

    function save_css(css_style_id){
        
        var formdata = new FormData();
        formdata.append('user_website_id', '{!!$memorial_id!!}');
        formdata.append('css_style_id', css_style_id);
        formdata.append('_token', '{!!csrf_token()!!}');

        $.ajax({
            method: 'POST',
            url: '{!!asset("user/memorial/save_css")!!}',
            data: formdata,
            dataType: 'JSON',
            processData: false,
            contentType: false,
            cache: false,
            enctype: 'multipart/form-data',

            success: function(data) {
                console.log('success data', data);
                window.location = data.response.redirect;
                
            },
            error: function(err) {
                console.log('form failed', err.Message);
            }

        })
    }
</script>
