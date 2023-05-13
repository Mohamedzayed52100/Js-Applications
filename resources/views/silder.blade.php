<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>silder</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .silidercontainer {
            width: 800px;
            margin: 10px auto;
            height: 350px;
            position: relative;
        }

        .silidercontainer img {
            width: 800px;
            height: 350px;
            position: absolute;
            opacity: 0;
            transition: opacity 1s;
            z-index: 1;
        }

        .silidercontainer img.active {
            opacity: 1;
        }

        .silidercontainer .slidenumber {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: rgba(0, 0, 0, 0.6);
            color: #fff;
            padding: 5px 10px;
            font-size: 20px;
            z-index: 2;
            border-radius: 6px;
        }

        .sildercontrol {
            width: 800px;
            margin: auto;
            display: flex;
            justify-content: space-between;
        }

        .sildercontrol span {
            padding: 5px 10px;
        }

        .sildercontrol .prev,
        .next {
            background-color: #009688;
            color: #fff;
            font-size: 16px;
            text-align: center;
            user-select: none;
            cursor: pointer;
        }

        .sildercontrol .prev.disable,
        .sildercontrol .next.disable {
            background-color: rgba(0, 150, 136, .3);
            cursor: no-drop;
        }

        ul {
            list-style: none;
        }

        ul li {
            display: inline-block;
            color: #333;
            background-color: #f6f6f6;
            font-weight: bold;
            border-radius: 4px;
            margin: 0 4px;
            cursor: pointer;
            width: 20px;
            text-align: center;
        }

        ul li.active {
            background-color: #009688;
        }
    </style>
</head>

<body>


    <div class="silidercontainer">
        <div class="slidenumber" id="slidenumber">slide number #6</div>
        <img src="imgs/IMG-20220217-WA0029.jpg" alt="">
        <img src="imgs/IMG-20220217-WA0031.jpg" alt="">
        <img src="imgs/IMG-20220217-WA0033.jpg" alt="">
        <img src="imgs/IMG-20220217-WA0034.jpg" alt="">
        <img src="imgs/IMG-20220218-WA0001.jpg" alt="">
        <img src="imgs/IMG-20220218-WA0020.jpg" alt="">

    </div>
    <div class="sildercontrol">
        <span class="prev" id="prev">previous</span>
        <span class="indictors" id="indictors">



        </span>
        <span class="next" id="next">next</span>
    </div>



    <script>
        var sliderimages = Array.from(document.querySelectorAll('.silidercontainer img'));
        console.table(sliderimages);
        var sidescount = sliderimages.length;


        var currentslide = 1;
        var slidenumberelement = document.getElementById('slidenumber');

        var nextbutton = document.getElementById('next');
        var prevbutton = document.getElementById('prev');

        var pageinationelment = document.createElement('ul');
        pageinationelment.setAttribute('id', 'pageinationul');

        for (var i = 1; i <= sidescount; i++) {
            var pageinationitem = document.createElement('li');
            pageinationitem.setAttribute('dataindex', i);
            pageinationitem.appendChild(document.createTextNode(i));
            pageinationelment.appendChild(pageinationitem);

        }
        document.getElementById('indictors').appendChild(pageinationelment);





        var pageinationnewUl = document.getElementById('pageinationul');
        var pageinationbullets = Array.from(document.querySelectorAll('#pageinationul li'));






        function checker() {
            slidenumberelement.textContent = 'slide# ' + currentslide + 'of ' + sidescount;
            removeAllActive();
            sliderimages[currentslide - 1].classList.add('active');
            pageinationnewUl.children[currentslide - 1].classList.add('active');
            if (currentslide == 1) {
                prevbutton.classList.add('disable');

            } else {
                prevbutton.classList.remove('disable');

            }
            if (currentslide == sidescount) {
                nextbutton.classList.add('disable');

            } else {
                nextbutton.classList.remove('disable');

            }


        }





        function removeAllActive() {
            sliderimages.forEach(function(img) {
                img.classList.remove('active');

            });
            pageinationbullets.forEach(function(bullet) {
                bullet.classList.remove('active');
            })

        }


        checker();



        function nextslide() {
            if (nextbutton.classList.contains('disable')) {
                return false;

            } else {
                currentslide++;
                checker();

            }




        }

        function prevslide() {
            if (prevbutton.classList.contains('disable')) {
                return false;

            } else {
                currentslide--;
                checker();
            }

        }



        nextbutton.onclick = nextslide;
        prevbutton.onclick = prevslide;
    </script>
</body>

</html>
