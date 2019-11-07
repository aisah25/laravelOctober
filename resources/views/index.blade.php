@extends('layouts.master')
@section('content')
  <!-- MAIN -->
  <main role="main">    
    <!-- Main Header -->
    <header>
      <div class="carousel-default owl-carousel carousel-main carousel-nav-white background-dark text-center">
        <div class="item">
          <div class="s-12">
            <img src="img/header.jpg" alt="" >
            <div class="carousel-content">
              <div class="content-center-vertical line">
                <div class="margin-top-bottom-80">
                  <!-- Title -->
                  <h1 class="text-white margin-bottom-30 text-size-60 text-m-size-30 text-line-height-1">Geeksfarm October Training<br> LARAVEL</h1>
                  <div class="s-12 m-10 l-8 center"><p class="text-white text-size-14 margin-bottom-40">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero sunt voluptatem, voluptate quos nemo maxime et, ducimus ratione alias vel suscipit? Accusamus ducimus quod natus laborum harum molestias dignissimos quia!</p></div>
                  <div class="line">
                    <div class="s-12 m-12 l-3 center">
                      <a class="button button-white-stroke s-12" href="{{url('/article')}}">Go To Articles</a>
                    </div>       
                  </div>  
                </div>
              </div>
            </div>
          </div>
        </div>              
      </div>               
    </header>
    
@endsection