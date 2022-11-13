<?php 
    ini_set('display_errors', 1); 
     ini_set('log_errors',1); 
    error_reporting(E_ALL); 
    //mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    include ("header.php");
    include("config.php");
    $sql = "select * from contactus";
    //die($sql);
    $result = mysqli_query($conn, $sql);
    if($result){
        
         // print_r($row);
            
       
    
    //print_r ($result);

    
    
    ?>
    <div class="card mt-1">
        <div class="card-header bg-primary">
            <div class="row">
                <div class="col-lg-6"><h3 class="text-white">Contact Info</h3></div>
            </div>
        </div>
        <div class="card-body">
            <div class="container mt-3">
                <table class="table table-hover table-bordered h6">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email Id</th>
                            <th>Messages</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        
                        while($row = mysqli_fetch_assoc($result)){
                          //print_r($row); ?>
                        <tr>
                            <td><?php echo $row['name'];
                            ?></td>
                            <td><?php echo $row['email'];
                            ?></td>
                            <td><?php echo $row['message'];
                            ?></td>
                            <td>
                            <a href='delete.php?del5=<?php echo $row['id'];?>' class="btn btn-danger">
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