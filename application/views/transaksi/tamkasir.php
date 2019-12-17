
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="card card-body">
          <form class="form-horizontal" action="">
            <div class="form-group">
              <label class="control-label" for="email">tanggal :</label>
                <input type="email" class="form-control" id="" placeholder="<?php echo date("d/m/Y"); ?>" name="" readonly>
            </div>
            <div class="form-group">
              <label class="control-label" for="pwd">karyawan :</label>
                <select name="" class="form-control">
                <option value="">---Option--</option>
                <?php 
                  foreach ($pegawai as $item) {
                ?>
                <option><?= $item->id_pegawai ?> <?= $item->nama_pegawai ?></option>
              <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label class="control-label" for="pwd">member :</label>
                <select name="" class="form-control">
                <option value="">---Option--</option>
                <?php 
                  foreach ($member as $item) {
                ?>
                <option><?= $item->id_member ?> <?= $item->nama_member ?></option>
              <?php } ?>
              </select>
            </div>
          </form>
        </div>
      </div>
      <!-- Tampilan Untuk Mencari Barang di Transaksi -->
      <div class="col-md-6">
        <div class="card card-body">
          <form class="form-horizontal" action="">
            <div class="form-group">
              <label class="control-label" for="email">barang :</label>
              <select name="" class="form-control">
                <option value="">---Option--</option>
                <?php 
                  foreach ($barangdetail as $item) {
                ?>
                <option id="brg" value="<?php echo $item->id_barangdetail ?>"><?= $item->nama_barang .' - '. $item->rasa ?> <?= $item->berat ?> <?= $item->harga ?></option>
              <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label class="control-label" for="pwd">qty :</label>
                <input type="number" class="form-control" id="qty" placeholder="" name="">
                <br>
                <button type="button" class="btn btn-info" id="tambah">tambahkan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
<div class="row">
  <div class="col-md-12">
    <br>
    <!-- Tampilan Untuk Tabel Pembelian -->
    <div class="card card-body">          
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>kode barang</th>
            <th>nama barang</th>
            <th>harga satuan</th>
            <th>qty</th>
            <th>total</th>
            <th>aksi</th>
          </tr>
        </thead>
        <tbody id="tr">
        </tbody>
      </table>
    </div>
    <br>
    <!-- Tampilan Untuk Uang Bayar -->
<div class="card">
  <form class="form-horizontal" action="">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Subtotal :</label>
      <div class="col-sm-5">
        <input type="email" class="form-control" id="" placeholder="" name="" readonly>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">bayar :</label>
      <div class="col-sm-5">          
        <input type="password" class="form-control" id="" placeholder="" name="">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">kembalian :</label>
      <div class="col-sm-5">          
        <input type="password" class="form-control" id="" placeholder="" name="" readonly>
    </div>
    </div>
  </form>
  <br>
  <button type="button" class="btn btn-danger">Batal</button>
  <button type="button" class="btn btn-success">Simpan dan Cetak</button>
</div>

  </div>
</div>
<script>
  $(document).ready(function(){ 
    var num = 1
    $("#tambah").click(function(){
      var kode = document.getElementById("brg").value
        $.ajax({
        type : 'post',
        url  : 'transaksi/kode_barang',
        data : { "kode_barang" : kode},
        success: function(response) {
          var response = JSON.parse(response)
            var qty = document.getElementById("qty").value
            var kode = response.id_barangdetail;
            var nama = response.nama_barang
            var harga = response.harga 
            var total = response.harga*qty
            if( num > 0 ){
            $("#tr").append(`
              <tr id="`+num+`">
              <td>`+num+`</td>
              <td>`+kode+`</td>
              <td>`+nama+`</td>
              <td>`+harga+`</td>
              <td>`+qty+`</td>
              <td>`+total+`</td>
                <td>
                  <button type="button" class="btn btn-danger">Hapus</button>
                </td>
              </tr>
              `)
            num = num + 1
            }
          }
        })
      })    
})
</script>
