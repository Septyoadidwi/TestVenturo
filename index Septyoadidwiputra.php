<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>
<form id="form" name="form" method="post" action="">
<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
  <p>
    <select id="select" name="select" class="btn btn-info">
      <option value="SMP">SMP</option>
      <option value="SMA">SMA</option>
      <option value="SMK">SMK</option>
    </select>
    <input type="submit" value="Tampilkan" class="btn btn-info">
  </p>
  </div>
  <p>
  </form>
  
  <div class="card-body">
                <div class="form-group">
                    <ul class="list-group">
    <?php

		$sekolah = [
    [
        'SMP 01 Malang'        =>
        [
            'alamat' => 'Jl Mawar No 01',
            'tlp'    => '0341998822',
        ],
        'SMA 01 Malang'        =>
        [
            'alamat' => 'Jl SMA 01 No 41',
            'tlp'    => '0341872819',
        ],
        'SMA 02 Malang'        =>
        [
            'alamat' => 'Jl SMA 03 No 4',
            'tlp'    => '0341872819',
        ],
        'SMA 03 Malang'        =>
        [
            'alamat' => 'Jl SMA 04 No 1',
            'tlp'    => '0341872819',
            'siswa'  => [
                [
                    'nis'       => 'sma3001',
                    'nama'      => 'Muhammad',
                    'tgl_lahir' => '18 Januari 1996',
                ],
                [
                    'nis'       => 'sma3002',
                    'nama'      => 'Inayah',
                    'tgl_lahir' => '24 Januari 1994',
                ],
            ],
        ],
        'SMA 04 Malang'        =>
        [
            'alamat' => 'Jl SMA 04 No 3',
            'tlp'    => '0341872819',
            'siswa'  => [
                [
                    'nis'       => 'sma4001',
                    'nama'      => 'sutejo',
                    'tgl_lahir' => '18 Januari 1994',
                ],
                [
                    'nis'       => 'sma4002',
                    'nama'      => 'sutijan',
                    'tgl_lahir' => '24 Januari 1998',
                ],
            ],
        ],
        'SMA 05 Malang'        =>
        [
            'alamat' => 'Jl SMA 05 No 5',
            'tlp'    => '0341872819',
        ],
        'SMA 06 Malang'        =>
        [
            'alamat' => 'Jl SMA 06 No 8',
            'tlp'    => '0341872819',
        ],
        'SMA 07 Malang'        =>
        [
            'alamat' => 'Jl SMA 07 No 81',
            'tlp'    => '0341872819',
        ],
        'SMA 08 Malang'        =>
        [
            'alamat' => 'Jl SMA 08 No 11',
            'tlp'    => '0341872819',
        ],
        'SMA 09 Malang'        =>
        [
            'alamat' => 'Jl SMA 09 No 121',
            'tlp'    => '0341872819',
        ],
        'SMA 10 Malang'        =>
        [
            'alamat' => 'Jl SMA 10 No 451',
            'tlp'    => '0341872819',
        ],
        'SMK 01 Malang'        =>
        [
            'alamat' => 'Jl SMA 01 No 21',
            'tlp'    => '0341928192',
        ],
        'SMK 01 Malang'        =>
        [
            'alamat' => 'Jl SMK 01 No 11',
            'tlp'    => '0341928192',
        ],
        'SMK 02 Malang'        =>
        [
            'alamat' => 'Jl SMK 02 No 31',
            'tlp'    => '0341928192',
        ],
        'SMK 03 Malang'        =>
        [
            'alamat' => 'Jl SMK 03 No 21',
            'tlp'    => '0341928192',
        ],
        'SMK 04 Malang'        =>
        [
            'alamat' => 'Jl Panjaitan No 21',
            'tlp'    => '0341928192',
        ],
        'SMK 05 Malang'        =>
        [
            'alamat' => 'Jl Panjaitan No 21',
            'tlp'    => '0341928192',
            'siswa'  => [
                [
                    'nis'       => 'smk5001',
                    'nama'      => 'rani',
                    'tgl_lahir' => '18 Januari 1994',
                ],
                [
                    'nis'       => 'smk5002',
                    'nama'      => 'rahayu',
                    'tgl_lahir' => '24 Januari 1998',
                ],
            ],
        ],
        'SMK 06 Malang'        =>
        [
            'alamat' => 'Jl Panjaitan No 21',
            'tlp'    => '0341928192',
            'siswa'  => [
                [
                    'nis'       => 'smk6001',
                    'nama'      => 'sutejo',
                    'tgl_lahir' => '18 Januari 1994',
                ],
                [
                    'nis'       => 'smk6002',
                    'nama'      => 'sutijan',
                    'tgl_lahir' => '24 Januari 1998',
                ],
            ],
        ],
        'SMK Kesehatan Malang' =>
        [
            'alamat' => 'Jl Dr Soetomo No 25',
            'tlp'    => '0341587212',
        ],
        'SMP 02 Malang'        =>
        [
            'alamat' => 'Jl SMP 02 No 25',
            'tlp'    => '034192812',
        ],
        'SMP 03 Malang'        =>
        [
            'alamat' => 'Jl SMP 03 No 25',
            'tlp'    => '034192812',
        ],
        'SMP 04 Malang'        =>
        [
            'alamat' => 'Jl SMP 04 No 25',
            'tlp'    => '034192812',
        ],
        'SMP 05 Malang'        =>
        [
            'alamat' => 'Jl SMP 05 No 25',
            'tlp'    => '034192812',
        ],
        'SMP 06 Malang'        =>
        [
            'alamat' => 'Jl SMP 06 No 25',
            'tlp'    => '034192812',
        ],
        'SMP 07 Malang'        =>
        [
            'alamat' => 'Jl SMP 07 No 25',
            'tlp'    => '034192812',
            'siswa'  => [
                [
                    'nis'       => 'smp7001',
                    'nama'      => 'Lala',
                    'tgl_lahir' => '18 Januari 1998',
                ],
                [
                    'nis'       => 'smp7002',
                    'nama'      => 'Luluk',
                    'tgl_lahir' => '24 Juli 1997',
                ],
            ],
        ],
        'SMP 08 Malang'        =>
        [
            'alamat' => 'Jl SMP 08 No 25',
            'tlp'    => '034192812',
            'siswa'  => [
                [
                    'nis'       => 'smp8001',
                    'nama'      => 'Ahmad',
                    'tgl_lahir' => '18 Januari 1994',
                ],
                [
                    'nis'       => 'smk8002',
                    'nama'      => 'Memel',
                    'tgl_lahir' => '21 Maret 1996',
                ],
            ],
        ],
        'SMP 09 Malang'        =>
        [
            'alamat' => 'Jl SMP 09 No 25',
            'tlp'    => '034192812',
        ],
        'SMP 10 Malang'        =>
        [
            'alamat' => 'JL SMP 10 No 25',
            'tlp'    => '034192812',
        ],
        'SMP 11 Malang'        =>
        [
            'alamat' => 'Jl SMP 11 No 25',
            'tlp'    => '034192812',
        ],
        'SMP 12 Malang'        =>
        [
            'alamat' => 'Jl SMP 12 No 25',
            'tlp'    => '034192812',
        ],
        'SMP 13 Malang'        =>
        [
            'alamat' => 'Jl SMP 13 No 25',
            'tlp'    => '034192812',
        ],
    ],
];
 
 $sma = isset($_POST["select"]) ? $_POST["select"]: "";
 
