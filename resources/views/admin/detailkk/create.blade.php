@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title', 'Detail Kartu Keluarga')

@section('main-content')
    <div class="container-fluid spark-screen">
		<div class="row">
            <div class="box box-primary">
               <div class="box-body">
                    <form action="{{url('admin/detailkk/create')}}" role="form" method="post">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="">Kartu Keluarga</label>
                                 <select name="kartuKeluarga" id="" class="form-control">
                                    <option selected>Pilih Kartu Keluarga...</option>
                                    @foreach($datakk as $kk)
                                       <option value="{{$kk->no_kk}}">{{ucfirst($kk->no_kk)}}</option>
                                    @endforeach
                                 </select>
                              </div>
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="">Nama</label>
                                       <input type="text" name="nama" class="form-control" placeholder="Nama...">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="">Nik</label>
                                       <input type="text" name="nik" class="form-control" placeholder="Nik..." onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
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
                           </div>
                           <div class="col-md-6">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="">Pendidikan</label>
                                       <input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan...">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="">Jenis Pekerjaan</label>
                                       <input type="text" name="jenisPekerjaan" class="form-control" placeholder="Jenis Pekerjaan">
                                    </div>
                                 </div>
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
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="submit" value="Simpan" class="btn btn-submit btn-primary btn-md">
                    </form>
               </div>
            </div>
        </div>
    </div>
@endsection
