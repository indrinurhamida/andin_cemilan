<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Barang</h1>
    </div>
    <div class="container-fluid">
        <form class="" method="post" action="<?php echo base_url() . 'data-master/barang/update'; ?>" enctype="multipart/form-data">
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">ID Barang</label>
                    <input type="text" name="id_barang" class="form-control" 
                    id="exampleInputEmail1" aria-describedby="emailHelp" 
                    placeholder="Masukan ID" value="<?php echo $barang['id_barang'] ?>" readonly>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">

                    <label for="exampleInputEmail1">Nama Detail Barang</label>
                    <select name="id_barangdetail" class="form-control">
                        <?php
                        foreach ($data_barangdetail as $d) {
                            echo "<option value='$d->id_barangdetail'";
                            echo $barang['id_barangdetail'] == $d->id_barangdetail ? 'selected' : '';
                            echo ">$d->nama_barangdetail</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">

                    <label for="exampleInputEmail1">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" 
                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama" 
                    value="<?php echo $barang['nama_barang'] ?>">
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Stok</label>
                    <input type="text" name="stok" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Stok" value="<?= $barang['stok'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="" cols="30" rows="5"><?= $barang['deskripsi'] ?></textarea>
                </div>

            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo base_url() . 'data-master/barang'; ?>" class="btn btn-danger">Kembali</a>
        </form>
    </div>
</div>