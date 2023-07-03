<?php
include "header.php";
include "navigation.php";
?>

<div class="container-sm">
	<div class="row pb-5">

		<!-- Input data -->
		<div class="col mx-auto">
			<h1>Add Service</h1>
			<form action="show.php" method="post" enctype="multipart/form-data">
				<label for="service_sector" class="form-label">Sector:</label>
				<select type="number" class="form-control" name="service_sector" id="service_sector" required>
					<opttion>
						<option>
						<option value="1">1. Electrical Service</option>
						<option value="2">2. Plumber Service</option>
						<option value="3">3. Beautician Services</option>
						<option value="4">4. Men's Saloon Services</option>
						<option value="5">5. Laundry Services</option>
				</select>
				<br><br>

				<label for="service_sector" class="form-label">Sub Heading:</label>
				<select class="form-control" name="sub_head" id="sub_head" required></select>
				<br><br>
				<script>
					var firstDropdown = document.getElementById("service_sector");
					var secondDropdown = document.getElementById("sub_head");

					firstDropdown.addEventListener("change", function () {
						var selectedOption = firstDropdown.value;
						var options = [];

						if (selectedOption === "1") {
							options = [" ", "Switch and Socket", "Fan", "Light", "MCB and Fuze", "Inverter & Stabilizer", "Electrical Appliance", "Wiring", "Door bell", "Others"];
						} else if (selectedOption === "2") {
							options = [" ", "Basin & Sink", "Bath Filling", "Blokage", "Tap & Mixer", "Toilet", "Water Tank", "Motor", "Minor Installation", "Others"];
						} else if (selectedOption === "3") {
							options = [" ", "Wedding Special", "Makeup", "Waxing", "Facials & Cleanups", "Manicure", "Pedicure", "Threading & face wax", "Bleach & detan", "Hair care"];
						} else if (selectedOption === "4") {
							options = [" ", "Mens & Kids Haircut", "Face Care", "Shave/Beard Setting", "Hair COlor", "Massage"];
						} else if (selectedOption === "5") {
							options = [" ", "Laundary", "Men", "Women", "Household", "Woolen"];
						}

						// Remove existing options from second dropdown
						while (secondDropdown.firstChild) {
							secondDropdown.removeChild(secondDropdown.firstChild);
						}

						// Add new options to second dropdown
						options.forEach(function (option) {
							var newOption = document.createElement("option");
							newOption.text = option;
							newOption.value = option;
							secondDropdown.add(newOption);
						});

					});
				</script>

				<label for="service_title" class="form-label">Title:</label>
				<input type="text" class="form-control" name="service_title" id="service_title" required><br><br>

				<label for="market_price" class="form-label">Market Price:</label>
				<input type="text" class="form-control" id="market_price" name="market_price"><br><br>

				<label for="customRange2" class="form-label">Price range</label>
				<input type="range" id="r1" class="form-range" value="0" min="0" max="99" step="0.01" id="customRange2"
					onchange="TextInput(this.value);" oninput="this.nextElementSibling.value = this.value">
				<output id='po'>0</output>% Discount <br>


				<label for="percent_discount" class="form-label">percent_discount:</label>
				<input type="text" class="form-control" id="p1" name="percent_discount"><br><br>


				<script>
					function TextInput(val) {
						percent = val;
						document.getElementById('p1').value = percent;
						var price = document.getElementById('market_price').value;
						val = val / 100;
						price = price - price * val;
						var z = Math.floor(price);
						document.getElementById('service_price').value = z;
					}
					document.getElementById('p1').addEventListener("keyup", function (evt) {
						percent = document.getElementById('p1').value;
						document.getElementById('r1').value = percent;
						document.getElementById('po').value = percent;
						var price = document.getElementById('market_price').value;
						percent = percent / 100;
						price = price - price * percent;
						var z = Math.floor(price);
						document.getElementById('service_price').value = z;

					}, false);
					
				</script>

				<label for="service_price" class="form-label">Price:</label>
				<input type="number" class="form-control" name="service_price" step="1" id="service_price"
					required><br><br>

				<label for="service_desc" class="form-label">Description:</label>
				<textarea type="text" name="service_desc" class="form-control" id="service_desc" rows="5" cols="30"
					required></textarea><br><br>

				<label for="service_image" class="form-label">Image:</label>
				<input type="file" class="form-control" name="service_image" id="service_image" required><br><br>

				<label for="service_keywords" class="form-label">Keywords:</label>
				<textarea type="text" name="service_keywords" class="form-control" id="service_keywords" rows="3"
					cols="30" required></textarea><br><br>

				<input type="submit" class="btn btn-warning" name="add" value="add">
			</form>
		</div>

		<!-- Update Data -->
		<div class="col mx-auto">
			<!-- Update form -->
			<h1>Update Service</h1>
			<form method="POST" action="show.php" enctype="multipart/form-data">
				<label for="service_id" class="form-label">Service_id:</label>
				<input class="form-control" name="service_id"><br>
				<p>service id is for searching table elements & fill data in all fields. </p><br>

				<label for="service_title" class="form-label">Title:</label>
				<input type="text" class="form-control" name="service_title"><br><br>

				<label for="market_price" class="form-label">Market Price:</label>
				<input type="text" class="form-control" id="u_market_price" name="market_price"><br><br>

				<label for="customRange2" class="form-label">price range</label>
				<input type="range" id="r1" class="form-range" value="0" min="0" max="99" step="0.01" id="customRange2"
					onchange="updateTextInput(this.value);" oninput="this.nextElementSibling.value = this.value">
				<output id='po'>0</output>% Discount <br>

				<script>
					function updateTextInput(val) {
						percent = val;
						document.getElementById('p2').value = percent;
						var price = document.getElementById('u_market_price').value;
						val = val / 100;
						price = price - price * val;
						var z = Math.floor(price);
						document.getElementById('u_service_price').value = z;
					}
					document.getElementById('p1').addEventListener("keyup", function (evt) {
						percent = document.getElementById('p1').value;
						document.getElementById('r1').value = percent;
						document.getElementById('po').value = percent;
						var price = document.getElementById('market_price').value;
						percent = percent / 100;
						price = price - price * percent;
						var z = Math.floor(price);
						document.getElementById('service_price').value = z;

					}, false);

				</script>

				<label for="percent_discount" class="form-label">percent_discount:</label>
				<input type="text" class="form-control" id="p2" name="percent_discount"><br><br>

				<label for="service_price" class="form-label">Doers Price:</label>
				<input type="text" class="form-control" id="u_service_price" step="1" name="service_price"><br><br>

				<label for="service_desc" class="form-label">Description:</label>
				<input type="text" name="service_desc" class="form-control" id="service_desc" rows="5" cols="30"
					required></input><br><br>

				<label for="service_image" class="form-label">Image:</label>
				<input type="file" class="form-control" name="service_image" id="service_image" required><br><br>

				<label for="service_keywords" class="form-label">Keywords:</label>
				<textarea name="service_keywords" class="form-control" id="service_keywords" rows="3" cols="30"
					required></textarea><br><br>

				<input type="submit" class="btn btn-warning" name="update" value="Update">
			</form>
		</div>

		<!-- Delete exixting data -->
		<div class="col mx-auto">
			<!-- Delete form -->
			<h1>Delete Service</h1>
			<form method="POST" action="show.php">
				<label for="service_id" class="form-label">service_id:</label>
				<input class="form-control" name="service_id"><br><br>
				<input type="submit" class="btn btn-danger" name="delete" value="Delete">
			</form>

		</div>

		<!-- View saved data  -->
		<div class="col mx-auto">
			<form action="show_data.php" method="post">
				<h1>View Service</h1>
				<input type="submit" class="btn btn-success" value="Show Data">
				<form>
		</div>

	</div>
</div>

<?php
include "footer.php";
?>