<div class="media">
    <a class="pull-left" href="#">
        <img src="//www.gravatar.com/avatar/{{ md5($message->user->email) }}?s=64" alt="{!! $message->user->first_name !!}" class="img-circle">
    </a>
    <div class="media-body">
        <h5 class="media-heading">{{ $message->user->first_name }} {{ $message->user->last_name }}</h5>
        <p>{{ $message->body }}</p>
        <div class="text-muted"><small>Posted {{ $message->created_at->diffForHumans() }}</small></div>
    </div>
</div>
