@extends('layouts.default_module')
@section('module_name')
Gallery
@stop


@section('table-properties')
    width="400px" style="table-layout:fixed;"
@endsection



<style>
    td {
        white-space: nowrap;
        overflow: hidden;
        width: 30px;
        height: 30px;
        text-overflow: ellipsis;
    }

    .fhgyt th {
        border: 1px solid #e3e6f3 !important;
    }

    .fhgyt td {
        border: 1px solid #e3e6f3 !important;
        background: #f9f9f9
    }
</style>
@section('table')

    <table class="fhgyt" id="userTableAppend" style="opacity: 0">
        <thead>
            <tr>
                <th>Image</th>
                <th>Type</th>
                <th>View</th>
                <th>Restore </th>


            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

@stop
@section('app_jquery')

    <script>
        $(document).ready(function() {

            fetchRecords();

            function fetchRecords() {

                $.ajax({
                    url: "{!! asset('admin/memorials/get_gallery/'.$memorial_id) !!}",
                    type: 'get',
                    dataType: 'json',
                    success: function(response) {
                        console.log('response');
                        $("#userTableAppend").css("opacity", 1);
                        var len = response['data'].length;
                        console.log('response2');

                        console.log(response);

                        for (var i = 0; i < len; i++) {
                            var id = response['data'][i].id;
                            // var image = `<img src="` +response['data'][i].image_show_var+ `" width="24%">`;
                            var image = '';
                            if(response['data'][i].type == 'photo'){
                                image = '<i class="fa fa-picture-o" aria-hidden="true" class="admin_icon"></i>';
                             }else if(response['data'][i].type == 'video'){
                                image = '<i class="fa fa-video-camera" aria-hidden="true" class="admin_icon"></i>';
                             }else {
                                image = '<i class="fa fa-headphones" aria-hidden="true" class="admin_icon"></i>';
                             };
                            var type = response['data'][i].type;
                            var view =
                            `<a class="btn btn-info" target="_blank" href="` +response['data'][i].image_show_var+ `">View</a>`;
                            createModal({
                                id: 'memorial_' + response['data'][i].id,
                                header: '<h4>Restore</h4>',
                                body: 'Do you want to continue ?',
                                footer: `
                                <button class="btn btn-danger" onclick="delete_request(` + response['data'][i].id + `)"
                                data-dismiss="modal">
                                Restore
                                </button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                `,
                            });
                            var delete_btn ='';
                            if(response['data'][i].deleted_at){
                           
                                 delete_btn =
                                `<a class="btn btn-info delete_btn_`+response['data'][i].id+`" data-toggle="modal" data-target="#` +
                                'memorial_' + response['data'][i].id + `">Restore</a>`;

                            }
                            // else{
                            //     var delete_btn =
                            //     `<a class="btn btn-info" data-toggle="modal" data-target="#` +
                            //     'memorial_' + response['data'][i].id + `">Delete</a>`;

                            // }
                            var tr_str = `<tr id='row_` + response['data'][i].id + `'>` +
                                "<td>" + image + "</td>" +
                                "<td>" + type + "</td>" +
                                "<td>" + view + "</td>" +
                                "<td>" + delete_btn + "</td>" +


                                "</tr>";

                            $("#userTableAppend tbody").append(tr_str);
                        }
                        $(document).ready(function() {
                            console.log('sadasdasdad');
                            $('#userTableAppend').DataTable({
                                dom: '<"top_datatable"B>lftipr',
                                buttons: [
                                    'copy', 'csv', 'excel', 'pdf', 'print'
                                ],
                            });
                        });
                    }
                });
            }

        });

        function set_msg_modal(msg) {
            $('.set_msg_modal').html(msg);
        }

        function delete_request(id) {
            $.ajax({

                url: "{!! asset('admin/memorial/restore_gallery') !!}/" + id,
                type: 'POST',
                dataType: 'json',
                data: {
                    _token: '{!! @csrf_token() !!}'
                },
                success: function(response) {
                    console.log(response);
                    if (response.status) {
                        var myTable = $('#userTableAppend').DataTable();
                        location.reload();

                        // myTable.row('#row_' + id).remove().draw();
                    }
                }
            });
        }
    </script>
@endsection
