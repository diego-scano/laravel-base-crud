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

      @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
        </div>
      @endif

      <form action="{{route('beers.store')}}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" placeholder="Insert name">
        </div>

        <div class="form-group">
          <label for="typology">Typology</label>
          <input type="text" class="form-control" name="typology" placeholder="Insert typology">
        </div>

        <div class="form-group">
          <label for="color">Color</label>
          <input type="text" class="form-control" name="color" placeholder="Insert color">
        </div>

        <div class="form-group">
          <label for="alcohol_content">Alcohol content (%)</label>
          <input type="text" class="form-control" name="alcohol_content" placeholder="Insert alcohol content">
        </div>

        <div class="form-group">
          <label for="nation">Nation</label>
          <input type="text" class="form-control" name="nation" placeholder="Insert nation">
        </div>

        <div class="form-group">
          <label for="producer">Producer</label>
          <input type="text" class="form-control" name="producer" placeholder="Insert producer">
        </div>

        <div class="form-group">
          <label for="image">Image</label>
          <input type="text" class="form-control" name="image" placeholder="Insert image URL">
        </div>

        <input type="submit" value="Submit">
      </form>

    </div>

  </body>
</html>
