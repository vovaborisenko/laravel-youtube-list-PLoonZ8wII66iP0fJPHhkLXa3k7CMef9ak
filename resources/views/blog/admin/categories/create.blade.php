@extends('layouts.app')

@section('content')
<form action="{{ route('blog.admin.categories.store') }}" method="post">
    @csrf
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('blog.admin.categories.includes.item-main-col')
            </div>
            <div class="col-md-3">
                @include('blog.admin.categories.includes.item-right-col')
            </div>
        </div>
    </div>
</form>
@endsection
