<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Barang Keluar</h1>
    </div>
    <div class="container-fluid">
        <form class="" method="post" action="" enctype="multipart/form-data">
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">ID Barang Keluar</label>
                    <input type="text" name="id_barangmasuk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan ID" value="" readonly>
                </div>
            </div>
                <div class="col-sm-6 mb-3 mb-sm-0">

                    <label for="exampleInputEmail1">Tanggal Barang Keluar</label>
                    <input type="text" name="tgl_barangmasuk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan tanggal" value="">
                </div>

            </div>
            <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Total Barang Keluar</label>
                    <input type="text" name="total_barangmasuk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan total" value="">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Nama Pegawai</label>
                    <textarea class="form-control" name="id_supplier" id="" cols="30" rows="15"> ?></textarea>
                </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo base_url() . 'data-master/barangkeluar'; ?>" class="btn btn-danger">Kembali</a>
        </form>
    </div>
</div>