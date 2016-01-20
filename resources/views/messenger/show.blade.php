@extends('app')

@section('content')
<div class="container">
    <div class="col-md-6">
        <h1>{!! $thread->subject !!}</h1>

        <div id="thread_{{$thread->id}}">
            @foreach($thread->messages()->latest()->get() as $message)
                @include('messenger.html-message', $message)
            @endforeach
        </div>

        <h2>Add a new message</h2>
        {!! Form::open(['route' => ['messages.update', $thread->id], 'method' => 'PUT']) !!}
        <!-- Message Form Input -->
        <div class="form-group">
            {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
        </div>

        @if($users->count() > 0)
        <div class="checkbox">
            @foreach($users as $user)
                <label title="{{ $user->first_name }} {{ $user->last_name }}"><input type="checkbox" name="recipients[]" value="{{ $user->id }}">{{ $user->first_name }}</label>
            @endforeach
        </div>
        @endif

        <!-- Submit Form Input -->
        <div class="form-group">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</div>
@stop
