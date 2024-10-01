<?php
// include('./Assets/_Partial Components/Header.php');

// $totalReading = $mtd->getTotalReading();
// $totalGrammer = $mtd->getTotalGrammer();
// $totalListening = $mtd->getTotalListening();
// $totalVocabulary = $mtd->getTotalVocabulary();
// $totalNews = $mtd->getTotalNews();
// $totalResearch = $mtd->getTotalResearch();
// $totalUsers = $mtd->getTotalUser();
// $totalStudent = $mtd->getTotalStudent();

?>
<!DOCTYPE html>
<html>
<head>
    <title>CHANGE Admin Panel</title>
  
    <meta charset="utf-16">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <link href = "../Assets/img/icons/Google_News_64.png" rel="icon" type="image/png" >
    <link href = "https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel=" stylesheet">
    <!-- <link href = "./Assets/CSS/Change_Admin_Panel.css" rel = "Stylesheet" type = "text/css"/> -->
    <link href = "boxicons.min.css" rel="stylesheet" >
    <link href = "boxicons.css" rel="stylesheet" >

    <!-- Bootstrap -->
    <link href = "../img/Graduation Cap_48px.png" rel="icon" type="image/png" >
    <link href = "../Assets/CSS/font-awesome.css" rel="stylesheet" >
    <link href = "../Assets/CSS/font-awesome.min.css" rel="stylesheet" >
    <link href = "Assets/CSS/accordion.css" rel="stylesheet" >
    <link href = "boxicons.min.css" rel="stylesheet" >
  
    <!-- <script src = "./Assets/js/AdminChange.js"></script> -->
    <script src = "./Assets/js/AjaxSearch.js"></script>
    <script src = "../Assets/js/sweetalert.min.js"></script>
</head>
<body >
    <script src="../Assets/js/plugins/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="./Assets/js/jquery.min.js"></script>
    <script>
      tinymce.init({
        selector: '#body';
      });
    </script>

    <aside class="aside">
        <div class = "logo">
            <span class="menu-icon">
                <i class="bx bx-menu"></i>
                <i class="bx bx-menu"></i>
            </span>
            <a href="#"><img src="maxion.py" alt="">CODINGCTEATE</a>
        </div>
        
        <ul class="side-menu">
            <li class="nav-item">
                <a href="#">
                    <i class="bx bx-dashboard"></i>
                    <span> Dashboard </span>
                    <i class="bx bxs-chevron-right"></i>
                </a>
                <ul class="sub-menu">
                    <li> <a href="#"> Dashboard_1 </a> </li>
                    <li> <a href="#"> Dashboard_2 </a> </li>
                    <li> <a href="#"> Dashboard_3 </a> </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="bx bx-inbox"></i>
                    <span> Inbox </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="bx bx-cube"></i>
                    <span> Widgets </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="bx bx-folder-open"></i>
                    <span> Files </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="bx bx-copy"></i>
                    <span> Icons </span>
                    <i class="bx bxs-chevron-right"></i>
                </a>
                <ul class="sub-menu">
                    <li> <a href="#"> Fontawsome </a> </li>
                    <li> <a href="#"> Boxicons </a> </li>
                    <li> <a href="#"> IonIcons </a> </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="bx bx-lock-alt"></i>
                    <span> Authentication </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="bx bxs-analuse"></i>
                    <span> Analysis </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="bx bx-user"></i>
                    <span> User Pages </span>
                    <i class="bx bxs-chevron-right"></i>
                </a>
                <ul class="sub-menu">
                    <li> <a href="#"> Administrator </a> </li>
                    <li> <a href="#"> Developer </a> </li>
                    <li> <a href="#"> Customer  </a> </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="bx bxs-magnte"></i>
                    <span> UI Elements </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="bx bx-line-char"></i>
                    <span> Charts </span>
                </a>
            </li>
        </ul>
        <ul class="log">
            <li class="nav-item">
                <a href="#">
                    <i class="bx log-out"></i>
                    <span> Log out </span>
                </a>
            </li>
        </ul>
    </aside>
    <section>
        <h1> Components </h1>
        <h2> Sidebar in Javascript </h2>
        <p> Lore </p>
    </section>

































    <div class="container-fluid" id = "container-fluid">
    	<div class="row" id="row">
            <div class="col-sm-2" style="padding-left: 0px; padding-right: 0px;">
                <!-- BEGIN SIDEBAR -->
                
                <!-- END SIDEBAR -->
            </div>
            <div class="col-sm-10" id = "right-sidebar">
               
            </div>
    <!-- END QUICK SIDEBAR -->
        </div> 
      <!-- End of Div Row -->
    </div>




        <!-- <script src = "./Assets/js/AdminChange.js"></script> -->
        <script src="./Assets/js/tinymce.min.js" referrerpolicy="origin"></script>
       

tinymce.init(demoBaseConfig);
        </script>

    <footer class ="footer">
        <div id="container-fluid" style="background:">
            Copyright &copy; All Rights Reserved 2022 - <?php echo date('Y');?>| Developed by <a href="https://www.facebook.com/Nasratullah Shafiq"> Nasratullah Shafiq </a>. 
        </div>            
    </footer> 
    </body>  
</html>
	