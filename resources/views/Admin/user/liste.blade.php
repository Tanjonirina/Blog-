@extends("Admin.layouts.app")


@section("body")

@include('Admin.partials.nav')



      <h2 style="text-align: center;">Liste des utilisateur</h2>
       <br><br>
       <a href="{{route('user.creat')}}" class="btn btn-info" style="margin-left: 45%">New utlilisateur</a>


      <div class="table-responsive">

 
    <div class="container">

        <table class="table table-striped" style="box-shadow:1px 2px 6px 1px black">
          <thead>
            <tr class="table-info">
                <th scope="col"></th>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th>
                 Email
                </th>
                <th>Role</th>
                
              
                <th scope="col">Action</th>
            </tr>
        </thead>

            <tbody >
              @foreach ($user as $users )
              <tr>
                <th scope="row">
                      
                        <td>{{$users->id}}</td>
                        <td>{{$users->nom}}</td>
                        <td>{{$users->email}}</td>
                        <td>{{$users->role->designation}}</td>
                      
        
                          <td>
                          <a href="#" id="{{$users->id}}" class="btn btn-sm btn-info" title="voir" data-href="{{route('show.user',['id'=>$users->id])}}" onclick="show({{$users->id}})">Voir</a>
                          <a href="" class="btn btn-sm btn-warning" title="voir" data-id=id data-bs-toggle="modal" data-bs-target="tanjona">Modifier</a>
                          <a href="" class="btn btn-sm btn-danger" title="suprime" data-id=id>suprime</a>             
                              </td>
                            </th>
                            
                            
              </tr>
                    

                   
                    @endforeach
                   
      
              </tbody>
              {{ $user->links() }}
    </div>

  </div>

</div>

<div class="modal" id="show">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title">
        SHOW
      </h4>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control">
          </div>
          <div class="form-group">
            <label for="nom">Email</label>
            <input type="text" name="Email" id="Email" class="form-control">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection('body')
@section("script")
  <script src="{{asset("Asset/js/js/ajax/user.js")}}"></script>
@endsection("script")