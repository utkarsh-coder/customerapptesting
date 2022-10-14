<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
    <!-- CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('css/design.css') }}">
    <style>
        .helpingBtn {
            width: 55%;
            margin-top: 20px;
        }

        .sideContainer {
            width: 100%;
            text-align: center;
        }

        .enclosingContainer {
            width: 40rem;
            height: 100vh;
            border: 2px solid black;
            border-radius: 20px;
        }

        .primeContainer {
            margin-top: 40px;
        }
       
    </style>

</head>

<body>
  
<main class="bg-white">
    <div class="container">
        <div class="row py-5">
            <div class="col ">
                <img src="{{ asset('img/IGZY_logo.png') }}" alt="description of myimage" class="logoCenter">

            </div>
        </div>
<div class="row">
    <div class="col-12 authHeading">
        <h3>Join IGZY</h3>
        <p>If already have account? <a href="#" class="loginLink">Log in</a></p>

    </div>
    <div class="col-12">
        <form action="{{url('/')}}/customer" method="post" onSubmit="return validateForm()" class="formLayout">
            <x-input id="email" type="text" name="email" label="Enter Email" />
            <x-input id="password" type="password" name="password" label="Enter Password" />
            <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 20px">Register</button>
        </form>
    </div>

    <div class="col-12">
        <button id="loginBtn" class="btn btn-secondary helpingBtn">Login ?</button>
        <button id="forgotPassword" class="btn btn-secondary helpingBtn">Forgot Password ?</button>
    </div>
</div>
    </div>
</main>
    <!-- <div class="card container enclosingContainer">
         
        <div class="sideContainer">
            <button id="loginBtn" class="btn btn-secondary helpingBtn">Login ?</button>
            <button id="forgotPassword" class="btn btn-secondary helpingBtn">Forgot Password ?</button>
        </div>
    </div> -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>

    <script type="text/javascript">
        document.getElementById("loginBtn").onclick = function() {
            window.location.href = "register";
        };

        document.getElementById("forgotPassword").onclick = function() {
            window.location.href = "forgotmail";
        };

        function validateForm() {
            $e = document.getElementById('email');
            $pwd = document.getElementById('password');
            let phonenoRegex = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
            if ($e.value == '' || $pwd.value == '') {
                toastr.warning("Fill all fields");
                return false;
            } else if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($e.value) && !phonenoRegex.test($e.value)) {
                toastr.error("Wrong email id/contact number");
                return false;
            }
            return true;
        }

        console.log("printing.....");
    </script>
    <script type="text/javascript" src="/js/home.js"></script>

</body>

</html>