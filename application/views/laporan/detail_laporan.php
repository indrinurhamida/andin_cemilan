
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 font-weight-bold text-grey text-center">Detail Laporan</h1>
    </div>
    <div class="card shadow mb-4">
    <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr style="text-align:center">
                            <th>ID Transaksi</th>
                            <th>ID Member</th>
                            <th>Tanggal</th>
                            <th>Pegawai</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th>Jumlah Bayar</th>
                            <th>Kembalian</th>
                    </tr>
                </thead>
                <tbody>
                            <?php
                            foreach ($detail_laporan as $item) {
                            ?>

                            <tr>
                                <td><?= $item->id_transaksi ?></td>
                                <td><?= $item->id_member ?></td>
                                <td><?= $item->tgl_transaksi ?></td>
                                <td><?= $item->id_pegawai ?></td>
                                <td><?= $item->qty?></td>
                                <td><?= $item->total ?></td>
                                <td><?= $item->jumlah_bayar ?></td>
                                <td><?= $item->kembalian ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            <div class="col-sm-6 mb-6 mb-sm-0">
                <a href="<?php echo base_url() . 'laporan/laporantransaksi'; ?>" class="btn btn-primary">Kembali</a>
            </div>

            </div>
        </div>
    </div>
</div>

