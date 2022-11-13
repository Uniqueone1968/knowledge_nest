<?php 
    ini_set('display_errors', 0); 
     ini_set('log_errors',1); 
    error_reporting(E_ALL); 
    //mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    include ("header.php");
    include("config.php");
   
   $sql = "SELECT category.name as category_name, sub_category.name, sub_category.image, sub_category.des, sub_category.id 
           FROM category 
           INNER JOIN sub_category ON category.id = sub_category.category_id;";
   // die($sql);
    $result = mysqli_query($conn, $sql);
    if($result){
        
         // print_r($row);
            
       
    
    //print_r ($result);

    
    
    ?>
    <div class="card mt-1">
        <div class="card-header bg-primary">
            <div class="row">
                <div class="col-lg-6"><h3 class="text-white"> Sub Category Info</h3></div>
                <div class="col-lg-6 d-flex flex-row-reverse">
                    <div class="px-3">
                        <!-- Button trigger modal -->
                        <a type="button" class="btn btn-success" data-toggle="popover" title="Add"
                            data-bs-toggle="modal" data-bs-target="#modal2">
                            <i class="bi bi-plus-circle me-1"></i><span>Add</span>
                        </a>

                        <!-- Modal -->

                        <form action="sub_action.php" enctype="multipart/form-data" method="post">
                        <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="add"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="add">Add Sub Category</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Enter Full Name">
                                        </div>
                                        <div class="md-3">
                                            <label for="category" class="form-label">Name Of Category</label>
                                       
                        
                                            <select id="inputState" name="cat" class="form-select">
                                            <?php
                         $sqla = "select * from category";
                         $cat = mysqli_query($conn, $sqla);
                        if($cat){
                        while($rows = mysqli_fetch_assoc($cat)){ 
                            //print_r($rows);
                            //var_dump ($row['name']);
                            ?>
                                                <option  value="<?php echo $rows['id'];?>"><?php echo $rows['name'];?></option>
                                                <?php
                        }
                        
                        
                        echo '<br>';
                    }
                        ?>
                                            </select>

                                        </div>
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <input type="text" name="description" class="form-control" id="description"
                                                placeholder="Enter Description Here">
                                        </div>
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Image</label>
                                            <input type="file" class="form-control" name="filetoupload" id="filetoupload"
                                                placeholder="Upload File">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Add Sub Category</button>
                                    </div>
                                </div>
                            </div>
                        </div>
    </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="container mt-3">
                <table class="table table-hover table-bordered h6">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Category Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        
                        while($row = mysqli_fetch_assoc($result)){
                         // print_r($row); ?>
                        <tr>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['category_name'];?></td>
                            <td><?php echo $row['des'];?></td>
                            <td><img src="/knowledge_nest/admin/images/<?php echo $row['image'];?>" width="50" height="30" alt=""></td>
                            <td>
                                <a type="button" class="btn btn-warning mb-1" data-toggle="popover" title="edit"
                                    data-bs-toggle="modal" data-bs-target="#modal2">
                                    <i class="bi bi-pencil-square icon"></i>
                                </a>
                                <a href='delete.php?del3=<?php echo $row['id'];?>' class="btn btn-danger mb-1">
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