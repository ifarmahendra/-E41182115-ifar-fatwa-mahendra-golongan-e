<div class="container-fluid">
<h3><i class="fas fa-edit"></i>EDIT DATA TAGIHAN</h3>

<?php foreach($listrik as $lst) : ?>

<form method="post" action="<?php echo base_url(). 'admin/data_tagihan/update' ?>">

 <div class="for-group">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" value="<?php echo $lst->nama ?>">
</div>
<div class="for-group">
    <label>Nomer Meteran</label>
    <input type="hidden" name="id_listrik" class="form-control" value="<?php echo $lst->id_listrik ?>">
    <input type="text" name="nomer_meteran" class="form-control" value="<?php echo $lst->nomer_meteran ?>">
</div>
<div class="for-group">
    <label>Bulan</label>
    <input type="text" name="bulan" class="form-control" value="<?php echo $lst->bulan ?>">
</div>
<div class="for-group">
    <label>Total Tagihan</label>
    <input type="text" name="total_tagihan" class="form-control" value="<?php echo $lst->total_tagihan ?>">

    <button type="submit" class="btn btn-primary btn-sm mt-3">SIMPAN</button>

</form>

  <?php endforeach; ?>
</div>
</div>

</div>

<!-- dihalaman ini berfungsi untuk menampilkan data yang akan di edit nantinya. halaman akan keluar setelah menekan tomboh edit pada halaman data tagihan -->