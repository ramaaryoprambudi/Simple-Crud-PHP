<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
</head>
<body>
<form action="insert.php" method="post">
        <label>Nama</label><br/>
        <input type="text" name="nama" required/>
        <br/><br/>
        
        <label>Alamat</label><br/>
        <textarea name="alamat" cols="30" rows="10" required></textarea>
        <br/><br/>
        
        <label>Umur</label><br/>
        <input type="text" name="umur" required/>
        <br/><br/>
        
        <label>Jenis Kelamin</label><br/>
        <select name="jenis_kelamin">
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select>
        <br/>
        <br/>
        <button type="submit">Tambah</button>
        <button type="submit"><a href="index.php">Home</a></button>
    </form>
</body>
</html>