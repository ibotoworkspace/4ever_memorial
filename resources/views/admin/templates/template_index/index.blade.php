@extends('layouts.default_module')
@section('module_name')
    Templates
@stop

@section('table-properties')
    width="400px" style="table-layout:fixed;"
@endsection



<style>
    @import url('https://fonts.googleapis.com/css2?family=Courgette&display=swap');

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

    .table_temp,
    th,
    td {
        border-collapse: collapse;
        height: 54px;
    }

    .table_temp th,
    td {
        padding: 15px;
    }

    button.btn.btn-success.view {
        width: 113px;
    }


    .temp_bttn {
        border: solid 1px;
        background-color: #1F8A70;
        height: 249px;
        width: 79%;
        margin: 58px;
        text-align: center;
        padding-top: 100px;
        font-size: 28px;
        font-weight: bold;
        font-family: Courgette, sans-serif;
        border-radius: 10px;
        color: wheat;
    }

    .flx {
        display: flex;
    }

    .temp_bttn:hover {
        background-color: wheat;
        color: #1F8A70;
        border: solid 4px;
    }
</style>


@section('table')
    <div class="flx">
        <a target="_blank" href="template/template1">
            <div class="temp_bttn">Template 1</div>
        </a>
        <a target="_blank" href="template/template2">
            <div class="temp_bttn">Template 2</div>
        </a>
        <a target="_blank" href="template/template3">
            <div class="temp_bttn">Template 3</div>
        </a>
        <a target="_blank" href="template/template4">
            <div class="temp_bttn">Template 4</div>
        </a>
    </div>
@endsection
