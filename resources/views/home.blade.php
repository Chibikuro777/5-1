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
                <form action="" method="get">
                    @csrf
                    <input type="text" name="comment" placeholder="いまどうしてる？" class="w-100 mb-4 p-1">
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
                    content
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
