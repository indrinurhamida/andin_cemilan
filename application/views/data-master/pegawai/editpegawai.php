<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Pegawai</h1>
    </div>
    <div class="container-fluid">
        <form class="" method="post" action="" enctype="multipart/form-data">
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">ID Pegawai</label>
                    <input type="text" name="id_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan ID" value="" readonly>
                </div>
            </div>
                <div class="col-sm-6 mb-3 mb-sm-0">

                    <label for="exampleInputEmail1">Nama Pegawai</label>
                    <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama" value="">
                </div>

            </div>
            <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" name="stok" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Stok" value="">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Email</label>
                    <textarea class="form-control" name="deskripsi" id="" cols="30" rows="15"> ?></textarea>
                </div>
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">No.hp</label>
                  <div class="form-group row">
                <div class="form-group row">
                

  <textarea class="form-control" name="deskripsi" id="" cols="30" rows="15"></textarea>
                </div>
            <div class="form-<div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Email</label>
                    <textarea class="form-control" name="deskripsi" id="" cols="30" rows="15"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo base_url() . 'index.php/pegawai'; ?>" class="btn btn-danger">Kembali</a>
        </form>
    </div>
</div>