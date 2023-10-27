<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Registration Form | CodingLab </title>
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      {{-- <form action="#"> --}}
        <form method="post" action="{{ route('register.store') }}" enctype="multipart/form-data">
            @csrf
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="phone" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" name="password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" value="male">
          <input type="radio" name="gender" id="dot-2" value="female">
          <span class="gender-title">Gender</span>
          <div class="category" >
                <label for="dot-1">
                <span class="dot one"></span>
                <span class="gender">Male</span>
            </label>
            <label for="dot-2" >
                <span class="dot two" ></span>
                <span class="gender" >Female</span>
            </label>
          </div>
        </div>

        <br>
        <div class="input-box">
            <span class="details">Profile Photo</span>
            <input type="file" name="image" id="add-photo-link">
        </div>


                  {{-- <a href="#" id="add-photo-link">
                    <img src="https://t4.ftcdn.net/jpg/02/37/77/07/240_F_237770767_LXQjk1HPqU9GWORHTzk517CdaosRcVtn.jpg" alt="Default Photo" id="user-photo">
                </a> --}}


        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>


<script>

document.getElementById('add-photo-link').addEventListener('click', function() {
  // Logic to handle the click event and trigger the photo upload functionality
});

</script>





















{{-- <!DOCTYPE html>
<html>
<head>
    <title>Chatting Website</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <div class="form-header">
                <h2>Chatting Website</h2>
            </div>
            <div class="form-tabs">
                <button class="tab-btn active" onclick="openTab(event, 'login')">Login</button>
                <button class="tab-btn" onclick="openTab(event, 'register')">Register</button>
            </div>
            <div id="login" class="tab-content">
                <form>
                    <input type="text" placeholder="Username" required>
                    <input type="password" placeholder="Password" required>
                    <button type="submit">Login</button>
                </form>
            </div>
            <div id="register" class="tab-content" style="display: none;">
                <form method="POST" action="{{route('register.store')}}" enctype="multipart/form-data">
                    @csrf
                    <input type="text" placeholder="name" name="name" required>
                    <input type="text" placeholder="Phone" name="phone" required>
                    <input type="file" placeholder="Profile Photo" name="image" >

                    <select name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>

                    <input type="email" placeholder="Email" name="email" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <button type="submit">Register</button>
                </form>
            </div>
        </div>
    </div> --}}

    {{-- <script src="script.js"></script> --}}

{{-- </body>
</html> --}}
{{-- <script>
    function openTab(event, tabName) {
        var i, tabContent, tabButtons;

        tabContent = document.getElementsByClassName("tab-content");
        for (i = 0; i < tabContent.length; i++) {
            tabContent[i].style.display = "none";
        }

        tabButtons = document.getElementsByClassName("tab-btn");
        for (i = 0; i < tabButtons.length; i++) {
            tabButtons[i].className = tabButtons[i].className.replace(" active", "");
        }

        document.getElementById(tabName).style.display = "block";
        event.currentTarget.className += " active";
    }
</script> --}}


