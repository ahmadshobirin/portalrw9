@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title', 'Data Warga')

@section('main-content')

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">


    <table class="table table-bordered" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>No.KK</th>
                <th>Kepala keluarga</th>
                <th>Alamat</th>
                <th>RT/RW</th>
                <th>Desa/Kelurahan</th>
                <th>Kota/Kabupaten</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kk as $list)
            <tr>
                <td>{{$list->id}}</td>
                <td>{{$list->no_kk}}</td>
                <td>{{$list->kepala_keluarga}}</td>
                <td>{{$list->alamat}}</td>
                <td>{{$list->rt}}/{{$list->rw}}</td>
                <td>{{$list->desa_kelurahan}}</td>
                <td>{{$list->kabupaten_kota}}</td>
                <td>
                    <form method="post" action="/admin/warga/{{$list->id}}">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button class="btn btn-danger pull-left">
                            <span class="fa fa-trash"> delete</span>
                        </button>
                    </form>
                    <a class="btn btn-warning pull-left" href="/admin/warga/{{$list->id}}/edit"><span class="fa fa-pencil"> edit</span></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>



<!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- DataTables -->
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <!-- App scripts -->

@endsection