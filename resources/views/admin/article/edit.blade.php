@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Edit Artikel
@endsection

@section('contentheader_title', 'Ubah Artikel')

@section('main-content')

<form method="post" action="/admin/article/{{$article->id}}" enctype="multipart/form-data">
    {{csrf_field()}}
    {{method_field('put')}}
    @include('adminlte::layouts.partials.displayerror')
    <table class="table ">
        <tr>
            <th>Kategori {{$article->category}}</th>
            <td>
                <select name="category" class="form-control" required>
                    <option disabled>Kategori</option>
                    @foreach($category as $list)
                          <option  @if( $list->category == $article->category) selected @endif value="{{$list->id}}">{{$list->category}}</option> 
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <th>Gambar Sampul</th>
            <td>
                <input type="file" name="images" class="form-control">
                <img src="{{asset('images/'.$article->images)}}" style="max-width:100px">
            </td>
        </tr>
        <tr>
            <th>Judul</th>
            <td><input type="text" name="title" class="form-control" value="{{$article->title}}"></td>
        </tr>
        <tr>
            <th>Deskripsi</th>
            <td><input type="text" name="description" class="form-control" value="{{$article->description}}"></td>
        </tr>
        <tr>
            <th>Konten</th>
            <td>
                <textarea class="ckeditor" name="content" id="content">{{$article->content}}</textarea>
            </td>
        </tr>
        <tr>
            <th></th>
            <td><button type="submit" class="btn btn-primary">Perbaharui</button></td>
        </tr>
    </table>
</form>

@endsection

@section('scripts')
    {{-- <script src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script> --}}
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'content', {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        });
    </script>
@endsection