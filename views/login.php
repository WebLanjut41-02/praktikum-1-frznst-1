<body>
	<?php
	if($this->session->flashdata('fail')){
               echo $this->session->flashdata('fail');
               }
                ?>
<form action="<?php echo base_url();?>/index.php/C_login/cek" method="POST">
	<table>
		<tr><td>USERNAME</td><td><input type="text" name="username"></td>
			<?php 
			if (form_error('username')) {
				# code...
				echo "<td>".form_error('username')."</td>";
			}?>
		</tr>

		<tr><td>PASSWORD</td><td><input type="password" name="password"></td>
			<?php if (form_error('password')) {
				# code...
				echo "<td>".form_error('password')."</td>";
			}?>
		</tr>

		<tr><td><input type="submit" name="submit" value="submit"></td></tr>
	</table>
</form>
</body>
</html>