@extends('adminlte::layouts.app') @section('htmlheader_title') Gallery Folder @endsection @section('contentheader_title',
'Gallery Folder') @section('main-content')

<div class="">
    <a href="{{url('/admin/gallery/create')}}" class="btn btn-success btn-md">
        <i class="fa fa-plus"></i> Tambah Folder
    </a>
    {{--  <a href="{{url('/admin/gallery/folder/trash')}}" class="btn btn-danger btn-md">
        <i class="fa fa-trash"></i> Lihat Data Sampah
    </a>  --}}
</div>

<section class="content">
    <div class="row">
        @forelse($albumFolderTrash as $albumTrashed)

        <div class="col-lg-4 col-xs-8">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h4 class="text-center">{{str_limit($albumTrashed->nama, 13, '...')}}</h4>
                    <?php $jumlahFoto=\DB::table('galleries')->where('folder_id', '=', $albumTrashed->id)->count(); ?>
                    
                    <p>{{$jumlahFoto}} FOTO</p>
                </div>
                <div class="icon">
                    <i class="fa fa-folder"></i></span>
                </div>
                
                    <div class="small-box-footer">
                    <div class="row">
                        <div class="col-md-4 ">
                            <a href="{{url('/admin/gallery/folder/permanentdeletealbum/'.$albumTrashed->id)}}" style="color:white;"><i class="fa fa-trash fa-1x"></i></a>
                        </div>
                        <div class="col-md-4 ">
                            <a href="{{url('/admin/gallery/folder/restore/'.$albumTrashed->id)}}" style="color:white;"><i class="fa fa-refresh fa-1x"></i></a>
                        </div>
                        <div class="col-md-4 ">
                            <a href="{{url('/admin/gallery/'.$albumTrashed->id)}}" style="color:white;" >More info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    
                    
                </div>  
                {{--  <a href="/admin/gallery/{{$albumTrashed->id}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>  --}}
            </div>
        </div>
        @empty
            <div class="alert alert-warning text-center">
                <p style="font-size:30px;">Folder Kosong</p>
            </div>
        @endforelse
    </div>
    <div class="row text-center">
        {{$albumFolderTrash->links()}}
    </div>
</section>
@endsection