<?php 
$nama=$_POST['nama'];
$nim=$_POST['matkul'];
$uts=$_POST['uts'];
$uas=$_POST['uas'];
$tugas=$_POST['tugas'];
?>

<?php
// Kelulusan
$nilai_akhir = (30*$uts/100 + 35*$uas/100 + 35*$tugas/100);
switch (true){
    case ($nilai_akhir >= 55 && $nilai_akhir <= 100):
        $grade_hasil='Lulus';
        break;
    default:
    $grade_hasil='Tidak Lulus';
}
//switchcase (Tingkat Nilai)
switch (true){
    case ($nilai_akhir >= 85 && $nilai_akhir <= 100):
        $grade_akhir = 'A';
        $predikat_akhir = '<i>Sangat Memuaskan</i>';
        break;
    case ($nilai_akhir >= 70):
        $grade_akhir = 'B';
        $predikat_akhir = '<i>Memuaskan</i>';
        break;
    case ($nilai_akhir >= 56):
        $grade_akhir = 'C';
        $predikat_akhir = '<i>Cukup</i>';
        break;
    case ($nilai_akhir >= 36):
        $grade_akhir = 'D';
        $predikat_akhir = '<i>Kurang</i>';
        break;
    case ($nilai_akhir >= 0):
        $grade_akhir = 'E';
        $predikat_akhir = '<i>Sangat Kurang</i>';
        break;
    default:
        $grade_akhir = 'I';
        $predikat_akhir = 'Tidak Ada';
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
        echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
        echo '<td>'.$grade_akhir.' ('.$predikat_akhir.')'.'</td>';
        echo '</tr>';
        ?>
  </tbody>
  </table>
  </div>
    <?php echo '<h5>'.strtoupper($nama).' DINYATAKAN:</h5>'.$grade_hasil; 
    ?>

</body>
</html>