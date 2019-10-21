
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Barang Detail</h1>
    </div>
    <div class="container-fluid">
        <form class="" method="post" action="" enctype="multipart/form-data">

            <div class="form-group row">
                <div class="col-sm-6 mb-6 mb-sm-4">
                    <label for="exampleInputEmail1">ID Barang Detail</label>
                    <input type="text" name="id_barangdetail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan ID" value="" readonly>

                </div>
                
                <div class="col-sm-6 mb-6 mb-sm-4">

                    <label for="exampleInputEmail1">Nama Detail Barang</label>
                    <select name="nama_barangdetail" class="form-control">
                        <?php foreach ($barangdetail as $data) {
                            ?>
                            <option value="<?php echo $data->id_barangdetail ?>"><?php echo $data->nama_barangdetail ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                 <div class="col-sm-6 mb-6 mb-sm-4">

                    <label for="exampleInputEmail1">Harga</label>
                    <input type="text" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama">
                </div>
                <div class="col-sm-6 mb-6 mb-sm-4">
                    <label for="exampleInputEmail1">Rasa</label>
                    <input type="text" name="rasa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan stok">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-6 mb-sm-4">
                    <label for="exampleInputEmail1">Berat</label>
                    <input type="text" name="berat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan deskripsi">
                </div>

            </div>
            <div class="col-sm-6 mb-3 mb-sm-0">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url() . 'index.php/data-master/barangdetail'; ?>" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>