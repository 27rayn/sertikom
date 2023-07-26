<?php

@include 'config.php';

if (isset($_POST['add_keg'])) {

   $nama_kegiatan = $_POST['nama_kegiatan'];
   $link = $_POST['link'];
   $gambar = $_FILES['gambar']['name'];
   $gambar_tmp_name = $_FILES['gambar']['tmp_name'];
   $gambar_folder = 'uploaded_img/' . $gambar;

   if (empty($nama_kegiatan) || empty($link) || empty($gambar)) {
      $message[] = 'please fill out all';
   } else {
      $insert = "INSERT INTO info_keg(nama_keg, link, gambar) VALUES('$nama_kegiatan', '$link', '$gambar')";
      $upload = mysqli_query($conn, $insert);
      if ($upload) {
         move_uploaded_file($gambar_tmp_name, $gambar_folder);
         $message[] = 'Kegiatan Berhasil Ditambah';
      } else {
         $message[] = 'Gagal Menambahkan Kegiatan';
      }
   }
};

if (isset($_GET['delete'])) {
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM info_keg WHERE id = $id");
   header('location:admin_page.php');
};

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
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

      <div class="admin-product-form-container">

         <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <h3>Tambah Kegiatan</h3>
            <input type="text" placeholder="Masukkan nama kegiatan" name="nama_kegiatan" class="box">
            <input type="text" placeholder="Masukkan link" name="link" class="box">
            <input type="file" accept="image/png, image/jpeg, image/jpg" name="gambar" class="box">
            <input type="submit" class="btn" name="add_keg" value="add keg">
         </form>

      </div>

      <?php

      $select = mysqli_query($conn, "SELECT * FROM info_keg");

      ?>
      <div class="product-display">
         <table class="product-display-table">
            <thead>
               <tr>
                  <th>Nama Kegiatan</th>
                  <th>Link Kegiatan</th>
                  <th>Gambar kegiatan</th>
                  <th>action</th>
               </tr>
            </thead>
            <?php while ($row = mysqli_fetch_assoc($select)) { ?>
               <tr>
                  <td><?php echo $row['nama_keg']; ?></td>
                  <td>$<?php echo $row['link']; ?>/-</td>
                  <td><img src="uploaded_img/<?php echo $row['gambar']; ?>" height="100" alt=""></td>
                  <td>
                     <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
                     <a href="admin_page.php?delete=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
                  </td>
               </tr>
            <?php } ?>
         </table>
      </div>

   </div>


</body>

</html>