<?php
session_start();
$pagename="Edit Product";
include "includes/abstractions/users.php";
?>

<main id="main">
  <!-- ======= Clients Section ======= -->

  <?php   
    include "includes/pages/productedit.php";
  ?>
</main>
  <!-- ======= Footer ======= -->

<?php 
    include "includes/pages/general/footer.php";
?>
