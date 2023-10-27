<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta nane="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath. bootstrapedn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use, fontawesome, com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="chat.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/chat-styles.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath, bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <title>chat</title>
</head>

<body>

    <div class="parent3">
        <div style="grid-area: head;">
            <img src="asset({{$user->image}}" style="float: right;">



            <?php
            echo $user->name;
            ?>
        </div>
        <div style="grid-area: users;">
            <?php
            foreach ($users as $user)
                echo $user->name . "<br>";
            ?>
        </div>
        <div style="grid-area: chat;">chat</div>
    </div>
</body>

</html>