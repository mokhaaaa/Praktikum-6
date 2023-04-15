<?php
	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = date('d-m-Y', strtotime($_POST['tanggal_lahir']));
		$alamat = $_POST['alamat'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
        $pekerjaan = $_POST['pekerjaan'];
        $sd = $_POST['sd'];
        $smp = $_POST['smp'];
        $sma = $_POST['sma'];
        
		echo "<h1>Biodata</h1>";
		echo "<p>Nama: $nama</p>";
		echo "<p>Tempat dan Tanggal Lahir: $tempat_lahir, $tanggal_lahir</p>";
		echo "<p>Alamat: $alamat</p>";
		echo "<p>Jenis Kelamin: $jenis_kelamin</p>";
		echo "<p>Pekerjaan: $pekerjaan</p>";
        echo "<p>Riwayar pendidikan</p>";
        echo "<p>SD: $sd</p>";
        echo "<p>SMP: $smp</p>";
        echo "<p>SMA: $sma</p>";
	}
	?>