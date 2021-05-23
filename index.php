<?php
include'header.php';
echo "<meta http-equiv='refresh' content='30'>";
?>
 
<body>
    <div class="wrapper">
       <?php
       include'menu.php';
       ?>

        <div id="body" class="active">
           <?php
           include'nav.php';
           ?>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="teal fas fa-calendar"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail text-center">
                                                <p>Today's Visitor</p>
                                                <span class="number">
                                                    <?php
                                                    include'db.php';
                                                    $sql = "SELECT COUNT(*) as total_t FROM register_tbl where created_by='$uid' and DATE(created_on) = DATE(NOW())";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
$total_t=$row["total_t"];
    }
} else {
    $total_t=0;
}
echo $total_t;
                                                    ?>
                                                    
                                                    
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="fas fa-redo-alt"></i> Updated real-time
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="violet fas fa-list"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail text-center">
                                                <p>All Visitors</p>
                                                <span class="number"> <?php
                                                    include'db.php';
                                                    $sql = "SELECT COUNT(*) as total_t FROM register_tbl where created_by='$uid'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
$total_t=$row["total_t"];
    }
} else {
    $total_t=0;
}
echo $total_t;
                                                    ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="fas fa-stopwatch"></i> Updated real-time
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="orange fas fa-id-card"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail text-center">
                                                <p>All Pass </p>
                                                <span class="number">
                                                     <?php
                                                    include'db.php';
                                                    $sql = "SELECT COUNT(*) as total_t FROM register_tbl where created_by='$uid' and qr_code!=''";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
$total_t=$row["total_t"];
    }
} else {
    $total_t=0;
}
echo $total_t;
                                                    ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="fas fa-envelope-open-text"></i>   Updated real-time

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-sm-6 col-md-6 col-lg-3 mt-3">
                            <div class="card">
                                <div class="content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="icon-big text-center">
                                                <i class="olive fas fa-money-bill-alt"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="detail text-center">
                                                <p>Total Users</p>
                                                <span class="number">
                                                     <?php
                                                    include'db.php';
                                                    $sql = "SELECT COUNT(*) as total_t FROM admin_reg where created_by='$uid' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
$total_t=$row["total_t"];
    }
} else {
    $total_t=0;
}
echo $total_t;
                                                    ?>
                                                    
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="footer">
                                        <hr />
                                        <div class="stats">
                                            <i class="fas fa-calendar"></i> Updated real-time
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                  

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="content">
                                    <div class="head">
                                        <h4 class="mb-0">Today's Visitor List</h4>
                                        
                                    </div>
                                    <div class="canvas-wrapper">
                                        <table class="table no-margin bg-lighter-grey">
                                            <thead class="success">
                                                <tr>
 <th>Name</th>
                                                    <th>Contact </th>
                                                </tr>
                                            </thead>
                                             <?php
                                    include'db.php';
                                   $sql = "SELECT * FROM register_tbl where created_by='$uid'  and DATE(created_on) = DATE(NOW())  ORDER BY id DESC LIMIT 5";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $id=$row["id"];
$name=$row["name"];
$email=$row["email"];
$mobile=$row["mobile"];
$photo=$row["photo"];
$created_on=$row["created_on"];

   
    
?>


                                                <tr>
                                        <td><?php echo $name;   ?></td>
                                        <td><?php echo $email; ?><br><?php echo  $mobile; ?></td>
                                                </tr>
                                                                                 <?php
                                 
    }
} else {
   
}
?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="content">
                                    <div class="head">
                                        <h4 class="mb-0">Today's Visitor Register</h4>
                                       
                                    </div>
                                    <div class="canvas-wrapper">
                                        <table class="table no-margin bg-lighter-grey">
                                            <thead class="success">
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Time </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 <?php
                                    include'db.php';
                                 //  $sql = "SELECT * FROM register_tbl where created_by='$uid'  ORDER BY id DESC LIMIT 5";
                                   
                                   
                                           //  $sql = "SELECT *,Date(check_out) as date1 FROM check_a where created_by='$uid'  and DATE(created_on) = DATE(NOW()) ORDER BY check_in  LIMIT 5";
                                             
                                                       $sql = "SELECT *,Date(check_out) as date1 FROM check_a where created_by='$uid' and DATE(check_out) = DATE(NOW())   ORDER BY check_in DESC";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $visitor_name=$row["visitor_name"];
$out=$row["check_out"];


   
    
?>


                                                <tr>
                                        <td><?php echo $visitor_name;   ?></td>
                                        <td><?php echo $check_out1 = date('h:i A', strtotime($out)); ?><br><?php //echo  $mobile; ?></td>
                                                </tr>
                                                                                 <?php
                                 
    }
} else {
   
}
?>

                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-3">
                            <div class="card">
                                <div class="content">
                                    <div class="head">
                                        <h4 class="mb-0">Top Referrals</h4>
                                        <p class="text-muted">Your year long website traffic data</p>
                                    </div>
                                    <div class="canvas-wrapper">
                                        <table class="table no-margin bg-lighter-grey">
                                            <thead class="success">
                                                <tr>
                                                    <th>Refferer</th>
                                                    <th class="text-right">Traffic</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><i class="darkgray fas fa-link"></i> Google.com</td>
                                                    <td class="text-right">9,340</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="darkgray fas fa-link"></i> Facebook.com</td>
                                                    <td class="text-right">8,280</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="darkgray fas fa-link"></i> Instragram.com</td>
                                                    <td class="text-right">6,210</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="darkgray fas fa-link"></i> Yourwebsite.com</td>
                                                    <td class="text-right">5,176</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="darkgray fas fa-link"></i> Youtube.com</td>
                                                    <td class="text-right">4,276</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="darkgray fas fa-link"></i> Direct</td>
                                                    <td class="text-right">3,176</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="darkgray fas fa-link"></i> Duckduckgo.com</td>
                                                    <td class="text-right">2,176</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="darkgray fas fa-link"></i> Landingpage.com</td>
                                                    <td class="text-right">1,886</td>
                                                </tr>
                                                <tr>
                                                    <td><i class="darkgray fas fa-link"></i> Giantweb.come</td>
                                                    <td class="text-right">1,509</td>
                                                </tr> 
                                                <tr>
                                                    <td><i class="darkgray fas fa-link"></i> Unknown</td>
                                                    <td class="text-right">890</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    
                   
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="assets/vendor/jquery3/jquery-3.4.1.min.js"></script>
    <script src="assets/vendor/bootstrap4/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/fontawesome5/js/solid.min.js"></script>
    <script src="assets/vendor/fontawesome5/js/fontawesome.min.js"></script>
    <script src="assets/vendor/chartsjs/Chart.min.js"></script>
    <script src="assets/js/dashboard-charts.js"></script>
    <script src="assets/js/script.js"></script>

</body>

</html>