@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title', 'Edit Kartu Keluarga')

@section('main-content')

<div class="">
    <div class="panel panel-primary">
        <div class="panel-heading">Data Kartu Keluarga</div>
        <div class="panel-body">
            <form method="post" action="/admin/warga/{{$data->id}}">
                {{csrf_field()}}
                {{method_field("put")}}
                <table class="table ">
                    <tr>
                        <th>No.KK</th>
                        <td colspan="3">
                            <input type="text" class="form-control" value="{{$data->no_kk}}" disabled>
                        </td>
                    </tr>
                    <tr>
                        <th>kepala keluarga</th>
                        <td colspan="3"><input type="text" name="kepala_keluarga" class="form-control" value="{{$data->kepala_keluarga}}"></td>
                    </tr>
                    <tr>
                        <th>RT</th>
                        <td><input type="text" name="rt" class="form-control" value="{{$data->rt}}"></td>
                        <th>RW</th>
                        <td><input type="text" name="rw" class="form-control" value="{{$data->rw}}"></td>
                    </tr>
                    <tr>
                        <th>desa/kelurahan</th>
                        <td colspan="3"><input type="text" name="desa_kelurahan" class="form-control" value="{{$data->desa_kelurahan}}"></td>
                    </tr>
                    <tr>
                        <th>kecamatan</th>
                        <td><input type="text" name="kecamatan" class="form-control" value="{{$data->kecamatan}}"></td>
                        <th>kabupaten/kota</th>
                        <td><input type="text" name="kabupaten_kota" class="form-control" value="{{$data->kabupaten_kota}}"></td>
                    </tr>
                    
                    <tr>
                        <th>kodepos</th>
                        <td><input type="text" name="kodepos" class="form-control" value="{{$data->kodepos}}"></td>
                        <th>provinsi</th>
                        <td><input type="text" name="provinsi" class="form-control" value="{{$data->provinsi}}"></td>
                    </tr>
                    <tr>
                        <th>Dikeluarkan Tanggal</th>
                        <td><input type="date" name="keluarTanggal" class="form-control" value="{{$data->keluar_tgl}}"></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td colspan="3"><textarea name="alamat"  class="form-control">{{$data->alamat}}</textarea></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><button type="submit" class="btn btn-primary">Perbaharui</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>

@endsection