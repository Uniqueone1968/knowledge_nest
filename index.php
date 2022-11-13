<?php include ("header.php");?>
  <div class="container-fluid my-2">
    <div class="card text-bg-dark">
      <img src="galaxy1.jpg" class="card-img" style="height: 450px;" alt="galaxy">
      <div class="card-img-overlay">
        <h1 class="card-title text-center text-white mt-5 mb-3 ">WELCOME TO OUR WORLD</h1>
        <h4 class="card-text text-center text-white mb-5">Universe is waiting for you </h4>
        <div class="container">
          <p class="card-text text-white lh-lg fw-bold">THINK UNIQUE, DO UNIQUE, PLAY UNIQUE<br>
            THEN DEFINITELY YOU WILL BECOME UNIQUE.<br>
            THAT IS WHAT I THINK, YOUR FRIEND AND HOST, GOURAV SHARMA. </p>
        </div>
      </div>
    </div>
  </div>
  <div class="container my-2">
    <div id="carouselExampleDark" class="carousel carousel-dark slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="5000">
          <img src="APJ_SIR.jpg" class="d-block w-100" style="height: 400px;" alt="...">
          <div class="carousel-caption d-none d-md-block">
            
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="5000">
          <img src="STEVE.png" class="d-block w-100" style="height: 400px;" alt="...">
          <div class="carousel-caption d-none d-md-block">
            
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="stephen-hawking.jpg" class="d-block w-100" style="height: 400px;" alt="...">
          <div class="carousel-caption d-none d-md-block">
            
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- Container or first carousel closed-->
  <?php
  include("config.php");
  $sql= "select * from category";
  $qry= mysqli_query($conn, $sql);
  if($qry){
    while ($row = mysqli_fetch_assoc($qry) ) {
      # code...
  $id= $row["id"];
  ?>
  <div class="text-center fs-3 fw-bold my-4"><?php echo $row["name"];?></div>
  <div class="container-fluid">
    <div class="row slider-for">
      <?php 
      $sqla= "SELECT knowledge_info.name as knowledge_name, knowledge_info.image, knowledge_info.des, knowledge_info.sub_category_id 
      FROM knowledge_info 
      INNER JOIN sub_category ON sub_category.id = knowledge_info.sub_category_id where sub_category.category_id = $id";
      $run= mysqli_query($conn, $sqla);
      if($run){
        while ($rows = mysqli_fetch_assoc($run)){
      ?>
      <div class="col-sm-4 mx-2">
        <div class="card">
          <img src="/knowledge_nest/admin/images/<?php echo $rows["image"];?>"  height="200" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $rows["knowledge_name"];?></h5>
            <p class="card-text" style="line-height: 1.5em; height: 3em; overflow: hidden;"><?php echo $rows['des'];?></p>
            <a href="<?php echo $row['name'];?>.php?id='<?php echo $row['id'];?>'" class="btn btn-primary read ">Read More...</a>
          </div>
        </div>
      </div>
      <?php 
       }
      }
      ?>
    </div>
    
  </div>
  
  <?php 
  }echo "</br>";
}
  ?>
 <?php include ("footer.php");?>
 