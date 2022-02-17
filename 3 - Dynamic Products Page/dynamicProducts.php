<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Products Page</title>
  </head>

  <body>

    <!-- NAVIGATION BAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
    </ul>
  </div>
</nav>
<!-- END OF NAVIGATION BAR -->

<!-- PRODUCTS DISPLAY -->
<div class="container">
  <div class="row">
<?php
# THE CARDS VARIABLE HAS TO BE REPLACED WITH THE NUMBER OF ROWS RETURNED FROM OUR QUERY
$cards = 14;

$counter = 0;
while($cards != 0){
  if($counter < 3){
    $cards--;
    $counter++;
    ?>
  <div class="col" style="max-width: 33%">
    <div class="card h-100">
                          <!-- Product image-->
                          <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                          <!-- Product details-->
                          <div class="card-body p-4">
                              <div class="text-center">
                                  <!-- Product name-->
                                  <h5 class="fw-bolder">Fancy Product</h5>
                                  <!-- Product price-->
                                  $40.00 - $80.00
                              </div>
                          </div>
                          <!-- Product actions-->
                          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                          </div>
                      </div>
  </div>
  <?php
} else{
  $counter = 1;
  $cards--;
  echo "</div>";
  echo "<div class='row'>";
  ?>
  <div class="col" style="max-width: 33%">
    <div class="card h-100">
                          <!-- Product image-->
                          <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                          <!-- Product details-->
                          <div class="card-body p-4">
                              <div class="text-center">
                                  <!-- Product name-->
                                  <h5 class="fw-bolder">Fancy Product</h5>
                                  <!-- Product price-->
                                  $40.00 - $80.00
                              </div>
                          </div>
                          <!-- Product actions-->
                          <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                              <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                          </div>
                      </div>
  </div>
<?php } } ?>
</div> <!-- End of row -->
</div> <!-- End of container -->

  </body>
</html>
