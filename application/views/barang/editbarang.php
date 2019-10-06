<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Barang</h1>
    </div>
    <div class="container-fluid">
        <form class="" method="post" action="<?php echo base_url() . 'index.php/barang/update'; ?>" enctype="multipart/form-data">
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">ID Barang</label>
                    <input type="text" name="id_barangdetail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan ID" value="<?= $barang['id_barangdetail'] ?>" readonly>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">

                    <label for="exampleInputEmail1">Jenis Barang</label>
                    <select name="id_barangdetail" class="form-control">
                        <?php
                        foreach ($data_barangdetail as $b) {
                            echo "<option value='$b->nama_barangdetail'";
                            echo $barang['nama_barangdetail'] == $b->nama_barangdetail ? 'selected' : '';
                            echo ">$b->nama_barangdetail</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
                <div class="col-sm-6 mb-3 mb-sm-0">

                    <label for="exampleInputEmail1">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama" value="<?= $barang['nama_barang'] ?>">
                </div>

            </div>
            <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Stok</label>
                    <input type="text" name="stok" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Stok" value="<?= $barang['stok'] ?>">
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">

                    <label for="exampleInputEmail1">Harga</label>
                    <input type="text" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan harga" value="<?= $barang['harga'] ?>">
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                     <div class="col-sm-4 mb-3 mb-sm-0">

                    <label for="exampleInputEmail1">Berat</label>
                    <input type="text" name="berat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan berat">
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">

                    <label for="exampleInputEmail1">Rasa</label>
                    <input type="text" name="rasa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan rasa">
                </div>

            </div>

            </div>
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="" cols="30" rows="15"><?= $barang['deskripsi'] ?></textarea>
                </div>

            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo base_url() . 'index.php/barang'; ?>" class="btn btn-danger">Kembali</a>
        </form>
    </div>
</div>