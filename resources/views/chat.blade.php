<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="" />
            <title>Chat</title>
            <link rel="stylesheet" href="{{URL::asset('/index.css')}}" />
            </head>

            <body>
                <section class="msger">
                <ul class="notification-drop">
                    {{-- @if ($receiver->image)
                    <img class="msg-img" style="text-align: left" src="{{ asset($receiver->image) }}">
                    @endif --}}


                    <li class="item">
                        <img src="{{asset('./bell.svg')}}" width="30" height="30" />
                        <span class="btn__badge pulse-button">4</span>
                        <ul>
                            <li>First Item</li>
                            <li>Second Item</li>
                            <li>Third Item</li>
                        </ul>
                    </li>
                    @if (auth()->user()->image)
                    <img class="msg-img" style="float:inline-start" src="{{ asset(auth()->user()->image) }}">
                    @endif
                    <a href="{{route('logout')}}"><li class="item" >Logout</li></a>


                </ul>
                <header class="msger-header">
                    <div class="msger-header-title">
                    <i class="fas fa-comment-alt"></i> Live Chat with {{$receiver->name}}
                    </div>

                    <div class="msger-header-options">
                    <span><i class="fas fa-cog"></i></span>
                    </div>
                </header>

                <main class="msger-chat" id="chat_area">

                {{-- Receiver --}}
                    {{-- <div class="msg left-msg">
                    <div
                        class="msg-img"
                        style="background-image: url(https://image.flaticon.com/icons/svg/327/327779.svg);"
                    >
                    @if ($receiver->image)
                    <img class="msg-img" src="{{ asset($receiver->image) }}">
                    @endif
                    </div>

                    <div class="msg-bubble" >
                        <div class="msg-info">
                        <div class="msg-info-name">{{$receiver->name}}</div>
                        <div class="msg-info-time">12:45</div>
                        </div>

                        <div class="msg-text"> Hi, welcome to SimpleChat! Go ahead and send me a message. 😄 </div>
                    </div>
                    </div> --}}

                    {{-- Sender --}}
                    {{-- <div class="msg right-msg" > --}}
                        {{-- <div  class="msg-img"
                            style="background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg);"
                            >
                            @if (Auth::check() && Auth::user()->image)
                                <img class="msg-img" src="{{ asset(Auth::user()->image) }}">
                            @endif
                        </div> --}}

                        {{-- <div class="msg-bubble" > --}}
                            {{-- <div class="msg-info">
                                <div class="msg-info-name">
                                    @if (Auth::check())
                                    <div class="msg-info-name">{{ Auth::user()->name }}</div>
                                    @endif
                                </div> --}}
                                {{-- <div class="msg-info-time">12:46</div></div> --}}
                                {{-- <div class="msg-text">You can change your name in JS section!</div> --}}
                            {{-- </div> --}}
                        {{-- </div> --}}



                    {{-- </div> --}}
                </main>

                {{-- <form class="msger-inputarea" action="{{ route('chat.send', [Auth::user()->id]) }}" method="POST"> --}}
                    <form class="msger-inputarea"  method="POST">

                    <input
                    type="text"
                    class="msger-input"
                    name="message"
                    id="message"
                    placeholder="Enter your message..."
                    />
                    <button type="submit" class="msger-send-btn" id="send" >Send</button>
                </form>

            </section>

            <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

            <script>
            $(document).ready(function () {
                    $(".notification-drop .item").on("click", function () {
                    $(this).find("ul").toggle();
                    });



















                    $('#send').click(function (event) {
                    event.preventDefault(); // Prevent the default form submission

                    $.post("/chat/{{ $receiver->id }}", {
                        message: $("#message").val(),
                    }, function (data, status) {
                        // console.log("Data: " + data + "\nStatus: " + status);



                        let senderMessage =

                        '<div class="msg right-msg" >'+
                            '<div  class="msg-img" style="background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg);">'+
                            '@if (Auth::check() && Auth::user()->image)'+
                                '<img class="msg-img" src="{{ asset(Auth::user()->image) }}">'+
                            '@endif'+
                        '</div>'+
                        '<div class="msg-bubble" >'+
                        ' <div class="msg-info">'+
                        '<div class="msg-text">' + $("#message").val() + '</div>';
                        '</div>'+
                        '</div>'+
                        '</div>';

                        $("#chat_area").append(senderMessage);
                        $("#message").val(''); // Clear the message input
                    });
                    });
                });

                Pusher.logToConsole = true;
                var pusher = new Pusher('9285868029440021afe0', {
                cluster: 'eu'
                });

                var channel = pusher.subscribe('chat-app-1' +{{auth()->user()->id}});
                channel.bind('chatMessage', function(data) {
                    // alert(data);


                let receiverMessage =
                '<div class="msg left-msg">'+
                    '<div class="msg-img" style="background-image: url(https://image.flaticon.com/icons/svg/327/327779.svg);">'+
                    '@if ($receiver->image)'+
                    '<img class="msg-img" src="{{ asset($receiver->image) }}">'+
                    '@endif'+
                    '</div>'+
                '<div class="msg-bubble" >'+
                    ' <div class="msg-info">'+
                        '<div class="msg-text">' + data['message'] + '</div>'+
                    '</div>' +
                    '</div>' +
                    '</div>';

                $("#chat_area").append(receiverMessage);
                });
            </script>

        </body>
    </html>
{{--
    Pusher :  : [
        "Event recd",
        {
        "event":"chatMessage",
        "channel":"chat-app-121",

        "data":
        {
            "receiver":
                {
                "id":21,
                "name":"Shrouk Yahia",
                "image":"http://localhost:8000/storage/users/sk0wYT7kNwi2HYZHAJv8xBizoTANmmur80HARslq.jpg",
                "status":"offline","gender":"female","phone":"+201115071223",
                "email":"shrouk.yahia.3@gmail.com",
                "email_verified_at":null,
                "created_at":"2023-10-23T10:35:09.000000Z",
                "updated_at":"2023-10-23T10:35:09.000000Z"
                },
            "message":"نعم"
        }
}] --}}
