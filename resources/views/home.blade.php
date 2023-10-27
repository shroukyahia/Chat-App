<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="" />
        <title>Document</title>
        <link rel="stylesheet" href="{{URL::asset('/index.css')}}" />
    </head>
    <body>
        <section class="msger">
        <ul class="notification-drop">
            <li class="item">
            <img src="./bell.svg" width="30" height="30" />
            <span class="btn__badge pulse-button">4</span>
            <ul>
                <li>First Item</li>
                <li>Second Item</li>
                <li>Third Item</li>
            </ul>
            </li>
        </ul>
        <header class="msger-header">
            <div class="msger-header-title">
            <i class="fas fa-comment-alt"></i> Live Chat
            </div>
            <div class="msger-header-options">
            <span><i class="fas fa-cog"></i></span>
            </div>
        </header>

        <main class="msger-chat" >
            @foreach (App\Models\User::all() as $user)
            <a href="{{route('chat.view',$user->id)}}" style=" text-decoration: none; padding:5px; margin:0px;">
                    <div class="msg left-msg " style="background-color: rgba(102, 177, 114, 0.425);margin-bottom:-15px; margin-top:-15px">
                        <div
                            class="msg-img"
                            style="
                            background-image: url(https://image.flaticon.com/icons/svg/327/327779.svg);
                            ">
                            @if ($user->image)
                            <img class="msg-img" src="{{ asset($user->image) }}">
                            @endif
                        </div>

                        <div class="msg-info" style="margin-bottom: 0%;margin-top: 1%;
                        padding:16px; width:100%; height: 50%;
                        height:90% ; ">

                            <div class="msg-info-name" style="font-size: 20px;color: rgb(88, 88, 88)">
                                {{$user->name}}
                            </div>
                        </div>
                    </div>
            </a>

            <div class="line" >
                {{-- <hr> --}}
            </div>

            @endforeach

            <div class="msg right-msg">
            <div
                class="msg-img"
                style="
                background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg);
                "
            ></div>

            </div>
        </main>

        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>
        $(document).ready(function () {
            $(".notification-drop .item").on("click", function () {
            $(this).find("ul").toggle();
            });
        });
        </script>
    </body>
    </html>
