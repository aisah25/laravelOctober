@extends('../layouts.master') 
@section('content')

 <!-- MAIN -->
  <main role="main">
    <!-- Content -->
    <article>

      <header class="section background-dark">
        <div class="line">        
          <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1" >{{$article->title}}</h1>
           
          <p class="margin-bottom-0 text-size-16">{{$article->content}}</p>

      </header>
        </div>
        
      <div class="section background-white"> 
        
        <div class="line">
          <div class="margin">
            <!-- Contact Form -->
            <div class="s-12 m-12 l-6">
              <h2 class="margin-bottom-10">Give Me Comment</h2>

             @if ($errors->any())
              <div class="alert alert-danger">
              	<ul>
              		@foreach ($errors->all() as $error)
              		<li>{{ $error }}</li>
              		@endforeach
              	</ul>
              </div> 

              @endif
              <form name="contactForm" class="customform" method="post" action="{{ route('comments.store')}}">
                {{ csrf_field() }}
                <div class="line">
                  <div class="margin">
                    <div class="s-12 m-12 l-6">
                    	<label for="article_id">Title</label>
                      <input id="article_id" name="article_id" class="article_id" placeholder="article" type="text" value="{{$article->id}}" />
                    </div>
                  </div>
                </div>
                
                <div class="s-12">
                	<label for="Comment">Commentar</label>
                  <textarea id="Comment" name="content" class="required content" placeholder="Content" rows="3"></textarea>
                </div>
                <div class="s-12"> 
                	<label for="user">User</label>
                  <input id="user" name="user" class="user" placeholder="User" title="user" type="text" />
                </div>
                <div class="s-12"><input class="s-12 submit-form button background-primary text-white" type="submit" value="Submit"></div>
              </form>
            </div>
            @foreach  ($comments as $item)
          content  {!! $item ->content!!}  user: {!! $item ->user !!} <br>
            
            @endforeach
          </div>    
        </div>  
      </div> 
    </article>
  </main>
    
@endsection