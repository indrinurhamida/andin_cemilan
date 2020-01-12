<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 font-weight-bold text-grey text-center">Edit Barang Detail</h1>
    </div>
    <div class="container-fluid">
        <form class="" method="post" action="<?php echo base_url() . 'data-master/barangdetail/update'; ?>" enctype="multipart/form-data">
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">ID Barang Detail</label>
                    <input type="text" name="id_barangdetail" class="form-control" 
                    id="exampleInputEmail1" aria-describedby="emailHelp" 
                    placeholder="Masukan ID" value="<?php echo $barangdetail['id_barangdetail'] ?>" readonly>
                </div>
                <div class="col-sm-6 mb-6 mb-sm-0">
                    <label for="exampleInputEmail1">ID Barang</label>
                    <select name="id_barang" class="form-control" required>
                        <option value="">-- Pilih Barang --</option>
                        <?php
                        foreach ($ambil_barangdetail as $v) {
                            $kode = ($v->id_barang == $barangdetail["id_barang"]) ? "selected" : "";
                        ?>
                        <option value="<?php echo $v->id_barang ?>" <?= $kode?>><?php echo $v->nama_barang ?></option>}
                        
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Harga</label>
                    <input type="number" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Harga" value="<?= $barangdetail['harga'] ?>">
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label>Berat</label>
                    <!--input type="number" name="berat"-->
                    <select name="berat" class="form-control">
                <option value="">---Pilih Berat---</option>
                <?php
                    $berat = array(
                        "50 g","100 g","200 g","300 g","400 g","500 g","1000 g"
                    );
                    foreach($berat as $b){
                        $kode = ($barangdetail["berat"] == $b) ? "selected" : "";
                        ?>
                <option value="<?php echo $b?>"<?= $kode?>><?php echo $b?></option>
                <?php }?>
            </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Stok</label>
                    <input type="number" name="stok" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Stok" value="<?= $barangdetail['stok'] ?>">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo base_url() . 'data-master/barangdetail'; ?>" class="btn btn-danger">Kembali</a>
        </form>
    </div>
    <div>
</div>
