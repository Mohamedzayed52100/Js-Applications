<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Text Live On Input</title>
     <style>
        * {
    box-sizing: border-box;
    margin: 5px;
}

textarea {
    display: block;
    margin-top: 10px;
}
     </style>
</head>

<body>


    <form>
        <input type="text" id="title"></input>
        <textarea id="textarea"></textarea>
    </form>

    <div class="">
        <p id="p"></p>
        <h2 id="h"></h2>
    </div>







    <script  >
        var myinput = document.getElementById('title'),
    mytextarea = document.getElementById('textarea'),
    myp = document.getElementById('p'),
    myh = document.getElementById('h');


myinput.oninput = function() {
    myp.textContent = this.value * .10;

}
mytextarea.oninput = function() {
    myh.textContent = this.value * .10;
}
    </script>
</body>

</html>
