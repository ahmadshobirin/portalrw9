@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Tambah KK
@endsection

@section('contentheader_title', 'Tambah Kartu Keluarga Multiple')

@section('main-content')

<div class="">
    <div class="box box-success">
        <div class="box-header">Data Kartu Keluarga</div>
        <div class="box-body">
            <form id="formCreate" action="{{url('/admin/warga/create')}}" method="post" onsubmit="saveData()">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                                <label for="">No KK</label>
                                <input type="text" name="no_kk" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'  required="" placeholder="No KK..." autofocus>
                        </div>
                        <div class="form-group">
                                <label for="">Kepala Keluarga</label>
                                <input type="text" name="kepala_keluarga" class="form-control" placeholder="Kepala Keluarga..." id="nama">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">RT</label>   
                                        <select name="rt" id="" class="form-control"  required="">
                                            <option selected>Pilih Rt..</option>
                                            @for($i=1; $i <= 10; $i++)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>    
                                </div>  

                                <div class="form-group">
                                    <label>Desa/Kelurahan</label>
                                    <input type="text" name="desa_kelurahan" class="form-control"  required="" placeholder="Desa/Kelurahan...">
                                </div>   

                                <div class="form-group">
                                    <label>Kecamatan</label>
                                    <input type="text" name="kecamatan" class="form-control"  required="" placeholder="Kecamatan...">
                                </div>          

                                <div class="form-group">
                                    <label>Kabupaten/Kota</label>
                                    <input type="text" name="kabupaten_kota" class="form-control"  required="" placeholder="Kabupaten/Kota">
                                </div>                                    
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">RW</label>
                                        <select name="rw" id="" class="form-control"  required="">
                                            <option selected>Pilih Rw..</option>
                                            @for($i=1; $i <= 10; $i++)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>                                                    
                                </div>

                                <div class="form-group">
                                    <label>Provinsi</label>
                                    <input type="text" name="provinsi" class="form-control" required="" placeholder="Provinsi...">
                                </div>   

                                <div class="form-group">
                                    <label>Kode Pos</label>
                                    <input type="text" name="kodepos" class="form-control"  onkeypress='return event.charCode >= 48 && event.charCode <= 57' required="" placeholder="Kodepos...">
                                </div>      

                                <div class="form-group">
                                    <label>Dikeluarkan Tanggal</label>
                                    <input type="date" name="keluarTanggal" class="form-control"  required="">
                                </div>                                                
                            </div>                                           
                        </div>

                        <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="alamat" class="form-control"  required="" placeholder="Alamat..."></textarea>
                        </div>
                    </div>

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
                                                <input type="radio" name="jk" value="laki-laki" checked>
                                                    Laki-Laki
                                                </label>
                                                &nbsp;&nbsp;&nbsp;
                                                <label>
                                                <input type="radio" name="jk" value="perempuan">
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
                                                <label for="">Kitab</label>
                                                <input type="text" name="kitap" class="form-control" placeholder="kitab">
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
                <input type="hidden" id="counter" value="" name="counter">
                <table class="table table-responsive table-bordered table-hover" id="tbl">
                    <tr>
                        <th>Aksi</th>
                        <th>Nama</th>
                        <th>Nik</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Pendidikan</th>
                        <th>Status Pernikahan</th>
                    </tr>
                </table>
                <table class="table table-responsive table-bordered table-hover" id="tbl2">
                    <tr>
                        <th>Jenis Kelamin</th>
                        <th>Jenis Pekerjaan</th>
                        <th>Status Keluarga</th>
                        <th>Kewarganegaraan</th>
                        <th>Pasport</th>
                        <th>Kitab</th>
                        <th>Ayah</th>
                        <th>Ibu</th>
                    </tr>
                </table>
                <input type="submit" value="Simpan Data" class="btn btn-success btn-block btn-md" id="submit">
            </form>
        </div>{{--  end-box-body-first  --}}
    </div>
