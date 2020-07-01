<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
</head>
<body>

<div>
	<h1>Buat Account Baru!</h1>
	<h3>Sign Up Form</h3>
	</div>

	</-- Formulir -->
	<div>
		<form action="selamatdatang" method="post">
            @csrf
			<label for="first_name">First Name: </label><br><br>
			<input type="text" placeholder="nama depan anda"><br><br>
			<label for="last_name">Last Name: </label><br><br>
			<input type="text" placeholder="nama belakang anda"><br><br>

			<label>Gender: </label><br><br>
    		<input type="radio" name="Gender" checked="">Male <br>
    		<input type="radio" name="Gender" >female <br> 
    		<input type="radio" name="Gender" >other <br><br>  
    	
    		<label>Nationality: </label><br><br>
    		<select>
      		<option value="indonesi">Indonesian</option>
      		<option value="afganistan">Afgan</option>
      		<option value="belgia">Belgian</option>
      		<option value="greece">Greek</option>
      		<option value="inggris">Briton</option>
      		<option value="jepang">Japanese</option>
      		<option value="malaysia">Malay</option>
    		</select><br><br>

    		<label>langguage Spoken</label><br><br>
    		<input type="checkbox" checked=""> Bahasa Indonesia <br>
    		<input type="checkbox" > English <br>
    		<input type="checkbox" > Other <br>
    		<br>

    		<label for="bio_user">Bio: </label><br><br>
    		<textarea cols="50" rows="7" id="bio_user">Isikan biografi anda </textarea>
    		<br>

    		<input type="submit" value="Sign Up" >

    	
		</form>
	</div>

	<p> &copy; sanbercode_andipw </p>

    
</body>
</html>