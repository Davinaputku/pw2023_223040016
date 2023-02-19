<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            display: flex;
        }

        .grid {
            width: 100px;
            height: 100px;
            background-color: salmon;
            position: relative;
            border: 1px solid black;
        }

        .grid span {
            position: absolute;
            font-family: sans-serif ;
            color: black;
            font-weight: 500;
            font-size: 30px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="grid">
            <span>1</span>
        </div>
    </div>

    <div class="container">
        <div class="grid">
            <span>2</span>
        </div>
        <div class="grid">
            <span>2</span>
        </div>
    </div>
    
    <div class="container">
        <div class="grid">
            <span>3</span>
        </div>
        <div class="grid">
            <span>3</span>
        </div>
        <div class="grid">
            <span>3</span>
        </div>
    </div>
</body>
</html>