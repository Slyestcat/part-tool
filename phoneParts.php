<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php
            //takes post data from previous page, phone model
            $phoneModel = $_POST['phoneModel'];
             //echo $phoneModel;
            //takes post data from the drop downs on the previous page, color
            $phoneColor = $_POST['phoneColor'];
            //echo $phoneColor;
            //takes post data from the drop downs on previous page, carrier
            $phoneBuyerRaw = $_POST['phoneBuyer'];
            //echo $phoneBuyer;
            $partArray = $_POST['partName'];
            //$partImplode = implode("' OR partType = '",$partArray);
            //echo $partImplode;
            
            if ($phoneModel == "") {
                echo'
                    <script>
                    window.onload = function() {
                       alert("The phone model was not selected.");
                       location.href = "index.php";  
                    }
                    </script>
                 ';
            } else if ($phoneBuyerRaw == "") {
                echo'
                    <script>
                    window.onload = function() {
                       alert("The phone carrier was not selected.");
                       location.href = "index.php";  
                    }
                    </script>
                 ';
            } else if ($phoneColor == "") {
                echo'
                    <script>
                    window.onload = function() {
                       alert("The phone color was not selected.");
                       location.href = "index.php";  
                    }
                    </script>
                 ';
            } else if ($partArray == "") {
                echo'
                    <script>
                    window.onload = function() {
                       alert("You have not selected any parts.");
                       location.href = "index.php";  
                    }
                    </script>
                 ';
                
            }
            
            //translates the model code to a full name for display on the page
            if ($phoneModel == 'SMG920') {
                $phoneName = "Galaxy S6";
            } else if ($phoneModel == 'SMG925'){
                $phoneName = "Galaxy S6 Edge";
            } else if ($phoneModel == 'SMG928') {
                $phoneName = "Galaxy S6 Edge+";
            } else if ($phoneModel == 'SMN920'){
                $phoneName = "Galaxy Note 5";
            } else if ($phoneModel == 'SMG930') {
                $phoneName = "Galaxy S7";
            } else if ($phoneModel == 'SMG935') {
                $phoneName = "Galaxy S7 Edge";
            } else if ($phoneModel == 'SMG950'){
                $phoneName = "Galaxy S8";
            } else if ($phoneModel == 'SMG955') {
                $phoneName = "Galaxy S8+";
            } else if ($phoneModel == 'SMN950'){
                $phoneName = "Galaxy Note 8";
            } else if ($phoneModel == 'SMG960') {
                $phoneName = "Galaxy S9";
            } else if ($phoneModel == 'SMG965') {
                $phoneName = "Galaxy S9+";
            } else if ($phoneModel == 'SMN960') {
                $phoneName = "Galaxy Note 9";
            }
            
        
        //translates unique buyer code from the previous page to data usable
        //in the SQL query
        if (fnmatch("U_*", $phoneBuyerRaw)) {
            $phoneBuyer = 'U';
        } elseif (fnmatch("V_*", $phoneBuyerRaw)) {   
            $phoneBuyer = 'V';
        } elseif (fnmatch("P_*", $phoneBuyerRaw)) {
            $phoneBuyer = 'P';
        } elseif (fnmatch ("T_*", $phoneBuyerRaw)) {
            $phoneBuyer = 'T';
        } elseif (fnmatch ("A_*", $phoneBuyerRaw)) {
            $phoneBuyer = 'A';
        } elseif (fnmatch ("R4_*", $phoneBuyerRaw)) {
            $phoneBuyer = 'R4';
        }
        
        //echo $phoneBuyer;
        
        //translates the carrier code into readable data to display on page
        if ($phoneBuyer == 'U') {
            $phoneInfoCarrier = "Universal Parts";
        } else if ($phoneBuyer == 'V'){
            $phoneInfoCarrier = "Verizon";
        } else if ($phoneBuyer == 'P'){
            $phoneInfoCarrier = "Sprint";
        } else if ($phoneBuyer == 'T'){
            $phoneInfoCarrier = "T-Mobile";
        } else if ($phoneBuyer == 'A'){
            $phoneInfoCarrier = "AT&T";
        } else if ($phoneBuyer == 'R4'){
            $phoneInfoCarrier = "US Cellular";
        }
    ?>
    
    <style>
        #parts {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 90%;
        }

        #parts td, #parts th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        h1 {
          font-family: "Trebuchet MS", Arial, Helvetica, sans-serif; 
          margin-bottom: 0px;
        }
        h2 {
          font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
          font-size: 16px;
          margin-top: 5px;
        }
        #parts tr:nth-child(even){background-color: #f2f2f2;}

        #parts tr:hover {background-color: #ddd;}

        #parts th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #FF5500;
            color: white;
        }
        </style>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $phoneName; ?> Parts</title>
    </head>
    <body>
        <?php
        //$conString = 'localhost, samsung, password, samsung';
        $con = mysqli_connect("localhost", "samsung", "password", "samsung");
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        /*
         * debugging 
         */

        
        
        //$phoneQuery = "SELECT * FROM $phoneModel WHERE partColor = '$phoneColor' AND partBuyer = '$phoneBuyer' AND ( partType = '(". implode("OR",$_POST['partName']) .")')";
        echo "<center>";
        echo "<h1> $phoneName </h1>";
        echo "<h2> Carrier: $phoneInfoCarrier <br/> Color: $phoneColor </h2>";
        echo "<table id='parts'>";
                    //header
                    echo "<tr><th>Bin Locator</th>";
                    echo "<th>Part Type</th>";
                    echo "<th>Part Number</th>";
                    echo "<th>Part Quantity</th>";
                    echo "<th>Notes</th></tr>";
        
        if(in_array("Octa", $partArray)) { //SQL query for OCTA
            $phoneQuery = "SELECT * FROM $phoneModel WHERE "
                    . "partColor = '$phoneColor' AND partBuyer = '$phoneBuyer' "
                    . " AND ( partType = 'Octa' ) LIMIT 3";
            if($phoneResult = mysqli_query($con, $phoneQuery)) {
                //data  
                while ($row = mysqli_fetch_array($phoneResult))  {
                    echo "<tr><td>{$row['partBin']}</td>";
                    echo "<td>{$row['partType']}</td>";
                    echo "<td>{$row['partNum']}</td>";
                    echo "<td>{$row['partQuantity']}</td>";
                    echo "<td>{$row['note']}</td></tr>";
                } 
            }
        }
        
        if(in_array("Back Glass", $partArray)) { //SQL query for Backglass
            $phoneQuery = "SELECT * FROM $phoneModel WHERE "
                    . "partColor = '$phoneColor' AND partBuyer = '$phoneBuyer' "
                    . " AND ( partType = 'Back Glass' ) LIMIT 3";
            if($phoneResult = mysqli_query($con, $phoneQuery)) {
                //data  
                while ($row = mysqli_fetch_array($phoneResult))  {
                    echo "<tr><td>{$row['partBin']}</td>";
                    echo "<td>{$row['partType']}</td>";
                    echo "<td>{$row['partNum']}</td>";
                    echo "<td>{$row['partQuantity']}</td>";
                    echo "<td>{$row['note']}</td></tr>";
                } 
            }
        }
        
        if(in_array("Screws", $partArray)) { //Query for case screws, pulls from "screw" post data
            $phoneQuery = "SELECT * FROM $phoneModel WHERE "
                       . "partType = 'Case Screw'";
            if($phoneResult = mysqli_query($con, $phoneQuery)) {
                //data  
                while ($row = mysqli_fetch_array($phoneResult))  {
                    echo "<tr><td>{$row['partBin']}</td>";
                    echo "<td>{$row['partType']}</td>";
                    echo "<td>{$row['partNum']}</td>";
                    echo "<td>{$row['partQuantity']}</td>";
                    echo "<td>{$row['note']}</td></tr>";
                } 
            }
        }
        
        if(in_array("Screws", $partArray)) { //query SubPBA Screws, pulls from "screw" post data
            $phoneQuery = "SELECT * FROM $phoneModel WHERE "
                    . "partType = 'SubPBA Screw'";
            if($phoneResult = mysqli_query($con, $phoneQuery)) {
                //data  
                while ($row = mysqli_fetch_array($phoneResult))  {
                    echo "<tr><td>{$row['partBin']}</td>";
                    echo "<td>{$row['partType']}</td>";
                    echo "<td>{$row['partNum']}</td>";
                    echo "<td>{$row['partQuantity']}</td>";
                    echo "<td>{$row['note']}</td></tr>";
                } 
            }
        }
        
        if(in_array("Screws", $partArray)) { //query for PBA screws, pulls from "screw" post data
            $phoneQuery = "SELECT * FROM $phoneModel WHERE "
                    . "partType = 'PBA Screw'";
            if($phoneResult = mysqli_query($con, $phoneQuery)) {
                //data  
                while ($row = mysqli_fetch_array($phoneResult))  {
                    echo "<tr><td>{$row['partBin']}</td>";
                    echo "<td>{$row['partType']}</td>";
                    echo "<td>{$row['partNum']}</td>";
                    echo "<td>{$row['partQuantity']}</td>";
                    echo "<td>{$row['note']}</td></tr>";
                } 
            }
        }
        
        if(in_array("Tape", $partArray)) { //tape query, pulls all tapes avalible 
            $phoneQuery = "SELECT * FROM $phoneModel WHERE "
                    . "partType = 'Tape'";
            if($phoneResult = mysqli_query($con, $phoneQuery)) {
                //data  
                while ($row = mysqli_fetch_array($phoneResult))  {
                    echo "<tr><td>{$row['partBin']}</td>";
                    echo "<td>{$row['partType']}</td>";
                    echo "<td>{$row['partNum']}</td>";
                    echo "<td>{$row['partQuantity']}</td>";
                    echo "<td>{$row['note']}</td></tr>";
                } 
            }
        }
        
        if(in_array("Front Camera", $partArray)) { //query for front camera
            $phoneQuery = "SELECT * FROM $phoneModel WHERE "
                    . "partType = 'Front Camera'";
            if($phoneResult = mysqli_query($con, $phoneQuery)) {
                //data  
                while ($row = mysqli_fetch_array($phoneResult))  {
                    echo "<tr><td>{$row['partBin']}</td>";
                    echo "<td>{$row['partType']}</td>";
                    echo "<td>{$row['partNum']}</td>";
                    echo "<td>{$row['partQuantity']}</td>";
                    echo "<td>{$row['note']}</td></tr>";
                } 
            }
        }
        
        if(in_array("Rear Camera", $partArray)) { //query for rear camera
            $phoneQuery = "SELECT * FROM $phoneModel WHERE "
                    . "partType = 'Front Camera'";
            if($phoneResult = mysqli_query($con, $phoneQuery)) {
                //data  
                while ($row = mysqli_fetch_array($phoneResult))  {
                    echo "<tr><td>{$row['partBin']}</td>";
                    echo "<td>{$row['partType']}</td>";
                    echo "<td>{$row['partNum']}</td>";
                    echo "<td>{$row['partQuantity']}</td>";
                    echo "<td>{$row['note']}</td></tr>";
                } 
            }
        }
        
        if(in_array("SubPBA", $partArray)) { //query for subpba 
            $phoneQuery = "SELECT * FROM $phoneModel WHERE "
                    . "partType = 'SubPBA'";
            if($phoneResult = mysqli_query($con, $phoneQuery)) {
                //data  
                while ($row = mysqli_fetch_array($phoneResult))  {
                    echo "<tr><td>{$row['partBin']}</td>";
                    echo "<td>{$row['partType']}</td>";
                    echo "<td>{$row['partNum']}</td>";
                    echo "<td>{$row['partQuantity']}</td>";
                    echo "<td>{$row['note']}</td></tr>";
                } 
            }
        }
        
         if(in_array("Other", $partArray)) { //query for all other parts
            $phoneQuery = "SELECT * FROM $phoneModel WHERE "
                    . "partType = 'Other'";
            if($phoneResult = mysqli_query($con, $phoneQuery)) {
                //data  
                while ($row = mysqli_fetch_array($phoneResult))  {
                    echo "<tr><td>{$row['partBin']}</td>";
                    echo "<td>{$row['partType']}</td>";
                    echo "<td>{$row['partNum']}</td>";
                    echo "<td>{$row['partQuantity']}</td>";
                    echo "<td>{$row['note']}</td></tr>";
                } 
            }
        }
        
        if(in_array("Battery", $partArray)) { //Other
            $phoneQuery = "SELECT * FROM $phoneModel WHERE "
                    . "partType = 'Battery'";
            if($phoneResult = mysqli_query($con, $phoneQuery)) {
                //data  
                while ($row = mysqli_fetch_array($phoneResult))  {
                    echo "<tr><td>{$row['partBin']}</td>";
                    echo "<td>{$row['partType']}</td>";
                    echo "<td>{$row['partNum']}</td>";
                    echo "<td>{$row['partQuantity']}</td>";
                    echo "<td>{$row['note']}</td></tr>";
                } 
            }
        }
        
            mysqli_free_result($phoneResult);
            mysqli_close($con);
        
        ?>
    </center>
    </body>
</html>
