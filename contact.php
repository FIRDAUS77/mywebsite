<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link rel="stylesheet" href="css/style-contact.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- BOOTSTRAP FOLDER-->
    <link rel="stylesheet" href="js/bootstrap.js">
</head>
<body>


    <?php
              include "header.php";
    ?>


<div class="row" id="contatti">
<div class="container mt-5" >

    <div class="row" style="height:550px;">
      <div class="col-md-6 maps" >
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3687.218413866987!2d88.16728271492991!3d22.458425185241712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f830fc6fffffff%3A0x880d852ade5959b!2sBudge%20Budge%20Institute%20Of%20Technology!5e0!3m2!1sen!2sin!4v1607196375757!5m2!1sen!2sin" width="700" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <div class="col-md-6">
        <h2 class="text-uppercase mt-3 font-weight-bold text-white">CONTACT ME</h2>
        <form action="">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control mt-2" placeholder="First Name" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control mt-2" placeholder="Last Name" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="email" class="form-control mt-2" placeholder="Email" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="number" class="form-control mt-2" placeholder="Mobile No" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message" rows="3" required></textarea>
              </div>
            </div>
            <div class="col-12">
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                  I agree to the Terms & Conditions
                </label>
              </div>
            </div>
            </div>
            <div class="col-12">
              <button class="btn btn-light" type="submit">Submit</button>
            </div>
          </div>
        </form>
        <div class="text-white">
        <h2 class=" mt-4 font-weight-bold" style="font-style:italic">Get in touch with me</h2>

        <i class="fas fa-phone mt-3"></i> <a href="tel:+">+91 7003886834</a><br>
        <i class="fas fa-phone mt-3"></i> <a href="tel:+">+91 7685034338</a><br>
        <i class="fa fa-envelope mt-3"></i> <a href="">firdausahmed47@gmail.com</a><br>
        <i class="fas fa-globe mt-3"></i>Kolkata, West Bengal 700023 INDIA <br>
        <i class="fas fa-globe mt-3"></i>Siwan, Bihar 841425 INDIA<br>
        <div class="my-4">
        <a href="https://www.facebook.com/firdaus.ahmed.sidd/"><i class="fab fa-facebook fa-3x"></i></a>
        <a href="https://github.com/FIRDAUS77"><i class="fab fa-github fa-3x" style="margin:0 1.3vw"></i></a>
        <a href="https://www.linkedin.com/in/firdaus-ahmed-siddiqui-b68172186/"><i class="fab fa-linkedin fa-3x"></i></a>
        <a href="https://www.instagram.com/firdaus_ahmed_sidd/"><i class="fab fa-instagram fa-3x" style="margin-left:1.3vw"></i></a>
        </div>
        </div>
      </div>

    </div>
</div>
</div>

<div class="row text-center bg-success text-white" id="author">
  <div class="col-12 mt-4 h3 ">
  <a href="#">&copy; Firdaus A. Siddiqui</a>
</div>
<div class="col-12 my-2">
<a href="https://www.linkedin.com/in/firdaus-ahmed-siddiqui-b68172186/" target="_blank"><i class="fab fa-linkedin fa-3x"></i></a>
</div>
</div>



    
</body>
</html>