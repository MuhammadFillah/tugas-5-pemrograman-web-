<?php
session_start();
if (!isset($_SESSION['login'])) {
   header("Location: login.php");
   exit;
}
// Memanggil header
include 'inc/header.php';

// Memanggil sidebar
include 'inc/sidebar.php';
?>

<section class="content">
   <div class="container-fluid">
      <div class="block-header">
         <h2>DASHBOARD</h2>
      </div>

      <!-- Isi konten utama seperti Widgets, Charts, dan Tabel diletakkan di sini -->
      <div class="row clearfix">
         <!-- Contoh Widget -->
         <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-pink hover-expand-effect">
               <div class="icon"><i class="material-icons">playlist_add_check</i></div>
               <div class="content">
                  <div class="text">NEW TASKS</div>
                  <div class="number">125</div>
               </div>
            </div>
         </div>
      </div>

   </div>
</section>

<?php
// Memanggil footer
include 'inc/footer.php';
?>
