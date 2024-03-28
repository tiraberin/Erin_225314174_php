<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Biodata</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap">

  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f8f8f8;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    .container {
      max-width: 600px;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border: 2px solid #ccc;
    }
    h1 {
      text-align: center;
      color:darkred;
    }
    h2 {
      text-align: center;
      color: #333;
    }
    form {
      text-align: center;
    }
    label {
      font-weight: bold;
      color: #333;
    }
    input[type="text"], input[type="email"] {
      padding: 10px;
      margin: 5px 0;
      width: 100%;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
      transition: border-color 0.3s;
    }
    input[type="text"]:focus, input[type="email"]:focus {
      border-color: #67c6e3;
    }
    input[type="submit"] {
      padding: 10px 20px;
      margin-top: 10px;
      background-color: #ff8474;
      color: white;
      border: none;
      cursor: pointer;
      border-radius: 4px;
      transition: background-color 0.3s;
    }
    input[type="submit"]:hover {
      background-color: #ff6b57;
    }
    .result {
      margin-top: 20px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      border: 2px solid #ccc;
      border-radius: 8px;
    }
    th, td {
      padding: 10px;
      border: 1px solid #ccc;
      text-align: left;
    }
    th {
      background-color:indianred;
      color: white;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Form Biodata</h1>
    <form action="#" method="post">
      <label for="nama">Nama:</label><br>
      <input type="text" id="nama" name="nama" required><br>
      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email" required><br>
      <label for="alamat">Alamat:</label><br>
      <input type="text" id="alamat" name="alamat" required><br>
      <input type="submit" value="Submit" name="submit">
    </form>

    <?php
    if(isset($_POST['submit'])) {
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $alamat = $_POST['alamat'];
    ?>

    <div class="result" id="result">
      <h2>Data Biodata</h2>
      <table>
        <tr>
          <th>Nama</th>
          <th>Email</th>
          <th>Alamat</th>
        </tr>
        <tr>
          <td><?php echo $nama; ?></td>
          <td><?php echo $email; ?></td>
          <td><?php echo $alamat; ?></td>
        </tr>
      </table>
    </div>

    <?php } ?>
  </div>
</body>
</html>
