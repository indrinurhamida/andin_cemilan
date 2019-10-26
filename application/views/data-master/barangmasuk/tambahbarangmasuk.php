
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Barang Masuk</h1>
    </div>
    <div class="container-fluid">
        <form class="" method="post" action="<?php echo base_url() . 'data-master/barangmasuk/tambah_aksi'; ?>">
            <div class="form-group row">
                <div class="col-sm-6 mb-6 mb-sm-4">
                    <label for="exampleInputEmail1">ID Barang Masuk</label>
                    <input type="text" name="id_barangmasuk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan ID" value="<?= $kode ?>" readonly>

                </div>
                <div>
                    <label for="exampleInputEmail1">Tanggal Barang Masuk</label>
                    <input type="text" name="tgl_barangmasuk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Tanggal Barang Masuk">
                </div>
            </div>
            <div class="form-group row">
                 <div class="col-sm-6 mb-6 mb-sm-4">
                    <label for="exampleInputEmail1">Total Barang Masuk</label>
                    <input type="text" name="total_barangmasuk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Total Barang Masuk">
                  
                </div>
                <div class="col-sm-6 mb-6 mb-sm-4">
                  <label for="exampleInputEmail1">ID Supplier</label>
                    <input type="text" name="id_supplier" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan ID Supplier">  
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-6 mb-sm-4">
                    <label for="exampleInputEmail1">ID Pegawai</label>
                    <input type="text" name="id_pegawai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan ID Pegawai">
                </div>

            </div>
            <div class="col-sm-6 mb-3 mb-sm-0">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url() . 'data-master/barangmasuk'; ?>" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>