@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title', 'Ubah Password')

@section('main-content')

<div class="col-lg-6">
<br>
<div class="container-fluid">
       <div class="row">
            <div class="box box-success" style="box-shadow: 3px 3px 7px #888888">
               <div class="box-body">
            
            <form method="post" action="/admin/category">
                {{csrf_field()}}
                @include('adminlte::layouts.partials.displayerror')
                <table class="table">
                    <tr>
                        <th>Password Lama</th>
                        <td><input type="text" name="pass_lama" class="form-control" autofocus></td>
                    </tr>

                    <tr>
                        <th>Password Baru</th>
                        <td><input type="text" name="pass_baru" class="form-control"></td>
                    </tr>

                    <tr>
                        <th>Konfirmasi Password baru</th>
                        <td><input type="text" name="konfirmasi_pass" class="form-control"></td>
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
</div>
</div>

@endsection