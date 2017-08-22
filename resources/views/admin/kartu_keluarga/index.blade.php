@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Kartu Keluarga
@endsection
    <link rel="stylesheet" href="{{URL::asset('css/datatables.min.css')}}">
@section('contentheader_title', 'Data Warga')

@section('main-content')
    <div class="">
        <a href="{{ url('admin/warga/create') }}" class="btn btn-success btn-md">
            <i class="fa fa-plus"></i> Tambah Data
        </a>
        <a href="{{url('/admin/wargatrash')}}" class="btn btn-danger btn-md">
        <i class="fa fa-trash"></i> Lihat Data Sampah
    </a>
    </div>
    <br>    
    <table id="table" class="table table-striped table-hover table-responsive" style="font-size:12px">
        <thead>
            <tr>
                <th>No</th>
                <th>No KK</th>
                <th>Kepala Keluarga</th>
                <th>Alamat</th>
                <th>RT/RW</th>
                <th>Desa</th>
                <th>Kota/Kabupaten</th>
                <th>Dikeluarkan Tanggal</th>
                <th class="nosort">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i= 1 ?>
             @foreach($kk as $list)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td><a href="{{url('admin/detailkk/'.$list->no_kk)}}">{{ $list->no_kk }}</a></td>
                    <td>{{ $list->kepala_keluarga }}</td>
                    <td>{{ $list->alamat }}</td>
                    <td>{{ $list->rt}}/{{$list->rw }}</td>
                    <td>{{ $list->desa_kelurahan }}</td>
                    <td>{{ $list->kabupaten_kota }}</td>
                    <td>{{ $list->keluar_tgl }}</td>
                    <td>
                        <div class="">
                            <a class="btn btn-warning btn-sm" href="{{url('/admin/warga/'.$list->id.'/edit')}}"><span class="fa fa-pencil"></span></a>
                            <a class="btn btn-danger btn-sm" href="{{url('/admin/warga/'.$list->id.'/delete')}}"><span class="fa fa-trash"></span></a>
                        </div>
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