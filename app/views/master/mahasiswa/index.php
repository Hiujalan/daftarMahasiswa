<!-- /.content-header -->
<div class="fixed-card mt-3">
  <div class="row me-0">

    <div class="col-md-11 mx-auto">
      <div class="card shadow-sm mb-0 ">
        <div class="m-2 mb-0 d-flex justify-content-between">
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
                      <th>Nama Mahasiswa</th>
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
                        <td><?= $mahasiswa['semester']; ?></td>
                        <td><?= $mahasiswa['status']; ?></td>
                        <td><?= $mahasiswa['created_at']; ?></td>
                        <td>
                          <a href="#editModal-<?= $mahasiswa['id']; ?>" data-bs-toggle="modal" class="btn btn-warning btn-sm">Edit</a>
                          <a href="#" class="btn btn-danger btn-sm">Delete</a>
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

<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah <?= $data['title']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <form method="post" action="">
              <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" required>
              </div>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
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
            </form>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>

<?php foreach ($data['dt_mahasiswa'] as $key => $mahasiswa) { ?>
  <div class="modal fade" id="editModal-<?= $mahasiswa['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit <?= $data['title']; ?></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <form method="post" action="">
                <div class="mb-3">
                  <label for="nim" class="form-label">NIM</label>
                  <input type="text" class="form-control" value="<?= $mahasiswa['nim']; ?>" id="nim" name="nim" required>
                </div>
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama Mahasiswa</label>
                  <input type="text" class="form-control" id="nama" value="<?= $mahasiswa['nama']; ?>" name="nama" required>
                </div>
                <div class="mb-3">
                  <label for="semester" class="form-label">Semester</label>
                  <input type="number" class="form-control" id="semester" value="<?= $mahasiswa['semester']; ?>" name="semester" required>
                </div>
                <div class="mb-3">
                  <label for="status" class="form-label">Status</label>
                  <select class="form-select" id="status" name="status" required>
                    <option value="Hadir" <?= $mahasiswa['status'] == 'Hadir' ? 'selected' : ''; ?>>Hadir</option>
                    <option value="Izin" <?= $mahasiswa['status'] == 'Izin' ? 'selected' : ''; ?>>Izin</option>
                    <option value="Sakit" <?= $mahasiswa['status'] == 'Sakit' ? 'selected' : ''; ?>>Sakit</option>
                    <option value="Alfa" <?= $mahasiswa['status'] == 'Alfa' ? 'selected' : ''; ?>>Alfa</option>
                  </select>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </div>
<?php } ?>