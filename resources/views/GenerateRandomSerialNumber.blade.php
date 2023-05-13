<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Redirect Function with Parameter</title>

    {{-- <link rel="stylesheet" href="zayed.css"></link> --}}
    <style>
        * {
    box-sizing: border-box;
}

button {
    padding: 10px 15px;
    margin: 20px;
}

div {
    margin-left: 30px
}
    </style>
</head>

<body>




    <button id="button">generate</button>
    <div id="div"></div>



    <script >
        var mybutton = document.getElementById('button'),
    mydiv = document.getElementById('div');


var x = 0;

mybutton.onclick = function() {
    var chars = '123456789QWERTYUIOPLKJHGFDSAZXCVBNMqwertyuiopasdfghjklkzxcvbnm';
    var serialLength = 15,
        randomserial = '',
        i;
    for (i = 0; i < serialLength; i++) {
        var randomnumber = Math.floor(Math.random() * chars.length)
        randomserial += chars[randomnumber];

    }
    x++;
    mydiv.textContent = 'code number ' + x + ' is ' + randomserial;
}
    </script>
</body>

</html>
