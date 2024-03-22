<?php 
include('connection.php');
$id =$_GET['karyawan'];
$result_edit = edit("SELECT * FROM karyawan WHERE id = '$id' LIMIT 1");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Data</title>
    </head>
    <body>
        <form action="update.php" method="post">

            <input type="hidden" name="id" value="<?php echo $result_edit[0]['id']?>" >
            
            <label>Nama</label><br/>
            <input
                type="text"
                name="nama"
                required="required"
                value="<?php echo $result_edit[0]['nama'] ?>"/>
            <br/><br/>

            <label>Alamat</label><br/>
            <textarea name="alamat" cols="30" rows="10" required="required"><?php echo $result_edit[0]['alamat']?></textarea>
            <br/><br/>

            <label>Umur</label><br/>
            <input
                type="text"
                name="umur"
                required="required"
                value="<?php echo $result_edit[0]['umur']?>"/>
            <br/><br/>

            <label>Jenis Kelamin</label><br/>
            <select name="jenis_kelamin">
                <option
                    value="Pria"
                    <?php echo($result_edit[0]['Jenis_Kelamin'] == 'Pria') ? 'selected' : ''; ?>>Pria</option>
                <option
                    value="Wanita"
                    <?php echo($result_edit[0]['Jenis_Kelamin'] == 'Wanita') ? 'selected' : ''; ?>>Wanita</option>
            </select>
            <br/>
            <br/>
            <button type="submit">Update</button>
            <button type="submit">
                <a href="index.php">Home</a>
            </button>
        </form>
    </body>
</html>