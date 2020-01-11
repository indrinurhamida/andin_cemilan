<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 font-weight-bold text-grey text-center">Edit Supplier</h1>
    </div>
    <div class="container-fluid">
        <form class="" method="post" action="<?php echo base_url() . 'data-master/supplier/update'; ?>" enctype="multipart/form-data">
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="exampleInputEmail1">ID Supplier</label>
                    <input type="text" name="id_supplier" class="form-control" 
                    id="exampleInputEmail1" aria-describedby="emailHelp" 
                    placeholder="Masukan ID" value="<?php echo $supplier['id_supplier'] ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">

                    <label for="exampleInputEmail1">Nama Supplier</label>
                    <input type="text" name="nama_supplier" class="form-control" 
                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama" 
                    value="<?php echo $supplier['nama_supplier'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">

                    <label for="exampleInputEmail1">Alamat Supplier</label>
                    <input type="text" name="alamat_supplier" class="form-control" 
                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Alamat" 
                    value="<?php echo $supplier['alamat_supplier'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">

                    <label for="exampleInputEmail1">No Hp</label>
                    <input type="number" name="no_hp" class="form-control" 
                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama" 
                    value="<?php echo $supplier['no_hp'] ?>">
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?php echo base_url() . 'data-master/supplier'; ?>" class="btn btn-danger">Kembali</a>
        </form>
    </div>
</div>
