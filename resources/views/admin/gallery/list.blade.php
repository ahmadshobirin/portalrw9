@extends('adminlte::layouts.app') @section('htmlheader_title') Galery Aktif @endsection @section('contentheader_title', 'Gambar
di Galery') @section('main-content')

<link rel="stylesheet" href="{{URL::asset('css/datatables.min.css')}}">

<div class="container">
    {{-- <a href="{{url('/admin/gallery/create')}}" class="btn btn-success btn-md">
        <i class="fa fa-plus"></i> Tambah Data
    </a> --}}
    <div class="row">
        <form method="post" action="/admin/gallery" enctype="multipart/form-data">
            @include('adminlte::layouts.partials.displayerror') {{csrf_field()}} {{method_field('POST')}}
                <div class="form-group">
                    <input type="file" name="images[]" class="col-md-3" required="" multiple class="form-control">
                </div>
                <input type="submit" value="Tambah" class="btn btn-primary btn-xs col-md-3">
            <input type="hidden" value="{{$id}}" name="folder_id">
        </form>
    </div>
    {{--
    <div class="pull-right">
        <a href="{{url('/admin/gallerytrash')}}" class="btn btn-danger btn-md">
        <i class="fa fa-trash"></i> Lihat Data Sampah
    </a>
    </div> --}}
</div>
<br>

<form action="{{url('admin/gallery/multiple/delete')}}" method="get">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <table class="table table-striped table-hover table-responsive" id="table">
        <thead>
            <tr>
                <th>-</th>
                <th>No.</th>
                <th>Gambar</th>
                <th class="nosort">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1 ?> @foreach($galleries as $gallery)
            <tr>
                <td><input type="checkbox" name="id[]" value="{{$gallery->id}}" id="child" class="child"></td>
                <td>{{$i++}}</td>
                <td><img src="{{asset('/images/gallery/'.$gallery->images)}}" alt="" style="max-midth:120px; max-height:120px;"></td>
                <td>
                    <a href="{{ url('/admin/gallery/'.$gallery->id) }}" class="btn btn-default btn-flat" id="logout" onclick="event.preventDefault();
                                                 document.getElementById('delete-form').submit();">
                                        <span class="fa fa-trash"> Hapus</span>
                        </a>
                    <form id="delete-form" method="post" action="{{url('/admin/gallery/'.$gallery->id)}}" style="display:none;">
                        {{csrf_field()}} {{method_field('DELETE')}}
                        <input type="submit" value="delete" style="display:none;">
                    </form>
                    {{-- <a class="btn btn-warning pull-left" href=""><span class="fa fa-pencil"> Ubah</span></a> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <img src="{{asset('assets/img/arrowC.png')}}" alt="" style=" margin-right:.3em; margin-left: .6em; margin-top: .-3em ">
    <input type="checkbox" name="parent" id="parent">
    <button type="submit" class="btn btn-danger">Hapus</button>
</form>

@stop @section('scripts')

<script type="text/javascript" src="{{URL::asset('/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('/js/datatables.bootstrap.min.js')}}"></script>

<script>
    $(document).ready(function () {
        $("#parent").click(function () {
            $(".child").prop("checked", this.checked);
        });

        $('.child').click(function () {
            if ($('.child:checked').length == $('.child').length) {
                $('#parent').prop('checked', true);
            } else {
                $('#parent').prop('checked', false);
            }
        });
    });
</script>
<script>
    $('#table').DataTable({
        'paging': true,
        'lengthChange': true,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false,
        "language": {
            "emptyTable": "Data Kosong",
            "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
            "infoEmpty": "Menampilkan 0 sampai 0 dari 0 data",
            "infoFiltered": "(disaring dari _MAX_ total data)",
            "search": "Cari:",
            "lengthMenu": "Tampilkan _MENU_ Data",
            "zeroRecords": "Tidak Ada Data yang Ditampilkan",
            "oPaginate": {
                "sFirst": "Awal",
                "sLast": "Akhir",
                "sNext": "Selanjutnya",
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