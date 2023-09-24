@extends('Admin.layouts.app')
@include('Admin.partials.nav')

@section('body')

  

<form action=""  method="post" enctype="multipart/form-data">
  @csrf
<div class="container">
    <div class="row">
      <div class="container bg-white mt-5">
        <div class="form-group mt-3">
          <label for="name">Nom</label>
          <input type="text" class="form-control" name='nom'>
        </div>
      
        <div class="form-group ">
          <label for="description">Email</label>
          <input type="text" class="form-control" name='email'>
        </div>

        <div class="form-group ">
            <label for="description">Mot de pass</label>
            <input type="text" class="form-control" name='motp'>
          </div>
      
        <div class="form-group">
            <label for="exampleFormControlSelect1">Role id</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option value="1">Administration</option>
              <option value="2">clients</option>
            
            </select>
          </div>
      
        
      
        <button type="submit" class="btn btn-info m-3">Add User</button>
      
      </div>
    </form>
        
    </div>
</div>
@endsection('body')
