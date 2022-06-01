@extends('layouts.default')

@section('content')
<section>
    <form action="{{ route('comments.store') }}" method="POST">
        @include('users._errors')
        {{ csrf_field() }}
        <textarea class="form-control" rows="3" placeholder="面白い話がありましょうか..." name="content">{{ old('content') }}</textarea>
        <div class="text-end">
            <button type="submit" class="btn btn-primary mt-3">投稿</button>
        </div>
    </form>
    <a href={{ route('home') }}>
        <button class="btn btn-primary">一覧へ</button>
    </a>
</section>

@stop