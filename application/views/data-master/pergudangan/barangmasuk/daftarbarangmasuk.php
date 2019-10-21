<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Barang Masuk</h1>
    </div>
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?php echo base_url() . 'index.php/data-master/pergudangan/barangmasuk/tambah'; ?>" class="btn btn-primary">Tambah Data</a>
    </div>
    <div class="card-body">
            <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr style="text-align:center">
                            <th>ID Barang Masuk</th>
                            <th>Tanggal Barang Masuk</th>
                            <th>Total Barang Masuk</th>
                            <th>ID Supplier</th>
                            <th>ID Pegawai</th>
                            <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                        

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="<?php echo base_url() . 'index.php/barang/edit'; ?>" 
                                            class="btn btn-success">Edit</a>
                                    <a href="" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
