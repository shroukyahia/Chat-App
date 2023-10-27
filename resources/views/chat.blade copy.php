<!DOCTYPE html>

<head>
    <title>Pusher Test</title>
    <link rel="stylesheet" href="chat.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.6.8-fix/jquery.nicescroll.min.js"></script>
    {{-- <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('e9527e3f6391f6865098', {
      cluster: 'eu'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));
    });
  </script> --}}
</head>

<body>

    <div class="container">
        <div class="content container-fluid bootstrap snippets bootdey">
            <div class="row row-broken">
                <div class="col-sm-3 col-xs-12">
                    <div class="col-inside-lg decor-default chat" style="overflow: hidden; outline: none;" tabindex="5000">
                        <div class="chat-users">
                            <h6>Online</h6>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="User name">
                                    <div class="status off"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="User name">
                                    <div class="status online"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="User name">
                                    <div class="status busy"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="User name">
                                    <div class="status offline"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="User name">
                                    <div class="status off"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="User name">
                                    <div class="status online"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="User name">
                                    <div class="status busy"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="User name">
                                    <div class="status offline"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="User name">
                                    <div class="status off"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="User name">
                                    <div class="status online"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="User name">
                                    <div class="status busy"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="User name">
                                    <div class="status offline"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="User name">
                                    <div class="status off"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="User name">
                                    <div class="status off"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="User name">
                                    <div class="status online"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="User name">
                                    <div class="status busy"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="User name">
                                    <div class="status offline"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="User name">
                                    <div class="status off"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="User name">
                                    <div class="status online"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="User name">
                                    <div class="status busy"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="User name">
                                    <div class="status offline"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="User name">
                                    <div class="status off"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="User name">
                                    <div class="status online"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="User name">
                                    <div class="status busy"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="User name">
                                    <div class="status offline"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="User name">
                                    <div class="status off"></div>
                                </div>
                                <div class="name">User name</div>
                                <div class="mood">User mood</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 col-xs-12 chat" style="overflow: hidden; outline: none;" tabindex="5001">
                    <div class="col-inside-lg decor-default">
                        <div class="chat-body">
                            <h6>Mini Chat</h6>
                            <div class="answer left">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="User name">
                                    <div class="status offline"></div>
                                </div>
                                <div class="name">Alexander Herthic</div>
                                <div class="text">
                                    Lorem ipsum dolor amet, consectetur adipisicing elit Lorem ipsum dolor amet, consectetur adipisicing elit Lorem ipsum dolor amet, consectetur adiping elit
                                </div>
                                <div class="time">5 min ago</div>
                            </div>
                            <div class="answer right">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="User name">
                                    <div class="status offline"></div>
                                </div>
                                <div class="name">Alexander Herthic</div>
                                <div class="text">
                                    Lorem ipsum dolor amet, consectetur adipisicing elit Lorem ipsum dolor amet, consectetur adipisicing elit Lorem ipsum dolor amet, consectetur adiping elit
                                </div>
                                <div class="time">5 min ago</div>
                            </div>
                            <div class="answer left">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="User name">
                                    <div class="status online"></div>
                                </div>
                                <div class="name">Alexander Herthic</div>
                                <div class="text">
                                    ...
                                </div>
                                <div class="time">5 min ago</div>
                            </div>
                            <div class="answer right">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="User name">
                                    <div class="status busy"></div>
                                </div>
                                <div class="name">Alexander Herthic</div>
                                <div class="text">
                                    It is a long established fact that a reader will be. Thanks Mate!
                                </div>
                                <div class="time">5 min ago</div>
                            </div>
                            <div class="answer right">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="User name">
                                    <div class="status off"></div>
                                </div>
                                <div class="name">Alexander Herthic</div>
                                <div class="text">
                                    It is a long established fact that a reader will be. Thanks Mate!
                                </div>
                                <div class="time">5 min ago</div>
                            </div>
                            <div class="answer left">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="User name">
                                    <div class="status offline"></div>
                                </div>
                                <div class="name">Alexander Herthic</div>
                                <div class="text">
                                    Lorem ipsum dolor amet, consectetur adipisicing elit Lorem ipsum dolor amet, consectetur adipisicing elit Lorem ipsum dolor amet, consectetur adiping elit
                                </div>
                                <div class="time">5 min ago</div>
                            </div>
                            <div class="answer right">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="User name">
                                    <div class="status offline"></div>
                                </div>
                                <div class="name">Alexander Herthic</div>
                                <div class="text">
                                    Lorem ipsum dolor amet, consectetur adipisicing elit Lorem ipsum dolor amet, consectetur adipisicing elit Lorem ipsum dolor amet, consectetur adiping elit
                                </div>
                                <div class="time">5 min ago</div>
                            </div>
                            <div class="answer left">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="User name">
                                    <div class="status online"></div>
                                </div>
                                <div class="name">Alexander Herthic</div>
                                <div class="text">
                                    ...
                                </div>
                                <div class="time">5 min ago</div>
                            </div>
                            <div class="answer right">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="User name">
                                    <div class="status busy"></div>
                                </div>
                                <div class="name">Alexander Herthic</div>
                                <div class="text">
                                    It is a long established fact that a reader will be. Thanks Mate!
                                </div>
                                <div class="time">5 min ago</div>
                            </div>
                            <div class="answer right">
                                <div class="avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="User name">
                                    <div class="status off"></div>
                                </div>
                                <div class="name">Alexander Herthic</div>
                                <div class="text">
                                    It is a long established fact that a reader will be. Thanks Mate!
                                </div>
                                <div class="time">5 min ago</div>
                            </div>
                            <div class="answer-add">
                                <input placeholder="Write a message">
                                <span class="answer-btn answer-btn-1"></span>
                                <span class="answer-btn answer-btn-2"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



















    {{--
  <h1>Pusher Test</h1>
  <p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
  </p> --}}
    @php
    // use Illuminate\Support\Facades\Auth;
    // $user = Auth::user()->id;
    @endphp

</body>
{{-- <script>
    $(function(){
    $(".chat").niceScroll();
})
</script>
<script>
    // Assuming you have the user ID and API token available in JavaScript variables

    var userId = {{ $user->id }};
var apiToken = "{{ $user->api_token }}";

// Join the 'chat' channel
Echo.join('chat')
.joining((user) => {
// Make a request to update the user's online status
// axios.put(`/api/user/${userId}/online?api_token=${apiToken}`, {});
axios.put({{ route('chat.view') }} , {});

});
});
</script> --}}
