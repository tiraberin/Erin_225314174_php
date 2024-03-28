<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Luas Persegi Panjang</title>
    <style>
        body{
            background-color:lightblue;
        }
        
        .container {
        width: 500px; /* Ukuran tetap */
        height: auto; 
        margin: 0 auto;
        text-align: center;
        margin-top: 75px;
        border: 1px solid #fff;
        padding: 50px;
        border-radius: 15px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        background-color:#fff;
        }

        .form-group {
            margin-bottom: 30px;
        }

        input[type="number"] {
            width: 200px;
            padding: 10px;
            font-size: 16px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 7px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hitung Luas Persegi Panjang</h2>
        <form id="rectangleForm" method="post">
            <div class="form-group">
                <label for="length">Panjang : </label>
                <input type="number" id="length" name="length" required>
            </div>
            <div class="form-group">
                <label for="width">Lebar : </label>
                <input type="number" id="width" name="width" required>
            </div>
            <button type="submit">Hitung</button>
        </form>
        <div id="result">
            <?php
            // PHP Script for calculating area
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $length = $_POST['length'];
                $width = $_POST['width'];
                $area = $length * $width;
                echo "Hasil Luas Persegi Panjang adalah : " . $area;
            }
            ?>
        </div>
    </div>

    <script>
        // JavaScript logic
        document.getElementById("rectangleForm").addEventListener("submit", function(event) {
            event.preventDefault();
            calculateArea();
        });

        function calculateArea() {
            var length = document.getElementById('length').value;
            var width = document.getElementById('width').value;
            var area = length * width;
            document.getElementById('result').innerHTML = "Hasil Luas Persegi Panjang adalah : " + area;
        }
    </script>
</body>
</html>