</div>
@stop
@section('scripts')
  <script type="text/javascript" src="{{URL::asset('/vendor/jquery-validation/js/jquery.validate.js')}}"></script>
 <script type="text/javascript" src="{{URL::asset('/vendor/jquery-validation/js/additional-methods.js')}}"></script> 
    <script type="text/javascript">
        var i = 0;
        var detailKeluarga = [];
        var lengthDataKeluarga;
        //var data = [];
            function addData(){
                //deklrasivariable
                var nik                 = $("[name='nik']").val();
                var nama                = $("[name='nama']").val();
                var jk                  = $("[name='jk']:checked").val();
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

                detailKeluarga.push({i,nama,nik,jk,tpt_lahir,tgl_lahir,jenisPekerjaan,pendidikan,statusPernikahan,statusKeluarga,kewarganegaraan,pasport,kitap,ayah,ibu});
                //data.push(detailKeluarga[i]);

                //detailKeluarga[i] = [{ nama : nama, nik :nik,tpt_lahir: tpt_lahir,tgl_lahir:tgl_lahir,jk:jk,pendidikan:pendidikan,statusPernikahan:statusPernikahan,statusKeluarga:statusKeluarga,kewarganegaraan:kewarganegaraan,pasport:pasport,kitap:kitap,ayah:ayah,ibu:ibu }];

                $("#tbl").append("<tr id="+i+"><td><button type='button' class='btn btn-sm btn-danger' class='btn' onclick ='deleteRow("+i+")'>remove</button></td><td>"+nama+"</td><td>"+nik+"</td><td>"+tpt_lahir+"</td><td>"+tgl_lahir+"</td><td>"+pendidikan+"</td><td>"+statusPernikahan+"</td></tr>");
                $('#tbl2').append("<tr id="+i+"><td>"+jk+"</td><td>"+jenisPekerjaan+"</td><td>"+statusKeluarga+"</td><td>"+kewarganegaraan+"</td><td>"+pasport+"</td><td>"+kitap+"</td><td>"+ayah+"</td><td>"+ibu+"</td></tr>");

                allInputs = $("div#content input.form-control");
                $(allInputs).val('');

                lengthDataKeluarga = detailKeluarga.length;
                $('#counter').val(lengthDataKeluarga);
                i+=1;
            }
            
            function deleteRow(id){
                lengthDataKeluarga = detailKeluarga.length;
                //alert(lengthDataKeluarga);
                if(lengthDataKeluarga == 1)
                {
                    //detailKeluarga = [];
                    detailKeluarga.length = 0;
                    lengthDataKeluarga = detailKeluarga.length;
                    $('#counter').val(lengthDataKeluarga);
                }
                else{
                    detailKeluarga.splice(id,1);
                    lengthDataKeluarga = detailKeluarga.length;
                    $('#counter').val(lengthDataKeluarga);
                }
                
                $('table#tbl tr#'+id).remove(); 
                $('table#tbl2 tr#'+id).remove();
            }    

            $(document).ready(function() {
                $('#formCreate').validate({
                    focusInvalid: false, 
                    ignore: "",
                    rules: {
                        counter: {
                                number:true,
                                required:true
                            },
                        no_kk:{
                                required:true,
                        },
                        kepala_keluarga:{
                                required:true,
                        },
                        rt:{
                                required:true,
                        },
                        rw:{
                                required:true,
                        },
                        kodepos:{
                                required:true,
                        },
                        desa_kelurahan:{
                                required:true,
                        },
                        kecamatan:{
                                required:true,
                        },
                        kabupaten_kota:{
                                required:true,
                        },
                        provinsi:{
                                required:true,
                        },
                        keluarTanggal:{
                                required:true,
                        },
                        alamat:{
                                required:true,
                        },
                    },
                    messages:{
                        counter:{
                            required: "Detail KK tidak boleh kosong"
                        },
                        no_kk:{
                                required:"No KK belum diisi"
                        },
                        kepala_keluarga:{
                                required:"Kepala Keluarga belum diisi"
                        },
                        rt:{
                                required:"RT belum diisi"
                        },
                        rw:{
                                required:"RW belum diisi"
                        },
                        kodepos:{
                                required:"Kodepos belum diisi"
                        },
                        desa_kelurahan:{
                                required:"Desa/Kelurahan belum diisi"
                        },
                        kecamatan:{
                                required:"Kecamatan belum diisi"
                        },
                        kabupaten_kota:{
                                required:"Kabupaten/Kota belum diisi"
                        },
                        provinsi:{
                                required:"Provinsi belum diisi"
                        },
                        keluarTanggal:{
                                required:"Tanggal belum diisi"
                        },
                        alamat:{
                                required:"Alamat belum diisi"
                        },
                    },
                    submitHandler: function (form) {
                        var no_kk =  $("[name='no_kk']").val();
                        var kepala_keluarga =  $("[name='kepala_keluarga']").val();
                        var rt =  $("[name='rt']").val();
                        var rw =  $("[name='rw']").val();
                        var kodepos =  $("[name='kodepos']").val();
                        var desa_kelurahan =  $("[name='desa_kelurahan']").val();
                        var kecamatan =  $("[name='kecamatan']").val();
                        var kabupaten_kota =  $("[name='kabupaten_kota']").val();
                        var provinsi =  $("[name='provinsi']").val();
                        var keluarTanggal =  $("[name='keluarTanggal']").val();
                        var alamat =  $("[name='alamat']").val();
                        var counter = $('#counter').val();

                        $.ajax({
                            type: "POST",
                            url: "<?= url('/admin/warga/create/ajax') ?>",
                            data: { no_kk : no_kk, kepala_keluarga : kepala_keluarga, rt : rt, rw : rw, kodepos : kodepos,desa_kelurahan : desa_kelurahan, kecamatan : kecamatan, kabupaten_kota : kabupaten_kota, provinsi : provinsi, keluarTanggal : keluarTanggal, alamat : alamat, data : detailKeluarga, counter : counter, _token : "{{csrf_token()}}" },
                            success: function(msg) {
                                //alert(msg);
                                if(msg == "success"){ 
                                    window.location.href = "<?= url('admin/warga')?>";
                                }else{
                                    window.location.reload();
                                }
                            }
                        }); 
                    }
                });
            });
    </script>
@stop