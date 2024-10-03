<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Data</title>
        <link rel="stylesheet" href="assets/css/styles.css">
        <script src="assets/js/main.js" defer></script>
    </head>
    <body>
        <?php
            include("connect.php");
            include("menu2.php");
                $idupdate = $_GET['id'];
                $query_update = mysqli_query($connected, "SELECT * FROM upload_design WHERE id_design = '$idupdate'");

                $f = mysqli_fetch_array($query_update);
        ?>
        <div align="center">
            <h1>Update Data</h1>
            <form method="post" action="home.php" enctype="multipart/form-data">
                <table>
                    <tr>
                        <input type="hidden" name="idb" value="<?php echo $f['id_design']; ?>">
                        <td><label>Nama</label></td>
                        <td>:</td>
                        <td><input type="text" name="nama" value="<?php echo $f['designer_name']; ?>"></td>
                    </tr>
                    <tr>
                        <td><label>Email</label></td>
                        <td>:</td>
                        <td><textarea name="email"><?php echo $f['designer_email']; ?></textarea></td>
                    </tr>
                    <tr>
                        <td><label>Jenis Kelamin</label></td>
                        <td>:</td>
                        <td>
                            <select name="jnskelamin">
                                <option value="Laki Laki" <?php if($f['designer_gender'] == "Laki Laki"){ echo "selected";} ?>>Laki Laki</option>
                                <option value="Perempuan" <?php if($f['designer_gender'] == "Perempuan"){ echo "selected";} ?>>Perempuan</option>
                                <?php
                                    // $query_kelamin = mysqli_query($connected, "SELECT designer_gender FROM upload_design");
                                    // while($fx = mysqli_fetch_array($query_kelamin)){
                                    //     if($f['designer_gender'] == $fx['designer_gender']){
                                    //         $s = "selected";
                                    //     }
                                    //     else{
                                    //         $s = "";
                                    //     }
                                ?>
                                <!-- <option value="<?php  //echo $fx['designer_gender']; ?>" <?php  // echo $s; ?>><?php  // echo $fx['designer_gender']; ?></option> -->
                                <?php
                                    // }
                                ?> 
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>File upload_design</label></td>
                        <td>:</td>
                        <td><input type="file" name="upload_design"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><img src="<?php echo $f['design_url']; ?>" width="200px"></td>
                    </tr>
                    <tr>
                        <td><label></label></td>
                        <td></td>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td><label></label></td>
                        <td></td>
                        <td><button type="submit" name="update">Update</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>