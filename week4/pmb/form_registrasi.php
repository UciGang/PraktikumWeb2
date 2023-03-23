<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Registrasi Data Science</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <h3 style="text-align: center">Form Registrasi Data Science</h3>

    <form method="POST" action="prak3.php">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" class="form-control" />
            </div>
        </div>
        <div class="form-group row">
            <label for="nim" class="col-4 col-form-label">NIM</label>
            <div class="col-8">
                <input id="nim" name="nim" placeholder="Masukkan NIM" type="text" class="form-control" />
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label>
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-laki" />
                    <label for="jk_0" class="custom-control-label">Laki-laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan" />
                    <label for="jk_1" class="custom-control-label">Perempuan</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="prodi" class="col-4 col-form-label">Program Studi</label>
            <div class="col-8">
                <select id="prodi" name="prodi" class="custom-select">
                    <option value="TI">Teknik Informatika</option>
                    <option value="SI">Sistem Informasi</option>
                    <option value="BD">Bisnis Digital</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Skill Web & Programming</label>
            <div class="col-8">
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skill[]" id="skill[]_0" type="checkbox" class="custom-control-input" value="html" />
                    <label for="skill[]_0" class="custom-control-label">HTML</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skill[]" id="skill[]_1" type="checkbox" class="custom-control-input" value="css" />
                    <label for="skill[]_1" class="custom-control-label">CSS</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skill[]" id="skill[]_2" type="checkbox" class="custom-control-input" value="js" />
                    <label for="skill[]_2" class="custom-control-label">JavaScript</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skill[]" id="skill[]_3" type="checkbox" class="custom-control-input" value="rwd" />
                    <label for="skill[]_3" class="custom-control-label">RWD Bootstrap</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skill[]" id="skill[]_4" type="checkbox" class="custom-control-input" value="php" />
                    <label for="skill[]_4" class="custom-control-label">PHP</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skill[]" id="skill[]_5" type="checkbox" class="custom-control-input" value="py" />
                    <label for="skill[]_5" class="custom-control-label">Python</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skill[]" id="skill[]_6" type="checkbox" class="custom-control-input" value="java" />
                    <label for="skill[]_6" class="custom-control-label">Java</label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-envelope"></i>
                        </div>
                    </div>
                    <input id="email" name="email" type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">
                    Submit
                </button>
            </div>
        </div>
    </form>
</body>

</html>

<?php
// ambil data yang diinput user berdasarkan unique namenya
// fungsi isset() digunakan untuk memeriksa apakah suatu variabel sudah diisi atau belum
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];
    $email = $_POST['email'];
    $nilai = 0;
    foreach ($skill as $data) {
        switch ($data) {
            case 'html':
                $nilai += 10;
                break;
            case 'css':
                $nilai += 10;
                break;
            case 'js':
                $nilai += 20;
                break;
            case 'rwd':
                $nilai += 20;
                break;
            case 'php':
                $nilai += 30;
                break;
            case 'py':
                $nilai += 30;
                break;
            case 'java':
                $nilai += 50;
                break;
            default:
                $nilai += 0;
                break;
        }
    }
}

function predikat($nilai)
{
    if ($nilai >= 100 and $nilai <= 170) {
        return 'Sangat Baik';
    } elseif ($nilai >= 60 and $nilai <= 100) {
        return 'Baik';
    } elseif ($nilai >= 40 and $nilai <= 60) {
        return 'Cukup';
    } elseif ($nilai >= 0 and $nilai <= 40) {
        return 'Kurang';
    } else {
        return 'Tidak Memadai';
    }
}

$predikat = predikat($nilai);
?>

<?php
// Cetak hasil inputan user
echo "<h4>Informasi yang anda kirim : </h4>";
echo "<br/>Nama : $nama";
echo "<br/>NIM : $nim";
echo "<br/>Jenis Kelamin : $jk";
echo "<br/>Program Studi : $prodi";

// panggil skill
echo "<br/>Skill : ";
foreach ($skill as $data) {
    echo $data . ", ";
}

echo "<br/>Skor Skill : $nilai";
echo "<br/>Predikat : $predikat";
echo "<br/>E-mail : $email";
?>