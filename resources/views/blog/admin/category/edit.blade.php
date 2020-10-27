@extends('layouts.app')

@section('content')
<form action="{{ route('blog.admin.categories.update', $item->id) }}" method="post">
    @method('patch')
    @csrf
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('blog.admin.category.includes.item-edit-main-col')
            </div>
            <div class="col-md-3">
                @include('blog.admin.category.includes.item-edit-add-col')
            </div>
        </div>
    </div>
</form>
@endsection
