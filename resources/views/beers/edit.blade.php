<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <title></title>
  </head>
  <body>

    <div class="container">

      @include('beers.form', ['edit'=>true])

    </div>

  </body>
</html>
