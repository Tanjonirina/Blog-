@extends('admin.layouts.app')
@include('admin.partials.nav')

@section('body')

  

<form action=""  method="post" enctype="multipart/form-data">
<div class="container">
    <div class="row">
      <div class="container bg-white mt-5">
        <div class="form-group mt-3">
          <label for="name">Name</label>
          <input type="text" class="form-control" name='name'>
        </div>
      
        <div class="form-group ">
          <label for="description">Decription</label>
          <input type="text" class="form-control" name='description'>
        </div>
      
        <div class="form-group ">
          <label for="prix" style="">Prix</label>
          <input type="text" class="form-control" name='prix'>
        </div>
      
        
      
        <button type="submit" class="btn btn-info m-3">Add product</button>
      
      </div>
    </form>
        
    </div>
</div>
@endsection('body')
