<!-- <style>
  @import url('https://fonts.googleapis.com/css2?family=Kalam&display=swap');

  .navbar-brand{
    font-family: 'Kalam', cursive;
  }

  .navbar {
    width: 100%;
    background: #fff;
    box-shadow: 0 0.5rem 1rem rgb(0 0 0 / 8%);
    padding: 1rem 9%;
    align-items: center;
    justify-content: space-between;
    font-size: medium;

}

  .navbar-right{
    font-family: 'Poppins', sans-serif;
  }
</style> -->
</head>
<body class="bg-dark text-light">
<!-- Start Navbar -->
<nav class="navbar navbar-expand-lg navbar-default navbar-fixed bg-dark text-light">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="" class="navbar-brand text-light">Home</a>
    </div>
<!--  -->
    <div class="collapse navbar-collapse text-light" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li><a class="text-light" href="../../multiUserLogin/admin_page.php">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle text-light" data-toggle="dropdown" href="#">Menu</a>
        <ul class="dropdown-menu">
          <li><a href=".././live/index.php">Data Siswa</a></li>
          <li><a href="">Data Kelas</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Peminjaman</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="../liveData/index.php">Data Pengguna</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle text-light" data-toggle="dropdown" href="#">Lainnya</a>
        <ul class="dropdown-menu">
          <li><a href="login/logout.php">Logout</a></li>
        </ul>
      </li>
    </ul>
    </div>

  </div>
</nav>
<!-- End Navbar -->

<div class="container" style="min-height:500px;">
