<section>
<select name="multiSelectSearch" id="multiSelectSearch" multiple class="form-control selectpicker" title="Live data search by location...">
	<option value="">select city</option>
	<?php
$conn = mysqli_connect("localhost", "admin", "Admin@123", "db");
 $sql_query = "SELECT DISTINCT city FROM movie";
    $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
    while( $row = mysqli_fetch_assoc($resultset) ) {
?>
	<option value="<?php echo $row['city'];?>"> <?php echo $row['city']; ?></option>
<?php }?>

</select>	
<div class="table-responsive">
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
			<th>Name</th>
			<th>Age</th>
			<th>Gender</th>
			<th>Location</th>
			<th>Designation</th>     
			</tr>
		</thead>
		<tbody>	
		</tbody>
	</table>
</div>	

</section>
<script >
$(document).ready(function() {
	listRecords();
	$('#multiSelectSearch').change(function() {
		console.log($('#multiSelectSearch').val());
		$('#location').val($('#multiSelectSearch').val());
		var searchQuery = $('#location').val();
		listRecords(searchQuery);
	});
});
function listRecords(searchQuery='') {
	$.ajax({
		url:"live_search.php",
		method:"POST",
		dataType: "json",
		data:{query:searchQuery},
		success:function(response) {
			$('tbody').html(response.html);
		}
	});
}
</script>