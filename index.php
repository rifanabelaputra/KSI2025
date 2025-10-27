<?php
// Data mahasiswa (array asosiatif)
$mahasiswa = [
    [
        "nama" => "Budi Santoso",
        "npm" => "23753001",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Citra Lestari",
        "npm" => "23753002",
        "jurusan" => "Manajemen Informatika"
    ],
    [
        "nama" => "Andi Pratama",
        "npm" => "23753003",
        "jurusan" => "Teknik Komputer"
    ]
];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Mahasiswa KSI 2025</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Data Mahasiswa KSI 2025</a>
    </div>
  </nav>

  <div class="container my-5">
    <h1 class="mb-4">Daftar Mahasiswa</h1>

    <table class="table table-striped table-hover">
      <thead class="table-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Mahasiswa</th>
          <th scope="col">NPM</th>
          <th scope="col">Jurusan</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $no = 1; // Variabel untuk nomor urut
        foreach ($mahasiswa as $mhs) : 
        ?>
          <tr>
            <th scope="row"><?php echo $no; ?></th>
            <td><?php echo $mhs["nama"]; ?></td>
            <td><?php echo $mhs["npm"]; ?></td>
            <td><?php echo $mhs["jurusan"]; ?></td>
          </tr>
        <?php 
        $no++; // Increment nomor urut
        endforeach; 
        ?>
      </tbody>
    </table>

  </div> <footer class="footer mt-auto py-3 bg-light fixed-bottom">
    <div class="container text-center">
      <span class="text-muted">© 2025 KSI</span>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
