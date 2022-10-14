<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />

    <style>
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

    <div class="card container enclosingContainer">
        <img src="{{ asset('img/IGZY_logo.png') }}" alt="description of myimage">
        <form action="{{url('/')}}/verifyotp" method="post" onSubmit="return validateForm()" class="primeContainer">
            <x-input id="otp" type="text" name="otp" label="enter OTP" />
            <input id="email" type="hidden" name="email" value="{{$email}}" />
            <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 20px">Submit OTP</button>
        </form>
    </div>

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
            $otp = document.getElementById('otp');
            if (!/^[0-9]+$/.test($otp.value) || !($otp.value.length == 4)) {
                toastr.warning("Enter valid OTP");
                return false;
            }
            return true;
        }
    </script>
</body>

</html>