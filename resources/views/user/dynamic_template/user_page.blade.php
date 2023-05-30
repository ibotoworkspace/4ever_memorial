{!! $html !!}
{{-- {!!@include('myapp_js.blade')!!} --}}
{{-- @include('myapp_js.blade') --}}

<script>
    // alert('asd');

    function set_tribute(type_tribute) {

        $('#type_tribute').val(type_tribute);
    }


    $(document).ajaxError(
        function(event, jqXHR, ajaxSettings, thrownError) {
            console.log('[event:' + event + '], [jqXHR:' + jqXHR + '], [ajaxSettings:' + ajaxSettings +
                '], [thrownError:' + thrownError + '])');
        });




    $(document).ready(function() {

        fetchRecords();

        function fetchRecords() {

            $.ajax({
                url: '{!! asset('user/get_tribute') !!}',
                type: 'get',
                dataType: 'json',
                success: function(response) {
                    console.log('response');
                    var len = response['data'].length;
                    console.log('response2');

                    console.log(response, 'i am here');

                    for (var i = 0; i < len; i++) {
                        // var id = response['data'][i].id;
                        // var user_name_show_var = response['data'][i].user_name_show_var;
                        // var date_show_var = response['data'][i].date_show_var;
                        // var details_show_var = response['data'][i].details_show_var;
                        // var type_var = response['data'][i].type_var;

                        // var tr_str =
                        //     "<li>" + type_var + "</li>" +
                        //     "<li><h3>" + user_name_show_var + "'>" +
                        //     "</h3><h5>" + date_show_var + "</h5><p>" +
                        //     details_show_var + "</p></li>";

                        // $("#userTableAppend tbody").append(tr_str);
                        $(".add_tribute_append").append(get_review_html(response['data'][i]));
                    }
                }
            });
        }

    });

    function get_review_html(response) {
        // var id = response['data'][i].id;
        var user_name_show_var = response.user_name_show_var;
        var date_show_var = response.date_show_var;
        var details_show_var = response.details_show_var;
        var type_var = response.type_var;

        var review = `
            <div class="reviewBox">
                <div class="newTag">
                    <span class="badge badge-secondary">New</span>
                </div>
                <ul class="reviewSection">
                    <li>
                        `+type_var+`
                    </li>
                    <li>
                        <h3>` + user_name_show_var +`</h3>
                        <h5>`+date_show_var+`</h5>
                        <p>`+details_show_var+`</p>
                    </li>
                </ul>
            </div>
            `;
            return review;

    }
</script>
