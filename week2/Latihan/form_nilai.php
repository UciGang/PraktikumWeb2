<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
    <h3 style="text-align: center;">Form Nilai Mahasiswa</h3>
    <hr/>
    <form method="POST" action="nilai_siswa.php">
    <div class="form-group row">
    <label class="col-4 col-form-label" for="name">Nama</label> 
    <div class="col-8">
      <input id="name" name="name" placeholder="Masukkan Nama Anda" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="Dasar - Dasar Pemrograman">Dasar - Dasar Pemrograman</option>
        <option value="Pemrograman Web">Pemrograman Web</option>
        <option value="Basis Data">Basis Data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" placeholder="Masukkan Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" placeholder="Masukkan Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Tugas</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Masukkan Nilai Tugas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" value="Simpan" name="proses" class="btn btn-primary">
    </div>
  </div>
    </form>
<?php
// ambil data yg di input user
// $name = $_GET['name'];
// $matkul = $_GET['matkul'];
// $uts = $_GET['nilai_uts'];
// $uas = $_GET['nilai_uas'];
// $tugas = $_GET['nilai_tugas'];

// mencetak value
// echo "Nama : $name";
// echo "<br/>Mata Kuliah : $matkul";
// echo "<br/>Nilai UTS : $uts";
// echo "<br/>Nilai UAS : $uas";
// echo "<br/>Nilai Tugas : $tugas";
// ?>
    </div>
</body>
</html>