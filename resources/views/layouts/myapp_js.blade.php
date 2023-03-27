<script>
    $(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    })

    function submit_form(form_by_id_or_class, success_funtion = '') {

        var form = $(form_by_id_or_class);
        var inputs = $(form_by_id_or_class + " input");
        var textareas = $(form_by_id_or_class + " textarea");
        var all_inputs = $.merge(inputs, textareas);
        var formdata = new FormData();

        all_inputs.each(function() {

            var name = $(this).attr('name');
            if ($(this).attr('type') == 'file') {
                console.log('files', name, $(this)[0].files[0]);
                formdata.append($(this).attr('name'), $(this)[0].files[0]);
            } else {
                console.log('all_inputs', $(this).attr('name'), $(this).val());
                formdata.append($(this).attr('name'), $(this).val());
            }
        })
        console.log('submit_form url',form.attr('action'));

        $.ajax({
            method: form.attr('method'),
            url: form.attr('action'),
            data: formdata,
            dataType: 'JSON',
            processData: false,
            contentType: false,
            cache: false,
            enctype: 'multipart/form-data',

            success: function(data) {
                // call function by name and pass parameters eg sucess_function(form_by_id_or_class,data)
                if (success_funtion != '') {
                    window[success_funtion](form_by_id_or_class, data);
                }
            },
            error: function(err) {
                console.log('form failed', err);
            }

        })
    }

    function send_ajax(ajax, success_fun = '') {

        console.log('send ajax url',ajax.action);

        $.ajax({
            method: ajax.method,
            url: ajax.action,
            dataType: 'JSON',
            processData: false,
            contentType: false,
            cache: false,
            enctype: 'multipart/form-data',

            success: function(data) {
                if (success_fun != '') {
                    // call function by name and pass parameters eg sucess_function(form_by_id_or_class,data)
                    window[success_fun](data);
                }

            },
            error: function(err) {
                console.log('form failed', err);
            }

        })

    }
</script>
