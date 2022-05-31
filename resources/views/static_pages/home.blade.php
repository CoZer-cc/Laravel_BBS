@extends('layouts.default')

@section('content')
    <div class="panel-body">
        <table class="table table-hover">
{{--         <thead>
            <tr>
            <th>名前</th>
            <th>ふりがな</th>
            <th>アドレス</th>
            <th>コメント</th>
            <th>投稿時間</th>
            </tr>
        </thead> --}}
        <tbody>
        @foreach($comment as $cmt)
            <tr>
                <th>
                    {{$cmt->content}}<br>
                    {{$cmt->user->name}}<br>
                    {{$cmt->user->created_at}}
                </th>
                {{-- <th><img class="mr-3" src="{{ $user->gravatar() }}" alt="{{ $user->name }}" width=32>
                {{ $user->name }} {{ $user->email }} </th> --}}
            </tr>
                @endforeach   
        </tbody>
        </table>
    </div>
@endsection
