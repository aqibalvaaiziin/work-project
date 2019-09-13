<div class="container">
  <div class="row mt-4 mb-3">
    <div class="col-md-6">
      <a href="<?= base_url().'mahasiswa/tambah'; ?>" class="btn btn-primary">Tambah Data</a>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-md-6">
      <h2>Daftar Mahasiswa</h2>
      <ul class="list-group">
        <?php foreach($mahasiswa as $mhs) : ?>
          <li class="list-group-item">
            <?= $mhs['nama'] ?>
            <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id'] ;?>"
              onClick="return confirm('yakin mau hapus');"
              class="btn btn-danger float-right"  
            >
              <i class="fa fa-trash" aria-hidden="true"></i>
            </a>
            <a href="<?= base_url(); ?>mahasiswa/edit/<?= $mhs['id'] ;?>"
              class="btn btn-warning float-right mr-2"  
            >
              <i class="fa fa-pencil" aria-hidden="true"></i>
            </a>
            <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id'] ;?>"
              class="btn btn-primary float-right mr-2"  
            >
            <i class="fa fa-eye" aria-hidden="true"></i>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>