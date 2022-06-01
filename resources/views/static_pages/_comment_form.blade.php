@extends('layouts.default')

@section('content')
<section>
    <form action="{{ route('comments.store') }}" method="POST">
        @include('users._errors')
        {{ csrf_field() }}
        <textarea class="form-control" rows="3" placeholder="聊聊新鲜事儿..." name="content">{{ old('content') }}</textarea>
        <div class="text-end">
            <button type="submit" class="btn btn-primary mt-3">发布</button>
        </div>
    </form>
</section>

@stop