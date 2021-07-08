<?php 
$nama=$_POST['nama'];
$nim=$_POST['matkul'];
$uts=$_POST['uts'];
$uas=$_POST['uas'];
$tugas=$_POST['tugas'];
?>

<?php
$nilai_akhir = (30*$uts/100 + 35*$uas/100 + 35*$tugas/100);
if ($nilai_akhir >= 55 && $nilai_akhir <= 100){
    $grade_hasil='LULUS';
}else {
    $grade_hasil='TIDAK LULUS';
}

// Penilaian Nilai Akhir
if ($nilai_akhir >= 85 && $nilai_akhir <= 100){
    $grade_nilai='A';
}
elseif ($nilai_akhir >= 70){
    $grade_nilai='B';
}
elseif ($nilai_akhir >= 56){
    $grade_nilai='C';
}
elseif ($nilai_akhir >= 36){
    $grade_nilai='D';
}
elseif ($nilai_akhir >= 0){
    $grade_nilai='E';
}
else {
    $grade_nilai='I';
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
            margin: 40px;
            padding: 30px 20px 30px 20px;
            border: 3px solid navy;
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
        echo '<tr>
        <td>'.$nomor.'</td>';
        echo '<td>'.$nama.'</td>';
        echo '<td>'.$matkul.'</td>';
        echo '<td>'.$uts.'</td>';
        echo '<td>'.$uas.'</td>';
        echo '<td>'.$tugas.'</td>';
        echo '<td>'.$nilai_akhir.'</td>';
        echo '<td>'.$grade_nilai.'</td>';
        echo '</tr>';
        ?>
  </tbody>
  </table>
  </div>
    <?php echo '<h5>'.strtoupper($nama).' DINYATAKAN:</h5>'.$grade_hasil; 
    ?>

</body>
</html>