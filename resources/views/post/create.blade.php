@extends('layouts.app')



@section('content')

  @if( count($errors)>0 )

    <div class="alert alert-danger">
      <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
      </ul>
    </div>

  @endif

  <form class="" action="{{ route('store_post_path') }}" method="post">
    {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" name="title" class="form-control" value="">
      </div>

      <div class="form-group">
        <label for="url">Url:</label>
        <input type="text" name="url" class="form-control" value="">
      </div>

      <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="name" rows="8" cols="80" name="description" class="form-control"></textarea>
      </div>



      <div class="form-group text-right">
        <button type="submit" class="btn btn-primary" name="button">Save</button>
      </div>
  </form>
@endsection
