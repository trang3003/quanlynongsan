<!DOCTYPE html>
<html lang="en">
       <!-- Bootstrap core CSS -->
       <link href="../css/css_admin/css/bootstrap.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="../css/css_admin/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/css_admin/font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 16px 16px;
  text-decoration: none;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 230px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 16px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<body>
<div id="wrapper">

<!-- Sidebar -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.html">SB Admin</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
      <li class="dropdown">
         <a href="./admin_sp.php" class="dropbtn"><i class="fa fa-table"></i> QUẢN LÝ SẢN PHẨM</a>
         <div class="dropdown-content">
         <a href="./admin_sp.php">QL sản phẩm</a>
         <a href="./admin_lsp.php">QL loại sản phẩm</a>
         <a href="./admin_ncc.php">QL nhà cung cấp</a>
         <a href="./admin_dvt.php">QL đơn vị tính</a>
         </div>
      </li>
      <li class="dropdown">
         <a href="./admin_user.php" class="dropbtn"><i class="fa fa-user"></i> QUẢN LÝ NGƯỜI DÙNG</a>
         <div class="dropdown-content">
         <a href="./admin_user.php">QL người dùng</a>
         <a href="./admin_lnd.php">QL loại người dùng</a>
         </div>
      </li>
      <li class="dropdown">
         <a href="./admin_donhang.php" class="dropbtn"><i class="fa fa-file"></i> QL ĐƠN HÀNG</a>
         <div class="dropdown-content">
         <a href="./admin_donhang.php">QL đơn hàng</a>
         <a href="./admin_tinhtrangdh.php">QL tình trạng đơn hàng</a>
         </div>
      </li>
      <li><a href="forms.html"><i class="fa fa-edit"></i> THỐNG KÊ</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right navbar-user">
      <li class="dropdown user-dropdown">
      <a href="../dangxuat.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Đăng xuất</a>
      </li>
    </ul>
  </div>
</nav>

</div><!-- /#wrapper -->
    <script src="../css/css_admin/js/jquery-1.10.2.js"></script>
    <script src="../css/css_admin/js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="../css/css_admin/js/morris/chart-data-morris.js"></script>
    <script src="../css/css_admin/js/tablesorter/jquery.tablesorter.js"></script>
    <script src="../css/css_admin/js/tablesorter/tables.js"></script>
</body>
</html>