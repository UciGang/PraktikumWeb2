<?php
require_once 'dbkoneksi.php';
if (isset($_GET['idedit'])) {
    $_id = $_GET['idedit'];

    $sql = "SELECT * FROM pelanggan WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
}
?>

<?php if (isset($_GET['idedit'])): ?>
    <form method="POST" action="proses_pelanggan.php?idedit=<?= $_GET['idedit'] ?>">
    <?php else: ?>
        <form method="POST" action="proses_pelanggan.php">
        <?php endif ?>
        <div class="form-group row">
            <label for="kode" class="col-4 col-form-label">Kode</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-anchor"></i>
                        </div>
                    </div>
                    <input id="kode" name="kode" type="text" class="form-control"
                        value="<?= isset($row['kode']) ? $row['kode'] : '' ?>">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Pelanggan</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-adjust"></i>
                        </div>
                    </div>
                    <input id="nama" name="nama" type="text" class="form-control"
                        value="<?= isset($row['nama']) ? $row['nama'] : '' ?>">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="jk" class="col-4 col-form-label">Jenis Kelamin</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-arrow-circle-o-left"></i>
                        </div>
                    </div>
                    <?php if (isset($_id)): ?>
                        <input id="jk" name="jk" value="L" <?php echo $row['jk'] == "L" ? "checked" : "" ?> type="radio"
                            class="form-control">Laki-laki
                        <input id="jk" name="jk" valu e="P" <?php echo $row['jk'] == "P" ? "checked" : "" ?> type="radio"
                            class="form-control">Perempuan
                    <?php else: ?>
                        <input id="jk" name="jk" valu e="L" type="radio" class="form-control">Laki-laki
                        <inp ut id="jk" name="jk" value="P " type="radio" class="form-control">Perempuan
                        <?php endif ?>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-arrow-circle-up"></i>
                        </div>
                    </div>
                    <input id="tmp_lahir" name="tmp_lahir"
                        value="<?= isset($row['tmp_lahir']) ? $row['tmp_lahir'] : '' ?>" type="text"
                        class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-arrow-circle-right"></i>
                        </div>
                    </div>
                    <input id="tgl_lahir" name="tgl_lahir"
                        value="<?= isset($row['tgl_lahir']) ? $row['tgl_lahir'] : '' ?>" type="date"
                        class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-arrow-circle-right"></i>
                        </div>
                    </div>
                    <input id="email" name="email" value="<?= isset($row['email']) ? $row['email'] : '' ?>" type="email"
                        class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="kartu_id" class="col-4 col-form-label">Kartu ID</label>
            <div class="col-8">
                <?php
                $sqljenis = "SELECT * FROM kartu";
                $rsjenis = $dbh->query($sqljenis);
                ?>
                <select name="kartu_id" id="kartu_id" class="custom-select">
                    <?php if (isset($_id)): ?>
                        <?php foreach ($rsjenis as $rowjenis): ?>
                            <option value="<?= $rowjenis['id'] ?>" <?php echo $rowjenis['id'] == $row['kartu_id'] ? "selected" : "" ?>><?= $rowjenis['nama'] ?></option>
                        <?php endforeach ?>

                    <?php else: ?>
                        <?php foreach ($rsjenis as $rowjenis): ?>
                            <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nama'] ?></option>
                        <?php endforeach ?>
                    <?php endif ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <?php
                if (isset($_GET['idedit'])) { ?>
                    <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Update" />
                <?php } else { ?>
                    <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan" />
                <?php } ?>
            </div>
        </div>
    </form>