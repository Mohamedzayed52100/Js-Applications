<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hide Placeholder On Input Focus</title>

   <style>
    * {
    box-sizing: border-box;
}

input {
    display: block;
    width: 750px;
    padding: 15px;
    margin: 20px auto;
}
   </style>


</head>

<body>

    <input id="input" type="text" placeholder="focus to hide the place holder"></input>






    <script  >
        var myinput = document.getElementById('input');
myinput.onfocus = function() {
    this.setAttribute('placeholder', '');
}
myinput.onblur = function() {
    this.setAttribute('placeholder', 'focus to hide the place holder');
}
    </script>
</body>

</html>
