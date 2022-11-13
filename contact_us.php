<?php include("header.php");?>
    <div class="row d-flex justify-content-center">
      <div class="col-md-8">
          <hr class="my-5">
          <h1 class="text-center">Contact Us</h1>
          <p class="text-center">We Would Be Happy To Hear From You</p>
          <hr class="my-5">
      </div>
  </div>
    <div class="container py-5 my-5 contain">
        <div class="col-lg-12 py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1>Get In Touch</h1>
                    <p class="my-5 fs-5">MAIL ME TO ASK ANY QUERY RELATED TO UNIVERSE.</p>
                    <p class=" mb-5 fs-5">Thank You</p>
                    <a href="#">gouravdsharma2002@gmail.com</a>
                </div>
                <form class="col-lg-6"  action="contact_action.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label for="emailarea" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="emailarea" placeholder="name@gmail.com">
                      </div>
                      <div class="mb-3">
                        <label for="Textarea" class="form-label">Message</label>
                        <textarea class="form-control" name="message" id="Textarea"></textarea>
                      </div>
                      <button class="btn btn-outline-success" type="submit" >SUBMIT</button>
                </form>
            </div>
        </div>
    </div>
    <?php include("footer.php");?>