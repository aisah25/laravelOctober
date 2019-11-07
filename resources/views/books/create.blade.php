@extends('../layouts.master')
@section('content')
  
  <!-- MAIN -->
  <main role="main">
    <!-- Content -->
    <article>

      <header class="section background-dark">
        <div class="line">        
          <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Create New Book</h1>
          <p class="margin-bottom-0 text-size-16">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.<br>
          Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
        </div>  
      </header>

      <div class="section background-white"> 
        
        <div class="line">
          <div class="margin">
            <!-- Contact Form -->
            <div class="s-12 m-12 l-6">
              <h2 class="margin-bottom-10">Input Buku</h2>
              <form name="contactForm" class="customform" method="post" action="{{ url('buku')}}">
                {{ csrf_field() }}
                <div class="line">
                  <div class="margin">
                    <div class="s-12">
                      <input name="judul" class="judul" placeholder="Judul Buku" title="Judul" type="text" />
                      <p class="title-error form-error">Masukkan Judul Buku</p>
                    </div>
                  </div>
                </div>
                <div class="s-12"> 
                  <input name="pengarang" class="pengarang" placeholder="Pengarang" title="Pengarang" type="text" />
                  <p class="title-error form-error">Masukkan Pengarang</p>
                </div>
                <div class="s-12"> 
                    <input name="penerbit" class="penerbit" placeholder="penerbit" title="penerbit" type="text" />
                    <p class="title-error form-error">Masukkan Penerbit</p>
                  </div>
                  <div class="s-12"> 
                      <select name="tahun" id="tahun" class="tahun" title="tahun">
                        @foreach ($tahun as $item => $value)
                      <option value="{{ $value }}">{{$value}}</option>
                        @endforeach
                      </select>
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