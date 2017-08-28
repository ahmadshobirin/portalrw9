@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Gallery
@endsection

@section('contentheader_title', 'Gambar Galeri di Sampah')

@section('main-content')

<link rel="stylesheet" href="{{URL::asset('css/datatables.min.css')}}">

<div class="">
    <a href="{{url('/admin/gallery/create')}}" class="btn btn-success btn-md">
        <i class="fa fa-plus"></i> Tambah Data
    </a>
    <a href="{{url('/admin/gallery')}}" class="btn btn-info btn-md">
        <i class="fa fa-columns"></i> Lihat Gambar
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
        <?php $i=1; ?>
            @foreach($trash as $gallery)
                <tr>
                    <td>{{$i++}}</td>
                    <td><img src="{{asset('images/gallery/'.$gallery->images)}}" alt="" style="max-midth:120px; max-height:120px;"></td>
                    <td>
                        <a href="{{url('/admin/gallery/restore/'.$gallery->id)}}" class="btn btn-success btn-md">
                            Kembalikan Data
                        </a>
                        <a href="{{url('/admin/gallery/permanent/delete/'.$gallery->id)}}" class="btn btn-danger btn-md" onclick="return confirm('Hapus gambar Selamanya ?')">
                            Hapus Permanen
                        </a>
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