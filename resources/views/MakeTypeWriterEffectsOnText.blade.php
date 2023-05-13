<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Type Writer Effects On Text</title>

    <style>
        button {
    display: block;
    margin: 50px auto;
    text-align: center;
}

p {
    font-size: 20px;

}
    </style>
</head>

<body>




    <p id="type"></p>
    <button id="button">Start type</button>



    <script >



var mytext = "mohamed ibrahim zayed software engineer and student at the University of benha faculty of computer science and artificial intelligence";
var i = 0;

var mybutton = document.getElementById('button');
myp = document.getElementById('type');
mybutton.onclick = function() {
    var x = setInterval(function() {
        myp.textContent += mytext[i++];

        if (i >= mytext.length)
            clearInterval(x);
    }, 500)


}
    </script>
</body>

</html>
