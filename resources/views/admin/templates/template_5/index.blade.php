{!! $html !!}

<script>
    console.log('checking***********1')
    var sliders_list = JSON.stringify(`{!! $styles_json !!}`);
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


        function get_slider_html() {
            const fruits = [{!!$styles!!}];    
            return `
            <section class="regular slider custom-slider">
                            
                
                    <div">                        
                        <img src="{!! asset('user_templates/slider/image/temp_img.png') !!}" class="img-responsive">
                    </div>
                    <div>
                        <img src="{!! asset('user_templates/slider/image/temp_1.png') !!}" class="img-responsive">
                    </div>
                    <div>
                        <img src="{!! asset('user_templates/slider/image/temp_2.png') !!}" class="img-responsive">
                    </div>
                    <div>
                        <img src="{!! asset('user_templates/slider/image/temp_3.png') !!}" class="img-responsive">
                    </div>
                    <div>
                        <img src="{!! asset('user_templates/slider/image/temp_4.png') !!}" class="img-responsive">
                    </div>
                    <div>
                        <img src="{!! asset('user_templates/slider/image/temp_1.png') !!}" class="img-responsive">
                    </div>
                    <div>
                        <img src="{!! asset('user_templates/slider/image/temp_2.png') !!}" class="img-responsive">
                    </div>
                    <div>
                        <img src="{!! asset('user_templates/slider/image/temp_3.png') !!}" class="img-responsive">
                    </div>

            </section>
        `;
        }
    }
</script>
