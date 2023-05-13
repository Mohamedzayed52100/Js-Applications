<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memory game</title>
    {{-- <link rel="stylesheet" href="zayed.css"></link> --}}
    <style>
        * {
            box-sizing: border-box;
        }

        .controlbutton {
            width: 100%;
            height: 100%;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 10;
            background-color: rgba(116, 97, 97, 0.851)
        }

        .controlbutton span {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #2196f3;
            padding: 15px;
            cursor: pointer;
            border-radius: 15px;
            font-size: 18px;
        }

        .infocontainer {
            width: 1080px;
            margin: 20px auto 0;
            background-color: #f6f6f6;
            padding: 20px;
            font-size: 24px;
            display: flex;
            justify-content: space-between;
            border: 2px solid #2196f3;
            align-items: center;
        }

        .memorygameblocks {
            display: flex;
            width: 1100px;
            flex-wrap: wrap;
            margin: 20px auto;
        }

        .memorygameblocks .gameblock {
            height: 200px;
            transition: all .6s;
            transform-style: preserve-3d;
            cursor: pointer;
            position: relative;
            flex: 1 0 200px;
            margin: 0 10px 20px;
        }

        .memorygameblocks .gameblock img {
            width: 190px;
            height: 190px;
        }

        .memorygameblocks .gameblock .front {
            background-color: #333;
            line-height: 200px;
        }

        .front::before {
            content: '!';
            color: #fff;
            font-size: 140px;
            font-weight: bold;
        }

        .memorygameblocks .gameblock .back {
            background-color: #607D8b;
            transform: rotateY(180deg);
        }

        .memorygameblocks .gameblock .face {
            position: absolute;
            width: 100%;
            height: 100%;
            text-align: center;
            backface-visibility: hidden;
            border: 2px solid #2196f3;
        }

        .is_flipped,
        .has_matched {
            transform: rotateY(180deg);
        }

        .noclicking {
            pointer-events: none;
        }
    </style>
</head>

