@extends('layouts.app')

@section('body')

@include('partials.navbar')


<section>
<!-- carosel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="Asset/image/ma.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
          <h1 class="pub">Hair - BUILDING FIBRE FOR <span>THICKER, FULLER</span> HAIR</h1>
          <p class="paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure laudantium, adipisci itaque neque reprehenderit nihil</p>
          <button type="button" class="btn btn-outline-primary" style="margin-left: 150px;">Primary</button>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Asset/image/manga.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
          <h1>Hair - BUILDING FIBRE FOR <span>THICKER, FULLER</span> HAIR</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure laudantium, adipisci itaque neque reprehenderit nihil</p>
          <button type="button" class="btn btn-outline-danger">voire plus</button>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Asset/image/large.jpeg" alt="Third slide" >
      
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>
<!-- carosel -->
</section> 

{{-- card --}}
<!-- card-product -->
<div class="container">
        
  <h1 class="heander">FEATURED PRODUCT</h1>
  <div class="row">
      
  <div class="col-md-4">
   <div class="inner-box">
      <div class="car-img">
          <img src="Asset/image/manga.jpg" class="img-fluid"  >
      </div>
      <div class="d-flex align-items-center justify-content-center py-3 gap-2">
          <div class="car-name ">
              <h3 class="text-uppercase p-0 m-0 text-white">Product</h3>
          </div>
          
      </div>
      <div class="prix  d-flex align-items-center justify-content-center py-3 gap-2">
          <div class="car-name ">
              <p class="text-uppercase p-0 m-0 text-info">158 AR</p>
          </div>
      </div>
      <div class="btn d-flex align-items-center justify-content-center ">
       <a href="" class="btn btn-outline-secondary "  data-toggle="modal" data-target="#exampleModal"#voirplus">voire plus </a>
      </div>

    </div>
    <hr class="p-0 m-0">
    
  </div>

  <div class="col-md-4">
      <div class="inner-box">
         <div class="car-img">
             <img src="Asset/image/Vélo-triathlon.png" class="img-fluid"  >
         </div>
         <div class="d-flex align-items-center justify-content-center py-3 gap-2">
             <div class="car-name ">
                 <h3 class="text-uppercase p-0 m-0 text-white">Product</h3>
             </div>
             
         </div>
         <div class="prix  d-flex align-items-center justify-content-center py-3 gap-2">
             <div class="car-name ">
                 <p class="text-uppercase p-0 m-0 text-info">158 AR</p>
             </div>
         </div>
         <div class="btn d-flex align-items-center justify-content-center ">
          <a href="" class="btn btn-outline-secondary "  data-toggle="modal" data-target="#exampleModal"#voirplus">voire plus </a>
         </div>
 
       </div>
       <hr class="p-0 m-0">
       
     </div>

     <div class="col-md-4">
      <div class="inner-box">
         <div class="car-img">
             <img src="Asset/image/large.jpeg" class="img-fluid"  >
         </div>
         <div class="d-flex align-items-center justify-content-center py-3 gap-2">
             <div class="car-name ">
                 <h3 class="text-uppercase p-0 m-0 text-white">Product</h3>
             </div>
             
         </div>
         <div class="prix  d-flex align-items-center justify-content-center py-3 gap-2">
             <div class="car-name ">
                 <p class="text-uppercase p-0 m-0 text-info">158 AR</p>
             </div>
         </div>
         <div class="btn d-flex align-items-center justify-content-center ">
          <a href="" class="btn btn-outline-secondary "  data-toggle="modal" data-target="#exampleModal">voire plus </a>
         </div>
 
       </div>
       <hr class="p-0 m-0">
       
     </div>
    </div>
  </div>
</div>
</div>
<!-- card-product -->
{{-- modal --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
{{-- modal --}}
{{-- card --}}



{{-- section card --}}
@include('partials.card')
{{-- section card --}}

{{-- abouts --}}
 <!-- Apropos -->
 <div class="container">
  <div class="row">
      <div class="col-md-12">
          <h1 class="heander mt-5">HOW IT WORK</h1>
      </div>
   
      
      <div class=" icon col-md-4">
          <i class="fa fa-home"></i>
          <h5>Abous </h5>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro illum sunt maiores repellat ratione deserunt </p>
      </div>

      <div class="icon col-md-4">
          <i class="fa fa-store"></i>
          <h5>Abous </h5>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro illum sunt maiores repellat ratione deserunt </p>
      </div>
      <div class=" icon col-md-4">
          <i class="fa fa-shipping-fast"></i>
          <h5>Abous </h5>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro illum sunt maiores repellat ratione deserunt </p>
      </div>
  </div>


  </div>
  </div>
</div>
<!-- Apropos -->

<!-- Abouts -->

<div class="container mt-5">
  <div class="row">
      <div class="col-md-6">
          <h1 class="about">ABOUT US</h1>
          <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, in. Rem assumenda error qui voluptate est aspernatur quia ut cumque culpa totam. Quasi harum autem, sapiente ratione enim unde optio.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, in. Rem assumenda error qui voluptate est aspernatur quia ut cumque culpa totam. Quasi harum autem, sapiente ratione enim unde optio.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, in. Rem assumenda error qui voluptate est aspernatur quia ut cumque culpa totam. Quasi harum autem, sapiente ratione enim unde optio.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, in. Rem assumenda error qui voluptate est aspernatur quia ut cumque culpa totam. Quasi harum autem, sapiente ratione enim unde optio.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, in. Rem assumenda error qui voluptate est aspernatur quia ut cumque culpa totam. Quasi harum autem, sapiente ratione enim unde optio.
          </p>
      </div>
      <div class="image col-md-6">
          <img src="Asset/image/portrait.jpg" alt="" srcset="">
      </div>
  </div>
</div>

<!-- Abouts -->

 <!-- testimonial -->
 <div class="container">
  <div class="row">
      <div class="col-md-12">
          <h1 class="heander mt-5">TESTIMONIAL</h1>
      </div>
      <div class="row">
          <div class="col-md-6 ">
              <div class="ia img col-sm">
                  <img class="img-thumbnail" src="Asset/image/bg.jpg" alt="" srcset="">
              </div>
              <div class="tex text-white col-sm">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam odit nobis explicabo eos ullam eum,</p>
              </div>
          </div>
          <div class="col-md-6">
              <div class="img col-sm ml-2">
                  <img class="img-thumbnail" src="Asset/image/bg.jpg" alt="" srcset="">
              </div>
              <div class=" tex text-white col-sm par">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam odit nobis explicabo eos ullam eum,</p>
              </div>
          </div>
      </div>

      
      

      </div>
  </div>
</div>
<!-- testimonial -->

{{-- abouts --}}

@include('partials.footer')

@endsection('body')

@section('script')
<script>
    $("#test").carousel({interval:2500});
</script>
@endsection('script')