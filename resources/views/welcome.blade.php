@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="row">
            <aside class="col-sm-4">
                     {!! link_to_route('tasks.create', '新しいタスクの投稿', [], ['class' => 'btn btn-primary']) !!}
            </aside>
            <div class="col-sm-8">
                @if (count($tasks) > 0)
                    @include('tasks.index', ['tasks' => $tasks])
                @endif
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1 class="mb-4">TaskListへようこそ</h1>
                {!! link_to_route('signup.get', 'ユーザ登録', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection