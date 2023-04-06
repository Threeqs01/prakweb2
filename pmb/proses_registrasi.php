<?php
include_once('navbar.php');
include_once('sidebar.php');
?>
<!-- ini untuk buka konten -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home.php">Home</a></li>
              <li class="breadcrumb-item"><a href="form_register.php">Form Regist Data Science</a></li>
              <li class="breadcrumb-item active">Hasil Register</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
    <?php
// ambil data yang di inputkan user berdasarkan unique name
// gunakan fungsi isset untuk memeriksa apakah suatu variabel sudah di atur atau belum
// jika ada variabel yang bernilai NULL maka fungsi isset akan mengembalikan nilai FALSE
if (isset($_POST["submit"])){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jk = $_POST['jk'];
    $studi = $_POST['studi'];
    $skill = $_POST['skill'];
    $domisili = $_POST['domisili'];
    $email = $_POST['email'];

    $nilai = 0;
    foreach ($skill as $value){
        switch ($value){
            case 'html' :
                $nilai += 10;
                break;
            case 'css' :
                $nilai += 10;
                break;
            case 'javascript' :
                $nilai += 20;
                break;
            case 'bootstrap' :
                $nilai += 20;
                break;
            case 'php' :
                $nilai += 30;
                break;
            case 'python' :
                $nilai += 30;
                break; 
            case 'java' :
                $nilai += 50;
                break; 
            default :
                $nilai += 0;
                break;          
        }
    }
    // operator logika
    function predikat ($nilai){
      if($nilai >= 150 ){
          return 'Sangat Baik';
      }elseif($nilai >=100 ){
         return 'Baik';
      }elseif($nilai >=60 ){
         return 'Cukup';
      }elseif($nilai >=40 ){
         return 'Kurang';
      }elseif($nilai >=0 ){
         return 'Tidak Memadai';
      }else {
         return 'I(Tidak Ada Nilai)';  
    }   
}


?>

<?php
error_reporting(0);
// cetak hasil inputan user
echo "<h4>Hasil Register: </h4>";
echo "<br/>Nama : $nama ";
echo "<br/>NIM : $nim ";
echo "<br/>Jenis Kelamin : $jk ";
echo "<br/>Program Studi : $studi ";
echo "<br/>Nama : $nama ";
echo "<br/>Skill : ";
foreach ($skill as $value){
    echo $value . ",";
}
echo "<br/>Skor Nilai : $nilai";
echo "<br/>Predikat : $predikat";
echo "</br>Domisili : $domisi";
echo "</br>Email : $email ";
echo "</br>Data Anda Telah Disimpan";
?> 
    </section>
</div>

<!-- ini untuk tutup konten -->
<?php
include_once('footer.php');
?>