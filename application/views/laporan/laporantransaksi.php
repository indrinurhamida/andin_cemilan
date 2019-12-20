<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Laporan Transaksi</h1>
    </div>
        <div class="row">
        <div class="card card-body">
            <div class="col-sm-12">
            <form class="form-horizontal" action="">
            <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">Bulan :</label>
                                <select name="" class="form-control">
                                    <option value="">---Option---</option>
                                        <?php foreach ($bulan as $item) {
                                        ?>
                                    <option></option>
                                        <?php } ?>
                                </select>
                        </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                            <label for="">Tahun :</label>
                                <select name="" class="form-control">
                                    <option value="">---Option---</option>
                                        <?php foreach ($tahun as $item) {
                                        ?>
                                    <option></option>
                                        <?php } ?>
                                </select>
                                
                                
                        </div>
                       
                    </form>
               
                </div>
                </div>
                <br>
                    <button type="button" class="btn btn-info">Cari</button>
        
            </div>
            </div>
            </div>
            <br>
            
        <div class="card card-body">
       
        <br>
            <div class="table table-bordered">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr style="text-align:center">
                            <th>#</th>
                            <th>Tanggal</th>
                            <th>Karyawan</th>
                            <th>Member</th>
                            <th>Kode Transaksi</th>
                            <th>Barang</th>
                            <th>Qty</th>
                            <th>Total</th>
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
                            <td></td>
                            <td></td>
                        </tr>
                            <?php  ?>
                    </tbody>
                </table>
            </div>
             <button type="button" class="btn btn-info primary">cetak</button>
        </div>
</div>

