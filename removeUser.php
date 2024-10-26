<?php
	
	$formMode = "InitialAction-Another Approach";
	$txtUsername = "";
	$txtConfirmationCode = "";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		if (isset($_POST["btnSubmitRequest"]) && $_POST["btnSubmitRequest"] == "Remove Username")
		{
			$formMode = "Successful"; // "RequestConfirmation";
		}
		else if (isset($_POST["btnRequestConfirmation"]) && $_POST["btnRequestConfirmation"] == "Confirm Request")
		{
			$formMode = "Successful";
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ourzone</title>
<!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<style>
 
</style>
</head>

<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
	<?php
		if ($formMode == "InitialAction")
		{
	?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="frmInitialAction">
        <div>
        	Enter You Username:
        </div>
        <div>
        	<input type="text" id="txtUsername" placeholder="Enter You Username" value="<?php echo $txtUsername; ?>" name="txtUsername" />
        </div>
        <div>
        	<input type="submit" name="btnSubmitRequest" value="Remove Username">
        </div>
    </form>
    <?php
		}
		else if ($formMode == "RequestConfirmation")
		{
	?>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="frmRequestConfirmation">
        <div>
        	Enter The Confirmation Code Sent To Your inbox:
        </div>
        <div>
        	<input type="text" id="txtConfirmationCode" placeholder="Confirmation Code" value="<?php echo $txtConfirmationCode; ?>" name="txtConfirmationCode" />
        </div>
        <div>
        	<input type="submit" name="btnRequestConfirmation" value="Confirm Request">
        </div>
    </form>
    
    <?php
		} 
		else if ($formMode == "Successful")
		{
	?>
    <div>
    	Your request has been submitted. <br /> 
        Our team will reach out to you via mail for next step of action. <br />
        Thank you
    </div>
    <?php
		}
		else
		{
	?>
    <div style="text-align:center; font-size:24px;" class="mt-5">
    	To request for delete of your data on our platform, kindly send a mail to <u>support@ourzonefinancial.com</u> with the email you submitted while registering. Our team will reach out to you within minutes on next course of action.
    </div>
    <?php
		}
	?>
    
        </div>
    </div>
</div>
</body>
</html>