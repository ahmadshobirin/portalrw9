@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Artikel
@endsection

@section('contentheader_title', 'Artikel')

@section('main-content')

<link rel="stylesheet" href="{{URL::asset('css/datatables.min.css')}}">

<div>
<<<<<<< HEAD
    <a href="{{url('/home/artikel/create')}}" class="btn btn-success btn-md">
=======
    <a href="{{url('/user/artikel/tambah')}}" class="btn btn-success btn-md">
>>>>>>> 5e3201fb0f0bcf90bdaef3041da61d0c9ac6f3e6
        <i class="fa fa-plus"></i> Tambah Data
    </a>
</div>
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
<<<<<<< HEAD
        <?php $i=1 ?>
            @foreach($article as $list)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$list->title}}</td>
                    <td><img src="{{asset('images/'.$list->images)}}" alt="" style="max-midth:120px; max-height:120px;"></td>
                    <td>{{$list->status}}</td>
                    <td>
                        <a class="btn btn-warning pull-left" href="{{url('/home/artikel/'.$list->id.'/edit')}}"><span class="fa fa-pencil"> Ubah</span></a>
                    </td>
            @endforeach
=======
            <?php $no = 1;?>
            @foreach($dataArtikel as $artikel)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $artikel->title }}</td>
                    <td><img src="{{ asset('images/'.$artikel->images)}}" alt="" style="max-midth:120px; max-height:120px;"></td>
                    <td>
                        @if($artikel->status == 'aktif')
                            <h4><span class="label label-success">{{ $artikel->status }}</span></h4>
                        @else
                            <h4><span class="label label-warning">{{ $artikel->status }}</span></h4>
                        @endif
                    </td>
                    <td>
                        @if($artikel->status == 'pending')
                           <h4><span class="label label-danger">belum direview</span></h4>
                        @elseif($artikel->status == 'aktif')
                            <h4><span class="label label-primary">sudah direview</span></h4>
                        @else
                        <a class="btn btn-warning pull-left btn-sm" href="{{url('/home/artikel/edit/')}}"><span class="fa fa-pencil"> Ubah</span></a>
                        @endif
                    </td>
>>>>>>> 5e3201fb0f0bcf90bdaef3041da61d0c9ac6f3e6
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