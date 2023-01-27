@extends('layouts.default_module')
@section('module_name')
Templates
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
.table_temp, th, td {
    border-collapse: collapse;
    height: 54px;
}
.table_temp th, td {
  padding: 15px;
}
button.btn.btn-success.view {
    width: 113px;
}
</style>
@section('table')

<table class="table_temp" width="100%">
<thead>
	<tr>

        <th>Template 1</th>
        <th>Template 2</th>
        <th>Template 3</th>
        <th>Template 4</th>
        
	</tr>
</thead>
<tbody>
    <tr>
    <td><a target="_blank" href="template/template1"><button class="btn btn-success view">View</button></a></td>
    <td><a target="_blank" href="template/template2"><button class="btn btn-success view">View</button></a></td>
    <td><a target="_blank" href="template/template3"><button class="btn btn-success view">View</button></a></td>
    <td><a target="_blank" href="template/template4"><button class="btn btn-success view">View</button></a></td>
    </tr>
</tbody>
</table>

@endsection