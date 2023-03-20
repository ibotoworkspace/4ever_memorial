{!! $html !!}

<script>
    var sliders_list = JSON.parse(`{!!$styles_json!!}`);
    console.log(sliders_list );
    $(function() {
        add_slider_select_theme();
    })

    function add_slider_select_theme() {
        $('head').append($('<link rel="stylesheet" type="text/css" />').attr('href', '{!! asset("user_templates/slider/css/slick.css") !!}'));
        $('head').append($('<link rel="stylesheet" type="text/css" />').attr('href', '{!! asset("user_templates/slider/css/slick-theme.css") !!}'));
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

        function get_slider_html() {
            var slider = `
            <section class="regular slider custom-slider">`;

                for (let index = 0; index < sliders_list.length; index++) {
                    var element = sliders_list[index];
                    console.log(element,'a');
                }
        //         <div>
        //             <img src="{!!asset('user_templates/slider/image/test_img.jpg')!!}" class="img-responsive">
        //         </div>
        //         <div>
        //             <img src="{!!asset('user_templates/slider/image/test_img.jpg')!!}" class="img-responsive">
        //         </div>
        //         <div>
        //             <img src="{!!asset('user_templates/slider/image/test_img.jpg')!!}" class="img-responsive">
        //         </div>
        //         <div>
        //             <img src="{!!asset('user_templates/slider/image/test_img.jpg')!!}" class="img-responsive">
        //         </div>
        //         <div>
        //             <img src="{!!asset('user_templates/slider/image/test_img.jpg')!!}" class="img-responsive">
        //         </div>
        //         <div>
        //             <img src="{!!asset('user_templates/slider/image/test_img.jpg')!!}" class="img-responsive">
        //         </div>
        //         <div>
        //             <img src="{!!asset('user_templates/slider/image/test_img.jpg')!!}" class="img-responsive">
        //         </div>
        //         <div>
        //             <img src="{!!asset('user_templates/slider/image/test_img.jpg')!!}" class="img-responsive">
        //         </div>
        //     </section>
        // `;
        }
    }
</script>
