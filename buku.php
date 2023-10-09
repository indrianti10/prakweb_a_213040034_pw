<?php 

//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "prakweb_2023_a_213040034");

$result = mysqli_query($conn, "SELECT * FROM buku");
// var_dump($result);
// if( !$result) {
//   echo mysqli_error($conn);
// }
//mysqli_fetch_row()

// while ( $buku = mysqli_fetch_array($result)){
// var_dump($buku);
// }

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <header>

<h1>Selamat Datang di perpustakaan online!</h1>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   
</header>
<br>
<br>
<body>
<h3>informasi mengenai Buku</h3>
   <div class = "daftarbuku">
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <td>ID buku</td>
      <td>Judul Buku</td>
      <td>Penerbit</td>
      <td>Tahun Terbit</td>
      <td>Penulis</td>
    </tr>
    <?php $i = 1; ?>
    <?php  while( $row = mysqli_fetch_assoc($result)) :?>
    <tr>
      <td> <?= $i; ?></td>
      <td><?= $row["judul_buku"]; ?></td>
      <td><?= $row["penerbit"]; ?></td>
      <td><?= $row["tahun_penerbit"]; ?></td>
      <td><?= $row["penulis"]; ?></td>
    </tr>
    <?php $i++; ?>
      <?php endwhile; ?>
    </table>
   </div>
  </body>
</html>