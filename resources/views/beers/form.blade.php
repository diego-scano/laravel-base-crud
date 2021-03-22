@php

  if(isset($edit) && !empty($edit)) {
    $method = 'PUT';
    $url = route('beers.update', compact('beer'));
  } else {
    $method = 'POST';
    $url = route('beers.store');
  }

@endphp

<form action="{{$url}}" method="post">
  @csrf
  @method($method)
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" value="{{isset($beer) ? $beer->name : ''}}" placeholder="Insert name">
    <div class="invalid-feedback">
      {{ $errors->first('name') }}
    </div>
  </div>

  <div class="form-group">
    <label for="typology">Typology</label>
    <input type="text" class="form-control {{ $errors->has('typology') ? 'is-invalid' : '' }}" name="typology" value="{{isset($beer) ? $beer->typology : ''}}" placeholder="Insert typology">
    <div class="invalid-feedback">
      {{ $errors->first('typology') }}
    </div>
  </div>

  <div class="form-group">
    <label for="color">Color</label>
    <input type="text" class="form-control  {{ $errors->has('color') ? 'is-invalid' : '' }}" name="color" value="{{isset($beer) ? $beer->color : ''}}" placeholder="Insert color">
    <div class="invalid-feedback">
      {{ $errors->first('color') }}
    </div>
  </div>

  <div class="form-group">
    <label for="alcohol_content">Alcohol content (%)</label>
    <input type="text" class="form-control  {{ $errors->has('alcohol_content') ? 'is-invalid' : '' }}" name="alcohol_content" value="{{isset($beer) ? $beer->alcohol_content : ''}}" placeholder="Insert alcohol content">
    <div class="invalid-feedback">
      {{ $errors->first('alcohol_content') }}
    </div>
  </div>

  <div class="form-group">
    <label for="nation">Nation</label>
    <input type="text" class="form-control  {{ $errors->has('nation') ? 'is-invalid' : '' }}" name="nation" value="{{isset($beer) ? $beer->nation : ''}}" placeholder="Insert nation">
    <div class="invalid-feedback">
      {{ $errors->first('nation') }}
    </div>
  </div>

  <div class="form-group">
    <label for="producer">Producer</label>
    <input type="text" class="form-control  {{ $errors->has('producer') ? 'is-invalid' : '' }}" name="producer" value="{{isset($beer) ? $beer->producer : ''}}" placeholder="Insert producer">
    <div class="invalid-feedback">
      {{ $errors->first('producer') }}
    </div>
  </div>

  <div class="form-group">
    <label for="image">Image</label>
    <input type="text" class="form-control  {{ $errors->has('image') ? 'is-invalid' : '' }}" name="image" value="{{isset($beer) ? $beer->image : ''}}" placeholder="Insert image URL">
    <div class="invalid-feedback">
      {{ $errors->first('image') }}
    </div>
  </div>

  <input type="submit" value="Submit">
</form>
