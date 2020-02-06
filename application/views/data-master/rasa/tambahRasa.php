<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="card card-body">
            <div class="col-sm-12">
                <form class="form-horizontal" action="">
                    <h1 class="h3 font-weight-bold text-grey text-center">Tambah Rasa</h1>
                </form>
            </div>
        </div>
    </div>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="card card-body">
    <div class="container-fluid">
        <form class="" method="post" action="<?php echo base_url() . 'data-master/rasa/tambah_aksi'; ?>" enctype="multipart/form-data">

            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">ID Rasa</label>
                    <input type="text" name="id_rasa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Rasa" value="<?= $kode ?>" readonly>
                </div>
                 <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">Nama Rasa</label>
                    <input type="text" name="nama_rasa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama rasa">
                </div>
            </div>
            <div class="col-sm-6 mb-6 mb-sm-0">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url() . 'data-master/rasa'; ?>" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
</div>

