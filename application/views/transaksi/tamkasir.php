
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 font-weight-bold text-grey text-center">Transaksi</h1>
    </div>
<form action="<?php echo base_url()."transaksi/add"?>" method="post" accept-charset="utf-8">
    <div class="row">
      <div class="col-md-6">
        <div class="card card-body">
            <div class="form-group">
              <label class="control-label" for="email">ID Transaksi</label>
                <input type="email" class="form-control" id="" value="<?= $kode1 ?>" name="id_transaksi" readonly>
            </div>
            <div class="form-group">
              <label class="control-label" for="pwd">Pegawai</label>
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
              <label class="control-label" for="pwd">Member</label>
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
              <label class="control-label" for="email">Tanggal Transaksi</label>
              <input type="date" class="form-control" id="" placeholder="<?php echo date("d/m/y"); ?>" name="tgl_transaksi">
            </div>
            <div class="form-group">
              <label class="control-label" for="email">Barang</label>
              <select name="id_barangdetail"  id="brg" class="form-control">
                <option value="">---Option--</option>
                <?php 
                  foreach ($barangdetail as $item) {
                ?>
                <option value="<?php echo $item->id_barangdetail ?>"> <?= $item->nama_barang .' - '. $item->rasa ?> <?= $item->berat ?> <?= $item->harga ?></option>
              <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label class="control-label" for="pwd">Qty</label>
                <input type="number" class="form-control" id="qty" placeholder="" name="qty">
                <br>
                <button type="button" class="btn btn-info" id="tambah">Tambahkan</button>
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
            <th>No</th>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Harga Satuan</th>
            <th>QTY</th>
            <th>Total</th>
            <th>Aksi</th>
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
      <label class="control-label col-sm-2" for="email">Sub Total</label>
      <div class="col-sm-5">
        <input type="email" class="form-control subs" id="subtotal" placeholder="" name="total" readonly>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Bayar</label>
      <div class="col-sm-5">          
        <input type="number" class="form-control" id="bayar" placeholder="Rp." name="jumlah_bayar">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Kembalian</label>
      <div class="col-sm-5">          
        <input type="number" class="form-control" id="kembali" placeholder="" name="kembalian" readonly>
    </div>
    </div>
  <br>
   <div class="col-sm-6 mb-3 mb-sm-0">
  <button type="submit" class="btn btn-success">Simpan</button>
  <a href="<?php echo base_url() . 'transaksi/tamkasir'; ?>" class="btn btn-danger">Batal</a>
</div>
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
                  <td><input type="hidden" name="id_barangdetail[]" value="${kode}"> ${kode}</td>
                  <td>${nama}</td>
                  <td>${harga}</td>
                  <td><input type="hidden" name="qty[]" value="${qty}">${qty}</td>
                  <td><input type="hidden" name="subtotal[]" value="${total}">${total}</td>
                    <td>
                      <button type="button" id="${num}" class="btn btn-danger hapus">Hapus</button>
                    </td>
                  </tr>
                  `)
              num = num + 1

              $(".hapus").click(function(e){
                e.preventDefault()
                var id = $(this).attr("id")
                $("tr#"+id).remove()
                num--
              })
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
