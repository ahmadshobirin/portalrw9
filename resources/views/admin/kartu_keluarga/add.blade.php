@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title', 'Kartu Keluarga')

@section('main-content')

<div class="">
    <div class="panel panel-primary" style="box-shadow: 3px 3px 7px #888888;">
        <div class="panel-heading">Data Kartu Keluarga</div>
        <div class="panel-body">
            <form method="post" action="/admin/warga">
                {{csrf_field()}}
                <table class="table table-responsive">
                    <tr>
                        <th>No.KK</th>
                        <td colspan="3"><input type="text" name="no_kk" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57' ></td>
                    </tr>
                    <tr>
                        <th>Kepala keluarga</th>
                        <td colspan="3"><input type="text" name="kepala_keluarga" class="form-control"></td>
                    </tr>
                    <tr>
                        <th>RT</th>
                        <td>
                            <select name="rt" id="" class="form-control">
                                <option selected>Pilih Rt..</option>
                                @for($i=1; $i <= 10; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </td>
                        <th>RW</th>
                        <td>
                            <select name="rw" id="" class="form-control">
                                <option selected>Pilih Rw..</option>
                                @for($i=1; $i <= 10; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>desa/kelurahan</th>
                        <td colspan="3"><input type="text" name="desa_kelurahan" class="form-control"></td>
                    </tr>
                    <tr>
                        <th>kecamatan</th>
                        <td><input type="text" name="kecamatan" class="form-control"></td>
                        <th>kabupaten/kota</th>
                        <td><input type="text" name="kabupaten_kota" class="form-control"></td>
                    </tr>
                    
                    <tr>
                        <th>kodepos</th>
                        <td><input type="text" name="kodepos" class="form-control"></td>
                        <th>provinsi</th>
                        <td><input type="text" name="provinsi" class="form-control"></td>
                    </tr>
                    <tr>
                        <th>Dikeluarkan Tanggal</th>
                        <td><input type="date" name="keluarTanggal" class="form-control"></td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td colspan="3"><textarea name="alamat"  class="form-control"></textarea></td>
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