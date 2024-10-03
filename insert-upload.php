<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Insert & Upload</title>
        <link rel="stylesheet" href="assets/css/styles.css">
        <script src="assets/js/main.js" defer></script>
    </head>
    <body>
    <?php
            include("connect.php");
            include("menu2.php");
        ?>
        <div align="center">
            <h1>Insert & Upload Data</h1>
            <form method="post" action="home.php" enctype="multipart/form-data">
            <table>
                    <tr>
                        <td><label>Nama</label></td>
                        <td>:</td>
                        <td><input type="text" name="nama"></td>
                    </tr>
                    <tr>
                        <td><label>Email</label></td>
                        <td>:</td>
                        <td><textarea name="email"></textarea></td>
                    </tr>
                    <tr>
                        <td><label>Jenis Kelamin</label></td>
                        <td>:</td>
                        <td>
                            <select name="jnskelamin">
                                <option value="Laki Laki">Laki Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>File upload_design</label></td>
                        <td>:</td>
                        <td><input type="file" name="upload_design"></td>
                    </tr>
                    <tr>
                        <td><label></label></td>
                        <td></td>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><button type="submit" name="input">Submit</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>