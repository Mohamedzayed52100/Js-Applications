<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>js code 1</title>
    <style>

* {
    box-sizing: border-box;
}

.container {
    margin: 20px auto;
    width: 1200px;
}

.container .colorswitcher {
    list-style-type: none;
    margin-bottom: 20px;
    text-align: center;
}

.container .colorswitcher li {
    width: 20px;
    height: 20px;
    cursor: pointer;
    display: inline-block;
    margin-left: 20px;
}

.container .colorswitcher li:first-child {
    background-color: #c0392b;
}

.container .colorswitcher li:nth-child(2) {
    background-color: #16a085;
}

.container .colorswitcher li:nth-child(3) {
    background-color: #8e44ad;
}

.container .colorswitcher li:nth-child(4) {
    background-color: #2c3e50;
}

.container h3 {
    color: #c0392b;
}

.container div {
    background-color: #c0392b;
    padding: 20px;
    color: #fff;
}

.red .container h3 {
    color: #c0392b;
}

.red .container div {
    background-color: #c0392b;
    padding: 20px;
    color: #fff;
}

.green .container h3 {
    color: #16a085;
}

.green .container div {
    background-color: #16a085;
    padding: 20px;
    color: #fff;
}

.purple .container h3 {
    color: #8e44ad;
}

.purple .container div {
    background-color: #8e44ad;
    padding: 20px;
    color: #fff;
}

.black .container h3 {
    color: #2c3e50;
}

.black .container div {
    background-color: #2c3e50;
    padding: 20px;
    color: #fff;
}
    </style>

</head>

<body>



    <div class="container">

        <ul class="colorswitcher">
            <li datacolor="red"></li>
            <li datacolor="green"></li>
            <li datacolor="purple"></li>
            <li datacolor="black"></li>
        </ul>
        <h3>heading</h3>
        <div>testing</div>
    </div>




    <script>

var el = document.querySelectorAll('ul li');
var classlist = [];

document.body.classList.add(localStorage.getItem('pageColor') || 'red');

for (var i = 0; i < el.length; i++) {
    classlist.push(el[i].getAttribute('datacolor'));
    el[i].addEventListener("click", function() {
        document.body.classList.remove(...classlist);
        document.body.classList.add(this.getAttribute('datacolor'));
        localStorage.setItem('pageColor', this.getAttribute('datacolor'));



    }, false);

}

console.log(classlist);

    </script>
</body>

</html>
