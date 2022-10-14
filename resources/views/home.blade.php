<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="{{ asset('css/design.css') }}" />

        <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"
        ></script>

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
            integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />

        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css"
            rel="stylesheet"
        />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>
    </head>

    <body>
        <script>
            function pieHealth() {
                window.location.href = "http://127.0.0.1:8000/healthchart";
            }

            function siteLocation() {
                window.location.href = "http://127.0.0.1:8000/sitelocation";
            }
            var socket = io.connect("http://uat.gizmosmart.io:9001/");
            socket.on("message", (msg) => {
                toastr.warning(msg, 100);
                // alert('event triggered!');
                console.log(msg);
                // console.log('git'); // x8WIv7-mJelg7on_ALbx
            });
        </script>

        <main>
            <div class="pt-3 pb-4 bg-primary">
                <div class="container pb-2">
                    <div class="row">
                        <div class="col">
                            <h2 class="text-white">Current Status</h2>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="text-white">Site Health</h4>
                        </div>
                    </div>
                    <div class="grid-row grid-row-col-3 grid-row-80">
                        <div class="card">
                            <div class="card-body site-status">
                                <div
                                    class="d-flex flex-column justify-content-between h-100"
                                >
                                    <p class="subHeading">Off-Devices</p>
                                    <span id="siteoff" class="num">...</span>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body site-status">
                                <div
                                    class="d-flex flex-column justify-content-between h-100"
                                >
                                    <p class="subHeading">Armed</p>
                                    <span id="sitearmed" class="num">...</span>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body site-status">
                                <div
                                    class="d-flex flex-column justify-content-between h-100"
                                >
                                    <p class="subHeading">Disamrmed</p>
                                    <span id="sitedisarmed" class="num"
                                        >...</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container my-3">
                <div class="row">
                    <div class="col-12">
                        <h4>Network Health</h4>
                    </div>
                    <div class="grid-row grid-row-col-3 grid-row-80">
                        <div class="card">
                            <div class="card-body site-status">
                                <div
                                    class="d-flex flex-column justify-content-between h-100"
                                >
                                    <p class="subHeading">Effected</p>
                                    <span id="networkeffected" class="num"
                                        >...</span
                                    >
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body site-status">
                                <div
                                    class="d-flex flex-column justify-content-between h-100"
                                >
                                    <p class="subHeading">Offline</p>
                                    <span id="networkoffline" class="num"
                                        >...</span
                                    >
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body site-status">
                                <div
                                    class="d-flex flex-column justify-content-between h-100"
                                >
                                    <p class="subHeading">Up</p>
                                    <span id="networkup" class="num">...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container my-3">
                <div class="row">
                    <div class="col-12">
                        <h4>Health Status</h4>
                    </div>
                    <div class="grid-row grid-row-col-2 grid-row-200">
                        <div class="grid-row grid-row-col-1">
                            <div class="card graphBg">
                                <div class="card-body site-status">
                                    <div
                                        class="d-flex flex-column justify-content-between h-100"
                                    >
                                        <div
                                            class="d-flex justify-content-between align-items-center healthStatus"
                                        >
                                            <div class="healthStatus-content">
                                                <h3 id="nvrtotal">
                                                    ...
                                                </h3>
                                                <span class="subHeading"
                                                    >NVR</span
                                                >
                                            </div>
                                            <div
                                                class="healthStatus-value text-center"
                                            >
                                                <span id="nvroff">1 </span> <span>Off</span>
                                            </div>
                                        </div>

                                        <div
                                            class="d-flex justify-content-between align-items-center healthStatus"
                                        >
                                            <div class="healthStatus-content">
                                                <h3 id="compliance">
                                                    ...
                                                </h3>

                                                <span class="subHeading"
                                                    >Compliance</span
                                                >
                                            </div>
                                            <div
                                                class="healthStatus-value text-center"
                                            >
                                                <span id="noncompliance">... </span> <span>Off</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-row grid-row-col-1">
                            <div class="card cardBgWave">
                                <div class="card-body site-status d-flex">
                                    <div
                                        class="d-flex justify-content-between w-100 align-items-center healthStatus"
                                    >
                                        <div class="healthStatus-content">
                                            <h3 id="alarmpaneltotal">...</h3>
                                            <p class="subHeading">
                                                Alarm Panel
                                            </p>
                                        </div>
                                        <div
                                            class="healthStatus-value text-center"
                                        >
                                            <span id="alarmpaneloff">... </span>
                                            <span>Off</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card cardBgWave">
                                <div class="card-body site-status d-flex">
                                    <div
                                        class="d-flex justify-content-between w-100 align-items-center healthStatus"
                                    >
                                        <div class="healthStatus-content">
                                            <h3 id="cameratotal">...</h3>
                                            <span class="subHeading"
                                                >Camera</span
                                            >
                                        </div>
                                        <div
                                            class="healthStatus-value text-center"
                                        >
                                            <span id="cameraoff">... </span>
                                            <span>Off</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container my-3">
                <div class="row">
                    <div class="col-12">
                        <h4>Site Status</h4>
                    </div>
                    <div class="col-12">
                        <div class="card siteHealthCard">
                            <div class="card-body">
                                <div
                                    class="cardTitle d-flex justify-content-between align-items-start"
                                >
                                    <div class="cardTitle-content">
                                        <h3>ASTU - 09093</h3>
                                        <span
                                            >DLF Golf Course roar, Gurgaon,
                                            Haryana, 122 OM</span
                                        >
                                    </div>
                                    <div class="cardTitle-icon">
                                        <img
                                            src="{{
                                                asset('img/powerButton.svg')
                                            }}"
                                            alt=""
                                        />
                                    </div>
                                </div>
                            </div>

                            <div
                                class="grid-row grid-row-col-3 siteHealthCard-content"
                            >
                                <div
                                    class="d-flex flex-column align-items-center siteHealthCard-content-details"
                                >
                                    <img
                                        src="{{
                                            asset('img/camera-switch.svg')
                                        }}"
                                        alt=""
                                    />
                                    <h6>Hello</h6>
                                    <span>Error</span>
                                </div>
                                <div
                                    class="d-flex flex-column align-items-center siteHealthCard-content-details"
                                >
                                    <img
                                        src="{{
                                            asset('img/network-switch.svg')
                                        }}"
                                        alt=""
                                    />
                                    <h6>Hello</h6>
                                    <span>Error</span>
                                </div>
                                <div
                                    class="d-flex flex-column align-items-center siteHealthCard-content-details"
                                >
                                    <img
                                        src="{{
                                            asset('img/video-switch.svg')
                                        }}"
                                        alt=""
                                    />
                                    <h6>Hello</h6>
                                    <span>Error</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- 
        <div class="card container enclosingContainer">
            <h2 class="heading">Current Status</h2>
            <h4 class="heading">Site Health</h4>
            <div style="width: 100%; text-align: center">
                <div class="colstatus cardbck">
                    <p class="pstatus">Off-Devices</p>
                    <strong id="siteoff" class="num">...</strong>
                </div>
                <div class="colstatus cardbck">
                    <p class="pstatus">Armed</p>
                    <strong id="sitearmed" class="num">...</strong>
                </div>
                <div class="colstatus cardbck">
                    <p class="pstatus">Disamrmed</p>
                    <strong id="sitedisarmed" class="num">...</strong>
                </div>
            </div>

            <h4 class="heading">Network Health</h4>
            <div class="cardbck networkblock">
                <div class="colstatus cardbck">
                    <strong id="networkeffected" class="num stronghealth"
                        >...</strong
                    >
                    <p>Effected</p>
                </div>
                <div class="colstatus cardbck">
                    <strong id="networkoffline" class="num stronghealth"
                        >...</strong
                    >
                    <p>Offline</p>
                </div>
                <div class="colstatus cardbck">
                    <strong id="networkup" class="num stronghealth">...</strong>
                    <p>Up</p>
                </div>
            </div>

            <h4 class="heading">Health Status</h4>
            <div style="height: 200px">
                <div class="cardbck verticalcard">
                    <div>
                        <div class="subhorizontal">
                            <strong id="nvrtotal" class="num stronghealth"
                                >...</strong
                            >
                            <p>NVR</p>
                        </div>
                        <div class="subhorizontal2 encircle">
                            <strong id="nvroff">...</strong>
                            <p>Off</p>
                        </div>
                    </div>

                    <div style="margin: 100px 0px 0px 20px">
                        <div class="subhorizontal">
                            <strong id="footagetotal" class="num stronghealth"
                                >N/A</strong
                            >
                            <p>Footage</p>
                        </div>
                        <div class="subhorizontal2 encircle">
                            <strong id="footageoff">N/A</strong>
                            <p>Off</p>
                        </div>
                    </div>
                </div>
                <div class="verticalblock">
                    <div class="cardbck horizontalcard">
                        <div>
                            <div class="subhorizontal">
                                <strong id="alarmpaneltotal">...</strong>
                                <p>Alarm Panel</p>
                            </div>
                            <div class="subhorizontal2 encircle">
                                <strong id="alarmpaneloff">...</strong>
                                <p>Off</p>
                            </div>
                        </div>
                    </div>
                    <div class="cardbck horizontalcard">
                        <div class="subhorizontal">
                            <strong id="cameratotal">...</strong>
                            <p>Camera</p>
                        </div>
                        <div class="subhorizontal2 encircle">
                            <strong id="cameraoff">...</strong>
                            <p>Off</p>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin-top: 30px; text-align: center">
                <div class="icons">
                    <i class="fa-solid fa-house-user"></i>
                </div>

                <div class="icons">
                    <i onclick="siteLocation()" class="fa-solid fa-map-pin"></i>
                </div>

                <div class="icons">
                    <i onclick="pieHealth()" class="fas fa-camera"></i>
                </div>

                <div class="icons">
                    <i class="fa-solid fa-exclamation"></i>
                </div>
                <div class="icons">
                    <i class="fa-solid fa-gear"></i>
                </div>
            </div>
        </div> -->

        <script src="js/home.js"></script>
    </body>
</html>
