<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Perpustakaan Ekonomi</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <!-- Meta, title, CSS, favicons, etc. -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Bootstrap -->
          <link href="../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
          <!-- Font Awesome -->
          <link href="../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
          <!-- iCheck -->
          <link href="../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

            <!-- Datatables -->
            <link href="../../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
            <link href="../../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
            <link href="../../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
            <link href="../../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
            <link href="../../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">


      <!-- Custom Theme Style -->
      <link href="../../css/custom.css" rel="stylesheet">

    </head>

    <?php
    $Npm=$_GET['npm'];
    session_start();
    if (isset ($_SESSION['admin']) !=NULL){ ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title">
                <i class="fa fa-home"></i> <span>PerpusEkonomi</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="../assets/img/img.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome Admin</span>
                <?php
                    $user=$_SESSION['admin'];
                        include '../../connection.php';
                        $opprofile=mysql_query("SELECT * from admin WHERE kd_admin='$user'");
                        while ($opname=mysql_fetch_assoc($opprofile))
                        {
                          echo '<a href="?page=profile.php"><h2>'.$opname['nama_admin'].'</h2></a></center>';
                          $OPname=$opname['nama_admin'];
                        }
                ?>
                <br>
              </div>
            </div>
            <!-- /menu profile quick info -->

          <br>

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>Managemen</h3>
              <ul class="nav side-menu">
                <!-- Managemen Anggota -->
                <li><a><i class="fa fa-group"></i> Anggota <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="../dashboard.php?p=view/tambahanggota.php">Tambah Anggota</a>
                    </li>
                    <li><a href="../dashboard.php?p=view/dataanggota.php">Data Anggota</a>
                    </li>
                  </ul>
                </li>

                <!-- Managemen Operator -->
                <li><a><i class="fa fa-male"></i> Operator <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="../dashboard.php?p=view/tambahoperator.php">Tambah Operator</a>
                    </li>
                    <li><a href="../dashboard.php?p=view/dataoperator.php">Data Operator</a>
                    </li>
                  </ul>
                </li>

                <!-- Managemen Buku -->
                <li><a><i class="fa fa-book"></i> Buku <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="../dashboard.php?p=view/tambahbuku.php">Tambah Buku</a>
                    </li>
                    <li><a href="../dashboard.php?p=view//databuku.php">Data Buku</a>
                    </li>
                    <li><a href="../dashboard.php?p=view/datakategori.php">Data Kategori Buku</a>
                    </li>

                                                            <!-- Managemen Kategori Buku -->
                                                            <li><a><i class="fa fa-sitemap"></i> Kategori Buku <span class="fa fa-chevron-down"></span></a>
                                                              <ul class="nav child_menu">
                                                                <li><a href="../dashboard.php?p=view/tambahkategori.php">Tambah Kategori Buku</a>
                                                                </li>
                                                                <li><a href="../dashboard.php?p=view/datakategori.php">Data Kategori Buku</a>
                                                                </li>
                                                              </ul>
                                                            </li>
                  </ul>
                </li>

                <!-- Managemen Data Pinjaman -->
                <li><a><i class="fa fa-newspaper-o"></i> Pinjaman Buku <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="?p=view/tambahpinjaman.php">Tambah Pinjaman</a>
                    </li>
                    <li><a href="?p=view/datapinjaman.php">Data Pinjaman</a>
                    </li>
                  </ul>
                </li>

                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="../assets/img/img.png" alt=""><?php echo $OPname; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;">  Profile</a>
                    </li>
                    <li>
                      <a href="javascript:;">Help</a>
                    </li>
                    <li><a href="../../logout.php?user=admin"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">1</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image">
                                          <img src="../assets/img/user.png" alt="Profile Image" />
                                      </span>
                        <span>
                                          <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                                          NPM 12345 Belum Di Aktifkan Sebagai Anggota, Mohon Di Aktifkan Segera..
                                      </span>
                      </a>
                    </li>
                    </li>
              </ul>
            </nav>
          </div>

        </div>
          <!-- page content -->
          <div class="right_col" role="main">
            <div class="">
              <?php include '../../connection.php';
              $sql=mysql_query("SELECT * FROM anggota WHERE npm='$Npm'");
              while ($row = mysql_fetch_assoc($sql))
              { ?>
              <form class="form-horizontal form-label-left" action="../controller/updateanggota.php" name="register" method="post">
                <span class="section"><center>Edit Data Anggota</center></span>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="npm">Nomor Pokok Mahasiswa<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input value="<?php echo $row['npm']; ?>" type="text" name="npm" class="form-control" placeholder="Nomor Pokok Mahasiswa" required>
                  </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="namaanggota">Nama Anggota<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input value="<?php echo $row['nama_anggota']; ?>" type="text" name="namaanggota" class="form-control" placeholder="Nama Anggota" required>
                    </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jeniskel">Jenis Kelamin<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select name="jeniskel" class="form-control" required>
                      <?php
                      $sql=mysql_query("SELECT jeniskel FROM anggota WHERE npm='$Npm'");
                      while ($record=mysql_fetch_assoc($sql))
                      {
                      echo '<option selected="selected">'.$record['jeniskel'].'</option>';
                      if ($record['jeniskel']=='Laki-Laki')
                      {
                        echo '<option>Perempuan</option>';
                      }
                      else
                      {
                        echo '<option>Laki-Laki</option>';
                      }
                      }
                      ?>
                      </select>
                    </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="alamat">Alamat<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea name="almt" class="form-control" rows="3" cols="100" placeholder="Alamat"><?php echo $row['almt'] ?></textarea>
                    </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="notelp">No Telp<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <input value="<?php echo $row['no_telp']; ?>" type="notelp" name="notelp" class="form-control" placeholder="Nomor Telp">
                </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input value="<?php echo $row['email']; ?>" type="text" name="email" class="form-control" placeholder="Email" required>
                  </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kdprodi">Pilih Program Studi<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select name="kdprodi" class="form-control" required>
                      <?php
                      $sql=mysql_query("SELECT * FROM prodi");
                      while ($record=mysql_fetch_assoc($sql))
                      {
                        if ($record['kd_prodi']==$row['kd_prodi'])
                        {
                         echo '<option selected="selected">';
                        }
                        else
                        {
                           echo '<option>';
                        }
                        echo $record['nama_prodi'].'</option>';
                      } ?>
                      </select>
                  </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select name="status" class="form-control">
                    <?php
                    $sql=mysql_query("SELECT status FROM anggota WHERE npm='$Npm'");
                    while ($record=mysql_fetch_assoc($sql))
                    {
                    echo '<option selected="selected">'.$record['status'].'</option>';
                    if ($record['status']=='aktif')
                    {
                      echo '<option>nonaktif</option>';
                    }
                    else
                    {
                        echo '<option>aktif</option>';
                    }
                    }
                    ?>
                    </select>
                  </div>
                </div>




              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="uname">Username<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" name="uname" class="form-control" placeholder="Username" value=<?php echo $row['username'] ?> required>
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pass">Password<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="password" name="pass" class="form-control" placeholder="Password"  value=<?php echo $row['password'] ?> required>
                </div>
              </div>


              <div class="col-md-6 col-md-offset-3">
                <button id="send" type="submit" class="btn btn-lg btn-primary">UBAH</button>
                <a href="../dashboard.php?p=view/dataanggota.php"><button type="button" name="button" class="btn btn-lg btn-danger">BATAL</button></a>
              </div>
              </form>
              <?php } ?>


            </div>
          </div>
          <!-- /page content -->

          <!-- footer content -->
          <footer>
            <div class="pull-right">
              Perpustakaan Ekonomi
            </div>
            <div class="clearfix"></div>
          </footer>
          <!-- /footer content -->


              <!-- jQuery -->
              <script src="../../vendors/jquery/dist/jquery.min.js"></script>
              <!-- Bootstrap -->
              <script src="../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
              <!-- FastClick -->
              <script src="../../vendors/fastclick/lib/fastclick.js"></script>
              <!-- NProgress -->
              <script src="../../vendors/nprogress/nprogress.js"></script>
              <!-- iCheck -->
              <script src="../../vendors/iCheck/icheck.min.js"></script>

             <!-- Custom Theme Scripts -->
             <script src="../../js/custom.js"></script>

             <!-- Datatables -->
             <script src="../../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
             <script src="../../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
             <script src="../../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
             <script src="../../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
             <script src="../../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
             <script src="../../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
             <script src="../../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
             <script src="../../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
             <script src="../../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
             <script src="../../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
             <script src="../../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
             <script src="../../vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
             <script src="../../vendors/jszip/dist/jszip.min.js"></script>
             <script src="../../vendors/pdfmake/build/pdfmake.min.js"></script>
             <script src="../../vendors/pdfmake/build/vfs_fonts.js"></script>

        </div>
      </div>
<?php
}
else
{
  header('location: ../../formlogin.php');
}
?>
  </body>
</html>
