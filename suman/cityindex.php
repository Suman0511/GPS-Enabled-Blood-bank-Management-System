<?php
include_once("db_connect.php");

// fetch city details
$stmt = $pdo->prepare("SELECT * FROM blood_city ORDER BY city_name ASC");
$stmt->execute();

//fetch state details
$stmt = $pdo->prepare("SELECT * FROM blood_state ORDER BY state_name ASC");
$stmt->execute();

//fetch countries details
$stmt = $pdo->prepare("SELECT * FROM blood_country ORDER BY country_name ASC");
$stmt->execute();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Dependent Select Box using PHP & AJAX</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div class="container" style="margin-top: 30px;">
<div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default">
        <div class="panel-body">
            <h2 class="text-center">Dynamic Dropdown Demo</h2><br/>
            <form id="demo-form">
            <div class="form-group">
                <select id="country" class="form-control input-lg">
                    <option value="">India</option>
                </select>
            </div>
            <div class="form-group">
                <select id="state" class="form-control input-lg">
                     <option value="">Select State</option>
                     <option value="">Select State</option>
                     <option value="">Select State</option>
                     <option value="">Select State</option>

                    
                </select>
            </div>

            <div class="form-group">
                <select id="state" class="form-control input-lg">
                     <option value="">City</option>
                     <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                    <option value="<?php echo $row['state_id']; ?>"><?php echo $row['city_name']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <input id="submit" value="Submit" type="submit" class="btn btn-lg btn-danger" />
            </div>
            </form>
        </div>
    </div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>