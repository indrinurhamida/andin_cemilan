
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Barang Keluar</h1>
    </div>
    <div class="container-fluid">
        <form class="" method="post" action="" enctype="multipart/form-data">

            <div class="form-group row">
                <div class="col-sm-6 mb-6 mb-sm-4">
                    <label for="exampleInputEmail1">ID Barang Keluar </label>
                    <input type="number" name="id_barangmasuk" class="form-control" id="input_id" aria-describedby="emailHelp" placeholder="Masukan ID" value="<?= $kode ?>" readonly>
                </div>
                <div class="col-sm-6 mb-6 mb-sm-4">
                    <label for="exampleInputEmail1">Tanggal Barang Keluar</label>
                    <input type="text" name="tgl_barangmasuk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Tanggal Barang Masuk">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-6 mb-6 mb-sm-4">
                    <label for="exampleInputEmail1">Nama Pegawai</label>
                    <input type="text" name="id_barangmasuk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan ID" value="">
                </div>
                 <div class="col-sm-6 mb-6 mb-sm-4">
                    <label for="exampleInputEmail1">Total Barang Keluar</label>
                    <input type="text" name="total_barangmasuk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Total Barang Masuk">
                </div>
            </div>

            <div class="col-sm-6 mb-3 mb-sm-0">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url() . 'data-master/barangKeluar'; ?>" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>