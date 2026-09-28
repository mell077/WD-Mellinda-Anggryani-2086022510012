<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <title>List Karyawan</title>
</head>

<body>
    <div class="container p-3">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="true" href="view_karyawan.php">List Karyawan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="view_tambahkaryawan.php">Karyawan Baru</a>
                    </li>

                </ul>
            </div>
            <div class="card-body">

            
                <h1 class="text-center">Tambah Karyawan</h1>
                <form method="POST" action="controller_karyawan.php" class="row g-3">
                    <div class="col-12">
                        <label for="inputNama" class="form-label">Name</label>
                        <input type="text" class="form-control" name="inputName" placeholder="Masukkan Nama">
                    </div>

                    <div class="col-12">
                        <label for="inputPhone" class="form-label">Phone</label>
                        <input type="text" class="form-control" name="inputPhone" placeholder="Masukkan no telepon">
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" name="inputEmail4">
                    </div>


                    <div class="col-12">
                        <label for="inputNote" class="form-label">Note</label>
                        <input type="text" class="form-control" id="inputNote" placeholder="tambahkan catatan">
                    </div>


                    <div class="col-12 text-center mt-4">
                        <button name="button_register" type="submit" class="btn btn-primary">Register</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>