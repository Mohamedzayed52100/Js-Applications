<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check If Url Hash Contains String</title>

</head>

<body>




    <script >
        if (window.location.hash) {

    if (window.location.hash.indexOf('mohamed') == 1)
        console.log('good founded');


} else {
    console.log('bad not founded');

}
    </script>
</body>

</html>
