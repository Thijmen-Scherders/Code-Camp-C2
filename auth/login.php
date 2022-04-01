<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$config = $path . "/backend/config.php";
$auth = $path . "/auth/auth.php";
include_once($config);
include_once($auth);


if (isset($_POST['but_submit'])) {
    $uname = mysqli_real_escape_string($con, $_POST['txt_uname']);
    $password = mysqli_real_escape_string($con, $_POST['txt_pwd']);

    if ($uname != "" && $password != "") {

        $sql_query = "select count(*) as cntUser from users where username='" . $uname . "' and password='" . $password . "'";
        $result = mysqli_query($con, $sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if ($count > 0) {
            echo $uname;
            session_set_cookie_params(0);
            session_start();
            $_SESSION['uname'] = $uname;
            header('Location: ' . baseUrl());
        } else {
            echo "Invalid username and password";
        }

    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
	<link rel="stylesheet" href="<?php echo baseUrl() ?>/auth/auth.css">
	<title>Songteksten</title>
</head>

<?php includeHeader(); ?>

<div class="container">
	<form method="post" action="">
		<div id="div_login">
			<h1>Login</h1>
			<div>
				<input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username"/>
			</div>
			<div>
				<input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
			</div>
			<div>
				<input type="submit" value="Submit" name="but_submit" id="but_submit"/>
			</div>
		</div>
	</form>
</div>
