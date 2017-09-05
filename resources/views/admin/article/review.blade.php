@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Artikel User
@endsection

@section('contentheader_title', 'Artikel User')

@section('main-content')

<link rel="stylesheet" href="{{URL::asset('css/datatables.min.css')}}">
<br>    

    <table class="table table-striped table-hover table-responsive" id="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>Sampul</th>
                <th>status</th>
                <th class="nosort">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;?>
            @foreach($dataArtikel as $artikel)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td><a href="{{url('admin/view/article/'.$artikel->id )}}">{{ $artikel->title }}</a></td>
                    <td><img src="{{ asset('images/'.$artikel->images)}}" alt="" style="max-midth:120px; max-height:120px;"></td>
                    <td>
                        @if($artikel->status == 'aktif')
                            <h4><span class="label label-success">{{ $artikel->status }}</span></h4>
                        @else
                            <h4><span class="label label-warning">{{ $artikel->status }}</span></h4>
                        @endif
                    </td>
                    <td>
                        aktifkan
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