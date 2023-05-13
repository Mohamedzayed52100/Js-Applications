<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="zayed.css"></link> --}}
    <style>


img {
    width: 400px;
    height: 400px;
    position: absolute;
}

div {
    position: relative;
}

    </style>
</head>

<body>
    <div>
        <img src="imgs/1.jpg" alt="">
        <img src="imgs/2.jpg" alt="">
        <img src="imgs/3.jpg" alt="">
        <img src="imgs/4.jpg" alt="">
        <img src="imgs/5.jpg" alt="">
        <img src="imgs/6.jpg" alt="">
        <img src="imgs/7.jpg" alt="">
        {{-- <img src="imgs/IMG-20220101-WA0056.jpg" alt="">
        <img src="imgs/IMG-20220101-WA0059.jpg" alt="">
        <img src="imgs/IMG-20220101-WA0065.jpg" alt="">
        <img src="imgs/IMG-20220101-WA0061.jpg" alt="">
        <img src="imgs/IMG-20220101-WA0063.jpg" alt=""> --}}

    </div>


    <script >


var el = document.getElementsByTagName('img');
var classlist = [];
for (var i = 0; i < el.length; i++) {
    classlist.push(el[i]);
}

var i = 0;
window.onload = function() {
    setInterval(function() {
        i++;
        var random = Math.floor(Math.random() * el.length);
        el[random].style.zIndex = i + 1;
    }, 2000)
}
    </script>
</body>

</html>
