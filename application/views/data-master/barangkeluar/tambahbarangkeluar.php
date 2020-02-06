
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="card card-body">
            <div class="col-sm-12">
                <form class="form-horizontal" action="">
                    <h1 class="h3 font-weight-bold text-grey text-center">Tambah Barang Keluar</h1>
                </form>
            </div>
        </div>
    </div>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="card card-body">
    <div class="container-fluid">
        <form class="" method="post" action="<?php echo base_url() . 'data-master/barangkeluar/tambah_aksi'; ?>" enctype="multipart/form-data">
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">ID Barang Keluar</label>
                    <input type="text" name="id_barangkeluar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan ID" value="<?= $kode ?>" readonly>
                </div>
            
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Nama Barang</label>
                    <input type="text" name="nama_barangkeluar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Barang" value="">
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col-sm-6 mb-6 mb-sm-0">
                    <label for="exampleInputEmail1">Rasa Barang</label>
                    <select name="id_rasa" class="form-control" required>
                        <option value="">-- Pilih Rasa --</option>
                        <?php
                        foreach ($rasa as $value) {
                        ?>
                        <option value="<?= $value->id_rasa ?>"><?php echo $value->nama_rasa ?></option>}
                        
                        <?php
                        }
                        ?>
                    </select>
                </div>
            
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Tanggal Keluar</label>
                    <input type="date" name="tgl_keluar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan tanggal" value="">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Stok</label>
                    <input type="text" name="stok" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Stok">
                </div>

                <!--div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Barang Detail</label>
                    <input type="text" name="id_barangdetail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Barang Detail" value="">
                </div-->
            </div>

                <div class="col-sm-6 mb-6 mb-sm-0">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url() . 'data-master/barangkeluar'; ?>" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>