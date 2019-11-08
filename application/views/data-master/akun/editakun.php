<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Akun</h1>
    </div>
    <div class="container-fluid">
        <form class="" method="post" action="<?php echo base_url() . 'data-master/akun/update'; ?>" enctype="multipart/form-data">
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">ID Akun</label>
                    <input type="text" name="id_akun" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan ID" value="<?php echo $akun['id_akun'] ?>" readonly>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama" value="<?php echo $akun['username'] ?>">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="text" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Stok" value="<?php echo $akun['password'] ?>">
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Stok" value="<?php echo $akun['jabatan'] ?>">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Id Pegawai</label>
                    <input type="text" name="id_pegawai" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Stok" value="<?php echo $akun['id_pegawai'] ?>">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo base_url() . 'data-master/akun'; ?>" class="btn btn-danger">Kembali</a>
        </form>
    </div>
</div>
