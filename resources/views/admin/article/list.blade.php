@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title', 'Artikel')

@section('main-content')

<link rel="stylesheet" href="{{URL::asset('css/datatables.min.css')}}">

<div class="">
    <a href="{{ url('admin/warga/create') }}" class="btn btn-success btn-md">
        <i class="fa fa-plus"></i> Tambah Data
    </a>
</div>
<br>    

    <table class="table table-striped table-hover table-responsive" id="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>Sampul</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($article as $list)
                <tr>
                    <td></td>
                    <td>{{$list->title}}</td>
                    <td><img src="/storage/{{$list->images}}" style="max-width:100px"></td>
                    <td>{{$list->category}}</td>
                    <td>
                        <form method="post" action="/admin/article/{{$list->id}}">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button class="btn btn-danger pull-left">
                                <span class="fa fa-trash"> Hapus</span>
                            </button>
                        </form>
                        <a class="btn btn-warning pull-left" href="/admin/article/{{$list->id}}/edit"><span class="fa fa-pencil"> Ubah</span></a>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>

@ckeditor('content')

<script type="text/javascript" src="{{URL::asset('/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('/js/datatables.bootstrap.min.js')}}"></script>

<script>
    $('#table').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });
</script>

@endsection