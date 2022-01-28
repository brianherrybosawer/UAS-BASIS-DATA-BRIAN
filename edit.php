<html>
<head>
	<title>Tabel Jenis Sepatu</title>
</head>
<body>
 
	<h3>TABEL JENIS SEPATU</h3>
	<br/>
	<a href="index.php">Kembali</a>
	<br/>
	<br/>
	<h3>Edit Data Sepatu</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from merek_sepatu where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Merek Sepatu</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="merek" value="<?php echo $d['merek']; ?>">
					</td>
				</tr>
				<tr>
					<td>Size</td>
					<td><input type="text" name="size" value="<?php echo $d['size']; ?>"></td>
				</tr>
				<tr>
					<td>Harga</td>
					<td><input type="number" name="harga" value="<?php echo $d['harga']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>