@extends('layouts.master') 
@section('content')
<!-- MAIN -->
<main role="main">
    <!-- Content -->
    <article>
        <header class="section background-dark">
            <div class="line">
                <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Profile</h1>
                <p class="margin-bottom-0 text-size-16">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui quae quidem quod nesciunt perferendis consequuntur corporis sequi ipsa tenetur ut veniam temporibus,
                    <br>illo vero officiis voluptate hic libero quos modi!</p>
            </div>
        </header>

        <section class="section background-white">
            <div class="line">
                <h2 class="text-size-40 margin-bottom-30">HTML & CSS</h2>
                <hr class="break-small background-primary margin-bottom-30">
                <p class="margin-bottom-40">
                    <u>HTML</u> (the Hypertext Markup Language) and <u>CSS</u> (Cascading Style Sheets) are two of the core technologies for building Web pages. HTML provides the <i>structure</i> of the page, CSS the (visual and aural) <i>layout</i>, for a variety of devices. Along with <u>graphics</u> and <u>scripting</u>, HTML and CSS are the basis of building Web pages and Web Applications. Learn more below about:</p>
            </div>

            <div class="line">
                <h2 class="text-size-40 margin-bottom-30">What is HTML?</h2>
                <hr class="break-small background-primary margin-bottom-30">
                <p><u>HTML</u> is the language for describing the structure of Web pages. HTML gives authors the means to:</p>
                <ul type="disk">
                    <li>Publish online documents with headings, text, tables, lists, photos, etc.</li>
                    <li>Retrieve online information via hypertext links, at the click of a button.</li>
                    <li>Design forms for conducting transactions with remote services, for use in searching for information, making reservations, ordering products, etc.</li>
                    <li>Include spread-sheets, video clips, sound clips, and other applications directly in their documents.</li>
                </ul>
                <p>With HTML, authors describe the structure of pages using <i>markup</i>. The <i>elements</i> of the language label pieces of content such as “paragraph,” “list,” “table,” and so on.</p>

            </div>
        </section>
    </article>
</main>
@endsection