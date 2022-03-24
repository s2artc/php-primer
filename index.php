
<?php
 include "header.php";
?>
<ul class="nav nav-pills">
	<li class="nav-item"><a class="nav-link active" href="https://google.co.uk">Sample link to Google</a></li>
	<li class="nav-item"><a class="nav-link" href="https://www.bbc.co.uk/sport">Sample link to BBC Sport</a></li>
	<li class="nav-item"><a class="nav-link" href="https://guardian.co.uk">Sample link to Guardian</a></li>

</ul>


<?php 
$total=0;
$numbers=array(10,20,30,40,50);
for ($i=0; $i <count($numbers) ; $i++) { 
	// code...
	echo "number in position $i in array is ".$numbers[$i];
$GLOBALS['total'] = $GLOBALS['total'] + $numbers[$i];
	echo"<br>";
}
echo "average is ".$total/count($numbers),'<br>';
echo "Today's date is ".date('d.m.y').'<br>';
echo "Today's date is ".date('D,d.M.Y');
echo "  Time is ".date('h:m:s a').'<br>';
?>
<button type="button" class="btn btn-success">Click Here for Success</button>
<button type="button" class="btn btn-warning">Click Here for Warning</button>
<button type="button" class="btn btn-info">Click Here for Info</button>
<a class="btn btn-primary" href="testingPHPSnippet.php" role="button" >Click Here for Snippet</a>
<?php echo 'hi snippet <br>'; 
$number=34;
if ($number>20) {echo $number,' is greater than 20<br>';}
if ($number==34) {
	echo $number,' is equal to 34<br>';
} else {
	echo 'notequal to 34<br>';
}
for ($i = 0; $i < 10; $i++) {echo $i * $i;echo '<br>';
	
}
echo 'now using php completions';
?>

<?php
 include "footer.php";
?>

