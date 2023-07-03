<?php
include "header.php";
include "show.php";

// display the results in an HTML table
echo "<div class='container-fluid pt-3'><table class='table table-bordered ' style='font-size: 10px;'>";
echo "<tr class='strong h4 table-dark'><th>ID</th><th>Sector</th><th>Title</th><th>Sub Head</th><th>Market Price</th><th>Percentage Discount</th><th>Doers Price</th><th>Description</th><th>Image</th><th>Keywords</th></tr>";
$sql = "SELECT * FROM service_list";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
	echo "<td class='h6'><strong>" . $row["service_id"] . "</strong></td>";
	echo "<td class='h6'>" . $row["service_sector"] . "</td>";
	echo "<td class='h6'>" . $row["service_title"] . "</td>";
	echo "<td class='h6'>" . $row["sub_head"] . "</td>";
	echo "<td class='h6'>&#x20B9 " . $row["market_price"] . "</td>";
	echo "<td class='h6'>" . $row["percentage_discount"] . "%</td>";
	echo "<td class='h6'>&#x20B9 " . $row["service_price"] . "</td>";
	echo "<td class='h6'>" . $row["service_desc"] . "</td>";
	echo '<td><img style="height: 200px; width: 200px; object-fit: contain;" src="data:image/jpeg;base64,' . base64_encode($row['service_image']) . '"/></td>';
	echo "<td class='h6'>" . $row["service_keywords"] . "</td>";
	echo "</tr>";
}
echo "</table></div>";

// free the result set and close the database connection
mysqli_free_result($result);
mysqli_close($conn);
?>

<?php
include "footer.php"; 
?>