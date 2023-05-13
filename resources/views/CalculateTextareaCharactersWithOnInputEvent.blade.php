<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Textarea Characters With On-Input Event</title>

    <link rel="stylesheet" href="zayed.css">
    </link>
</head>

<body>

    <form>

        <textarea id="text" rows="8" cols="80" placeholder="enter text" maxlength="100"></textarea>

        <span id="count">100</span>
    </form>






    <script>
        var count = document.getElementById('count'),
            textarea = document.getElementById('text'),
            maxlength = textarea.getAttribute('maxlength');
        console.log(maxlength);


        textarea.oninput = function() {




            count.innerHTML = maxlength - this.value.length;

            if (count.innerHTML <= 10)
                count.style.color = 'red';
            else if (count.innerHTML >= 10)
                count.style.color = 'black';

        }
    </script>
</body>

</html>
