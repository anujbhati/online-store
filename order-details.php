
<?php
    // if the user enters the page without submitting the form will redirected to the index page
    if (!isset($_POST['make-my-order'])){
        header("Location:index.php");
    }
	date_default _timezone_get('Canada/Saskatchewan');
?>
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
<body>

    <div class="col-md-6 col-md-offset-3">
        <a class="fa fa-chevron-left" href="index.php" style="margin-top: 40px;font-size: 18px;"> Back</a>
        <?php
        include 'items.php'; // include the items page which contain items name and cost
        if (isset($_POST['items'])){ //check if the user submits the form
            $items = $_POST['items'];
            $noError = true;
            foreach ($items as $value){
                if (!isset($_POST[$value]) OR ($value !='' AND $_POST[$value] == '')){ // check that every item has quantity
                    $noError = false; // if we found that where items within quantity we will stop the loop and make the var that were an error
                    break;
                }
            }
            ?>
            <?php  if (!$noError) { // check if where error this alert the error?>
                <div class="alert alert-danger text-center">There An Error Please Try Later</div>
            <?php }else { // else we will display the order data?>
                <div class="panel panel-primary pill">
                    <div class="panel-heading">Shipping To: <?php echo $_POST['full-name'] // print the user name?></div>
                    <div class="panel-body">
                        <?php // print user address
                        echo "Address: " . $_POST['houseNumber'] ." ". $_POST['street'] . " Street," .$_POST['city']." City, ".$_POST['zipcode'].  ", " .$_POST['country'] ."
                            <hr>
                            Order Information:
                            <br>
                            <span class='text-danger'>Your order is processed, please verify the information</span>
                            <br>
                        ";
                        $total_cost = 0;
                        $tax = 0.13; // takes will be 13%
                        foreach ($items as $value){ // print all items with the total cost and the single cost for every item
                            $total = $_POST[$value]*$all_items[$value];
                            $total_cost+= $total;
                            echo $_POST[$value]." $value ".$all_items[$value]."$ each extended cost $".$total."<br>";
                        }
//                        calculate the delivery cost and Estimated Delivery Date with this conditions
                        /*
                         * $3.00 if the product is greater than $0.00 and less than or equal to $25.00, delivery 1 day
                         * $4.00 if the product cost is $25.01 – 50.00, delivery 1 day
                         * $5.00 if the product cost is $50.01 – 75.00, delivery 3 days
                         * $6.00 if the product is more than $75.00, delivery 4 days
                         */
                        if ($total_cost >= 0 AND $total_cost <= 25){
                            $delivery_cost = 3;
                            $delivery_day = 1;
                        }
                        elseif($total_cost > 25 and $total_cost <= 50){
                            $delivery_cost = 4;
                            $delivery_day = 1;
                        }
                        elseif($total_cost > 50 and $total_cost <= 75){
                            $delivery_cost = 5;
                            $delivery_day = 3;
                        }
                        elseif($total_cost > 75){
                            $delivery_cost = 6;
                            $delivery_day = 4;
                        }
                        $all_tax = $tax*$total_cost; // calculate the total taxes for all items
                        $final_total = $all_tax + $delivery_cost + $total_cost; // calculate the final cost for all items
                        // print the cost details for the order
                        echo "
                        <br>
                            Total = $$total_cost
                            <br>
                            Tax = $".$all_tax." (". $tax*100 ."%)
                            <br>
                            Delivery= $$delivery_cost
                            <br>
                             Total Order is: $".$final_total."
                            ";
                        ?>
                    </div>
                    <div class="panel-footer">Estimated Delivery Date is: <?php
                        $NewDate=Date('d/m/Y', strtotime("+".$delivery_day." days")); // get the current date and add the number of delivery days
                        echo $NewDate;
                        ?></div>
                </div>
            <?php

            }
        } // end big if
        else{
            header("Location: index.php");
        }
        ?>
    </div>
<!-- start the script -->
<script src="js/jquery-2.2.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<!-- end the script -->
</body>
</html>
