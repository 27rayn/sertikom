<?php

@include 'config.php';

$id = $_GET['edit'];

if (isset($_POST['update_keg'])) {


   $nama_kegiatan = $_POST['nama_kegiatan'];
   $link = $_POST['link'];
   $gambar = $_FILES['gambar']['name'];
   $gambar_tmp_name = $_FILES['gambar']['tmp_name'];
   $gambar_folder = 'uploaded_img/' . $gambar;

   if (empty($nama_kegiatan) || empty($link) || empty($gambar)) {
      $message[] = 'please fill out all';
   } else {

      $update_keg = "UPDATE info_keg SET nama_keg='$nama_kegiatan', link='$link', gambar='$gambar'  WHERE id = '$id'";
      $upload = mysqli_query($conn, $update_keg);

      if ($upload) {
         move_uploaded_file($gambar_tmp_name, $gambar_folder);
         header('location:admin_page.php');
      } else {
         $$message[] = 'please fill out all!';
      }
   }
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
</head>

<body>

   <?php
   if (isset($message)) {
      foreach ($message as $message) {
         echo '<span class="message">' . $message . '</span>';
      }
   }
   ?>

   <div class="container">


      <div class="admin-product-form-container centered">

         <?php

         $select = mysqli_query($conn, "SELECT * FROM info_keg WHERE id = '$id'");
         while ($row = mysqli_fetch_assoc($select)) {

         ?>

            <form action="" method="post" enctype="multipart/form-data">
               <h3 class="title">Update Kegiatan</h3>
               <input type="text" class="box" name="nama_kegiatan" value="<?php echo $row['nama_keg']; ?>" placeholder="Masukkan nama kegiatan">
               <input type="text" min="0" class="box" name="link" value="<?php echo $row['link']; ?>" placeholder="Masukkan link">
               <input type="file" class="box" name="gambar" accept="image/png, image/jpeg, image/jpg">
               <input type="submit" value="update keg" name="update_keg" class="btn">
               <a href="admin_page.php" class="btn">go back!</a>
            </form>



         <?php }; ?>



      </div>

   </div>

</body>

</html>