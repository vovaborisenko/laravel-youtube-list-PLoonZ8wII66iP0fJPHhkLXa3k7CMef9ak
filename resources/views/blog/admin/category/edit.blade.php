@extends('layouts.app')

@section('content')
<form action="{{ route('blog.admin.categories.update', $item->id) }}" method="post">
    @method('putch')
    @csrf
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

            </div>
            <div class="col-md-3">
                
            </div>
        </div>
    </div>
</form>
@endsection
