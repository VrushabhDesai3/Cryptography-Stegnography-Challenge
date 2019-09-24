<!DOCTYPE html>
<html>
<head>
	<title>Null Ahmedabad | CTF</title>
</head>
<body>

<?php 

    if (isset($_POST['submit'])) {
        if (($_POST['Username'] == 'NulLAhmEdABad') && ($_POST['Password'] == 'nULLAhmeDaBaD')) {
            include_once("flag.php");
            echo $flag;
        } else {
        	echo "Try Harder!";
        }
    } else {
    	echo "You have to fill the fields";
    }
?>



</body>
</html>


