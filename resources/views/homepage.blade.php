<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css"
    rel="stylesheet" />

</head>

<body>

  <div class="container">
    <div class="row">
      <form action="{{ route('result')}}" method="get">
        <div class="form-group">
          <label for="exampleInputEmail1">Pilih Kabupaten/Kota</label>
          <select class="form-control" name="city" id="city">

            <option value="784">BADUNG</option>

          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Pilih Tanggal</label>
          <input type="text" name="time" id="time" class="form-control">
        </div>
        <button type="submit" class="btn btn-success"> Cari </button>
      </form>
    </div>
  </div>


  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js">
  </script>

  <script type="text/javascript">
    $('#time').datepicker({
        format: 'yyyy-mm-dd',
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
    });
  </script>
</body>

</html>