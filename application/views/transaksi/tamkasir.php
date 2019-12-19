
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
    </div>
<form action="<?php echo base_url()."transaksi/add"?>" method="post" accept-charset="utf-8">
    <div class="row">
      <div class="col-md-6">
        <div class="card card-body">
            <div class="form-group">
              <label class="control-label" for="email">tanggal :</label>
                <input type="email" class="form-control" id="" placeholder="<?php echo date("d/m/Y"); ?>" name="tgl_transaksi" readonly>
            </div>
            <div class="form-group">
              <label class="control-label" for="pwd">karyawan :</label>
                <select name="id_pegawai" class="form-control">
                <option value="">---Option--</option>
                <?php 
                  foreach ($pegawai as $item) {
                ?>
                <option value="<?= $item->id_pegawai ?>"> <?= $item->nama_pegawai ?></option>
              <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label class="control-label" for="pwd">member :</label>
                <select name="id_member" class="form-control">
                <option value="">---Option--</option>
                <?php 
                  foreach ($member as $item) {
                ?>
                <option value="<?= $item->id_member ?>"> <?= $item->nama_member ?></option>
              <?php } ?>
              </select>
            </div>
        </div>
      </div>
      <!-- Tampilan Untuk Mencari Barang di Transaksi -->
      <div class="col-md-6">
        <div class="card card-body">
            <div class="form-group">
              <label class="control-label" for="email">barang :</label>
              <select name=""  id="brg" class="form-control">
                <option value="">---Option--</option>
                <?php 
                  foreach ($barangdetail as $item) {
                ?>
                <option value="<?php echo $item->id_barangdetail ?>"><?= $item->nama_barang .' - '. $item->rasa ?> <?= $item->berat ?> <?= $item->harga ?></option>
              <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label class="control-label" for="pwd">qty :</label>
                <input type="number" class="form-control" id="qty" placeholder="" name="">
                <br>
                <button type="button" class="btn btn-info" id="tambah">tambahkan</button>
            </div>
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
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Subtotal :</label>
      <div class="col-sm-5">
        <input type="email" class="form-control subs" id="subtotal" placeholder="" name="" readonly>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Bayar</label>
      <div class="col-sm-5">          
        <input type="number" class="form-control" id="bayar" placeholder="Rp." name="jumlah_bayar">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Kembalian :</label>
      <div class="col-sm-5">          
        <input type="number" class="form-control" id="kembali" placeholder="" name="kembalian" readonly>
    </div>
    </div>
  <br>
  <button type="submit" class="btn btn-success">Simpan dan Cetak</button>
  <a href="<?php echo base_url() . 'transaksi/tamkasir'; ?>" class="btn btn-danger">Batal</a>
</div>
  </div>
</form>
</div>
<script>
  $(document).ready(function(){ 
    var subtotal = 0
    var num = 1
    $("#tambah").click(function(){
      var kode = document.getElementById("brg").value
        $.ajax({
        type : 'post',
        url  : 'transaksi/kode_barang',
        data : { "kode_barang" : kode},
        success: function(response) {
            $.each(JSON.parse(response), function(key, value){
              var qty = document.getElementById("qty").value
              var kode = value.id_barangdetail
              var nama = value.nama_barang
              var harga = value.harga 
              var total = value.harga * qty
              subtotal += total
              
                if( num > 0 ){
                $("#tr").append(`
                  <tr id="${num}">
                  <td>${num}</td>
                  <td>${kode}</td>
                  <td>${nama}</td>
                  <td>${harga}</td>
                  <td>${qty}</td>
                  <td>${total}</td>
                    <td>
                      <button type="button" class="btn btn-danger">Hapus</button>
                    </td>
                  </tr>
                  `)
              num = num + 1
              }
            })
        $(".subs").val(subtotal)
          }
        })
      })

    $("#bayar").keyup(function(){
      var subtotal = $(".subs").val()
      var bayar = $("#bayar").val()
      var kembali = bayar - subtotal

      $("#kembali").val(kembali)
    })
})
</script>
