<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Awesome Site</title>
    <?php require_once ("lib/headUtils.php");?>
  </head>
  <body>
    <?php require_once ("lib/partials/navBar.php");?>

    <div class="jumbotron">
        <h1>Sweetness</h1>
      <ul class="sweet">
        <li>Donuts</li>
        <li>Wedding Cakes</li>
        <li>Birthday Cakes</li>
        <li>Hot Warm Bread</li>
      </ul>
      <div class="row">
        <i class="fa fa-twitter fa-5x" aria-hidden="true"></i>
        <i class="fa fa-envelope fa-5x" aria-hidden="true"></i>
        <i class="fa fa-facebook-official fa-5x" aria-hidden="true"></i>
      </div>
      </div>

      <div id="container">
        <div class="container">
          <form>
            <div class="form-group">
              <label>Email address</label>
              <input type="email" class="form-control" placeholder="Enter Email">
            </div>
          </form>
        </div>
      </div>

      <div id="team">
        <div class="container">
          <div class="row col-centered">
            <div class="col-md-4">
              <img  src="lib/images/person1.jpg" class="img-responsive img-circle" style="height: 200px; width: 200px">
            </div>

            <div class="col-md-4">
              <img  src="lib/images/persone2.png" class="img-responsive img-circle" style="height: 200px; width: 200px">
            </div>

            <div class="col-md-4">
              <img  src="lib/images/search.png" class="img-responsive img-circle" style="height: 200px; width: 200px">
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <h2>Our Services</h2>
        <div class="col-md-4">
          <img  src="lib/images/cookies.jpg">
        </div>
        <div class="col-md-4">
          <img  src="lib/images/cake.jpg">
        </div>
        <div class="col-md-4">
          <img  src="lib/images/donuts.jpg">
        </div>
        <div class="col-md-4">
          <img  src="lib/images/bread.jpg">
        </div>
      </div>

  </body>
</html>
