<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Online Store </title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body background = "images/2.png" >

    <div class="col-md-8 col-md-offset-2">
      <form action="order-details.php" method="post" id="make-order">
        <div class="row">
        <h3>Choose The Items</h3>
          <div class="append-here">

          </div>
          <div class="col-lg-6 item-group">
            <label for="">Item 1 -- 10$ for one Item -- total (<span class="total-here"></span>)</label>
            <div class="input-group">
              <span class="input-group-addon">
                <input type="checkbox" name="items[]" value="item1">
              </span>
              <input type="number" disabled name="item1" class="form-control item-quantity" data-once="10" placeholder="Enter The Quantity">
            </div><!-- /input-group -->
          </div><!-- /.col-lg-6 item-group -->

          <div class="col-lg-6 item-group">
            <label for="">Item 2 -- 15$ for one Item -- total (<span class="total-here"></span>) </label>
            <div class="input-group">
              <span class="input-group-addon">
                <input type="checkbox" name="items[]" value="item2">
              </span>
              <input type="number" disabled name="item2" class="form-control item-quantity" data-once="15" placeholder="Enter The Quantity">
            </div><!-- /input-group -->
          </div><!-- /.col-lg-6 item-group -->

          <div class="col-lg-6 item-group">
            <label for="">Item 3 -- 20$ for one Item -- total (<span class="total-here"></span>) </label>
            <div class="input-group">
              <span class="input-group-addon">
                <input type="checkbox" name="items[]" value="item3">
              </span>
              <input type="number" disabled name="item3" class="form-control item-quantity" data-once="20" placeholder="Enter The Quantity">
            </div><!-- /input-group -->
          </div><!-- /.col-lg-6 item-group -->

          <div class="col-lg-6 item-group">
            <label for="">Item 4 -- 60$ for one Item -- total (<span class="total-here"></span>) </label>
            <div class="input-group">
              <span class="input-group-addon">
                <input type="checkbox" name="items[]" value="item4">
              </span>
              <input type="number" disabled name="item4" class="form-control item-quantity" data-once="60" placeholder="Enter The Quantity">
            </div><!-- /input-group -->
          </div><!-- /.col-lg-6 item-group -->

          <div class="col-lg-6 item-group">
            <label for="">Item 5 -- 5$ for one Item -- total (<span class="total-here"></span>) </label>
            <div class="input-group">
              <span class="input-group-addon">
                <input type="checkbox" name="items[]" value="item5">
              </span>
              <input type="number" disabled name="item5" class="form-control item-quantity" data-once="5" placeholder="Enter The Quantity">
            </div><!-- /input-group -->
          </div><!-- /.col-lg-6 item-group -->

          <div class="col-lg-6 item-group">
            <label for="">Item 6 -- 13$ for one Item -- total (<span class="total-here"></span>) </label>
            <div class="input-group">
              <span class="input-group-addon">
                <input type="checkbox" name="items[]" value="item6">
              </span>
              <input type="number" disabled name="item6" class="form-control item-quantity" data-once="13" placeholder="Enter The Quantity">
            </div><!-- /input-group -->
          </div><!-- /.col-lg-6 item-group -->
        </div>
        <hr>
        <h3>Personal Information</h3>
        <div class="form-group">
          <label for="full-name">Your Name</label>
          <input type="text" class="form-control" name="full-name" id="full-name" placeholder="Full Name">
        </div>
        <div class="row">
          <div class="col-md-2">
            <div class="form-group">
              <label>House Number</label>
              <input type="number" class="form-control" name="houseNumber" id="houseNumber" placeholder="House Number">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Street</label>
              <input type="text" class="form-control" name="street" id="street" placeholder="Street">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>City</label>
              <input type="text" class="form-control" name="city" id="city" placeholder="City">
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label>Zip Code</label>
              <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="Zip Code">
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label>Country</label>
              <input type="text" class="form-control" readonly name="country" id="country" value="Canada">
            </div>
          </div>
        </div>
		<div class = "text-center">
        <button type="submit" class="btn btn-default" name="make-my-order">Submit</button>
      </form>
    </div>

    <!-- start the script -->
    <script src="js/jquery-2.2.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <!-- end the script -->
  </body>
</html>
