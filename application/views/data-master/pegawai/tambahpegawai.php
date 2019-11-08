
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Pegawai</h1>
    </div>
    <div class="container-fluid">
        <form class="" method="post" action="<?php echo base_url() . 'data-master/pegawai/tambah_aksi'; ?>" enctype="multipart/form-data">

            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">ID Pegawai</label>
                    <input type="text" name="id_pegawai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan ID" value="<?= $kode ?>"readonly>

                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Nama Pegawai</label>
                    <input type="text" name="nama_pegawai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama">
                </div>
            </div>
            <div class="form-group row">
                 <div class="col-sm-6 mb-6 mb-sm-0">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Alamat">
                  
                </div>
                <div class="col-sm-6 mb-6 mb-sm-0">
                  <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Email">  
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-6 mb-sm-4">
                    <label for="exampleInputEmail1">No Hp</label>
                    <input type="number" name="no_hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan no telepon">
                </div>

            </div>
            <div class="col-sm-6 mb-3 mb-sm-0">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url() . 'data-master/pegawai'; ?>" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>
