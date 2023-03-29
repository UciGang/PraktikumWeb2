<?php
require_once 'dbkoneksi.php';

if (isset($_GET['idedit'])) {
  $_id = $_GET['idedit'];
  $sql = "SELECT * FROM produk WHERE id=?";
  $st = $dbh->prepare($sql);
  $st->execute([$_id]);
  $row = $st->fetch();
}
?>

<?php if (isset($_GET['idedit'])): ?>
  <form method="POST" action="proses_produk.php?idedit=<?= $_GET['idedit'] ?>">
  <?php else: ?>
    <form method="POST" action="proses_produk.php">
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
      <label for="nama" class="col-4 col-form-label">Nama Produk</label>
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
      <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-arrow-circle-o-left"></i>
            </div>
          </div>
          <input id="harga_beli" name="harga_beli" value="<?= isset($row['harga_beli']) ? $row['harga_beli'] : '' ?>"
            type="text" class="form-control">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="stok" class="col-4 col-form-label">Stok</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-arrow-circle-up"></i>
            </div>
          </div>
          <input id="stok" name="stok" value="<?= isset($row['stok']) ? $row['stok'] : '' ?>" type="text"
            class="form-control">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="min_stok" class="col-4 col-form-label">Minimum Stok</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-arrow-circle-right"></i>
            </div>
          </div>
          <input id="min_stok" name="min_stok" value="<?= isset($row['min_stok']) ? $row['min_stok'] : '' ?>"
            type="text" class="form-control">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="jenis" class="col-4 col-form-label">Jenis Produk</label>
      <div class="col-8">
        <?php
        $sqljenis = "SELECT * FROM jenis_produk";
        $rsjenis = $dbh->query($sqljenis);
        ?>
        <select id="jenis" name="jenis" class="custom-select">
          <?php if (isset($_GET['idedit'])): ?>
            <?php foreach ($rsjenis as $rowjenis): ?>
              <option value="<?= $rowjenis['id'] ?>" <?php echo $rowjenis['id'] == $row['jenis_produk_id'] ? "selected" : "" ?>>
                <?= $rowjenis['nama'] ?></option>
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