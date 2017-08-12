@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title', 'Ubah Kategori')

@section('main-content')
<br>
<div class=" col-md-6">
    <div class="panel panel-primary" style="box-shadow: 3px 3px 7px #888888">
        <div class="panel-heading">Ubah</div>
        <div class="panel-body">
            <form method="post" action="/admin/category/{{$data->id}}">
                {{csrf_field()}}
                {{method_field('put')}}
                @include('adminlte::layouts.partials.displayerror')
                <table class="table ">
                    <tr>
                        <th>Kategori</th>
                        <td><input type="text" name="category" class="form-control" value="{{$data->category}}"></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><button type="submit" class="btn btn-primary">Simpan</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>




@endsection