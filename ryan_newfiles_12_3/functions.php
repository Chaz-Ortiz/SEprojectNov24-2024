<?php
function db_connect($db)
{
	$dbUserName="admin";
	$dbPassword="adminpassword";
	$host="localgodbschema.c5uw0emaalmq.us-east-2.rds.amazonaws.com";
	$dblink=new mysqli($host,$dbUserName,$dbPassword,$db);

	// Check for database connection error
    if ($dblink->connect_error) {
        die("Connection failed: " . $dblink->connect_error);
    }

	return $dblink;
}
function redirect ( $uri )
{ ?>
	<script type="text/javascript">
	document.location.href=",?php echo $uri; ?>";
	</script>
<?php die;
}
?>