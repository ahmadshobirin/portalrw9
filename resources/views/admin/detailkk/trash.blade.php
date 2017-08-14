@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection
    <link rel="stylesheet" href="{{URL::asset('css/datatables.min.css')}}">
@section('contentheader_title', 'Sampah DetailKartu Keluarga '.$kepalaKeluarga->kepala_keluarga)

@section('main-content')
    <div class="pull-left">
        <a href="{{url('admin/detailkk/'.$nokk)}}" class="btn btn-sm btn-primary"><i class="fa fa-arrow-left" aria-hidden="true"></i> Detail Kartu Keluarga</a>
    </div>
    <br>
    <table id="table" class="table table-striped table-hover table-responsive" style="font-size:13">
        <thead>
            <tr>
                <th>No</th>
                <th>Nik</th>
                <th>Nama</th>
                <th>JK</th>
                <th>Tempat-Tgl Lahir</th>
                <th>Pendidikan</th>
                <th>Kewarganegaraan</th>
                <th>Ayah</th>
                <th>Ibu</th>
                <th class="nosort">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1 ?>
            @foreach($item as $list)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $list->nik }}</td>
                    <td>{{ $list->nama }}</td>
                    <td>{{ $list->jk }}</td>
                    <td>{{ $list->tempat_lahir }}, {{ $list->tanggal_lahir->toDateString() }}</td>
                    <td>{{ $list->pendidikan }}</td>
                    <td>{{ $list->kewarganegaraan }}</td>
                    <td>{{ $list->ayah }}</td>
                    <td>{{ $list->ibu }}</td>
                    <td>
                        <a href="{{ url('admin/detailkk/restore/'.$list->id) }}" class="btn btn-sm btn-warning"><span class="fa fa-undo"></span></a>
                        &nbsp;
                        <a href="{{ url('admin/detailkk/permanent/delete/'.$list->id) }}" class="btn btn-sm btn-danger"><span class="fa fa-trash"></span></a>
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
      'aoColumnDefs': [{
        'bSortable': false,
        'aTargets': ['nosort']
        }]
    });
</script>
@stop