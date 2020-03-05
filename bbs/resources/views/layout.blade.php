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

            .starter-template {
                    padding: 10px;
                    background-color: white;
                    border-radius: 13px
                  }

            form-group:required {
                    border: 1px dashed red;
                  }
                  .nise {
                    min-width: 10px;
                    text-align: center;
                    background-color: #ffff5e;
                    font-size: 18px;
                    color: #000000;
                    text-decoration: none;
                    font-weight: bold;
                    padding: 10px 5px 5px 10px;
                    position: relative;
                    transition: .9s;
                    border: 1px solid #FFF;
                  }

            .sort {
                    min-width: 10px;
                    text-align: center;
                    background-color: #ffff5e;
                    font-size: 18px;
                    color: #000000;
                    text-decoration: none;
                    font-weight: bold;
                    padding: 10px 5px 5px 10px;
                    position: relative;
                    transition: .9s;
                    border: 1px solid #FFF;
                  }

            .sort.desc:after {
                    content:"▼";
                  }
            .sort.asc:after {
                    content:"▲";
                  }

      </style>
      <script src='{{ asset("js/app.js") }}' defer></script>
  </head>
  <body>
    @include('nav')
    <div class='container'>
      @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
    <script>
          var options = {
            valueNames: [ 'name', 'player', 'money', 'ko', 'total' ]
          };
          var userList = new List('users', options);
          userList.sort( 'player', {order : 'desc' });
    </script>
  </body>
</html>
