@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title', 'Master Category')

@section('main-content')

<!--/storage/app/public-->
 <div class="panel panel-default">
                        <!-- /.panel-heading -->
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-responsive">
                <tr>
                    <th>No.</th>
                    <th>Title</th>
                    <th>Cover</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
                @foreach($article as $list)
                <tr>
                    <td></td>
                    <td>{{$list->title}}</td>
                    <td><img src="/storage/{{$list->images}}" style="max-width:100px"></td>
                    <td>{{$list->category}}</td>
                    <td>
                        <form method="post" action="/admin/article/{{$list->id}}">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button class="btn btn-danger pull-left">
                                <span class="fa fa-trash"> delete</span>
                            </button>
                        </form>
                        <a class="btn btn-warning pull-left" href="/admin/article/{{$list->id}}/edit"><span class="fa fa-pencil"> edit</span></a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        </div>
</div>
@ckeditor('content')


@endsection