<!-- /.content-header -->
<div class="fixed-card mt-3">
  <div class="row me-0">

    <div class="col-md-12 mx-auto">
      <div class="card shadow-sm mb-0 ">
        <div class="card-header mb-0 d-flex justify-content-between">
          <h3 class="text-themecolor"><?= $data['title']; ?></h3>
          <a href="#addModal" data-bs-toggle="modal" class="btn btn-primary">Tambah Data <i class="fa-solid fa-plus ms-2"></i></a>
        </div>

        <div class="card-body" data-bind="with: material">
          <div class="row">
            <div class="col-lg-12">
              <div class="table-responsive">
                <table id="myTable" class="table table-bordered table-striped table-hover w-100">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Prodi</th>
                      <th>Semester</th>
                      <th>Status</th>
                      <th>Created At</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data['dt_mahasiswa'] as $key => $mahasiswa) { ?>
                      <tr>
                        <td><?= $key + 1; ?></td>
                        <td><?= $mahasiswa['nim']; ?></td>
                        <td><?= $mahasiswa['nama']; ?></td>
                        <td><?= $mahasiswa['prodi']; ?></td>
                        <td><?= $mahasiswa['semester']; ?></td>
                        <td><?= $mahasiswa['status']; ?></td>
                        <td><?= $mahasiswa['created_at']; ?></td>
                        <td>
                        <a href="#editModal-<?= $mahasiswa['id']; ?>" data-bs-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"><i class="fa-solid fa-pen-to-square"></i></span></a>
                        <a onclick="return confirm('Apakah yakin data akan di hapus?')" href="<?= BASEURL; ?>/mahasiswa/delete/<?= $mahasiswa['id']; ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"><i class="fa-solid fa-trash"></i></span></a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
      </div> <!-- end card-body -->
    </div> <!-- end card -->
  </div> <!-- end col-md-10 -->
</div>

<!-- Insert -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="post" action="<?= BASEURL; ?>/mahasiswa/simpan" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah <?= $data['title']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="nim" class="form-label">NIM</label>
          <input type="text" class="form-control" id="nim" name="nim" required>
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
          <label for="prodi" class="form-label">Prodi</label>
          <input type="number" class="form-control" id="prodi" name="prodi" required>
        </div>
        <div class="mb-3">
          <label for="semester" class="form-label">Semester</label>
          <input type="number" class="form-control" id="semester" name="semester" required>
        </div>
        <div class="mb-3">
          <label for="status" class="form-label">Status</label>
          <select class="form-select" id="status" name="status" required>
            <option value="Hadir">Hadir</option>
            <option value="Izin">Izin</option>
            <option value="Sakit">Sakit</option>
            <option value="Alfa">Alfa</option>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>

<!-- Update -->
<?php foreach ($data['dt_mahasiswa'] as $mhs): ?>
<div class="modal fade" id="editModal-<?= $mhs['id']; ?>" tabindex="-1">
  <div class="modal-dialog">
    <form method="post" action="<?= BASEURL; ?>/mahasiswa/update/<?= $mhs['id']; ?>" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit <?= $data['title']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="nim" class="form-label">NIM</label>
          <input type="text" class="form-control" name="nim" value="<?= $mhs['nim']; ?>" required>
        </div>
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" value="<?= $mhs['nama']; ?>" required>
        </div>
        <div class="mb-3">
          <label for="prodi" class="form-label">Prodi</label>
          <input type="number" class="form-control" name="prodi" value="<?= $mhs['prodi']; ?>" required>
        </div>
        <div class="mb-3">
          <label for="semester" class="form-label">Semester</label>
          <input type="number" class="form-control" name="semester" value="<?= $mhs['semester']; ?>" required>
        </div>
        <div class="mb-3">
          <label for="status" class="form-label">Status</label>
          <select class="form-select" name="status" required>
            <option value="Hadir" <?= $mhs['status']=='Hadir'?'selected':''; ?>>Hadir</option>
            <option value="Izin" <?= $mhs['status']=='Izin'?'selected':''; ?>>Izin</option>
            <option value="Sakit" <?= $mhs['status']=='Sakit'?'selected':''; ?>>Sakit</option>
            <option value="Alfa" <?= $mhs['status']=='Alfa'?'selected':''; ?>>Alfa</option>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Edit</button>
      </div>
    </form>
  </div>
</div>
<?php endforeach; ?>
