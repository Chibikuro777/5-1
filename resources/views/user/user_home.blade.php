@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-2">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ホーム</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <form action="{{ action('User\PostController@post') }}" method="post">
                    @csrf
                    <input type="text" name="comment" placeholder="いまどうしてる？" class="w-100 mb-4 p-1">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="d-flex justify-content-end"><button name="button" class="btn btn-secondary">つぶやく</button></div>
                </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @foreach ($items as $item)
                    <div class="d-flex justify-content-between mb-3">
                        <li class="list-unstyled">{{ $item->user_id }}</li>
                        <li class="list-unstyled">{{ $item->created_at }}</li>
                    </div>
                    <div class="d-flex justify-content-between">
                        <li class="list-unstyled">{{ $item->body }}</li>
                        <button class="list-unstyled btn btn-danger">削除</button>
                    </div>
                    <hr>
                    @endforeach
                </div>
                {{-- <div class="d-flex justify-content-center">
                    {{ $items->links() }}
                </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
