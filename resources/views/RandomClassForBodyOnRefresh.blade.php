<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Class For Body On Refresh</title>
 <style>
.one {
    color: red;
}

.two {
    color: green;
}

.three {
    color: purple;
}

.four {
    color: blue;
}

.five {
    color: #eee;
}
 </style>
</head>

<body>



    <h1 id="h">the random class for body on refresh</h1>
    <p id="p">this is paragraph</p>





    <script  >



var classlist = ['one', 'two', 'three', 'four', 'five'];
var randomnumber = Math.floor(Math.random() * classlist.length);
console.log(randomnumber);
document.body.classList.remove(...classlist);

document.body.classList.add(classlist[randomnumber]);
    </script>

</body>

</html>
