<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Delete Data</title>
        <link rel="stylesheet" href="assets/css/styles.css">
        <script src="assets/js/main.js" defer></script>
    </head>
    <body>
        <?php
            include("connect.php");
        ?>
        <div align="center">
            <h1>Delete Data</h1>
            <?php
                $iddel = $_GET['id'];
                
                $del = mysqli_query($connected, "DELETE FROM upload_design WHERE id_design = '$iddel'");
                
                if($del){
                    echo "<h3>Hapus Data Berhasil!</h3>";
                }
                    
                else{
                    
                    echo "<h3>Hapus Data Gagal!</h3>";   
                }        
            ?>
            <form method="post" action="home.php">
                <button type="submit" name="">Return</button>
            </Form>
        </div>
    </body>
</html>