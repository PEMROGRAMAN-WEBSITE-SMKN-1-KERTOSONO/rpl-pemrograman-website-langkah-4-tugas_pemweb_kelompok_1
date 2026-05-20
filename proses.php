<?php
// Pastikan data dikirim menggunakan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dan mengamankannya dari karakter berbahaya
    $nama = htmlspecialchars($_POST['nama'] ?? 'Tidak diisi');
    $alamat = htmlspecialchars($_POST['alamat'] ?? 'Tidak diisi');
    $email = htmlspecialchars($_POST['email'] ?? 'Tidak diisi');
    $nohp = htmlspecialchars($_POST['nohp'] ?? 'Tidak diisi');
} else {
    // Jika diakses langsung tanpa kirim form, arahkan kembali ke index.php
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Biodata CV</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }

    .cv-card {
      width: 400px;
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.15);
    }

    .header {
      text-align: center;
      border-bottom: 2px solid #007bff;
      padding-bottom: 15px;
      margin-bottom: 20px;
    }

    .header h2 {
      margin: 0;
      color: #333;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .header p {
      margin: 5px 0 0 0;
      color: #666;
      font-size: 14px;
    }

    .info-group {
      margin-bottom: 15px;
    }

    .info-label {
      font-size: 12px;
      color: #007bff;
      font-weight: bold;
      text-transform: uppercase;
      margin-bottom: 3px;
    }

    .info-value {
      font-size: 16px;
      color: #333;
      background: #f9f9f9;
      padding: 10px;
      border-radius: 6px;
      border-left: 3px solid #ccc;
      white-space: pre-line;
    }

    .btn-back {
      display: block;
      text-align: center;
      width: 100%;
      padding: 12px;
      margin-top: 25px;
      background: #007bff;
      color: white;
      text-decoration: none;
      border-radius: 8px;
      font-size: 16px;
      box-sizing: border-box;
      transition: background 0.2s;
    }

    .btn-back:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>

  <div class="cv-card">
    <div class="header">
      <h2>Curriculum Vitae</h2>
      <p>Biodata Diri Terverifikasi</p>
    </div>

    <div class="info-group">
      <div class="info-label">Nama Lengkap</div>
      <div class="info-value"><?php echo $nama; ?></div>
    </div>

    <div class="info-group">
      <div class="info-label">Alamat</div>
      <div class="info-value"><?php echo $alamat; ?></div>
    </div>

    <div class="info-group">
      <div class="info-label">E-mail</div>
      <div class="info-value"><?php echo $email; ?></div>
    </div>

    <div class="info-group">
      <div class="info-label">No. Handphone</div>
      <div class="info-value"><?php echo $nohp; ?></div>
    </div>

    <a href="index.php" class="btn-back">Kembali ke Form</a>
  </div>

</body>
</html>
