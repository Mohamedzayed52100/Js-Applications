<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disable Right Click On page</title>

    <link rel="stylesheet" href="zayed.css"></link>
</head>

<body>



    <script >
        // window.oncontextmenu = function(e) {
//     e.preventDefault();
// }


document.addEventListener('contextmenu', function(e) {
    e.preventDefault();
}, false);
    </script>
</body>

</html>
