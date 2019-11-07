@extends('../layouts.master') 
@section('content')

<!-- MAIN -->
<main role="main">
    <!-- Content -->
    <article>

        <header class="section background-dark">
            <div class="line">
                <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Books</h1>
                <p class="margin-bottom-0 text-size-16">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.
                    <br> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
            </div>
            <br>
            <div class="line">
                <div class="s-12 m-12 l-4">
                    <a class="button button-white-stroke s-12" href="{{url('/buku/create')}}"> Add New Book</a>
                </div>
            </div>
        </header>

        <section class="section background-white"> 
            <div class="line margin-bottom-30">
                <div class="margin">
            @foreach ($books as $item)
            <div class="s-12 m-12 l-4 margin-m-bottom">
                    <div class="padding-2x block-bordered border-radius">
                            <h2 class="text-size-20 ">{!! $item->judul !!}</h2>
                            <hr class="break-small background-primary margin-bottom-10">
                            <p>Pengarang : {!! $item->pengarang !!}</p>
                            <p>Penerbit : {!! $item->penerbit !!}</p>
                            <p>Tahun : {!! $item->tahun !!}</p>
                            <br>
                            <a class="button button-dark-stroke text-size-12" href="{{route('buku.edit', $item->id)}}">Edit</a>
                            {{-- <form name="contactForm" class="customform" method="post" action="{{ route('book.destroy', $item->id)}}">
                                {{ csrf_field() }} {{method_field('DELETE')}}
                                <input class="button button-dark-stroke text-size-12" type="submit" value="Hapus" onclick="confirm('Artikel Akan Dihapus?')">
                            </form> --}}
                            <a class="button button-dark-stroke text-size-12" href="{{url('hapusbuku', $item->id)}}" onclick="return confirm('Buku Akan Dihapus?')">Hapus</a>
                                  
                    </div>
                    </div>
                  
            
            @endforeach
                        </div>
                        </div>
        </section>

    </article>
</main>

@endsection