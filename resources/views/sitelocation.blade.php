<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        .enclosingContainer {
            width: 40rem;
            border: 2px solid black;
            border-radius: 20px;
        }

        .colstatus {
            display: inline-block;
            width: 11rem;
            height: 9rem;
            border-radius: 5px;
            text-align: center;
            margin-top: 20px;
        }

        .heading {
            margin-top: 30px;
            font-weight: bold;
        }

        .cardbck {
            background-color: #B7B3B3;
            border-radius: 10px;
        }

        .pstatus {
            padding-top: 20%;
        }

        .stronghealth {
            padding-top: 40%;
        }

        .num {
            font-size: 20px;
        }

        .siteblock {
            width: 100%;
            height: 200px;
            text-align: center;
            margin-top: 20px;
        }

        .verticalcard {
            display: inline-block;
            position: absolute;
            margin-left: 1%;
            width: 150px;
            height: 200px;
        }

        .horizontalcard {
            display: inline-block;
            width: 90%;
            height: 100px;
        }

        .verticalblock {
            display: inline-block;
            position: absolute;
            margin-left: 12%;
            width: 200px;
        }

        .subhorizontal {
            display: inline-block;
            position: absolute;
            margin-left: 10px;
            width: 100px;
            margin-top: 30px;
        }

        .subhorizontal2 {
            display: inline-block;
            position: absolute;
            margin-left: 50%;
            height: 50px;
            width: 50px;
            text-align: center;
            margin-top: 30px;
        }

        .icons {
            display: inline-block;
            width: 18%;
            height: 50px;
            margin-top: 20px;
        }

        .encircle {
            border: 2px solid black;
            border-radius: 50px;
        }
    </style>
</head>

<body>

    <div class="card container enclosingContainer">
        <h2 class="heading">Sites</h2>
        <div style="width: 100%; text-align: center;">
            <div class="colstatus cardbck">
                <p class="pstatus">Offline</p><strong id="siteoff" class="num">...</strong>
            </div>
            <div class="colstatus cardbck">
                <p class="pstatus">Armed</p><strong id="sitearmed" class="num">...</strong>
            </div>
            <div class="colstatus cardbck">
                <p class="pstatus">Disamrmed</p><strong id="sitedisarmed" class="num">...</strong>
            </div>
        </div>
        <h4 class="heading">Site Status</h4>
        <div id="siteblockcontainer">
            <!-- <div class="cardbck siteblock">
                <div style="display:inline-block; width: 60%;">
                    <h4>This is the site name</h4>
                    <p>This is the address of the site</p>
                </div>
                <strong>Arm/disarm status</strong>

                <div>
                    <div class="colstatus cardbck">
                        <strong id="networkoffline" class="num stronghealth">...</strong>
                        <p>Offline</p>
                    </div>
                    <div class="colstatus cardbck">
                        <strong id="networkup" class="num stronghealth">...</strong>
                        <p>Online</p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

    <script src="js/sitelocation.js"></script>
</body>

</html>