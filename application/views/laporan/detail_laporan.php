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
                    <?php 
                        foreach ($detail as $key => $value) {
                        
                     ?>
                    <tr style="text-align:center">
                            <th>ID Transaksi</th> <td><?php echo $value['id_transaksi'] ?></td>
                            <th>Tanggal Transaksi</th>
                            <th>Pegawai</th>
                            <th>Member</th>
                            <th>Barang Detail</th>
                            <th>Jumlah Bayar</th>
                            <th>Kembalian</th>
                            <th>Aksi</th>
                    </tr>
                <?php } ?>
                </thead>
                <tbody>
                            <?php
                            foreach ($laporantransaksi as $item) {
                            ?>

                            <tr>
                                <td><?= $item->id_transaksi ?></td>
                                <td><?= $item->id_member ?></td>
                                <td><?= $item->tgl_transaksi ?></td>
                                <td><?= $item->id_pegawai ?></td>
                                <td><?= $item->id_barangdetail ?></td>
                                <td><?= $item->jumlah_bayar?></td>
                                <td><?= $item->kembalian ?></td>
                                <td>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
