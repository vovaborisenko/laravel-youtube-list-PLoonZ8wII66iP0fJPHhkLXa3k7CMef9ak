@extends('layouts.app')

@section('content')

<form action="{{ route('blog.admin.categories.update', $item->id) }}" method="post">
    @method('patch')
    @csrf
    <div class="container">
        @if ($errors->any())
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <div class="alert alert-danger" role="alert">
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        {{ $errors->first() }}
                    </div>
                </div>
            </div>
        @endif

        @if (session('success'))
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <div class="alert alert-success" role="alert">
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        {{ session('success') }}
                    </div>
                </div>
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('blog.admin.categories.includes.item-edit-main-col')
            </div>
            <div class="col-md-3">
                @include('blog.admin.categories.includes.item-edit-add-col')
            </div>
        </div>
    </div>
</form>
@endsection
