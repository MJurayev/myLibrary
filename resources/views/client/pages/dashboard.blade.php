@extends('client.layouts.layout')
@section('main-content')

<!-- Content Wrapper START -->

<!-- Breadcrumb Start -->
<div class="breadcrumb-wrapper row">
  <div class="col-12 col-lg-3 col-md-6">
    <h4 class="page-title">Yangiliklar</h4>
  </div>
  <div class="col-12 col-lg-9 col-md-6">
    <ol class="breadcrumb float-right">
      <li><a href="/">Home</a></li>
      <li class="active">/ Dashboard</li>
    </ol>
  </div>
</div>
<!-- Breadcrumb End -->


<div class="container-fluid">
  <div class="row m-t-25">
    <div class="col-md-5 offset-md-3">
      <div id="carouselExampleCaption" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaption" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaption" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaption" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="bg-overlay">
              <img class="d-block w-100" src="assets/img/carousel/img-1.jpg" alt="First slide">
              <div class="carousel-caption  d-md-block">
                <h4 class="text-white">Ziyoli.uz </h4>
                <p class="text-white">Endilikda eng ommabop kitoblar elektron shaklda</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="bg-overlay">
              <img class="d-block w-100" src="assets/img/carousel/img-2.jpg" alt="Second slide">
              <div class="carousel-caption  d-md-block">
                <h4 class="text-white">Qulaylik</h4>
                <p class="text-white">Qulay va sodda dizayn.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="bg-overlay">
              <img class="d-block w-100" src="assets/img/carousel/img-3.jpg" alt="Second slide">
              <div class="carousel-caption  d-md-block">
                <h4 class="text-white">Reklamalarsiz.</h4>
                <p class="text-white">Hech qanday qalqib chiquvchi reklamalarsiz saytdan foydalaning!</p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaption" role="button" data-slide="prev">
          <span class="fa fa-caret-square-o-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaption" role="button" data-slide="next">
          <span class="fa-caret-square-o-right" aria-hidden="true"></span>
        </a>
      </div>
    </div>
  </div>
  <div class="row m-t-10">
    <div class="col">
      <h4 class="page-title">Saytdagi o'zgarishlar</h4>
      
    </div>
  </div>
</div>
<!-- Content Wrapper END -->



@endsection