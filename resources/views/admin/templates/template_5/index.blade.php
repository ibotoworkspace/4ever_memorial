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
</style>

<script>
    console.log('checking***********1')
    var sliders_list = decodeURIComponent(`{!! $styles_json !!}`);
    // var sliders_list = decodeURIComponent(`{!! $styles_json !!}`);
    // console.log('checking***********2',sliders_list)
    var sliders_list = JSON.parse(sliders_list);
    console.log('checking***********3')
    console.log(sliders_list, "slider_list");
    $(function() {
        add_slider_select_theme();
    })
    console.log('checking***********4')

    function add_slider_select_theme() {
        $('head').append($('<link rel="stylesheet" type="text/css" />').attr('href', '{!! asset('user_templates/slider/css/slick.css') !!}'));
        $('head').append($('<link rel="stylesheet" type="text/css" />').attr('href', '{!! asset('user_templates/slider/css/slick-theme.css') !!}'));
        $('body').append(get_slider_html());
        $.getScript('{!! asset('user_templates/slider/js/slick.js') !!}', function() {
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
                .css_files + `')">
                                Save
                            </button>    
                            <button class="btn btn-success sliderimageselect " onclick="change_css('` + item
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

    function save_css(css_file_path){
        
    }
</script>
