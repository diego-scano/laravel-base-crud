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
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($beers as $beer)
            <tr>
              <th scope="row">{{$beer->id}}</th>
              <td>{{strtoupper($beer->name)}}</td>
              <td>{{$beer->typology}}</td>
              <td>{{$beer->color}}</td>
              <td>{{$beer->alcohol_content}}</td>
              <td>{{$beer->nation}}</td>
              <td>{{$beer->producer}}</td>
              <td><img src="{{$beer->image}}" width="150"></td>
              <td>
                <a href="{{route('beers.show', compact('beer'))}}">
                  <button type="button" class="btn btn-success action">
                    <i class="far fa-eye"></i>
                  </button>
                </a><br>
                <a href="{{route('beers.edit', compact('beer'))}}">
                  <button type="button" class="btn btn-primary action">
                    <i class="fa fa-pen"></i>
                  </button>
                </a><br>
                <form action="{{route('beers.destroy', compact('beer'))}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger action">
                    <i class="fa fa-meteor"></i>
                  </button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

  </body>
</html>
