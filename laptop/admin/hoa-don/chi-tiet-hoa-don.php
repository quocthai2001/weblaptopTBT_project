<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
	<link rel="shortcut icon" type="image/png" href="../../css/admin/img/TBT.png">
    <title>ADMIN</title>
	<!-- Bootstrap Styles-->
    <link href="../../css/admin/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="../../css/admin/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="../../css/admin/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<?php
    session_start();
    // require_once '../class/tai-khoan.php';
    if(!isset($_SESSION['user1']))
    {
        header('Location:../../trang-chinh/index.php');
    }
    else
    {
     ?>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../../trang-chinh/index.php" style="background-color:#00CC99;"><strong style = "margin-left: 85px;">TBT</strong></a>
            </div>
           
    <!-- Nav bar-->

            <ul class="nav navbar-top-links navbar-right">
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="../../tai-khoan/logout.php"><i class="fa fa-sign-out fa-fw"></i> ????ng xu???t</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>

        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="../../trang-chinh/index.php"><i class="fa fa-dashboard"></i>TRANG CH???</a>
                    </li>
                    <li>
                        <a href="../loai-hang/loai-hang-list.php"><i class="fa fa-list-alt" aria-hidden="true"></i>DANH M???C</a>
                    </li>
                    <li>
                        <a href="../hang-hoa/hang-hoa-list.php"><i class="fa fa-qrcode"></i>S???N PH???M</a>
                    </li>
                    
                    <li>
                        <a href="../khach-hang/khach-hang-list.php"><i class="fa fa-user"></i>T??I KHO???N</a>
                    </li>
                    <li>
                        <a href="../hoa-don/hoa-don-list.php"><i class="fa fa-edit"></i>????N H??NG</a>
                    </li>       
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
		  <div class="header"> 
                                <!-- /. X??? L?? CODE PHP  -->
                                <?php
                                require_once ('../class/hoa-don.php');
                                extract($_REQUEST);
                                $items = hoa_don_chi_tiet_select_by_id($ma_hd);
                                $Total = 0;
                                
                            ?>
                        <div class="page-header">
                            <h1>CHI TI???T ????N H??NG S??? <b><?=$ma_hd?></b></h1><br>
                            <h3>M?? T??I KHO???N : <b><?=$ma_tk;?></b></h3>
                            <p>D?????i ????y l?? nh???ng s???n ph???m m?? kh??ch h??ng ???? mua: </p>

                            <!-- /. CONTENT  -->
                            <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th>T??N H??NG H??A</th>
                                    <th>S??? L?????NG</th>
                                    <th>????N GI??/SP</th>
                                    <th>TH??NH TI???N</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php foreach($items as $item){ 
                                     extract($item);
                                    ?> 
                                  <tr>
                                    <td><?=$ten_sp?></td>
                                    <td><?=$so_luong?></td>
                                    <td><?=number_format($don_gia)?> <sup>??</sup></td>     
                                    <td><?=number_format($don_gia * $so_luong); $Total +=($don_gia * $so_luong)?> <sup>??</sup></td>                               
                                  </tr>
                                <?php } ?>
                                <tr>
                                    <td colspan="3" style = "text-align:center;"><b>T???NG TI???N</b></td>
                                    <td><b><?=number_format($Total) ?> <sup>??</sup></b></td>
                                </tr>
                                </tbody>
                              </table>
                        </div>
                        <a href="hoa-don-list.php"><button class="btn btn-danger">Danh s??ch ????n h??ng</button></a>
		</div>
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
        <?php } ?>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="../../css/admin/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="../../css/admin/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="../../css/admin/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="../../css/admin/js/custom-scripts.js"></script>
    
   
</body>
</html>
