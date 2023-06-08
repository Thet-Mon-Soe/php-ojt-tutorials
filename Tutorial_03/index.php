<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Age Calculator</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        $tomorrow = date("m:d:Y",strtotime("tomorrow"));
        if(isset($_POST['calculate'])){
            $date = $_POST['dateOfBirth'];
            $formatDate = date("m:d:Y",strtotime($date));
            $error;
            if($date == ""){
                $error = "data field is required";
            }elseif($formatDate == $tomorrow){
                $error = "date must not equal tomorrow.";
            }elseif($formatDate > $tomorrow){
                $error = "date must not greater than tomorrow.";
            }else{
                $success = "Your age is 20 years,4 months and 15 days.";
            }
        }
    ?>

    <div class="wrapper">
    <?php
        if($success){
    ?>
        <p class="success-msg">
            <?php echo $success; ?>
        </p>
    <?php
        }
    ?>

    <div class="box">
      <h1 class="age-ttl">Age Calculator</h1>
      <form method="post">
        <div class="date-box">
          <label>Date of birth : </label>
          <input type="date" name="dateOfBirth">
          <p class="valiError">
            <?php
                if($error){
                    echo $error;
                }
            ?>
          </p>
        </div>
        <input type="submit" value="Calculate" class="calculate-btn" name="calculate">
      </form>
    </div>
    </div>

    
</body>
</html>