<body>




    <div id="controlbutton" class="controlbutton">
        <span id="span">Start Game</span>
    </div>

    <div class="infocontainer">
        <div class="name">
            hello : <span></span>
        </div>
        <div class="tries">wrong : <span id="haha">0</span></div>
    </div>
    <div class="memorygameblocks">
        <div class="gameblock" data-technology="max1">
            <div class="face front"></div>
            <div class="face back">
                <img src="imgs/zayed1.jpg">
            </div>

        </div>
        <div class="gameblock" data-technology="max1">
            <div class="face front"></div>
            <div class="face back">
                <img src="imgs/zayed1.jpg">
            </div>

        </div>
        <div class="gameblock" data-technology="max2">
            <div class="face front"></div>
            <div class="face back">
                <img src="imgs/zayed2.jpg">
            </div>

        </div>
        <div class="gameblock" data-technology="max2">
            <div class="face front"></div>
            <div class="face back">
                <img src="imgs/zayed2.jpg">
            </div>

        </div>
        <div class="gameblock" data-technology="max3">
            <div class="face front"></div>
            <div class="face back">
                <img src="imgs/zayed3.jpg">
            </div>

        </div>
        <div class="gameblock" data-technology="max3">
            <div class="face front"></div>
            <div class="face back">
                <img src="imgs/zayed3.jpg">
            </div>

        </div>
        <div class="gameblock" data-technology="max4">
            <div class="face front"></div>
            <div class="face back">
                <img src="imgs/zayed4.jpg">
            </div>

        </div>
        <div class="gameblock" data-technology="max4">
            <div class="face front"></div>
            <div class="face back">
                <img src="imgs/zayed4.jpg">
            </div>

        </div>
        <div class="gameblock" data-technology="max5">
            <div class="face front"></div>
            <div class="face back">
                <img src="imgs/zayed5.jpg">
            </div>

        </div>
        <div class="gameblock" data-technology="max5">
            <div class="face front"></div>
            <div class="face back">
                <img src="imgs/zayed5.jpg">
            </div>

        </div>
        <div class="gameblock" data-technology="max6">
            <div class="face front"></div>
            <div class="face back">
                <img src="imgs/zayed6.jpg">
            </div>

        </div>
        <div class="gameblock" data-technology="max6">
            <div class="face front"></div>
            <div class="face back">
                <img src="imgs/zayed6.jpg">
            </div>

        </div>
        <div class="gameblock" data-technology="max7">
            <div class="face front"></div>
            <div class="face back">
                <img src="imgs/zayed7.jpg">
            </div>

        </div>
        <div class="gameblock" data-technology="max7">
            <div class="face front"></div>
            <div class="face back">
                <img src="imgs/zayed7.jpg">
            </div>

        </div>
        <div class="gameblock" data-technology="max8">
            <div class="face front"></div>
            <div class="face back">
                <img src="imgs/zayed8.jpg">
            </div>

        </div>
        <div class="gameblock" data-technology="max8">
            <div class="face front"></div>
            <div class="face back">
                <img src="imgs/zayed8.jpg">
            </div>

        </div>
        <div class="gameblock" data-technology="max9">
            <div class="face front"></div>
            <div class="face back">
                <img src="imgs/zayed9.jpg">
            </div>

        </div>
        <div class="gameblock" data-technology="max9">
            <div class="face front"></div>
            <div class="face back">
                <img src="imgs/zayed9.jpg">
            </div>

        </div>
        <div class="gameblock" data-technology="max10">
            <div class="face front"></div>
            <div class="face back">
                <img src="imgs/zayed10.jpg">
            </div>

        </div>
        <div class="gameblock" data-technology="max10">
            <div class="face front"></div>
            <div class="face back">
                <img src="imgs/zayed10.jpg">
            </div>

        </div>


    </div>






    <script>
        document.getElementById('span').onclick = function() {
            let name = prompt('Enter a name');
            name = name.trim();
            if (name == '') {
                document.querySelector('.name span').innerHTML = 'unknow';

            } else {
                document.querySelector('.name span').innerHTML = name;

            }

            document.getElementById('controlbutton').remove();
        }


        let duration = 1000;
        let blockscontainer = document.querySelector('.memorygameblocks');
        let blocks = Array.from(blockscontainer.children);
        console.log(blocks);

        let orderrange = [...Array(blocks.length).keys()];
        suffle(orderrange);

        blocks.forEach(function(block, index) {

            block.style.order = orderrange[index];


            block.addEventListener('click', function() {



                filpflop(block);

            });


        });
        //suffle function

        function suffle(array) {
            let current = array.length,
                temp,
                random;
            while (current > 0) {
                random = Math.floor(Math.random() * current);
                current--;

                temp = array[current];
                array[current] = array[random];
                array[random] = temp;


            }

            return array;

        }


        function filpflop(flop) {
            flop.classList.add('is_flipped');
            let allflipedblocks = blocks.filter(filppedblock => filppedblock.classList.contains('is_flipped'));

            if (allflipedblocks.length == 2) {
                stopclicking();
                checkmatchedblocks(allflipedblocks[0], allflipedblocks[1]);



            }

        }

        function stopclicking() {
            blockscontainer.classList.add('noclicking');
            setTimeout(function() {
                blockscontainer.classList.remove('noclicking');

            }, duration);


        }



        function checkmatchedblocks(one, two) {
            let triesElement = document.getElementById('haha');
            if (one.dataset.technology === two.dataset.technology) {
                one.classList.remove('is_flipped');
                two.classList.remove('is_flipped');
                one.classList.add('has_matched');
                two.classList.add('has_matched');

            } else {
                triesElement.innerHTML = parseInt(triesElement.innerHTML) + 1;
                setTimeout(function() {

                    one.classList.remove('is_flipped');
                    two.classList.remove('is_flipped');
                }, duration);

            }




        }
    </script>






</body>

</html>
