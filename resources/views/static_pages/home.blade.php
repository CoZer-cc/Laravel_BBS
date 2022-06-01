@extends('layouts.default')

@section('content')
    <div class="panel-body">
        <table class="table table-hover">

        <tbody>
        <thead>
                <tr>
                    <th width="10">ID</th>
                    <th width="80">名前</th>
                    <th width="100">メールアドレス</th>
                    <th>内容</th>
                    <th width="100">投稿時間</th>
                </tr>
                </thead>
        @foreach($comment as $cmt)
            <tr>
                <td>{{$cmt->id}}</td>
                <td>{{$cmt->user->name}}</td>
                <td>{{$cmt->user->email}}</td>
                <td>{{$cmt->content}}</td>
                <td>{{$cmt->created_at}}</td>
            </tr>
                @endforeach   
        </tbody>
        </table>
    </div>
@endsection
