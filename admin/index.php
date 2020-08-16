<?php
include 'model/conn.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'components/head.php' ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <div class="wrapper">
    <!-- Navbar -->
    <?php include 'components/topbar.php' ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include 'components/sidebar.php' ?>

    <!-- Content Wrapper. Contains page content -->
    <?php include 'content.php'  ?>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <?php include 'components/footer.php' ?>
  </div>
  <!-- ./wrapper -->

  <?php include 'components/script.php' ?>
</body>

</html>