@extends('../layouts.master') 
@section('content')

<!-- MAIN -->
<main role="main">
    <!-- Content -->
    <article>

        <header class="section background-dark">
            <div class="line">
                <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Article</h1>
                <p class="margin-bottom-0 text-size-16">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis.
                    <br> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
            </div>
            <br>
            <div class="line">
                <div class="s-12 m-12 l-3">
                    <a class="button button-white-stroke s-12" href="{{url('/article/create')}}"> Add New Article</a>
                </div>
                          <div class="span4">
            
        </header>
        <div class="col-md-4">
<form method="get" action="{{ route('article.index')}}">
<div class="input-group custom-search-form">
    <input type="text" class="form-control" name="search" placeholder="Search...">
    <span class="input-group-btn">
        <span class="input-">
            <button class="btn btn-default" type="submit"><i class=" fa fa-search"></i>Cari</button>
        </span>
    </span>
</div>
</form>
</div>

        <section class="section background-white">
            @foreach ($articles as $item)
            <div class="line margin-bottom-30">
                <div class="margin">
                    <div class="s-12 m-12 margin-m-bottom">
                        <div class="padding-2x block-bordered border-radius">
                            <div class="line">
                                <h2 class="text-size-30 ">{!! $item->title !!}</h2>
                                <hr class="break-small background-primary margin-bottom-10">
                                <p>{!! $item->content !!}</p>
                                <small><i>Author : {!! $item->author !!}</i></small>
                                <br>
                                <br>
                                <a class="button button-dark-stroke text-size-12" href="{{route('article.show', $item->id)}}">Detail</a>
                                <a class="button button-dark-stroke text-size-12" href="{{route('article.edit', $item->id)}}">Edit</a>
                                {{-- <form name="contactForm" class="customform" method="post" action="{{ route('article.destroy', $item->id)}}">
                                    {{ csrf_field() }} {{method_field('DELETE')}}
                                    <input class="button button-dark-stroke text-size-12" type="submit" value="Hapus" onclick="confirm('Artikel Akan Dihapus?')">
                                </form> --}}
                                <a class="button button-dark-stroke text-size-12" href="{{url('hapusarticle', $item->id)}}" onclick="return confirm('Artikel Akan Dihapus?')">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <{{$articles->links()}}
        </section>

    </article>
</main>

@endsection