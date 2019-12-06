<?php
date_default_timezone_set('Asia/Jakarta');
?>
<script type="text/javascript">
            $(function() {
                $("#datepicker").datepicker({
                    dateFormat: 'yy-mm-dd'
                });

            });
</script>

<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Transaksi</h1>
    </div>
    <div class="container-fluid">
        <form class="" method="post" action="<?php echo base_url() . 'tambah_aksi'; ?>" enctype="multipart/form-data">

            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Tanggal Transaksi</label>
                    <input type="text" name="tgltrx" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pickup Date" value="<?php echo $waktu = $this->createDate = date("Y-m-d"); ?>">
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Total</label>
                    <input type="number" name="total" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""readonly>
                </div>
            </div>
            <div class="form-group row">
                 <div class="col-sm-6 mb-6 mb-sm-0">
                    <label for="exampleInputEmail1">Kode Barang</label>
                    <input type="text" name="id_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Barang">
                </div>
                <div class="col-sm-6 mb-6 mb-sm-0">
                    <label for="exampleInputEmail1">Bayar</label>
                    <input type="number" name="bayar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-6 mb-sm-0">
                  <label for="exampleInputEmail1">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""readonly>  
                </div>
                <div class="col-sm-6 mb-6 mb-sm-0">
                    <label for="exampleInputEmail1">Kembalian</label>
                    <input type="number" name="kembalian" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""readonly>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-6 mb-sm-0">
                  <label for="exampleInputEmail1">Harga Barang</label>
                    <input type="number" name="harga_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""readonly>  
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-6 mb-sm-0">
                  <label for="exampleInputEmail1">Quantity</label>
                    <input type="number" name="quantity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">  
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-6 mb-sm-0">
                  <label for="exampleInputEmail1">Sub Total</label>
                    <input type="text" name="sub_total" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=""readonly>  
                </div>
            </div>
            </div>
            <div class="col-sm-6 mb-3 mb-sm-0">
                <button type="submit" class="btn btn-primary">Tambah</button>
                <a href="<?php echo base_url() . 'data-master/pegawai'; ?>" class="btn btn-danger">Reset</a>
            </div>
            <br>
            <br>
        </form>
        <!--Tabel Menggunakan AJAX -->
        <table id="tabel_transaksi" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id Kasir</th>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Sub Total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        <table>
        <tr>
            <td style="padding: 5px;">
            <form method="post" action="<?php=base_url() ?>transaksi/tamkasir">
                <input type="submit" class="btn btn-primary" id="selesai" value="Selesai" disabled="disabled">
                </input>
            </form>
            </td>
            <td style="padding: 5px;">
            <form method="post" action="<?php=base_url() ?>transaksi/tamkasir">
                <input type="submit" class="btn btn-primary" id="batal" value="Batal">
                </input>
            </form>
            </td>
        </tr>
        </div>
    </div>
</div>
