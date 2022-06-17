<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/infografis.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <title>Infografis | Sangkar Nihuta</title>
</head>
<body class="info">
<nav class="navbar navbar-expand-lg navbar-dark ">
  <div class="container">
  <img src="img/logo.jpeg" style="width:65px;height:65px;border-radius:40%"> &nbsp&nbsp&nbsp
    <a class="navbar-brand" href="index.php"><b>Sangkar <br>  Nihuta</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><b>Home</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="pemerintahan.php"><b>Pemerintahan</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="infografis.php"><b>Infografis</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="berita.php"><b>Berita</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php"><b>Logout</b></a>
        </li>
      </ul>
    </div>
</nav>
<header class="header">
	</header> 
  <div>
  <h1>Demografi Jumlah Penduduk</h1>
    <div id="piechart" class="chart"> 
    </div>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Perempuan',     11],
          ['Laki-laki',    9]
        ]);

        var options = {
          title: 'Total Jumlah penduduk = 3.128 Jiwa'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</body>
</html>
