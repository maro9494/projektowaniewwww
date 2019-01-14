<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My test page</title>

	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="styles/style.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
</head>
<body>

	Druzyna
	<input type = "text" id = "NewOne" />
	Miasto
	<input type = "text" id = "NewOne2" />
	<input type="button" onclick="Stworz()" value = "Stworz"/>

<?php
		$conn = new mysqli("localhost", "root", "", "dodajdruzyne") or die("Błąd");
?>
</p>


  <div id = "Dane">
		<?php
			
			$conn = new mysqli("localhost", "root", "", "dodajdruzyne") or die("Błąd");
			
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
echo '<td><input type="button" onclick="where(' . $wiersz["nazwa_druzyny"] . ')" value = "Znajdz"></input></td>';
					echo "</tr>";
				}
				
				echo "</table>";
				
			}else {
				echo "Nie ma nic w bazie danych";
			}
			
			$conn->close();
		
		?>
			<input type = "text" id = "druzynaDoPokazania" />
			<input type="button" onclick="Pokaz()" value = "wHERE"/>

		
	</div>
</div>

<script>
$(document).ready(function()
{
    $("button").click(function(){
        $.ajax({url: "wrongfile.txt", error: function(xhr){
            alert("An error occured: " + xhr.status + " " + xhr.statusText);
        }});
    });
});

	function myFunction(id)
	{
		
		//typ http , zasob , czy asynchronicznie 
		
		
		var xhttp = new XMLHttpRequest();
		//Get Name of team
		$name = $(id).attr('id');
		var url = "Delete.php";
		var params = 'nazwa_druzyny=' + $name;
		xhttp.open("POST", url, true);
		xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) 
			{
                document.getElementById("Dane").innerHTML = this.responseText;
            }
        };
		
        xhttp.send(params);
		
		
	}
	
	function upd(id)
	{
		//typ http , zasob , czy asynchronicznie 
		
		
		var xhttp = new XMLHttpRequest();
		//Get Name of team
		$name = $(id).attr('id');
		$tresc = $('#getTextOf' + $name).val();
		console.log($tresc);
		
		
		var url = "Update.php";
		var params = 'nazwa_druzyny=' + $name + '&text=' + $tresc;
		xhttp.open("POST", url, true);
		xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) 
			{
                document.getElementById("Dane").innerHTML = this.responseText;
            }
        };
		
        xhttp.send(params);
	}
	
	function Pokaz()
	{
		$druzyna = $('#druzynaDoPokazania').val();
		
		var xhttp = new XMLHttpRequest();
		//Get Name of team
		
		var url = "Where.php";
		
		var params = 'nazwa_druzyny=' + $druzyna;
		xhttp.open("POST", url, true);
		xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) 
			{
                document.getElementById("Dane").innerHTML = this.responseText;
            }
        };
		
        xhttp.send(params);
	}
	
	function Stworz()
	{
		
		var xhttp = new XMLHttpRequest();
		//Get Name of team
		$tresc = $('#NewOne').val();
		$tresc2 = $('#NewOne2').val();
		var url = "Stworz.php";
		
		var params = 'nazwa_druzyny=' + $tresc + '&miasto=' + $tresc2;
		xhttp.open("POST", url, true);
		xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) 
			{
                document.getElementById("Dane").innerHTML = this.responseText;
            }
        };
		
        xhttp.send(params);
	}
function where(id)
	{
		
		var xhttp = new XMLHttpRequest();
		//Get Name of team
		$tresc = $('#NewOne').val();
		$tresc2 = $('#NewOne2').val();
		var url = "Where.php";
		
		var params = 'nazwa_druzyny=' + $tresc + '&miasto=' + $tresc2;
		xhttp.open("POST", url, true);
		xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) 
			{
                document.getElementById("Dane").innerHTML = this.responseText;
            }
        };
		
        xhttp.send(params);
	}

</script>

  </body>
</html>