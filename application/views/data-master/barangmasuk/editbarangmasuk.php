
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 font-weight-bold text-grey text-center">Edit Barang Masuk</h1>
    </div>
    <div class="container-fluid">
        <form class="" method="post" action="<?php echo base_url() . 'data-master/barangmasuk/update'; ?>">
            <div class="form-group row">
                <div class="col-sm-6 mb-6 mb-sm-4">
                    <label for="exampleInputEmail1">ID Barang Masuk</label>
                    <input type="text" name="id_barangmasuk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan ID" value="<?php echo $barangmasuk['id_barangmasuk'] ?>" readonly>

                </div>
                <div class="col-sm-6 mb-6 mb-sm-4">
                    <label for="exampleInputEmail1">Tanggal Barang Masuk</label>
                    <input type="date" name="tgl_masuk" class="form-control" id="exampleInputEmail1" value="<?php echo $barangmasuk["tgl_masuk"]?>">
                </div>
            </div>
            <div class="form-group row">
            <div class="col-sm-6 mb-6 mb-sm-4">
                 <label for="exampleInputEmail1">ID_Supplier</label>
                    <select name="id_supplier" class="form-control" required>
                        <option value="">-- Pilih Supplier --</option>
                        <?php
                        foreach ($supplier as $v) {
                        $selected = ($v->id_supplier == $barangmasuk['id_supplier']) ? "selected" : "";
                        ?>
                        <option value="<?php echo $v->id_supplier ?>" <?php echo $selected ?> ><?php echo $v->nama_supplier ?></option>}
                        
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="col-sm-6 mb-6 mb-sm-4">
                     <label for="exampleInputEmail1">ID_Barang</label>
                    <select name="id_barang" class="form-control" required>
                        <option value="">-- Pilih Barang --</option>
                        <?php
                        foreach ($barang as $v) {
                        $selected = ($v->id_barang == $barangmasuk['id_barang']) ? "selected" : "";
                        ?>
                        <option value="<?php echo $v->id_barang ?>" <?php echo $selected?>><?php echo $v->nama_barang ?> <?php echo $v->rasa ?></option>}
                        
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-6 mb-sm-4">
                     <label for="exampleInputEmail1">ID_Pegawai</label>
                    <select name="id_pegawai" class="form-control" required>
                        <option value="">-- Pilih Pegawai --</option>
                        <?php
                        foreach ($pegawai as $v) {
                        $selected = ($v->id_pegawai == $barangmasuk['id_pegawai']) ? "selected" : "";
                        ?>
                        <option value="<?php echo $v->id_pegawai ?>" <?php echo $selected ?>><?php echo $v->nama_pegawai ?></option>}
                        
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="col-sm-6 mb-6 mb-sm-4">
                    <label for="exampleInputEmail1">Berat</label>
                    <input type="number" name="berat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Berat" value="<?= $barangmasuk['berat'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-6 mb-sm-4">
                    <label for="exampleInputEmail1">Harga Beli</label>
                    <input type="number" name="harga_beli" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Harga Beli" value="<?= $barangmasuk['harga_beli'] ?>">
                </div>

            </div>
            <div class="col-sm-6 mb-3 mb-sm-0">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url() . 'data-master/barangmasuk'; ?>" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>
