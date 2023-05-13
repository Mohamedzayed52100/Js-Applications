<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captlize</title>
   <style>
    * {
    box-sizing: border-box;
}

input {
    display: block;
    padding: 25px;
    margin: 20px auto;
    width: 750px;
    font-size: 20px;
}

button {
    display: block;
    padding: 15px 25px;
    margin: 20px auto;
    cursor: pointer;
}

h1 {
    text-align: center;
}
   </style>
</head>

<body>



    <input id="input" type="text" placeholder="enter your text"></input>
    <button id="button">capitalize</button>
    <h1 id="h"></h1>


    <script >

var myinput = document.getElementById('input'),
    mybtn = document.getElementById('button'),
    myh = document.getElementById('h');



function capitalize(string) {

    var oldarray = string.split(' '),
        newarray = [];


    for (var i = 0; i < oldarray.length; i++) {

        newarray.push(oldarray[i].charAt(0).toUpperCase() + oldarray[i].slice(1));

    }

    return newarray.join(' ');
}


console.log(capitalize('mohamed irahim zayed mido azab'));

mybtn.onclick = function() {
    myh.textContent = capitalize(myinput.value);
    myh.style.color = 'red';
}
    </script>
</body>

</html>
