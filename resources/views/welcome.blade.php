<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: rgb(179, 14, 115);
        }

        .hidden-input {
            opacity: 0;
            position: absolute;
            left: -9999px;
        }
        .title {
            color: #fff;
            font-family: fantasy;
            font-size: 15vh;
        }
        .snack {
            text-align: center;
        }
        .snack img {
            height: 50vh;
        }
    </style>
    {{-- <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script> --}}
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> -->
    <script src="js/jquery-3.7.1.slim.min.js"></script>
</head>

<body>
    <input type="text" name="card-reader" id="card-reader" class="hidden-input">
    <span class="title">Welcome To Welfare System<span>
    <div class="snack">
        <img src="img/Pop.png" alt="Snack Image" width="20" height="20">
    </div>
    <script>
        $(document).ready(() => {
            console.log("hello");
            const inputReader = $("#card-reader");
            let debounceTimeout;
            inputReader.focus();

            $(document).on('click', () => {
                inputReader.focus();
            });

            const processCardData = () => {
                const cardNumber = inputReader.val();
                console.log(cardNumber);
                if(cardNumber != "") {
                    // alert("newly input data: " + cardNumber);
                    window.location.assign("http://stackoverflow.com");
                }
                inputReader.val("");
            }
            
            inputReader.on('input', () => {
                clearTimeout(debounceTimeout);
                debounceTimeout = setTimeout(processCardData, 500);
            });
            
        });
        /* document.addEventListener('DOMContentLoaded', (event) => {
            const inputReader = document.getElementById('card-reader');
            let debounceTimeout;
            inputReader.focus();

            document.addEventListener('click', () => {
                inputReader.focus();
            });

            const processCardData = () => {
                const cardNumber = inputReader.value.trim();
                if(cardNumber != "") {
                    alert("newly input data: " + inputReader.value);
                }
                inputReader.value = "";
            }

            inputReader.addEventListener("input", () => {
                clearTimeout(debounceTimeout)
                debounceTimeout = setTimeout(processCardData, 1000);
            });

        }); */
    </script>
</body>

</html>