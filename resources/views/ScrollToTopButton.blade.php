<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scroll To Top Button</title>

    <style>
        * {
    box-sizing: border-box;
}

body {
    height: 5000px;
    scroll-behavior: smooth;
}

button {
    position: fixed;
    right: 20px;
    bottom: 20px;
    display: none;
}
    </style>
</head>

<body>


    <button id="button">up to</button>




    <script >


var mybutton = document.getElementById("button");
mybutton.onclick = function() {
    window.scrollTo(0, 0);
}


window.onscroll = function() {

    if (window.pageYOffset > 1000) {
        mybutton.style.display = 'block';

        mybutton.onclick = function() {
            window.scrollTo(0, 0);

        }

    }





}
    </script>
</body>

</html>
