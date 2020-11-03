@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                <a href="{{ route('blog.admin.posts.create') }}" class="btn btn-primary">Написать</a>
            </nav>
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Автор</th>
                                <th>Категория</th>
                                <th>Заголовок</th>
                                <th>Дата публикации</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($paginator as $item)
                                <tr @if (!$item->is_published) style="background-color: #ccc" @endif>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>{{ $item->category->title }}</td>
                                    <td>
                                        <a href="{{ route('blog.admin.posts.edit', $item->id) }}">{{ $item->title }}</a>
                                    </td>
                                    <td>
                                        {{ $item->published_at ? \Carbon\Carbon::parse($item->published_at)->format('d/M/y H:i') : '' }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if ($paginator->total() > $paginator->count())
                        {{ $paginator->links() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

