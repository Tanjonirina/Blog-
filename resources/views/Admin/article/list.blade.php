@extends("Admin.layouts.app")


@section("body")

@include('Admin.partials.nav')



      <h2 style="text-align: center;">Liste des article</h2>
       <br><br>
       <a href="{{route('article.create')}}" class="btn btn-info" style="margin-left: 45%">New product</a>


      <div class="table-responsive">

 
              <div class="container">

                  <table class="table table-striped" style="box-shadow:1px 2px 6px 1px black">
                      <thead>
                          <tr class="table-info">
                              <th scope="col"></th>
                              <th scope="col">Id</th>
                              <th scope="col">titre</th>
                              <th>
                                Description
                              </th>
                              <th>
                                Auteur
                              </th>
                              
                              
                            
                              <th scope="col">Action</th>
                          </tr>
                      </thead>

                      <tbody >
                        @foreach ($article as $articles)
                      
                          <tr>
                            <th scope="row">
                                  
                                    <td>{{$articles->id}}</td>
                                    <td>{{$articles->titre}}</td>
                                    <td>{!!  substr(strip_tags($articles->description), 0, 50) !!} </td>
                                    <td>{{$articles->user->nom}} </td>
                                  
                    
                                      <td>
                                      <a href="#" id="{{$articles->id}}" class="btn btn-sm btn-info" title="voir" data-href="{{route('article.show',['id'=>$articles->id])}}" onclick="show({{$articles->id}})">Voir</a>
                                      <a href="#" id="{{$article->id}}" class="btn btn-sm btn-warning" title="voir" data-href="{{route('artice.update',['id'=>$Aricle->id])}}" onclick="modif({{$articla->id}})">Modifier</a>
                                      <a href="" class="btn btn-sm btn-danger" title="suprime" data-id=id>suprime</a>             
                                          </td>
                                        </th>
                                        
                          </tr>
                    
                        @endforeach
                        
                
                      </tbody>                      
                    
                  </table>
                  <div class="ml-5 pl-5" >
                    {{$article->links()}}
                  </div>
              </div>
              
           
      </div>
                    <!-- Modal -->
              <div class="modal fade" id="voire" tabindex="-1" role="dialog" aria-labelledby="voireLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="voireLabel">voire Article</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="container">
                        <div class="form">
                          <div class="container">
                            <div class="row">
                              <div class="container bg-white mt-5">
                                <div class="form-group mt-3">
                                  <label for="name">Titre</label>
                                  <input type="text" class="form-control" name='nom' id="nom">
                                </div>

                                <div class="form-group ">
                                  <label for="prix" style="">Description</label>
                                  <input type="text" class="form-control" name='description' id="description">
                                </div>
                              
                                <div class="form-group ">
                                  <label for="roles">Auteur</label>
                                  <select class="custom-select" name="roles" id="roles">
                                      @foreach ($user as $users )
                                          <option value="{{$article->user_id}}">{{$role->designation}}</option>
                                      @endforeach
                                  </select>
                                </div>
                              
                               
                              
                                
                              
                                <button type="submit" class="btn btn-info m-3">Add product</button>
                              
                              </div>
                            </form>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
         
@endsection('body')
@section('script')
<script src="{{asset('Asset/js/js/article.js')}}"></script>
@endsection('script')