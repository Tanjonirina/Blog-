@extends("Admin.layouts.app")



@section("body")
@include("Admin.partials.nav")


   @include('Admin.partials.sidebar')
             
         <div class="col-md-9 ">
               <!-- card -->
             <div class="row mt-3 ">
               
                <div class="col-md-3 col-sm-2 card ">
                 <i   class="fa fa-money-bill"><h5>$ 354</h5></i>

               </div>

               <div class="col-md-3 col-sm-2 card">
                 <i class="fa fa-user"><h5>$ 354</h5></i>

               </div>

               <div class="col-md-3 col-sm-2 card">
                 <i class="fa fa-cart-flatbed"><h5>$ 354</h5></i>

               </div>
             </div>
             <!-- card -->

             <div class="row mt-3">
                <div class="col-md-12 header">
                   
                    <div class="row" style="margin-top: 20%">
                        <div class="col-md-3 col-sm-2 card ">
                            
                          <i  class="fa fa-cart-flatbed" ><br><a href="" class="ml-2 mt-3 btn btn-danger" data-toggle="modal" data-target="#exampleModal">Article</a></i>
                        
                        </div>
                                                    <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title ml-5 " id="exampleModalLabel">Ajouteur</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="btn">
                                      <a href="{{route('article.create')}}" class="btn btn-danger" >Article</a>
                                      <a href="{{route('user.creat')}}" class="btn btn-info">User</a>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            
                                  </div>
                                </div>
                              </div>
                            </div>
         
                        <div class="col-md-3 col-sm-2 card">
                            <i  class="fa fa-edit"><br><a href="/admine" class="ml-2 mt-3 btn btn-dark" data-toggle="modal" data-target="#Liste">List</a></i>
         
                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="Liste" tabindex="-1" role="dialog" aria-labelledby="ListeLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title ml-5 " id="ListeLabel">list</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                <div class="btn">
                                                  <a href="{{route('article.list')}}" class="btn btn-danger" >Article</a>
                                                  <a href="{{route('user.list')}}" class="btn btn-info">User</a>
                                                </div>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        
                                              </div>
                                            </div>
                                          </div>
                                        </div>
         
                        <div class="col-md-3 col-sm-2 card">
                            <i  class="fas fa-align-center"><br><a href="" class="ml-2 mt-3 btn btn-danger">ajou</a></i>
         
                        </div>
                      </div>

                  

              </div>

      </div>
                
         

            
       </div>

       
     </div>
   </div>
   <!-- sidebar -->
@endsection('body')