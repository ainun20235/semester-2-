<?php 
$nama=$_POST['nama'];
$matkul=$_POST['matkul'];
$uts=$_POST['uts'];
$uas=$_POST['uas'];
$tugas=$_POST['tugas'];
?>

<?php
$nilai_akhir = (30*$uts/100 + 35*$uas/100 + 35*$tugas/100);
if ($nilai_akhir >= 55 && $nilai_akhir <= 100){
    $grade_na='Lulus';
}else {
    $grade_na='Tidak Lulus';
}

// Grade Nilai Akhir
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        body{
            padding: 30px;
        }
        .btnn {
            padding-top: 50px;
        }
        button {
            box-shadow: 0 0 2px rgba(0, 0, 0, 1);

        }
    </style>
</head>
<body>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-default table-hover">
            <thead>
                <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Mata Kuliah</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>Nilai Akhir</th>
                <th>Keterangan</th>
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
        <?php echo '<h5>'.strtoupper($nama).' DINYATAKAN:</h5>'.$grade_na;  ?>
        <div class="col text-right btnn">
            <a href="index.php"><button type="submit" class="btn btn-primary btt">Kembali</button></a>
        </div>
    </div>
</body>
</html>