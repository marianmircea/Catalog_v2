<h2>Login</h2>
<div id="login_box">
	<form action = "<?php echo URL2; ?>model/login_check.php" method = "post">
		<!--<p><select name="type">
			<option value="none" selected>-</option>
			<option value="stdn">Elev</option>
			<option value="prfs">Profesor</option>
			<option value="prnt">Parinte</option>
			</select><label> Tip utilizator</label></p>-->
		<p><input type = "text" name = "user" placeholder = "Username (e-mail)"/><label> User (email)</label></p>
		<p><input type = "password" name = "pw" placeholder = "password"/><label> Parola</label></p>
		<p><input type = "submit" value = "Acces"/>
			<input type="reset"></p>
	</form>
</div>