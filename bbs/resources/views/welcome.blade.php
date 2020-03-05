<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name='csrf-token' content='{{ csrf_token() }}'>
      <title>在庫管理</title>
      <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
      <link rel='stylesheet'
      href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
      <style>
            body {
                  background-image: url("https://d1f5hsy4d47upe.cloudfront.net/48/48586fa9084c09018f8a78dc8b315c1a_t.jpeg");
                  padding-top: 80px;
                  }
      </style>
  </head>
  <body>
    @include('nav')
    <a class="btn btn-primary" href="http://192.168.0.106:8000/">ポートフォリオページに戻る</a>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

  </body>
</html>
