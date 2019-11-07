@extends('../layouts.master')
@section('content')
    
  <!-- MAIN -->
  <main role="main">
    <!-- Content -->
    <article>

      <header class="section background-dark">
        <div class="line">        
          <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Create New Article</h1>
          <p class="margin-bottom-0 text-size-16">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.<br>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
        </div>  
      </header>

      <div class="section background-white"> 
        
        <div class="line">
          <div class="margin">
            <!-- Contact Form -->
            <div class="s-12 m-12 l-6">
              <h2 class="margin-bottom-10">Input Article</h2>
              <form name="contactForm" class="customform" method="post" action="{{ route('article.update', $articles->id)}}">
                {{ csrf_field() }} {{method_field('put')}}
                <div class="line">
                  <div class="margin">
                    <div class="s-12 m-12 l-6">
                    <input name="author" value="{{$articles->author}}" class="author" placeholder="Author Name" title="Author" type="text" />
                      <p class="email-error form-error">Enter Author Name</p>
                    </div>
                  </div>
                </div>
                <div class="s-12"> 
                  <input name="title" value="{{$articles->title}}" class="title" placeholder="Title" title="Title" type="text" />
                  <p class="title-error form-error">Enter Title</p>
                </div>
                <div class="s-12">
                  <textarea name="content" class="required content" placeholder="Content" rows="3">{{$articles->content}}</textarea>
                  <p class="content-error form-error">Enter Content</p>
                </div>
                <div class="s-12"><input class="s-12 submit-form button background-primary text-white" type="submit" value="Submit"></div>
              </form>
            </div>
            
          </div>    
        </div>  
      </div> 
    </article>
  </main>
    
@endsection