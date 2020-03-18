<div class="container-fluid">
<div class="col-md-8 p-5 pt-2">
          <h3><i class="fas fa-database"></i> LIST DATA TAGIHAN </h3><hr>
<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_data"><i class="fas fa-plus fa-sm"></i> Tambah Data</button>

          <table class="table table-bordered">
              <tr>
                  <th>NO</th>
                  <th>NAMA</th>
                  <th>NOMER METERAN</th>
                  <th>BULAN</th>
                  <th>TOTAL TAGIHAN</th>
                  <th colspan="2">AKSI</th>
                </tr>

                <?php
                $no=1;
                foreach($listrik as $lst) : ?>

                <tr>
                    <td><?php echo $no++  ?></td>
                    <td><?php echo $lst->nama ?></td>
                    <td><?php echo $lst->nomer_meteran ?></td>
                    <td><?php echo $lst->bulan ?></td>
                    <td><?php echo $lst->total_tagihan ?></td>
                    <td><?php echo anchor('admin/data_tagihan/edit/' .$lst->id_listrik, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
                    <td><?php echo anchor('admin/data_tagihan/hapus/' .$lst->id_listrik,'<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>

                </tr>

                <?php endforeach; ?>

          </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?php echo base_url(). 'admin/data_tagihan/tambah_aksi';?>" method="post" >

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="form-group">
            <label>Nomer Meteran</label>
            <input type="text" name="nomer_meteran" class="form-control">
        </div>
        <div class="form-group">
            <label>Bulan</label>
            <input type="text" name="bulan" class="form-control">
        </div>
        <div class="form-group">
            <label>Total Tagihan</label>
            <input type="text" name="total_tagihan" class="form-control">
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">BATAL</button>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
      </div>

      </form>

    </div>
  </div>  
</div>

<!-- dihalaman data tagihan ini merupakan halaman admin yang berfungsi menampilkan tampilan data dan juga untuk menambahkan datanya -->