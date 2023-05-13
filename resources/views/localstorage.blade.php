<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Storage</title>


    <style>
        * {
            box-sizing: border-box;
        }

        .parent {
            width: 600px;
            margin: 40px auto;
            background-color: #eee;
            padding: 20px;
        }

        input {
            border: none;
            padding: 15px;
            margin-bottom: 15px;
            width: 100%;
            font-size: 20px;
        }

        input:focus {
            outline: none;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
        }

        .buttons span {
            background-color: #009688;
            text-align: center;
            color: #fff;
            padding: 6px 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        .results {
            background-color: #fff;
            padding: 20px;
            margin-top: 15px;
            border: 2px dashed #eee;
            text-align: center;
        }

        .results span span {
            font-weight: bold;
            color: #009688;
        }
    </style>
</head>

<body>


    <div class="parent">

        <input class="input" type="text" placeholder="Local storage item"></input>



        <div class="buttons">
            <span class="check">Check item</span>
            <span class="add">Add item</span>
            <span class="delete">Delete item</span>
            <span class="show">Show Items</span>
        </div>
        <div class="results">
            <span class="">result here</span>
        </div>
    </div>





    <script>
        let allspans = document.querySelectorAll('.buttons span');
        let results = document.querySelector('.results>span');
        let theinput = document.querySelector('.input');
        allspans.forEach(span => {
            span.addEventListener('click', (e) => {
                if (e.target.classList.contains('check')) {
                    cheeckItem();
                }
                if (e.target.classList.contains('add')) {
                    addItem();
                }
                if (e.target.classList.contains('delete')) {
                    deleteItem();
                }
                if (e.target.classList.contains('show')) {
                    showItem();
                }
            });

        });




        function checkinput() {
            results.innerHTML = 'input can\'t be empty';

        }

        function cheeckItem() {
            if (theinput.value !== '') {
                if (localStorage.getItem(theinput.value)) {
                    results.innerHTML = `founded local item called <span>${theinput.value}</span>`;

                } else {
                    results.innerHTML = ` No local storage item withe name  <span>${theinput.value}</span>`;

                }

            } else {
                checkinput();

            }
        }

        function addItem() {
            console.log('Add');
            if (theinput.value !== '') {
                localStorage.setItem(theinput.value, "test");
                results.innerHTML = `localStorage item <span>${theinput.value}</span> Add`;
                theinput.value = '';

            } else {
                checkinput();

            }

        }

        function deleteItem() {
            console.log('Delete');

            if (theinput.value !== '') {
                if (localStorage.getItem(theinput.value)) {
                    localStorage.removeItem(theinput.value);
                    results.innerHTML = `Deleted local item called <span>${theinput.value}</span>`;
                    theinput.value = '';

                } else {
                    results.innerHTML = ` No local storage item withe name  <span>${theinput.value}</span>`;

                }


            } else {
                checkinput();

            }
        }

        function showItem() {

            if (localStorage.length) {
                console.log('founde' + localStorage.length);
                results.innerHTML = '';
                for (let [key, value] of Object.entries(localStorage)) {
                    results.innerHTML += `${key}="${value}" <br>`;


                }


            } else {
                results.innerHTML = `  local storage is Empty.`;

            }




        }
    </script>

</body>

</html>
