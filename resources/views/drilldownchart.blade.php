<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.3.3/echarts.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body>
    <script>
        function backBtn() {
            let val = document.getElementById('typeval').value;
            level -= 1;
            console.log("level:  ", level);
            let parameters;
            if (level >= 2) {
                console.log('track array: ' + trackArray);
                parameters = {
                    type : val,
                    value: trackArray[level - 2],
                }
            } else {
                parameters = {
                    type : 'nvr'
                }
                document.getElementById('back_btn').style.visibility = 'hidden';
            }

            functionBar1(parameters);
        }
    </script>


    <button id="back_btn" onclick=backBtn()> &larr;</button>
    <div id="bar_zone" style="width: 500px; height: 450px;"></div>
    <input id="typeval" type="hidden" name='type' , value="{{$type}}" />

    <script src="js/bar1.js"></script>
    <script>
        document.getElementById('back_btn').style.visibility = 'hidden';
        console.log(document.getElementById('typeval').value);
        let val = document.getElementById('typeval').value;
        let parameters = {
            type: val,
        }
        functionBar1(parameters);
    </script>
</body>

</html>