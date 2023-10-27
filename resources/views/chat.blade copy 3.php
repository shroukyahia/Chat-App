<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="" />
        <title>Document</title>
        <link rel="stylesheet" href="index.css" />
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

        <main class="msger-chat">
            <div class="msg left-msg">
            <div
                class="msg-img"
                style="
                background-image: url(https://image.flaticon.com/icons/svg/327/327779.svg);
                "
            ></div>

            <div class="msg-bubble">
                <div class="msg-info">
                <div class="msg-info-name">BOT</div>
                <div class="msg-info-time">12:45</div>
                </div>

                <div class="msg-text">
                Hi, welcome to SimpleChat! Go ahead and send me a message. 😄
                </div>
            </div>
            </div>

            <div class="msg right-msg">
            <div
                class="msg-img"
                style="
                background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg);
                "
            ></div>

            <div class="msg-bubble">
                <div class="msg-info">
                <div class="msg-info-name">
                    {{-- @if (Auth::check())
                        <div class="msg-info-name">d{{ Auth::user()->id }}d</div>
                    @endif --}}
                </div>
                <div class="msg-info-time">12:46</div>
                </div>

                <div class="msg-text">You can change your name in JS section!</div>
            </div>
            </div>
        </main>

        <form class="msger-inputarea">
            <input
            type="text"
            class="msger-input"
            placeholder="Enter your message..."
            name="message"
            />
            <button type="submit" class="msger-send-btn">Send</button>
        </form>
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
