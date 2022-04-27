<?php include 'electricitybill_calculator.php'; 
$bill=0;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Electric Bill Calculator</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- Bootsrap CSS and JS files  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- font awesome icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <div class='container'>
        <div class='row'>
            <div class='col-md-6'>
                <div class='card'>
                    <div class='card-header' style="background:url('electcalc.jpg')">
                        <h1 class='text-primary bg-light'>Electricity Bill Calculator</h1>
                    </div>
                    <div class='card-body'>
                    <?php 
                        if (isset($_POST['submit'])) {
                            $units = $_POST['units'];                      
                            $bill = calcElectricityBill($units);
                        }
                    ?>
                        <form action='#' method='post'>
                            <label for='units' class='form-label'>Please enter the Consumed Units*</label>
                            <div class="input-group mb-3">
                                <input type='number' class='form-control form-validate' name='units' id='units' min='1' max='50000' required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fa fa-plug text-warning"></span>
                                    </div>
                                </div>
                            </div>
                            <div class=' mr-0 text-right'>
                                <button type='submit' class='btn btn-xl btn-primary' name='submit'><i class='fa fa-coins'></i> Calculate Bill</button>
                            </div>
                        </form>  
                        <div class='mt-3'>
                           <h4 class='text-primary text-center'><i class="fa fa-info fa-2x text-warning"></i> HOW IT IS CALCULATED:</h4>
                        <ul>
                            <li>Consumed Units less or equal to 50 units, the bill is &#8358;3.50 per unit.</li>
                            <li>Consumed Units more than 50 units but less than or equal to 150 units, the bill is &#8358;3.50 per unit for the first 50 units and &#8358;4.00 per unit for the remaining units.</li>
                            <li>Consumed Units more than 150 units but less than or equal to 250 units, the bill is &#8358;3.50 per unit for the first 50 units, &#8358;4.00 per unit for the next 100 units and &#8358;5.20 per unit for the remaining units.</li>
                            <li>Consumed Units is more than 250 units, the bill is 3.50 per unit for the first 50 units, &#8358;4.00 per unit for the next 100 units, &#8358;5.20 per unit for the next 100 units and &#8358;6.50 per unit for the remaining units.</li>
                        </ul>
                    </div>
                </div>
                <footer class='text-center bg-light'>
                    <p>&copy; <?php echo date('Y'); ?> - SH 5.0 PHP Group 47</p>
                </footer>
            </div>
        </div>
    </div>
</body>      
</html>