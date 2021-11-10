<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">AGE CALCULATOR</div>
         <div class="card-body">
            <form action="index.php" method="POST" class="form-group">
                <div class="row mb-4">
                   <div class="col-md-4">
                       <select name="day" class="form-control">
                           <?php
                           for($i=1; $i<=31; $i++){
                               echo "<option value='$i'>$i</option>";
                           }
                           ?>
                       </select>
                   </div> 
                   <div class="col-md-4">
                       <select name="month" class="form-control">
                           <?php
                           for($i=1; $i<=12; $i++){
                               echo "<option value='$i'>$i</option>";
                           }
                           ?>
                       </select>
                   </div> 
                   <div class="col-md-4">
                       <select name="year" class="form-control">
                           <?php
                           $year=date('Y');
                           ?>
                           <?php
                           for($i=1950; $i<=$year; $i++){
                               echo "<option value='$i'>$i</option>";
                           }
                           ?>
                       </select>
                   </div>
                </div>
                <div class="row">
                       <div class="col-md-4">
                           <input type="submit" name="submit" class="btn btn-primary" value="check age">
                       </div>
                   </div> 
            </form>
        </div>
        </div>
    </div>
    <?php
        if(isset($_POST['submit'])){
            $day=$_POST['day'];
            $month=$_POST['month'];
            $year=$_POST['year'];
            $DOB=$day.'-'.$month.'-'.$year;
            $days=new DateTime($DOB);
            $age=$days->diff(new DateTime);
            $today=date('d-m-Y');
            echo "<br>";
            echo "<b> Your Date of Birth is </b>";
            echo $DOB;
            echo "<br>";
            echo "<b> Your Age is </b>";
            echo $age->y;
            echo 'years,';
            echo $age->m;
            echo 'months,';
            echo $age->d;
            echo 'days';
        }

    ?>
</body>
</html>