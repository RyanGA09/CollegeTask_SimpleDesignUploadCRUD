<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="assets/css/styles.css">
        <script src="assets/js/main.js" defer></script>
    </head>
    <body>
        <?php
            include("connect.php");
            include("menu1.php");
        ?>
        <div align="center">
            <h1>Home</h1>
            <?php
                if(isset($_POST['input'])){
                    $nm = $_POST['nama'];
                    $email = $_POST['email'];
                    $kelamin = $_POST['jnskelamin'];
                    $nm_file = basename($_FILES['upload_design']['name']);
                    $ukuran = $_FILES['upload_design']['size'];
                    $dir = "upload_design/";
                    $tipe = strtolower(pathinfo($nm_file, PATHINFO_EXTENSION));
                    $url = $dir.$nm_file;
                    if($tipe == 'png' || $tipe == 'jpg' || $tipe == 'jpeg'){
                        if($ukuran <= 10000000){
                            if(move_uploaded_file($_FILES["upload_design"]["tmp_name"], $url)){
                                $query_input = mysqli_query($connected, "INSERT INTO upload_design (designer_name, designer_email, designer_gender, design_url, time_added) VALUES('$nm', '$email', '$kelamin', '$url', sysdate())");
                                if($query_input){
                                    echo "<h3>Input Data Berhasil!</h3>";
                                }
                                else{
                                    echo "<h3>Input Data Gagal!</h3>";
                                }
                            }
                        }
                        else{
                            echo "<h3>File yang anda upload lebih besar dari  10 mb!</h3>";
                        }
                    }
                    else{
                        echo "<h3>File yang anda upload tidak sesuai formatnya. (Gunakan format png, jpg, jpeg)!</h3>";
                    }
                }
                elseif (isset($_POST['update'])){
                    $nm = $_POST['nama'];
                    $email = $_POST['email'];
                    $kelamin = $_POST['jnskelamin'];
                    $idupdate = $_POST['idb'];
                    $nm_file = basename($_FILES['upload_design']['name']);
                    $ukuran = $_FILES['upload_design']['size'];
                    $dir = "upload_design/";
                    $tipe = strtolower(pathinfo($nm_file, PATHINFO_EXTENSION));
                    $url = $dir.$nm_file;
                    if($tipe == 'png' || $tipe == 'jpg' || $tipe == 'jpeg'){
                        if($ukuran <= 10000000){
                            if(move_uploaded_file($_FILES["upload_design"]["tmp_name"], $url)){
                                $query_update = mysqli_query($connected, "UPDATE upload_design SET designer_name = '$nm', designer_email = '$email', designer_gender = '$kelamin', design_url = '$url', time_added = sysdate() WHERE id_design = '$idupdate'");
                                if($query_update){
                                    echo "<h3>Update Data Berhasil!</h3>";
                                }
                                else{
                                    echo "<h3>Update Data Gagal!</h3>";
                                }
                            }
                        }
                        else{
                            echo "<h3>File yang anda upload lebih besar dari  10 mb!</h3>";
                        }
                    }
                    else{
                        echo "<h3>File yang anda upload tidak sesuai formatnya. (Gunakan format png, jpg, jpeg)!</h3>";
                    }
                }
            ?>
            <table border="1">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>email</th>
                    <th>jenis Kelamin</th>
                    <th>File</th>
                    <th>Waktu</th>
                    <th>Hapus</th>
                </tr>
                <?php
                    $query_data = mysqli_query($connected, "SELECT * FROM upload_design");
                    $i = 1;
                    while($f = mysqli_fetch_array($query_data)){
                ?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $f['designer_name']; ?></td>
                    <td><?php echo $f['designer_email']; ?></td>
                    <td><?php echo $f['designer_gender']; ?></td>
                    <td><img src="<?php echo $f['design_url']; ?>" width="200px"></td>
                    <td><?php echo $f['time_added']; ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $f['id_design']; ?>">Update</a> ||
                        <a href="delete.php?id=<?php echo $f['id_design']; ?>">Delete</a>
                    </td>
                </tr>
                <?php
                        $i++;
                    }
                ?>
            </table>
        </div>
    </body>
</html>