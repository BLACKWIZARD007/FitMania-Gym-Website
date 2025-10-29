<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <style>
        
        .hero {
            margin: 0;
            padding: 0;
            width: 100vw;
            height: 100vh;
            background:url(home-bg-1.jpg);
            background-size: cover;
            position: absolute;
        }

        .form-box {
            color: white;
            position: relative;
            margin: 6% auto;
            background-color: rgb(109, 107, 107);
            width: 400px;
            height: 500px;
            border-radius: 25px;
            padding: 5px;
            overflow: hidden;
        }

        .button {
            width: 220px;
            position: relative;
            margin: 35px auto;
            
            border-radius: 30px;
        }

        .btn {

            color: white;
            cursor: pointer;
            position: relative;
            padding: 10px 30px;
            outline: none;
            background: transparent;
            border: 0;


        }

        #btn-group {
            top: 0;
            left: 0;
            position: absolute;
            width: 110px;
            height: 100%;
            background: linear-gradient(to right,#030303,#56f407);
            border-radius: 30px;
            transition: .5s;
        }

        .input-form {
           
            top: 180px;
            position: absolute;
            width: 280px;
            transition: .5s;


        }

        .input-field {
            color: white;
            width: 100%;
            padding: 10px 0;
            border-left: 0;
            border-right: 0;
            margin: 5px 0;
            border-top: 0;
            border-bottom: 1 px solid black;
            outline: none;
            background: transparent;
        }

        .submit-btn {
            color: white;
            width: 85%;
            padding: 10px 30px;
            margin: auto;
            margin-top: 10px;
            display: block;
            border-radius: 10px;
            background: linear-gradient(to right,#030303,#56f407);
            border: none;
        }

        #check-box {
            margin: 30px 10px 30px 0px;
        }

        span {
            font-size: 12px;
            position: absolute;
            bottom: 65px;
            color: white;
        }

        #login {
            left: 50px;
        }

        #register {
            left: 450px;
        }

        ::-webkit-input-placeholder{
            color: white;
        }
    </style>
</head>

<body>
   <div class="hero">
    
    
        <div class="form-box">
            <div class="button">
                <div id="btn-group"></div>
                <button type="button" class="btn" onclick="login()" >Log in</button>
                <button type="button" class="btn" onclick="register()" >Register</button>
            </div>
            <form  action="/loginregistration/validation.php" id="login"  class="input-form" method="post">

                <input type="text" class="input-field" name="user" placeholder="Username">
                <input type="password" class="input-field" name="password" placeholder="Password">
                <br>
                
                <br>
                <button class="submit-btn"> LOG IN</button>
            </form>

            <form  action="/loginregistration/registration.php"id="register" class="input-form" method="post">
                <input type="text" class="input-field" name="user"placeholder="Username">
                
                <input type="password" class="input-field" name="password"placeholder="Password">
                <br>

                
                <br>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
                <button class="submit-btn"> REGISTER</button>
            </form>
        </div>

    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn-group");

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }



    </script>
</body>

</html>