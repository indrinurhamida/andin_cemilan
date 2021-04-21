
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="card card-body">
            <div class="col-sm-12">
                <form class="form-horizontal" action="">
                    <h1 class="h3 font-weight-bold text-grey text-center">Tambah Member</h1>
                </form>
            </div>
        </div>
    </div>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="card card-body">
    <div class="container-fluid">
        <form class="" method="post" action="<?php echo base_url() . 'data-master/member/tambah_aksi'; ?>" enctype="multipart/form-data">

            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">ID Member</label>
                    <input type="text" name="id_member" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan ID" value="<?= $kode ?>" readonly>
                </div>
                 <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Nama member</label>
                    <input type="text" name="nama_member" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama">
                </div>
            </div>
            <div class="form-group row">
                 <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan email">
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan alamat">
                </div>

                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">No Hp</label>
                    <input type="number" name="no_hp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nomor hp">
                </div>
            </div>

            <div class="col-sm-6 mb-6 mb-sm-0">
                <button type="button" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url() . 'data-master/member'; ?>" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>
