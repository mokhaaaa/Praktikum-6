<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
    <style>
        label {
            display: inline-block;
            width: 100px;
            text-align: left;
            margin-right: 10px;
        }
        input[type="text"] {
            width: 200px;
        }
    </style>
</head>
<body>
	<h1>Biodata</h1>
	<form method="POST" action="biodataAct.php">
		<label>Nama:</label>
		<input type="text" name="nama"><br><br>
        <label>Tempat Lahir:</label>
		<input type="text" name="tempat_lahir"><br><br>
		<label>Tanggal Lahir:</label>
		<input type="date" name="tanggal_lahir"><br><br>
		<label>Alamat:</label>
		<textarea name="alamat"></textarea><br><br>
		<label>Jenis Kelamin:</label>
		<input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
		<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan<br><br>
        <label>Pekerjaan:</label>
		<input type="text" name="pekerjaan"><br><br>
         Riwayat Pendidikan<br><br>
        <label>SD:</label>
		<input type="text" name="sd"><br><br>
        <label>SMP:</label>
		<input type="text" name="smp"><br><br>
        <label>SMA:</label>
		<input type="text" name="sma"><br><br>
        <input type="submit" name="submit" value="Kirim">
	</form>
</body>
</html>
