@extends('app')

@section('content')
    <div class="container">
        @if (Session::has('error_message'))
            <div class="alert alert-danger" role="alert">
                {!! Session::get('error_message') !!}
            </div>
        @endif
        @if($threads->count() > 0)
            @foreach($threads as $thread)
            <?php $class = $thread->isUnread($currentUserId) ? 'alert-info' : ''; ?>
            <div id="thread_list_{{$thread->id}}" class="media alert {!!$class!!}">
                <h4 class="media-heading">{!! link_to('messages/' . $thread->id, $thread->subject) !!}</h4>
                <p id="thread_list_{{$thread->id}}_text">{!! $thread->latestMessage->body !!}</p>
                <p><small><strong>Participants:</strong> {!! $thread->participantsString(Auth::id(), ['first_name']) !!}</small></p>
            </div>
            @endforeach
        @else
            <p>Sorry, no threads.</p>
        @endif
    </div>
@stop
