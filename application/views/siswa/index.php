<div class="container">

<div class="row mt-4 mb-3">
  <div class="col-md-6">
  <a href="<?= base_url().'siswa/tambah'; ?>" class="btn btn-primary">Tambah Data</a>
  </div>
</div>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NAMA</th>
        <th scope="col">ALAMAT</th>
        <th scope="col">NIM</th>
        <th scope="col">ACTION</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($siswa as $data) : ?>
      <tr>
        
        <td><?= $data['id'] ?></td>
        <td><?= $data['nama'] ?></td>
        <td><?= $data['alamat'] ?></td>
        <td><?= $data['nim'] ?></td>
        <td>
          <a href="<?= base_url(); ?>siswa/hapus/<?= $data['id'] ;?>"
            class="btn btn-danger float-right"
            onClick="return confirm('yakin mau hapus');"
          > 
            <i class="fa fa-trash" aria-hidden="true"></i>
          </a>
          <a href="<?= base_url(); ?>siswa/edit/<?= $data['id'] ;?>"
              class="btn btn-warning float-right mr-2"  
          >
            <i class="fa fa-pencil" aria-hidden="true"></i>
          </a>
          <a href="<?= base_url(); ?>siswa/detail/<?= $data['id'] ;?>"
            class="btn btn-primary float-right mr-2"  
          >
            <i class="fa fa-eye" aria-hidden="true"></i>
          </a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
