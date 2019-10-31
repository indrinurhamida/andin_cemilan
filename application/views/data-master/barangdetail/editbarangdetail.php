<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Barang Detail</h1>
    </div>
    <div class="container-fluid">
        <form class="" method="post" action="<?php echo base_url() . 'data-master/barangdetail/update'; ?>" enctype="multipart/form-data">
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">ID Barang</label>
                    <input type="text" name="id_barang" class="form-control" 
                    id="exampleInputEmail1" aria-describedby="emailHelp" 
                    placeholder="Masukan ID" value="<?php echo $barangdetail['id_barangdetail'] ?>" readonly>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">

                    <label for="exampleInputEmail1">Nama Barang Detail</label>
                    <input type="text" name="nama_barangdetail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama" value="<?php echo $barangdetail['nama_barangdetail'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Harga</label>
                    <input type="number" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="stok" value="<?= $barangdetail['harga'] ?>">
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Berat</label>
                    <input type="number" name="berat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="stok" value="<?= $barangdetail['berat'] ?>">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Rasa</label>
                    <input type="text" name="rasa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="stok" value="<?= $barangdetail['rasa'] ?>">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo base_url() . 'data-master/barang'; ?>" class="btn btn-danger">Kembali</a>
        </form>
    </div>
    <div>
</div>
