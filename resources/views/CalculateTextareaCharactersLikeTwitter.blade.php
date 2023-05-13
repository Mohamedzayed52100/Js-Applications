<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Textarea Characters Like Twitter</title>
    <style>

    </style>
</head>

<body>

    <form>
        <textarea name="" id="textarea" rows="5" cols="80" placeholder=""></textarea> left letter : <span id="span">50</span>
    </form>



    <script>
        var mytextarea = document.getElementById('textarea'),
            myspan = document.getElementById('span');
        mytextarea.oninput = function() {

            myspan.textContent = 50 - this.value.length;
            if (myspan.textContent <= 10)
                myspan.style.color = 'red';
            else

                myspan.style.color = 'black';




        }
    </script>
</body>

</html>
