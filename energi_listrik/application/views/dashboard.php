<div class="container-fluid">
<div class="col-md-8 p-5 pt-2">
          <h3><i class="fas fa-dollar-sign mr-2"></i>LIST DATA TAGIHAN</h3><hr>
         
<?php foreach ($listrik as $lst) : ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Nomer Meteran</th>
      <th scope="col">Bulan</th>
      <th scope="col">Total Tagihan</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $lst->id_listrik ?></td>
      <td><?php echo $lst->nama ?></td>
      <td><?php echo $lst->nomer_meteran?></td>
      <td><?php echo $lst->bulan ?></td>
      <td><?php echo $lst->total_tagihan ?></td>
      </tr>
   


<?php endforeach; ?>

<!-- halaman ini merupakan tampilan dashboard user-->

        
          
          

         