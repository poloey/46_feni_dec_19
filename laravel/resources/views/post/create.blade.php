@extends('master')
@section('content')
<div class="content_area mt-3">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <form action="create" method="post">
          <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" id="title" class="form-control">
          </div>
          <div class="form-group">
              <label for="content">Content</label>
              <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Create post</button>
          </div>
          
          
        </form>

      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            <h2>Categories</h2>
          </div>
          <div class="card-body">
            <ul class="list-group">
              <li class="list-group-item"> <a href="#">Technology</a> </li>
              <li class="list-group-item"> <a href="#">Web</a> </li>
              <li class="list-group-item"> <a href="#">Mobile</a> </li>
            </ul>
          </div>
        </div>
        <div class="card mt-5">
          <div class="card-header">
            <h2>Author</h2>
          </div>
          <div class="card-body">
            <ul class="list-group">
              <li class="list-group-item"><a href="#">Tanim</a></li>
              <li class="list-group-item"> <a href="#">Sumon</a> </li>
              <li class="list-group-item"> <a href="#">Sarwar</a> </li>
            </ul>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
@endsection