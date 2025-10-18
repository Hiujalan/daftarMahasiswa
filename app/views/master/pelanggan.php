

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Toko handphone</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  
  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css"/>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <!-- css -->
  <link rel="stylesheet" href="../style.css" />
</head>
<body>

  <?php include '../nav.php'; ?>
 
 
    <!-- /.content-header -->
    <div class="fixed-card mt-3">
      <div class="row">

        <div class="col-md-11 mx-auto">
  <div class="card shadow-sm mb-0 ">
     <div class="col-md-5 align-self-left m-2 mb-0">
              <h3 class="text-themecolor" >Data Barang</h3>
            </div>

    <div class="card-body" data-bind="with: material">
      <!-- Tab Navigation -->
      <ul class="nav nav-tabs mb-3 " id="tabnavform" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="list-tab" data-bs-toggle="tab" data-bs-target="#tablist" type="button" role="tab">List</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link " id="form-tab" data-bs-toggle="tab" data-bs-target="#tabform" type="button" role="tab">Form</button>
        </li>
      </ul>

      <!-- Tab Content -->
      <div class="tab-content" id="tabnavform-content">

        <!-- Tab Form -->
        <div class="tab-pane show " id="tabform" role="tabpanel">
          <form method="POST" action="">
          <div class="row mb-3">
            <div class="col-md-12">
              <div class="d-flex gap-2">
                
                <button class="btn btn-sm btn-info" name="simpan"><i class="fa fa-save"></i> Simpan</button>

                
              </div>
            </div>
          </div>

          <div class="row" data-bind="with: Recordmaterial">
            <div class="col-md-2 mb-3 label">
              <label class="form-label">Brand</label>
              <select name="merk" class="form-select" required>
                <option value="Samsung">Samsung</option>
                <option value="Xiaomi">Xiaomi</option>
                <option value="Oppo">Oppo</option>
                <option value="Realme">Realme</option>
              </select>
            </div>
            <div class="col-md-4 mb-3">
              <label class="form-label label">Type HP</label>
              <input type="" class="form-control" name="" placeholder="" required>
            </div>
            <div class="col-md-4 mb-3">
              <label class="form-label label">Tahun</label>
              <input type="" class="form-control" name="" placeholder="" required>
            </div>
            <div class="col-md-3 mb-3">
              <label class="form-label label">Harga Beli</label>
              <input type="" class="form-control" name="" placeholder="" required>
            </div>
            <div class="col-md-3 mb-3">
              <label class="form-label label">Harga Jual</label>
              <input type="" class="form-control" name="" placeholder="" required>
            </div>
             <div class="col-md-2 mb-3">
              <label class="form-label label">Stock</label>
              <input type="" class="form-control" name="" placeholder=""required>
            </div>
          </div>
        </form>
        </div>

        <!-- Tab List -->
        <div class="tab-pane active" id="tablist" >
          <div class="table-responsive mt-0">
            <table id="myTable" class="table table-bordered table-striped w-100">
              <thead>
                <tr>
                  <th>Brand</th>
                  <th>Type HP</th>
                  <th>Tahun</th>
                  <th>Harga Beli</th>
                  <th>Harga jual</th>
                  <th>Stock</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <!-- Data akan terisi dengan binding -->
                <?php
                // $sql="select * from barang";
                // $query= mysqli_query($koneksi, $sql);

                // while($hp = mysqli_fetch_array($query)){
                //   echo"<tr>";
                //   echo"<td>".$hp['merk']."</td>";
                //   echo"<td>".$hp['tipe_hp']."</td>";
                //   echo"<td>".$hp['thn_keluar']."</td>";
                //   echo"<td>".$hp['harga_beli']."</td>";
                //   echo"<td>".$hp['harga_jual']."</td>";
                //   echo"<td>".$hp['stok']."</td>";
                //   echo "<td>";
                //   echo "<a href='../update/edit_barang.php?id=" . $hp['id'] . "' class='btn btn-sm btn-info action' ><i class='fa fa-edit'></i></a>";
                //   echo "<a href='../delete/hapus_barang.php?id=" . $hp['id'] . "' class='btn btn-sm btn-danger action' onclick=\"return confirm('Yakin ingin menghapus?')\"><i class='fa fa-trash'></i></a>";
                //   echo "</td>";
                //   echo "</tr>";

                // }
                ?> 
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div> <!-- end card-body -->
  </div> <!-- end card -->
</div> <!-- end col-md-10 -->

  <!-- </div> -->

<!-- jQuery & DataTables JS (harus sebelum Bootstrap Bundle) -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 

<script>
  $(document).ready(function () {
    $('#myTable').DataTable({
      pageLength: 5, // jumlah baris per halaman
      lengthMenu: [5],
      order: [[0, 'asc']] // urutkan berdasarkan kolom pertama (ID)
    });
  });
</script>

</body>
</html>