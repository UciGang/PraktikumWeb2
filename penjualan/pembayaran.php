<?php
$model = new Pembayaran();
$data_produk = $model->tampil();
?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pembayaran</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?hal=home">Home</a></li>
                        <li class="breadcrumb-item active">Pembayaran</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor Kuitansi</th>
                            <th>Tanggal</th>
                            <th>Jumlah</th>
                            <th>Ke</th>
                            <th>ID Pesanan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- cetak data array Produk -->
                        <?php
                        $no = 1;
                        foreach ($data_produk as $value) {
                            ?>
                            <tr>
                                <td>
                                    <?= $no ?>
                                </td>
                                <td>
                                    <?= $value['nokuitansi'] ?>
                                </td>
                                <td>
                                    <?php echo $value['tanggal'] ?>
                                </td>
                                <td>
                                    <?= $value['jumlah'] ?>
                                </td>
                                <td>
                                    <?= $value['ke'] ?>
                                </td>
                                <td>
                                    <?= $value['pesanan_id'] ?>
                                </td>
                            </tr>
                            <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>