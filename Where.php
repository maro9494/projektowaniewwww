<?php
	if( isset($_POST["nazwa_druzyny"]) ){
			$nazwa_druzyny = $_POST["nazwa_druzyny"];
		 
			$conn = new mysqli("localhost", "root", "", "dodajdruzyne");
			
			$odp = $conn->query("SELECT * FROM druzyny WHERE nazwa_druzyny = '$nazwa_druzyny'");
			if($odp)
			{
				
				if($odp->num_rows > 0){
				
				echo "<table>";
				echo "<tr>";
				
				echo "<th>nazwa_druzyny</th>";
				echo "<th>miasto</th>";
				
				echo "</tr>";
				
				$odp = $odp->fetch_assoc();
				
					echo "<tr>";
					
				
					echo "<td>" . $odp["nazwa_druzyny"] . "</td>";
					echo "<td>" . $odp["miasto"]    . "</td>";
					echo '<td><input type="button" onclick="myFunction(' . $odp["nazwa_druzyny"] . ')" id="' . $odp["nazwa_druzyny"] . '" value = "Usun"></input></td>';

					echo '<td><input type = "text" id = "getTextOf' . $odp["nazwa_druzyny"] . '"/></td>' ;
					echo '<td><input type="button" onclick="upd(' . $odp["nazwa_druzyny"] . ')" value = "Zmien"></input></td>';
					echo '<td><input type="button" onclick="where(' . $odp["nazwa_druzyny"] . ')" value = "Znajdz"></input></td>';

					echo "</tr>";
				
				
				echo "</table>";
				
			}
			else 
			{
				echo "Nie ma nic w bazie danych";
			}
			
			}

			
			$conn->close();
		
		
	}
?>