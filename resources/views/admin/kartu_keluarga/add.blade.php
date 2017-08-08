@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title', 'Tambah Kartu Keluarga')

@section('main-content')

<div class="">
    <div class="box box-primary">
        <div class="box-header">Data Kartu Keluarga</div>
        <div class="box-body">
            <form>
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
                    {{--  <tr>
                        <th></th>
                        <td><button type="submit" class="btn btn-primary">Simpan</button></td>
                    </tr>  --}}
                </table>
                <hr>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="box box-info">
                            <div class="box-header">Anggota Keluarga</div>
                            <div class="box-body" id="box">
                                <div class="row" id="content">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="">Nama</label>
                                                <input type="text" name="nama" class="form-control" placeholder="Nama..." id="nama">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="">Nik</label>
                                                <input type="text" name="nik" class="form-control" placeholder="Nik..." onkeypress='return event.charCode >= 48 && event.charCode <= 57' id="nik">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="">Tempat Lahir</label>
                                                <input type="text" name="tempatLahir" class="form-control" placeholder="Tempat lahir..">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="">Tanggal Lahir</label>
                                                <input type="date" name="tanggalLahir" class="form-control" placeholder="Tanggal Lahir..." min="1800-01-01" max="2100-12-31">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Jenis Kelamin</label>
                                            <div class="radio">
                                                <label>
                                                <input type="radio" name="jk" id="optionsRadios1" value="laki-laki" checked>
                                                    Laki-Laki
                                                </label>
                                                &nbsp;&nbsp;&nbsp;
                                                <label>
                                                <input type="radio" name="jk" id="optionsRadios2" value="perempuan">
                                                    Perempuan
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Pendidikan</label>
                                            <input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan...">
                                        </div>
                                    </div>
                                    {{--  //col-md-6  --}}
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Jenis Pekerjaan</label>
                                                <input type="text" name="jenisPekerjaan" class="form-control" placeholder="Jenis Pekerjaan">
                                            </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="">Status Pernikahan</label>
                                                <input type="text" name="statusPernikahan" class="form-control" placeholder="Status Pernikahan">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="">Status Keluarga</label>
                                                <input type="text" name="statusKeluarga" class="form-control" placeholder="Status Keluarga">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label for="">Kewarganegaraan</label>
                                                <input type="text" name="kewarganegaraan" class="form-control" placeholder="Kewarganegaraan">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label for="">Pasport</label>
                                                <input type="text" name="pasport" class="form-control" placeholder="pasport">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label for="">kitap</label>
                                                <input type="text" name="kitap" class="form-control" placeholder="kitap">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="">Ayah</label>
                                                <input type="text" name="ayah" class="form-control" placeholder="Nama Ayah...">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label for="">Ibu</label>
                                                <input type="text" name="ibu" class="form-control" placeholder="Nama Ibu...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button id="addRow" type="button" class="btn btn-primary btn-sm  btn-block" onclick="addData();" ><span class="fa fa-plus"></span> Add Data</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <table class="table table-responsive table-bordered table-hover" id="tbl">
                    <tr>
                        <th>Aksi</th>
                        <th>Nama</th>
                        <th>Nik</th>
                        <th>Tmpt Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Pendidikan</th>
                        <th>Status Pernikahan</th>
                    </tr>
                </table>
                <table class="table table-responsive table-bordered table-hover" id="tbl2">
                    <tr>
                        <th>Status Keluarga</th>
                        <th>Kewarganegaraan</th>
                        <th>Pasport</th>
                        <th>Kitap</th>
                        <th>Ayah</th>
                        <th>Ibu</th>
                    </tr>
                </table>
                    <input type="text" id="counter" value="">
                    <input type="submit" value="Simpan Data" class="btn btn-success btn-block btn-md">
            </form>
        </div>{{--  end-box-body-first  --}}
    </div>
</div>
@stop
@section('scripts')
 <script type="text/javascript" src="{{URL::asset('/js/jquery.js')}}"></script>
 <script type="text/javascript" src="{{URL::asset('/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript">
        var i = 0;
        var detailKeluarga = [];
        var data = [];
        function addData()
        {
            //deklrasivariable
            var nik                 = $("[name='nik']").val();
            var nama                = $("[name='nama']").val();
            var jk                  = $("[name='jk']").val();
            var ibu                 = $("[name='ibu']").val();
            var ayah                = $("[name='ayah']").val();
            var kitap               = $("[name='kitap']").val();
            var pasport             = $("[name='pasport']").val();
            var tpt_lahir           = $("[name='tempatLahir']").val();
            var pendidikan          = $("[name='pendidikan']").val();
            var tgl_lahir           = $("[name='tanggalLahir']").val();
            var tmpt_lahir          = $("[name='tempatLahir']").val();
            var jenisPekerjaan      = $("[name='jenisPekerjaan']").val();
            var statusKeluarga      = $("[name='statusKeluarga']").val();
            var kewarganegaraan     = $("[name='kewarganegaraan']").val();
            var statusPernikahan    = $("[name='statusPernikahan']").val();

            detailKeluarga.push({nama,nik,tpt_lahir,tgl_lahir,jk,pendidikan,statusPernikahan,statusKeluarga,kewarganegaraan,pasport,kitap,ayah,ibu});
            data.push(detailKeluarga[i]);            
            detailKeluarga[i] = [{ nama : nama, nik :nik,tpt_lahir: tpt_lahir,tgl_lahir:tgl_lahir,jk:jk,pendidikan:pendidikan,statusPernikahan:statusPernikahan,statusKeluarga:statusKeluarga,kewarganegaraan:kewarganegaraan,pasport:pasport,kitap:kitap,ayah:ayah,ibu:ibu }];

            //console.log(data);
            //alert(data);
            $("#tbl").append("<tr id="+i+"><td><button type='button' class='btn btn-sm btn-danger' class='btn' onclick ='deleteRow("+i+")' id="+i+">remove</button></td><td>"+nama+"</td><td>"+nik+"</td><td>"+tpt_lahir+"</td><td>"+tgl_lahir+"</td><td>"+pendidikan+"</td><td>"+statusPernikahan+"</td></tr>");
            $('#tbl2').append("<tr id="+i+"><td>"+statusKeluarga+"</td><td>"+kewarganegaraan+"</td><td>"+pasport+"</td><td>"+kitap+"</td><td>"+ayah+"</td><td>"+ibu+"</td></tr>");
            $('#counter').val(i);
            allInputs = $("div#content :input");
            $(allInputs).val('');
            i ++;
        }
        
        function deleteRow(id){
            $('table#tbl tr#'+id).remove(); 
            $('table#tbl2 tr#'+id).remove(); 
        }

        function simpanData()
        {
            
        }
    </script>
@stop