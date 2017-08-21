@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Slider Pasif
@endsection

@section('contentheader_title', 'Gambar Pasif di Slider')

@section('main-content')

<link rel="stylesheet" href="{{URL::asset('css/datatables.min.css')}}">

<div class="">
    <a href="{{url('/admin/slider/create')}}" class="btn btn-success btn-md">
        <i class="fa fa-plus"></i> Tambah Data
    </a>
    <a href="{{url('/admin/slidertrash')}}" class="btn btn-danger btn-md">
        <i class="fa fa-trash"></i> Lihat Data Sampah
    </a>
    <a href="{{url('/admin/slider')}}" class="btn btn-info btn-md">
        <i class="fa fa-check"></i> Lihat Gambar yang Aktif
    </a>
</div>
<br>    

    <table class="table table-striped table-hover table-responsive" id="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th class="nosort">Aksi</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>2</td>
                    <td><img src="assets/img/hbd2.jpg" alt="" style="max-midth:120px; max-height:120px;"></td>
                    <td>deskripsi</td>
                    <td>pasif</td>
                    <td>
                        <form method="post" action="#">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button class="btn btn-danger pull-left">
                                <span class="fa fa-trash"> Hapus</span>
                            </button>
                        </form>
                        <a class="btn btn-warning pull-left" href="#"><span class="fa fa-pencil"> Ubah</span></a>
                        <a class="btn btn-success pull-left" href="#"><span class="fa fa-check"> Aktifkan</span></a>
                    </td>
                </tr>

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