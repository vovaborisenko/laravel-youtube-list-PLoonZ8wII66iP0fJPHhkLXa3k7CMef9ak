@extends('layouts.app')

@section('content')
<form action="{{ route('blog.admin.posts.update', $item->id) }}" method="post">
    @method('patch')
    @csrf
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('blog.admin.posts.includes.item-main-col')
            </div>
            <div class="col-md-3">
                @include('blog.admin.posts.includes.item-right-col')
            </div>
        </div>
    </div>
</form>
<br>
<form action="{{ route('blog.admin.posts.destroy', $item->id) }}" method="post">
    @method('delete')
    @csrf
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <button class="btn btn-danger">Удалить</button>
                </div>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>
</form>
@endsection
