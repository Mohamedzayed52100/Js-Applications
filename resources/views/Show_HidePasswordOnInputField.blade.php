<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show _ Hide Password On Input Field</title>
    <style>
        input {
    display: block;
    width: 500px;
    margin: 50px;
    padding: 30px;
    ;
}

button {
    margin: 50px;
    display: block;
    padding: 10px 15px;
}
    </style>

</head>

<body>


    <form method="">

        <input id="password" type="password" placeholder="enter your password"></input>

    </form>
    <button id="button"> showm/hide password</button>



    <script >
        var myinput = document.getElementById('password'),
    mybutton = document.getElementById('button');



mybutton.onclick = function() {


    if (myinput.getAttribute('type') == 'password') {
        myinput.setAttribute('type', 'text');

    } else if (myinput.getAttribute('type') == 'text') {
        myinput.setAttribute('type', 'password');

    }
}
    </script>
</body>

</html>
