<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biodata CV</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      width: 350px;
      background: white;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    label {
      font-weight: bold;
      display: block;
      margin-top: 10px;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 8px;
      box-sizing: border-box;
    }

    button {
      width: 100%;
      padding: 12px;
      margin-top: 20px;
      border: none;
      border-radius: 8px;
      background: #007bff;
      color: white;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>

  <div class="container">
    <h2>BIODATA DIRI</h2>

    <form>
      <label>Nama Lengkap</label>
      <input type="text" placeholder="Masukkan nama lengkap">

      <label>Alamat</label>
      <textarea placeholder="Masukkan alamat"></textarea>

      <label>E-mail</label>
      <input type="email" placeholder="Masukkan e-mail">

      <label>No. HP</label>
      <input type="tel" placeholder="Masukkan nomor HP">

      <button type="submit">Submit</button>
    </form>
  </div>

</body>
</html>