<?php
include '../connect.php';

$query = "SELECT id_dosen, nama_dosen FROM dosen";
$result = mysqli_query($connect, $query);

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Tambah Data</title>
   </head>
   <body>
     <h2>Tambah Data Matakuliah</h2>
     <form action="create.php" method="post">
       <h5>Kode : <input type="text" name="kode"></h5>
       <h5>Matakuliah : <input type="text" name="nama_matkul"></h5>
       <h5>SKS : <input type="text" name="sks"></h5>
       <h5>Semester : <input type="text" name="semester"></h5>
        Dosen Pengajar :  <select name="id_dosen" id="nama_dosen">
          <option value="NULL">-- Pilih Salah satu --</option>
          <?php
            while ($data = mysqli_fetch_assoc($result)){
               ?>
            <option value="<?php echo $data['id_dosen']; ?>">
              <?php echo $data['nama_dosen']; ?>
            </option>
            <?php
           }
   ?>
    </select>
       <input type="submit" name="submit"value="Simpan">

     </form>


   </body>
 </html>
