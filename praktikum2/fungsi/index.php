<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengisian Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
    .form {
        width: 500px;
        margin: 40px auto;
        background-color: papayawhip;
        padding: 20px 40px 20px 40px;
        border: 5px solid brown;
    }
    </style>
</head>


<body>

<div class="container box">
<form class="form" method="GET" action="nilai-siswa.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" required="required" class="custom-select">
        <option value="ppkn">PPKN</option>
        <option value="bi">Bahasa Inggris</option>
        <option value="kk">Keterampilan Komunikasi</option>
        <option value="sp">Statistik dan Probabilitas</option>
        <option value="basdat">Basis Data</option>
        <option value="ui/ux">UI/UX</option>
        <option value="pwl">Pemrograman Web</option>
        <option value="jarkom">Jaringan Komputer</option>
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-3">
      <input id="number" name="uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-3">
      <input id="number" name="uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="number" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-3">
      <input id="number" name="tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

</div>

    
</body>
</html>