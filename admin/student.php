
    <?php 
    ini_set('display_errors', 0); 
     ini_set('log_errors',1); 
    error_reporting(E_ALL); 
    //mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    include ("header.php");
    include("config.php");
    $sql = "select * from student";
    //die($sql);
    $result = mysqli_query($conn, $sql);
    if($result){
        
         // print_r($row);
            
       
    
    //print_r ($result);

    
    
    ?>
    <div class="card mt-1">
        <div class="card-header bg-primary">
            <div class="row">
                <div class="col-lg-6"><h3 class="text-white">Student Info</h3></div>
                <div class="col-lg-6 d-flex flex-row-reverse">
                   <!-- <div class="px-1">
                         Button trigger modal 
                        <a type="button" class="btn btn-danger" data-toggle="popover" title="Delete"
                            data-bs-toggle="modal" data-bs-target="#modal1">
                            <i class="bi bi-trash2 me-1"></i><span>Delete</span>
                        </a>

                        Modal
                        <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="delete"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="delete">Delete Student</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete these Records?
                                        <p style="color: red;" class="pt-5">This action cannot be undone.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="container mt-3">
                <table class="table table-hover table-bordered h6">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email Id</th>
                            <th>Mobile</th>
                            <th>Gender</th>
                            <th>College Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        while($row = mysqli_fetch_assoc($result)){
                          //print_r($row); ?>
                        <tr>
                            <td>
                            <?php echo $row['name'];
                            ?>
                            </td>
                            <td><?php echo $row['email_id'];
                            ?></td>
                            <td><?php echo $row['mobile'];
                            ?></td>
                            <td><?php echo $row['gender'];
                            ?></td>
                            <td><?php echo $row['college_name'];
                            ?></td>
                            <td>
                                <a type="button" class="btn btn-warning" data-toggle="popover" title="edit"
                                    data-bs-toggle="modal" data-bs-target="#modal2">
                                    <i class="bi bi-pencil-square icon"></i>
                                </a>
                                <a href='delete.php?del2=<?php echo $row['id'];?>' class="btn btn-danger">
                                    <i class="bi bi-trash2 me-1 icon"></i>
                                </a>
                            </td>

                        </tr>
                        <?php
                        }
                        
                        
                        echo '<br>';
                    }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
        <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <li class="page-item disabled">
      <a class="page-link">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
        </div>
    </div>
<?php include("footer.php");?>
    



<!--<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#2a60f3;">
        <div class="container-fluid">
            <a class="navbar-brand">Student</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="px-1">
                         Button trigger modal
                        <a type="button" class="btn btn-danger" data-toggle="popover" title="Delete"
                            data-bs-toggle="modal" data-bs-target="#model1">
                            <i class="bi bi-trash2 me-1"></i><span>Delete</span>
                        </a>

                         Modal
                        <div class="modal fade" id="model1" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Student</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete these Records?
                                        <p style="color: red;" class="pt-5">This action cannot be undone.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="px-3">
                         Button trigger modal
                        <a type="button" class="btn btn-success" data-toggle="popover" title="Add"
                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-plus-circle me-1"></i><span>Add</span>
                        </a>

                        Modal 
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name"
                                                placeholder="Enter Full Name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email_id" class="form-label">Email Id</label>
                                            <input type="text" class="form-control" id="email_id"
                                                placeholder="Enter Email Id">
                                        </div>
                                        <div class="mb-3">
                                            <label for="mobile" class="form-label">Mobile</label>
                                            <input type="text" class="form-control" id="mobile"
                                                placeholder="Enter Mobile Number">
                                        </div>
                                        <div class="mb-3">
                                            <label for="gender" class="form-label">Gender</label>
                                            <select id="gender" class="form-select">
                                                <option selected>Choose...</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="formGroupExampleInput2" class="form-label">Password</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput2"
                                                placeholder="Another input placeholder">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success">Add Student</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        <table class="table table-hover table-bordered ">
            <thead>
                <tr>
                    <th>Nmae</th>
                    <th>Email Id</th>
                    <th>Mobile</th>
                    <th>Gender</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John</td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                    <td>john@example.com</td>
                    <td>john@example.com</td>
                    <td>
                        <a type="button" class="btn btn-warning" data-toggle="popover" title="edit"
                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-pencil-square icon"></i>
                        </a>
                        <a type="button" class="btn btn-danger" data-toggle="popover" title="delete"
                            data-bs-toggle="modal" data-bs-target="#model1">
                            <i class="bi bi-trash2 me-1 icon"></i>
                        </a>
                    </td>

                </tr>
                <tr>
                    <td>Mary</td>
                    <td>Moe</td>
                    <td>mary@example.com</td>
                    <td>john@example.com</td>
                    <td>john@example.com</td>
                    <td>
                        <a type="button" class="btn btn-warning" data-toggle="popover" title="edit"
                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-pencil-square icon"></i>
                        </a>
                        <a type="button" class="btn btn-danger" data-toggle="popover" title="delete"
                            data-bs-toggle="modal" data-bs-target="#model1">
                            <i class="bi bi-trash2 me-1 icon"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>July</td>
                    <td>Dooley</td>
                    <td>july@example.com</td>
                    <td>john@example.com</td>
                    <td>john@example.com</td>
                    <td>
                        <a type="button" class="btn btn-warning" data-toggle="popover" title="edit"
                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-pencil-square icon"></i>
                        </a>
                        <a type="button" class="btn btn-danger" data-toggle="popover" title="delete"
                            data-bs-toggle="modal" data-bs-target="#model1">
                            <i class="bi bi-trash2 me-1 icon"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
-->