foreach($sekolah as $key ){
  $data = [];
		foreach($key as $listsekolah => $value) {
			$skl = substr($listsekolah,0,3);
			
			if($skl == $sma){
				$alamat = [];
				$tlp = [];
				$siswa = [];
				foreach ($sekolah as $data_sekolah ){
					$alamat = $data_sekolah[$listsekolah]["alamat"];
					$tlp = $data_sekolah[$listsekolah]["tlp"];
					$siswa = isset($data_sekolah[$listsekolah]["siswa"])? $data_sekolah[$listsekolah]["siswa"] : '';
				}
                echo "<p>";
				echo " NAMA SEKOLAH : " .$listsekolah. "<br>";
				echo " ALAMAT SEKOLAH : ".$alamat. "<br>";
				echo " ATELEPON SEKOLAH : ".$tlp. "<br>";
                echo "</p>";
				echo "<table border ='1'> <tr> <th> NIS</th> <th> NAMA</th> <th> TANGGAL LAHIR</th> </tr>";
				if(!empty($siswa)){
				
				foreach ($siswa as $data_siswa){					
					echo "
					<tr>
					<td>".$data_siswa["nis"]."</td>
					<td>".$data_siswa["nama"]."</td>
					<td>".$data_siswa["tgl_lahir"]."</td>
					</tr>";				
				}
				}else{
					echo '<tr><td colspan="3" style="text-align: center;">tidak ada siswa</td></tr>';   
				}
			echo "</table>";
            echo "<p>";
			}
		}
  }
  echo "</table>";
?>
    </p>
    </div>
    </div>
    </div>
    </div>
    
    </div>

</body>
</html>