<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="card card-body">
            <div class="col-sm-12">
                <form class="form-horizontal" action="">
                    <h1 class="h3 font-weight-bold text-grey text-center">Laporan</h1>
                </form>
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?php echo base_url() . 'laporan/laporantransaksi/detail_laporan'; ?>" class="btn btn-info">Detail</a>
    </div>
    <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr style="text-align:center">
                            
                            <th>ID Transaksi</th>
                            <th>Member</th>
                            <th>Tanggal Transaksi</th>
                            <th>Pegawai</th>
                            <!--th>Barang Detail</th>
                            <th>Jumlah Bayar</th>
                            <th>Kembalian</th>
                            <th>Aksi</th-->
                    </tr>
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
                                <!--td><?= $item->id_barangdetail ?></td>
                                <td><?= $item->jumlah_bayar?></td>
                                <td><?= $item->kembalian ?></td-->
                                <!--td>
                                </td-->

                                    <!--a href="<?php //echo base_url() . 'laporan/detail_laporan'; ?>"
                                            class="btn btn-info">Detail</a-->
                                    <!--a href="<?php //echo base_url() . 'data-master/barang/hapus'; ?>/<?php //echo $item->id_barang ?>" class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus Data ?')">Hapus</a-->

                                    <!--a href="<?php //echo base_url() . 'laporan/detail_laporan'; ?>/<?php //echo $item->id_transaksi ?>" class="btn btn-info">Detail</a-->

                                
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
