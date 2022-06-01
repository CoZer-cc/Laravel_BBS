@extends('layouts.default')

@section('content')
    <div class="panel-body">
        <table class="table table-hover">
        <tbody>
        @foreach($comment as $cmt)
            <tr>
                <th>
                    {{$cmt->content}}<br>
                    {{$cmt->user->name}}<br>
                    {{$cmt->user->created_at}}<br>
                    
                    <form action="{{ route('admin.destory', $cmt->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-sm btn-danger status-delete-btn">Delete</button>                    </form>
                </th>
            </tr>
                @endforeach   
        </tbody>
        </table>
    </div>
@endsection
