@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection
    <link rel="stylesheet" href="{{URL::asset('css/datatables.min.css')}}">
@section('contentheader_title', 'Data Warga')

@section('main-content')
    <div class="">
        <a href="{{ url('admin/warga/create') }}" class="btn btn-success btn-md">
            <i class="fa fa-plus"></i> Tambah Data
        </a>
    </div>
    <br>    
    <table id="table" class="table table-striped table-hover table-responsive">
        <thead>
            <tr>
                <th>No</th>
                <th>No KK</th>
                <th>Kepala Keluarga</th>
                <th>Alamat</th>
                <th>RT/Rw</th>
                <th>Desa</th>
                <th>Kota/Kabupaten</th>
                <th>Dikeluarkan Tanggal</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i= 1 ?>
             @foreach($kk as $list)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td><a href="{{url('detailkk/'.$list->no_kk)}}">{{ $list->no_kk }}</a></td>
                    <td>{{ $list->kepala_keluarga }}</td>
                    <td>{{ $list->alamat }}</td>
                    <td>{{ $list->rt}}/{{$list->rw }}</td>
                    <td>{{ $list->desa_kelurahan }}</td>
                    <td>{{ $list->kabupaten_kota }}</td>
                    <td>{{ $list->keluar_tgl }}</td>
                    <td>
                        {{--  <form method="post" action="{{/admin/warga/{{$list->id}}}}">  --}}
                        <form method="post" action="{{ url('/admin/warga' . $list->id) }}">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button class="btn btn-danger pull-left">
                                <span class="fa fa-trash"></span>
                            </button>
                        </form>
                        &nbsp;
                        <a class="btn btn-warning pull-left" href="/admin/warga/{{$list->id}}/edit"><span class="fa fa-pencil"></span></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
<!-- jQuery -->
 <script type="text/javascript" src="{{URL::asset('/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('/js/datatables.bootstrap.min.js')}}"></script> 
<script>
    $('#table').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });
</script>
@endsection