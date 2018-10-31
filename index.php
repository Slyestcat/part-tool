<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Samsung Parts</title>
    
        <!--/* Database Tables
         * 
         * SM-G950
         * SM-G955
         * SM-N950
         * SM-G960
         * SM-G965
         * 
         */-->
        
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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script language="javascript" type="text/javascript">
        
 window.addEventListener( "pageshow", function ( event ) {
  var historyTraversal = event.persisted || 
                         ( typeof window.performance != "undefined" && 
                              window.performance.navigation.type === 2 );
  if ( historyTraversal ) {
    // Handle page restore.
    window.location.reload();
  }
});


 <!--
 function listboxchange1(p_index) {
 
 //Clear Current options in phoneBuyer
 document.form1.phoneBuyer.options.length = 0;
 
 //Clear Current options in.phoneColor
 document.form1.phoneColor.options.length = 0;
 document.form1.phoneColor.options[0] = new Option("Select Color", "");
 
 switch (p_index) {

case "SMG920":
    document.form1.phoneBuyer.options[0] = new Option("Select Carrier", "");
    document.form1.phoneBuyer.options[1] = new Option("Universal", "U_001");
break;

case "SMG925":
    document.form1.phoneBuyer.options[0] = new Option("Select Carrier", "");
    document.form1.phoneBuyer.options[1] = new Option("Sprint", "P_002");
    document.form1.phoneBuyer.options[2] = new Option("Verizon", "V_002");
    document.form1.phoneBuyer.options[3] = new Option("At&T", "A_002");
    document.form1.phoneBuyer.options[4] = new Option("T-Mobile", "T_002");
    document.form1.phoneBuyer.options[5] = new Option("US Cellular", "R4_002");
break;

case "SMG928":
    document.form1.phoneBuyer.options[0] = new Option("Select Carrier", "");
    document.form1.phoneBuyer.options[1] = new Option("Sprint", "P_003");
    document.form1.phoneBuyer.options[2] = new Option("Verizon", "V_003");
    document.form1.phoneBuyer.options[3] = new Option("At&T", "A_003");
    document.form1.phoneBuyer.options[4] = new Option("T-Mobile", "T_003");
    document.form1.phoneBuyer.options[5] = new Option("US Cellular", "R4_003");
break;

case "SMN920":
    document.form1.phoneBuyer.options[0] = new Option("Select Carrier", "");
    document.form1.phoneBuyer.options[1] = new Option("Universal", "U_004");
break;

case "SMG930":
    document.form1.phoneBuyer.options[0] = new Option("Select Carrier", "");
    document.form1.phoneBuyer.options[1] = new Option("Sprint", "P_005");
    document.form1.phoneBuyer.options[2] = new Option("Verizon", "V_005");
    document.form1.phoneBuyer.options[3] = new Option("At&T", "A_005");
    document.form1.phoneBuyer.options[4] = new Option("T-Mobile", "T_005");
    document.form1.phoneBuyer.options[5] = new Option("US Cellular", "R4_005");
break;

case "SMG935":
    document.form1.phoneBuyer.options[0] = new Option("Select Carrier", "");
    document.form1.phoneBuyer.options[1] = new Option("Universal", "U_006");
break;

case "SMG950":
    document.form1.phoneBuyer.options[0] = new Option("Select Carrier", "");
    document.form1.phoneBuyer.options[1] = new Option("Universal", "U_007");
break;

case "SMG955":
    document.form1.phoneBuyer.options[0] = new Option("Select Carrier", "");
    document.form1.phoneBuyer.options[1] = new Option("Universal", "U_008");
break;

case "SMN950":
    document.form1.phoneBuyer.options[0] = new Option("Select Carrier", "");
    document.form1.phoneBuyer.options[1] = new Option("Universal", "U_009");
break;

case "SMG960":
case "SMG965":
    document.form1.phoneBuyer.options[0] = new Option("Select Carrier", "");
    document.form1.phoneBuyer.options[1] = new Option("Universal", "U_010");
break;

case "SMN960":
    document.form1.phoneBuyer.options[0] = new Option("Select Carrier", "");
    document.form1.phoneBuyer.options[1] = new Option("Universal", "U_011");
break;
    
 }
 return true;
 }
 //-->
 </script>
 
    <script language="javascript" type="text/javascript">
 <!--
 
 function listboxchange(p_index) {
 
 //Clear Current options in subcategory
 document.form1.phoneColor.options.length = 0;
 
 
switch (p_index) {
 
case "U_001":
case "P_002":
case "V_002":
case "A_002":
case "T_002":
case "R4_002":
    document.form1.phoneColor.options[0] = new Option("Select Color", "");
    document.form1.phoneColor.options[1] = new Option("Black Sapphire", "Black");
    document.form1.phoneColor.options[2] = new Option("White Pearl", "White");
    document.form1.phoneColor.options[3] = new Option("Gold Platinum", "Gold");
    document.form1.phoneColor.options[4] = new Option("Blue Topaz", "Blue");
break;

case "P_003":
case "V_003":
case "A_003":
case "T_003":
case "R4_003":
    document.form1.phoneColor.options[0] = new Option("Select Color", "");
    document.form1.phoneColor.options[1] = new Option("Black Sapphire", "Black");
    document.form1.phoneColor.options[2] = new Option("Titanium Silver", "Silver");
    document.form1.phoneColor.options[3] = new Option("Gold Platinum", "Gold");
break;
    
case "U_004":
    document.form1.phoneColor.options[0] = new Option("Select Color", "");
    document.form1.phoneColor.options[1] = new Option("Black Sapphire", "Black");
    document.form1.phoneColor.options[2] = new Option("Titanium Silver", "Silver");
    document.form1.phoneColor.options[3] = new Option("Gold Platinum", "Gold");
    document.form1.phoneColor.options[4] = new Option("White Pearl", "White");
break;

case "P_005":
case "V_005":
case "A_005":
case "T_005":
case "R4_005":
    document.form1.phoneColor.options[0] = new Option("Select Color", "");
    document.form1.phoneColor.options[1] = new Option("Black Onyx", "Black");
    document.form1.phoneColor.options[2] = new Option("White Pearl", "White");
    document.form1.phoneColor.options[3] = new Option("Gold Platinum", "Gold");
    document.form1.phoneColor.options[4] = new Option("Pink Gold", "Pink");
break;

case "U_006":
    document.form1.phoneColor.options[0] = new Option("Select Color", "");
    document.form1.phoneColor.options[1] = new Option("Black Onyx", "Black");
    document.form1.phoneColor.options[2] = new Option("Silver Titanium", "Silver");
    document.form1.phoneColor.options[3] = new Option("Gold Platinum", "Gold");
    document.form1.phoneColor.options[4] = new Option("Pink Gold", "Pink");
break;

case "U_007":
case "U_008":
    document.form1.phoneColor.options[0] = new Option("Select Color", "");
    document.form1.phoneColor.options[1] = new Option("Midnight Black", "Black");
    document.form1.phoneColor.options[2] = new Option("Artic Silver", "Silver");
    document.form1.phoneColor.options[3] = new Option("Coral Blue", "Blue");
    document.form1.phoneColor.options[4] = new Option("Orchid Gray", "Gray");
    document.form1.phoneColor.options[5] = new Option("Maple Gold", "Gold");
break;

case "U_009":
    document.form1.phoneColor.options[0] = new Option("Select Color", "");
    document.form1.phoneColor.options[1] = new Option("Midnight Black", "Black");
    document.form1.phoneColor.options[2] = new Option("Deep Sea Blue", "Blue");
    document.form1.phoneColor.options[3] = new Option("Orchid Gray", "Gray");
    document.form1.phoneColor.options[4] = new Option("Maple Gold", "Gold");
break;

case "U_010":
    document.form1.phoneColor.options[0] = new Option("Select Color", "");
    document.form1.phoneColor.options[1] = new Option("Midnight Black", "Black");
    document.form1.phoneColor.options[2] = new Option("Lilac Purple", "Pink");
    document.form1.phoneColor.options[3] = new Option("Coral Blue", "Blue");
    document.form1.phoneColor.options[4] = new Option("Titanium Gray", "Gray");
break;
 
case "U_011":
    document.form1.phoneColor.options[0] = new Option("Select Color", "");
    document.form1.phoneColor.options[1] = new Option("Midnight Black", "Black");
    document.form1.phoneColor.options[2] = new Option("Lilac Lavender", "Pink");
    document.form1.phoneColor.options[3] = new Option("Ocean Blue", "Blue");
    document.form1.phoneColor.options[4] = new Option("Metallic Copper", "Copper");
break;
        

 }
 return true;
 }
 //-->
 
 
  $("#frm").submit(function(event){
 // var valDDL = $(this).val();  
        //event.preventDefault();
         var valDDL = $("#store_name").val();
         if(valDDL=="")
         {
             event.preventDefault();
             alert("select dropdown option");
         } 

 });
 
 
 $("#form1").submit(function(event){
 // var valDDL = $(this).val();  
        //event.preventDefault();
         var valDDL = $("#phoneModel").val();
         if(valDDL=="")
         {
             event.preventDefault();
             alert("select phone model");
         } 

 });
 </script>
 
 </head>
 <body>
 <form id="form1" name="form1" action='phoneParts.php' method='post' onsubmit="return ValidateForm(); true">
 <table width="50%" border="1" align="center" cellpadding="2" cellspacing="0" id="parts">
     <tr> <th> </th>
         <th> Part Locator Beta </th> </tr>
 <tr>
 <td width="21%" align="right" valign="middle">
 <strong>Model </strong>
 </td>
 <td width="79%" align="left" valign="middle">
 <select name="phoneModel" id="phoneModel" onchange="javascript: listboxchange1(this.options[this.selectedIndex].value);">
 <option value="">Select Phone Model</option>
	<option value="SMG920">Galaxy S6</option>
        <option value="SMG925">Galaxy S6 Edge</option>
        <option value="SMG928">Galaxy S6 Edge+</option>
        <option value="SMN920">Galaxy Note 5</option>
        <option value="SMG930">Galaxy S7</option>
        <option value="SMG935">Galaxy S7 Edge</option>
        <option value="SMG950">Galaxy S8</option>
        <option value="SMG955">Galaxy S8+</option>
        <option value="SMN950">Galaxy Note 8</option>
        <option value="SMG960">Galaxy S9</option>
        <option value="SMG965">Galaxy S9+</option>
        <option value="SMN960">Galaxy Note 9</option>
 </select>
 </td>
 </tr>
 <tr>
 <td align="right" valign="middle">
 <strong>Carrier </strong>
 </td>
 <td align="left" valign="middle">
 
 <script type="text/javascript" language="javascript">
 <!--
 document.write('<select name="phoneBuyer" id="phoneBuyer" onChange="javascript: listboxchange(this.options[this.selectedIndex].value);"><option value="">Select Carrier</option></select>')
 -->
 </script>
 
 </td>
 </tr>
 <tr>
 <td align="right" valign="middle">
 <strong>Color </strong>
 </td>
 <td align="left" valign="middle">
 
 <script type="text/javascript" language="javascript">
 <!--
 document.write('<select name="phoneColor" id="phoneColor" ><option value="">Select Color</option></select>')
 -->
 </script>
 
 </td>
 </tr>
            <tr><td align="right" valign="middle"><strong>Octa </strong></td><td><input type="checkbox" name="partName[]" value="Octa"></td></tr>
            <tr><td align="right" valign="middle"><strong>Back Glass </strong></td><td><input type="checkbox" name="partName[]" value="Back Glass"></td></tr>
            <tr><td align="right" valign="middle"><strong>Screws </strong></td><td><input type="checkbox" name="partName[]" value="Screws"></td></tr>
            <tr><td align="right" valign="middle"><strong>Tape </strong></td><td><input type="checkbox" name="partName[]" value="Tape"></td></tr>
            <tr><td align="right" valign="middle"><strong>Battery </strong></td><td><input type="checkbox" name="partName[]" value="Battery"></td></tr>
            <tr><td align="right" valign="middle"><strong>Front Camera </strong></td><td><input type="checkbox" name="partName[]" value="Front Camera"></td></tr>
            <tr><td align="right" valign="middle"><strong>Rear Camera</strong></td><td><input type="checkbox" name="partName[]" value="Rear Camera"></td></tr>
            <tr><td align="right" valign="middle"><strong>SubPBA</strong></td><td><input type="checkbox" name="partName[]" value="SubPBA"></td></tr>
            <tr><td align="right" valign="middle"><strong>All Other Parts</strong></td><td><input type="checkbox" name="partName[]" value="Other"></td></tr>
            <tr><td></td><td> <input type="submit" name="Submit" value="Send"> </td>
</table>
     
        </form>
        
    </body>
</html>
