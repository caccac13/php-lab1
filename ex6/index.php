<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        .wrapper {
            width: 300px;
            margin: auto;
            font-family: Arial, Helvetica, sans-serif;
        }
        img {
            width: 100%;

        }
        .body {
            font-size: 20px
        }
        .price {
            font-weight: bold;
        }
        .price .op {
            font-weight: normal;
            opacity: 0.6;
        }
        .price .red {
            color: red;
        }
    </style>
</head>
<body>
    <?php
        echo '  
            <div class="wrapper">
            <img src="./Screenshot 2024-06-19 200753.png" alt="">
            <div class="body">
                <p class="name">Máy Ảnh SONY RX100 IV (Chính Hãng)</p>
                <p class="price">19.090.000 <span class="op">22.990.000</span> <span class="red">-17%</span></p>
            </div>
            </div>
        '
    ?>
</body>
</html>