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
                        <a class="nav-link active" href="view_karyawan.php">List Karyawan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_tambahkaryawan.php">Karyawan Baru</a>
                    </li>

                </ul>
            </div>
            <div class="card-body"></div>
            <div class="container p-3">
                <h1 class="text-center">List Karyawan</h1>
                <table class="table">
                    <thead class="thead-dark table-hover">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Note</th>
                            <th scope="col">Actoin</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>
                                <button class="btn btn-warning">update</button>
                                <button class="btn btn-danger">delete</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>