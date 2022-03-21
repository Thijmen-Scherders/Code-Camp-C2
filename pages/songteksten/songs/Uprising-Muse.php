<?php
	$path = $_SERVER['DOCUMENT_ROOT'];
	$path .= "/backend/config.php";
	include_once($path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo baseUrl() ?>/public/stylesheet.css">
    <title>Uprising</title>
</head>
<body class="mainpage">

<?php includeHeader(); ?>

<div class="wrapper">
	<div class="container-column orange">
		<h1>Muse - Uprising</h1>
            <div class="container song">
                  <img src="<?php echo baseUrl() ?>/public/Muse.png" alt="map"/>
                  <div class="container-column song">
                        <p> 
                        Paranoia is in bloom
                        The PR transmissions will resume
                        They'll try to push drugs that keep us all dumbed down
                        And hope that we will never see the truth around
                        (So come on)
                        </p> 
                        <p> 
                        Another promise, another scene
                        Another packaged lie to keep us trapped in greed
                        And all the green belts wrapped around our minds
                        And endless red tape to keep the truth confined
                        (So come on)
                        </p> 
                        <p> 
                        They will not force us
                        They will stop degrading us
                        They will not control us
                        We will be victorious
                        (So come on)
                        </p> 
                        <p> 
                        Interchanging mind control
                        Come, let the revolution take its toll
                        If you could flick the switch and open your third eye
                        You'd see that we should never be afraid to die
                        (So come on)
                        </p> 
                        <p> 
                        Rise up and take the power back
                        It's time the fat cats had a heart attack
                        You know that their time's coming to an end
                        We have to unify and watch our flag ascend
                        (So come on)
                        </p> 
                        <p> 
                        They will not force us
                        They will stop degrading us
                        They will not control us
                        We will be victorious
                        (So come on)
                        </p>
                        <p>
                        They will not force us
                        They will stop degrading us
                        They will not control us
                        We will be victorious
                        (So come on)
                        </p>
                  </div>
            </div>
	</div>
</div>


<?php includeFooter(); ?>
</body>

</html>