@extends('layouts.app')

@section('content')
<form action="{{ route('blog.admin.posts.store') }}" method="post">
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
@endsection
