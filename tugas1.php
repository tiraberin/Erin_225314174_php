<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanggalan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f3f5;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-align: center;
            padding-top: 50px;
        }
        h1 {
            color: #333333;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .format {
            padding: 10px 20px;
            background-color: #67C6E3;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 6px;
            margin: 10px;
            transition: background-color 0.3s;
        }
        .format:hover {
            background-color: #40679E;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo date("Y-m-d H:i:s"); ?></h1>
        <form action="#" method="post">
            <input type="submit" class="format" name="format1" value="Format  (Y-m-d H:i:s)">
            <input type="submit" class="format" name="format2" value="Format  (l, d F Y)">
            <input type="submit" class="format" name="format3" value="Format  (d/m/Y)">
        </form>

        <?php
        if(isset($_POST['format1'])) {
            echo "<h2>" . date("Y-m-d H:i:s") . "</h2>";
        } elseif(isset($_POST['format2'])) {
            echo "<h2>" . date("l, d F Y") . "</h2>";
        } elseif(isset($_POST['format3'])) {
            echo "<h2>" . date("d/m/Y") . "</h2>";
        }
        ?>
    </div>
</body>
</html>
