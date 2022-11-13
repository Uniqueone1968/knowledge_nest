<?php 
 ini_set('display_errors', 0); 
 ini_set('log_errors',1); 
error_reporting(E_ALL); 
session_start();
$name=$_SESSION['name'];
?>
<!DOCTYPE php>
<php lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap.min.css" />
  <link rel="stylesheet" href="home_custom.css" />
  <link rel="stylesheet" href="contact.css" />
  <link rel="stylesheet" href="login_custom.css" />
  <link rel="stylesheet" href="slick.css"/>
  <link rel="stylesheet" href="/knowledge_nest/bootstrap-icons-1.9.1/bootstrap-icons.css">

  <title>Knowledge Nest</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#E6CEA0;">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="logo.png" alt="Logo" width="35" height="30" 
      class="d-inline-block align-text-top">KNOWLEDGE NEST</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><?php if ($_SESSION ["name"] != 0){
                  echo $name;
                }else{
                  echo "Login";
                } ?></a>
              <ul class="dropdown-menu" style="background-color: #E6CEA0;">
                <li><a class="dropdown-item" href="<?php if ($_SESSION ["name"] != 0){
                  echo $logout;
                }else{
                  echo $login;
                } ?>"><?php if ($_SESSION ["name"] != 0){
                  echo "logout";
                }else{
                  echo "Student Login";
                  
                } ?></a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="mentor_login.php">Mentor</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            
            <?php
            $login = "student_login.php";
            $logout = "logout.php";
        
            ?>
            <!--<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">
                </a>
              <ul class="dropdown-menu" style="background-color: #E6CEA0;">
                <li><a class="dropdown-item" href="student_login.php">Student Login</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="register.php">New Register</a></li>
              </ul>
            </li>-->
            <li class="nav-item">
              <a class="nav-link d-block" href="#sidebar" role="button" data-bs-toggle="offcanvas" aria-controls="sidebar">
                Catogeries</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about_us.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact_us.php">Contact Us</a>
            </li>
            
            <!-- Modal -->
            <a class="btn btn-outline" style="background-color: #E6CEA0;" data-bs-toggle="modal"
              data-bs-target="#exampleModal" role="button"><i class="bi bi-search"></i></a>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Let's Explore It</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form class="d-flex" role="search">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </ul>
      </div>
    </div>
  </nav>
  <!--offcanvas start-->
  <?php 
   
    //mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    include("config.php");
    $sql = "select * from category";
    //die($sql);
    $result = mysqli_query($conn, $sql);
    if($result){
        
         // print_r($row);
            
       
    
    //print_r ($result);

    
    
    ?>
  <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="sidebar-label">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Categories</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
        <?php
                        
                        while($row = mysqli_fetch_assoc($result)){
                          //print_r($row); ?>
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                    <a class="nav-link text-black" href="<?php echo $row['name'];?>.php?id='<?php echo $row['id'];?>'"><?php echo $row['name'];
                            ?></a>
      
            </ul>
            <?php
                        }
                        
                        
                        echo '<br>';
                    }
                    ?>
        </div>
    </div>
    <!--offcanvas end-->