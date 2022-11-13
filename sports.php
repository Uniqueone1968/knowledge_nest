<?php 
    ini_set('display_errors', 1); 
     ini_set('log_errors',1); 
    error_reporting(E_ALL); 
    //mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    include ("header.php");
    include("config.php");
    
   
        
         // print_r($row);
            
       
    
    //print_r ($result);

    
    
    ?>
      <div class="sports">
        <div class="col-lg-11 py-5">
          <div class="row">
              <div class="col-lg-7 px-5">
                <h1 class=" mt-3 green">GOOD TO SEE YOU</h1>
                <p class="my-3 fs-3 green">One man practicing sportsmanship is far better than 50 preaching it</p>
              </div>
              <div class="col-lg-5">
                <img src="sport.png" alt="earth">
              </div>
          </div>
      </div>
      </div>
      <!--cards-->
      <?php 
  $id= $_GET["id"];
  $sqlb = "select * from sub_category where category_id=$id";
  $result = mysqli_query($conn, $sqlb);
  if($result){
      
  while($row = mysqli_fetch_assoc($result)){
    //print_r($row); ?>
  <div class="text-center fs-3 fw-bold my-4"><?php echo $row['name'];?></div>
  <div class="container-fluid">
  
    <div class="row">
    <?php    
    $subCatId=$row['id'];
    $sql = "select * from knowledge_info where Sub_category_id=$subCatId";
    //die($sql);
    $resulta = mysqli_query($conn, $sql);
     if($resulta){             
    while($rows = mysqli_fetch_assoc($resulta)){
    //print_r($row); ?>
      <div class="col-sm-4">
        <div class="card my-2">
          <img src="/knowledge_nest/admin/images/<?php echo $rows['image'];?>" height="200" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $rows['name'];?></h5>
            <p class="card-text" style="line-height: 1.5em; height: 3em; overflow: hidden;"><?php echo $rows['des'];?></p>
            <a href="#" class="btn btn-primary read">Read More...</a>
          </div>
        </div>
      </div>
      <?php
     }                
         echo '<br>';
      }
    ?>
    </div>
    
  </div>
  <?php
     }                
         echo '<br>';
      }
    ?>
      <!--cards end-->
  <?php include("footer.php");?>