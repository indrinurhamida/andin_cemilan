
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 font-weight-bold text-grey text-center">Tambah Barang Detail</h1>
    </div>
    <div class="container-fluid">
        <form class="" method="post" action="<?php echo base_url() . 'data-master/barangdetail/tambah_aksi'; ?>">
            <div class="form-group row">
                <div class="col-sm-6 mb-6 mb-sm-0">
                    <label for="exampleInputEmail1">ID Barang Detail</label>
                    <input type="text" name="id_barangdetail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan ID" value="<?= $kode ?>" readonly>
                </div>
                <div class="col-sm-6 mb-6 mb-sm-0">
                    <label for="exampleInputEmail1">ID Barang</label>
                    <select name="id_barang" class="form-control" required>
                        <option value="">-- Pilih Barang --</option>
                        <?php
                        foreach ($barangdetail as $value) {
                        ?>
                        <option value="<?php echo $value->id_barang ?>"><?php echo $value->nama_barang, $value->rasa ?></option>}
                        
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                 <div class="col-sm-6 mb-6 mb-sm-0">
                    <label for="exampleInputEmail1">Berat</label>
                    <select name="berat" class="form-control" required>
                        <option value="">-- Pilih Berat --</option>
                        <?php
                            $berat = array("50g","500 g","1000 g");
                            foreach ($berat as $v) {
                        ?>
                        <option><?= $v?></option>
                    <?php }?>
                    </select>
                </div>
                <div class="col-sm-6 mb-6 mb-sm-0">
                    <label for="exampleInputEmail1">Harga</label>
                    <input type="text" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Harga">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-6 mb-sm-0">
                    <label for="exampleInputEmail1">Stok</label>
                    <input type="text" name="stok" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Stok">
                </div>
            </div>

            <div class="col-sm-6 mb-3 mb-sm-0">
                <button typpe="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url() . 'data-master/barangdetail'; ?>" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>
