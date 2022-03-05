
	<div id="footer">Copyright <?= date('Y') ?>, CMS Application</div>

<?php 
if(isset($con))
{	
mysqli_close($con);
}
?>
</html>
</body>	