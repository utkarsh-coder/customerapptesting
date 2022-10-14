 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('css/design.css') }}">
  
    <!-- CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
 
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
        <p>Don't have an account? <a href="#" class="loginLink">Sign up</a></p>

    </div>
    <div class="col-12">

     <form action="{{url('/')}}/verify" method="post" onSubmit="return validateForm()" class="formLayout">
            <x-input id="email" type="text" name="email" label="Enter Email" />
            <x-input id="password" type="password" name="password" label="Enter Password" />
            <div class="forgotPassword d-flex justify-content-end">
        <button id="forgotPassword" class="forgotPassword-btn helpingBtn">Forgot Password ?</button>

            </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 20px">Login</button>
        </form>
 
    </div>

    <!-- <button id="loginBtn" class="btn btn-secondary helpingBtn">Login ?</button> -->
</div>
    </div>
</main>


 

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
    <script>
        function validateForm() {
            $e = document.getElementById('email');
            $pwd = document.getElementById('password');
            let phonenoRegex = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
            if ($e.value == '' || $pwd.value == '') {
                toastr.warning("Fill all fields");
                return false;
            }
            if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($e.value) && !phonenoRegex.test($e.value)) {
                toastr.error("Wrong email id/contact number");
                return false;
            }
            return true;
        }
    </script>
</body>

</html>