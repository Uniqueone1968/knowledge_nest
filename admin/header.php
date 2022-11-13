 <?php
 ini_set('display_errors', 0); 
 ini_set('log_errors',1); 
error_reporting(E_ALL);
session_start();
$name=$_SESSION['name'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link rel="stylesheet" href="/knowledge_nest/bootstrap.min.css">
    <link rel="stylesheet" href="/knowledge_nest/bootstrap-icons-1.9.1/bootstrap-icons.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#997defc9;">
    <div class="container-fluid">
      <a class="navbar-brand" href="admin_home.php"><img src="/knowledge_nest/logo.png" alt="Logo" width="35" height="30"
      class="d-inline-block align-text-top">
      KNOWLEDGE NEST</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
              <a class="nav-link" href="admin_home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="student.php">Student</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="category.php">Category</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sub_category.php"> Sub Category</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="knowledge_info.php"> Knowledge Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php"> Contact Us</a>
            </li>
            
            <!-- Modal -->
            <!--<a class="btn btn-outline" style="background-color:#997defc9;" data-bs-toggle="modal"
              data-bs-target="#exampleModal" role="button"><i class="bi bi-search"></i></a>-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><?php echo $name;?></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
              </ul>
            </li>
            <!--<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
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
            </div>-->
          </ul>
      </div>
    </div>
  </nav>