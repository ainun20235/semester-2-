<?php 
require_once 'fungsii.php';
$nama=$_GET['nama'];
$nim=$_GET['matkul'];
$uts=$_GET['uts'];
$uas=$_GET['uas'];
$tugas=$_GET['tugas'];
?>

<?php
// Case Nilai Akhir
$nilai_akhir = (30*$uts/100 + 35*$uas/100 + 35*$tugas/100);
switch (true){
    case ($nilai_akhir >= 55 && $nilai_akhir <= 100):
        $grade_na='Lulus';;
    default:
    $grade_na='Tidak Lulus';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai Siswa</title>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
        body{
            padding: 30px;
        }
    </style>
</head>
<body>
  <div class="container">
  <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">Nilai UTS</th>
      <th scope="col">Nilai UAS</th>
      <th scope="col">Nilai Tugas</th>
      <th scope="col">Nilai Akhir</th>
    </tr>
  </thead>
    <tbody>
        <?php
        $nomor=1;
        $grades = grade($nilai_akhir);
        $predikats = predikat($nilai_akhir);
        echo '<tr>
        <td>'.$nomor.'</td>';
        echo '<td>'.$nama.'</td>';
        echo '<td>'.$matkul.'</td>';
        echo '<td>'.$uts.'</td>';
        echo '<td>'.$uas.'</td>';
        echo '<td>'.$tugas.'</td>';
        echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
        echo '<td>'.$grades.' ('.$predikats.')'.'</td>';
        echo '</tr>';
        ?>
  </tbody>
  </table>
  </div>
    <?php
    $hasil_ujian = kelulusan($nilai_akhir);
    echo '<h5>'.strtoupper($nama).' DINYATAKAN:</h5>' . $hasil_ujian;
    ?>

</body>
</html>