@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Galery Aktif
@endsection

@section('contentheader_title', 'Gambar di Galery')

@section('main-content')

<link rel="stylesheet" href="{{URL::asset('css/datatables.min.css')}}">

<div class="">
    <a href="{{url('/admin/gallery/create')}}" class="btn btn-success btn-md">
        <i class="fa fa-plus"></i> Tambah Data
    </a>
    <a href="{{url('/admin/gallerytrash')}}" class="btn btn-danger btn-md">
        <i class="fa fa-trash"></i> Lihat Data Sampah
    </a>
</div>
<br>    

    <table class="table table-striped table-hover table-responsive" id="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th class="nosort">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $i=1 ?>
            @foreach($galleries as $gallery)
                <tr>
                    <td>{{$i++}}</td>
                    <td><img src="{{asset('/images/gallery/'.$gallery->images)}}" alt="" style="max-midth:120px; max-height:120px;"></td>
                    <td>
                        <form method="post" action="/admin/gallery/{{$gallery->id}}">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button class="btn btn-danger pull-left">
                                <span class="fa fa-trash"> Hapus</span>
                            </button>
                        </form>
                        <a class="btn btn-warning pull-left" href=""><span class="fa fa-pencil"> Ubah</span></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@stop
@section('scripts')

<script type="text/javascript" src="{{URL::asset('/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('/js/datatables.bootstrap.min.js')}}"></script>

<script>
    $('#table').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      "language": {
        "emptyTable"    : "Data Kosong",
        "info"          : "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
        "infoEmpty"     : "Menampilkan 0 sampai 0 dari 0 data",
        "infoFiltered"  : "(disaring dari _MAX_ total data)",
        "search"        : "Cari:",
        "lengthMenu"    : "Tampilkan _MENU_ Data",
        "zeroRecords"   : "Tidak Ada Data yang Ditampilkan",
        "oPaginate"     : {
                            "sFirst":    "Awal",
                            "sLast":    "Akhir",
                            "sNext":    "Selanjutnya",
                            "sPrevious": "Sebelumnya"
                         },
                },
      'aoColumnDefs': [{
        'bSortable': false,
        'aTargets': ['nosort']
        }]
    });
</script>
@stop