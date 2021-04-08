<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>

<body>
  <div class="container">
    <div class="row mt-5 pt-5">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Subuh</th>
            <th scope="col">Dhuha</th>
            <th scope="col">Dzuhur</th>
            <th scope="col">Ashar</th>
            <th scope="col">Maghrib</th>
            <th scope="col">Isya</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{ $schedule['subuh']}}</td>
            <td>{{ $schedule['dhuha']}}</td>
            <td>{{ $schedule['dzuhur']}}</td>
            <td>{{ $schedule['ashar']}}</td>
            <td>{{ $schedule['maghrib']}}</td>
            <td>{{ $schedule['isya']}}</td>
          </tr>
        </tbody>
        <table>
    </div>
  </div>
</body>

</html>