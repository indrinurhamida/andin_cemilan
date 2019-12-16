<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Laporan Transaksi</h1>
    </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-body">
                    <form class="form-horizontal" action="">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Bulan :</label>
                                <select name="" class="form-control">
                                    <option value="">---Option---</option>
                                        <?php foreach ($bulan as $item) {
                                        ?>
                                    <option></option>
                                        <?php } ?>
                                </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Tahun :</label>
                                <select name="" class="form-control">
                                    <option value="">---Option---</option>
                                        <?php foreach ($tahun as $item) {
                                        ?>
                                    <option></option>
                                        <?php } ?>
                                </select>
                                <br>
                                <button type="button" class="btn btn-info">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
            <br>
            
        <div class="card card-body">
        <button type="button" class="btn btn-info primary">cetak</button>
        <br>
            <div class="table table-bordered">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="text-align:center">
                            <th>No</th>
                            <th>ID User</th>
                            <th>Tanggal</th>
                            <th>Kode Barang</th>
                            <th>Jumlah</th>
                            <th>Total Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                            <?php  ?>
                    </tbody>
                </table>
            </div>
        </div>
</div>

