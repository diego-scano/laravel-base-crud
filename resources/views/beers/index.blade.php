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
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Typology</th>
            <th scope="col">Color</th>
            <th scope="col">Alcohol content (%)</th>
            <th scope="col">Nation</th>
            <th scope="col">Producer</th>
            <th scope="col">Image</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($beers as $beer)
            <tr>
              <th scope="row">{{$beer->id}}</th>
              <td><a href="{{route('beers.show', compact('beer'))}}">{{strtoupper($beer->name)}}</a></td>
              <td>{{$beer->typology}}</td>
              <td>{{$beer->color}}</td>
              <td>{{$beer->alcohol_content}}</td>
              <td>{{$beer->nation}}</td>
              <td>{{$beer->producer}}</td>
              <td><img src="{{$beer->image}}" width="150"></td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

  </body>
</html>
