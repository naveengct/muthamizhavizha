<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <title>முத்தமிழ் விழா -19</title>
    <link rel="shortcut icon" href="../img/favicon.png" />

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <form name="form" method="POST" action="register.php" enctype='multipart/form-data'>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                
                <div class="card-body">
                        <h2 class="title"><center>REGISTRATION DETAILS</center></h2>
                    
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Your Name with Initial" name="Name" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email-Id" name="Email" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="tel" pattern="[0-9]{10}" placeholder="Phone Number" name="Phone" required>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="Gender" required>
                                    <option disabled="disabled" selected="selected">Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="College Name" name="College">
                        </div>
                        
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="College Registration Number" name="Id">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Course and Branch" name="Department">
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="Year">
                                    <option disabled="disabled" selected="selected">Year of Study</option>
                                    <option>I</option>
                                    <option>II</option>
                                    <option>III</option>
                                    <option>IV</option>
                                    <option>V</option>
                                    <option>VI</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="Accomodation" required>
                                    <option disabled="disabled" selected="selected">Do you need Accomodation</option>
                                    <option>Yes</option>
                                    <option>No</option>                            
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type='file' name='file' required> 
                            <p style='color:#ccc'>
                            Please upload your Photo[250KB]
                            </p>
                        </div>
                        <div class="p-t-10">
                            <center>
                            <button class="btn btn--pill btn--green" type="submit" name="submit">Submit</button></center>
                        </div>
                   
                </div>
            </div>
        </div>
    </div>
</form>
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>
</html>