<body>

	<table border=1 align="center">
		<th>USERNAME</th><th>PASSWORD</th>

		<?php
		

		for ($i=0; $i < count($this->session->userdata('user')); $i++) { 
			# code...
			echo"<tr><td>". $this->session->userdata('user')[$i]."</td><td>".$this->session->userdata('pass')[$i]."</td></tr>";
		}


		?>

	</table>

	<form action="<?php echo base_url()?>index.php/C_login/Logout" method="POST">
		<input type="submit" name="logout" value="logout">
	</form>
	


	<form action="<?php echo base_url();?>/index.php/C_login/tambah" method="POST">
	<table>
		<tr><h1> UBAH DATA</h1></tr>
		<tr><td>USERNAME</td><td><input type="text" name="username"></td>
		</tr>

		<tr><td>PASSWORD</td><td><input type="password" name="password"></td>
		</tr>

		<tr><td><input type="submit" name="submit" value="submit"></td></tr>
	</table>
</form>


</body>
</html>