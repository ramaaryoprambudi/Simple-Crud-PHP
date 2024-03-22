<?php 
    include("connection.php");
    $result = query("SELECT * FROM karyawan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="css/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Data Karyawan</h1>

        <form action="search.php" method="get" class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control" name="keyword" placeholder="Search Nama..." value="<?php echo isset($_GET['keyword']) ?>" required  />
                <button type="submit" class="btn btn-primary ms-2">Cari</button>
            </div>
        </form>

        <a href="add.php" class="btn btn-success mb-3">Tambah Data</a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Pilihan</th>
                </tr>
            </thead>
            <tbody>
                <?php $number =1; ?>
                <?php foreach ($result as $results) : ?>
                    <tr>
                        <td><?php echo $number ?></td>
                        <td><?php echo htmlspecialchars($results['nama']); ?></td>
                        <td><?php echo htmlspecialchars($results['alamat']); ?></td>
                        <td><?php echo htmlspecialchars($results['umur']); ?></td>
                        <td><?php echo htmlspecialchars($results['Jenis_Kelamin']); ?></td>
                        <td>
                            <a href="edit.php?karyawan=<?php echo $results['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="delete.php?data_karyawan=<?php echo $results['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <?php $number++ ?>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <script src="css/js/bootstrap.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
