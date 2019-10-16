
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Barang</h1>
    </div>
    <div class="container-fluid">
        <form class="" method="post" action="<?php echo base_url() . 'index.php/data-master/barang/tambah_aksi'; ?>" enctype="multipart/form-data">

            <div class="form-group row">
                <div class="col-sm-6 mb-6 mb-sm-4">
                    <label for="exampleInputEmail1">ID Barang</label>
                    <input type="text" name="id_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan ID" value="<?= $kode ?>" readonly>
<<<<<<< HEAD
=======

                </div>
                
                <div class="col-sm-6 mb-6 mb-sm-4">

                    <label for="exampleInputEmail1">Detail Barang</label>
                    <select name="id_barangdetail" class="form-control">
                        <?php foreach ($barangdetail as $data) {
                            ?>
                            <option value="<?php echo $data->id_barangdetail ?>"><?php echo $data->nama_barangdetail ?></option>
                        <?php } ?>
                    </select>
>>>>>>> 9c89354a11873e44d95b0c26df91765007e14bdd
                </div>
            </div>
            <div class="form-group row">
                 <div class="col-sm-6 mb-6 mb-sm-4">

                    <label for="exampleInputEmail1">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama">
                </div>
                <div class="col-sm-6 mb-6 mb-sm-4">
                    <label for="exampleInputEmail1">Stok</label>
                    <input type="text" name="stok" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan stok">
                </div>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
                
>>>>>>> 9c89354a11873e44d95b0c26df91765007e14bdd
=======
                
>>>>>>> 9c89354a11873e44d95b0c26df91765007e14bdd
=======
                
>>>>>>> 9c89354a11873e44d95b0c26df91765007e14bdd

            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-6 mb-sm-4">
                    <label for="exampleInputEmail1">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan deskripsi">
                </div>

            </div>
            <div class="col-sm-6 mb-3 mb-sm-0">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url() . 'index.php/barang'; ?>" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>