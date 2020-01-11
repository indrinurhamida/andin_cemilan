
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 font-weight-bold text-grey text-center">Tambah Supplier</h1>
    </div>
    <div class="container-fluid">
        <form class="" method="post" action="<?php echo base_url() . 'data-master/supplier/tambah_aksi'; ?>" enctype="multipart/form-data">

            <div class="form-group row">
                <div class="col-sm-6 mb-6 mb-sm-4">
                    <label for="exampleInputEmail1">ID Supplier</label>
                    <input type="text" name="id_supplier" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan ID" value="<?= $kode ?>" readonly>
                </div>
                 <div class="col-sm-6 mb-6 mb-sm-4">
                    <label for="exampleInputEmail1">Nama Supplier</label>
                    <input type="text" name="nama_supplier" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-6 mb-sm-4">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" name="alamat_supplier" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan alamat">
                </div>

                <div class="col-sm-6 mb-6 mb-sm-4">
                    <label for="exampleInputEmail1">No Hp</label>
                    <input type="text" name="no_hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nomor hp">
                </div>
            </div>

            <div class="col-sm-6 mb-6 mb-sm-0">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url() . 'data-master/daftarsupplier'; ?>" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>
