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
      <div class="card" style="width: 18rem;">
        <img src="{{$beer->image}}" style="width:13rem" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">{{strtoupper($beer->name)}}</h5>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">{{$beer->typology}}</li>
          <li class="list-group-item">{{$beer->color}}</li>
          <li class="list-group-item">{{$beer->alcohol_content}}</li>
          <li class="list-group-item">{{$beer->nation}}</li>
          <li class="list-group-item">{{$beer->producer}}</li>
        </ul>
      </div>
    </div>

  </body>
</html>
