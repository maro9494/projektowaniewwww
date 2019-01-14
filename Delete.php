<?php
	if( isset($_POST["nazwa_druzyny"]) ){
			$nazwa_druzyny = $_POST["nazwa_druzyny"];
		 
		
		 
		
			
			$conn = new mysqli("localhost", "root", "", "dodajdruzyne");
			
			$odp = $conn->query("DELETE FROM druzyny WHERE nazwa_druzyny = '$nazwa_druzyny'");
			if($odp)
			{
				
				$wynik = $conn->query("SELECT * FROM druzyny");
				if($wynik->num_rows > 0){
				
				echo "<table>";
				echo "<tr>";
				
				echo "<th>nazwa_druzyny</th>";
				echo "<th>miasto</th>";
				
				echo "</tr>";
				
				while( $wiersz = $wynik->fetch_assoc() ){
					echo "<tr>";
					
				
					echo "<td>" . $wiersz["nazwa_druzyny"] . "</td>";
					echo "<td>" . $wiersz["miasto"]    . "</td>";
					echo '<td><input type="button" onclick="myFunction(' . $wiersz["nazwa_druzyny"] . ')" id="' . $wiersz["nazwa_druzyny"] . '" value = "Usuń"></input></td>';

					echo '<td><input type = "text" id = "getTextOf' . $wiersz["nazwa_druzyny"] . '"/></td>' ;
					echo '<td><input type="button" onclick="upd(' . $wiersz["nazwa_druzyny"] . ')" value = "Zmień"></input></td>';
					
					echo "</tr>";
				}
				
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