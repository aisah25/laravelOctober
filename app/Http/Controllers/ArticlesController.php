<?php

namespace App\Http\Controllers;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use App\Article;


class ArticlesController extends Controller
{
    public function __construc()
    {
        $this->middleware('sentinel');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {
        // $article = Article::all();
        // return view('articles/article')->with('articles',$article);
       
        $content=$request->input ('search');
        if(!empty($content)){
            $articles=Article::Where('title','like','%'.$content.'%')
            ->orWhere('content','like','%'.$content.'%')->paginate(5);
        }else{
            $articles=Article::paginate(5);
        }

        return view('articles/article')->with('articles',$articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Article::create($request->all());
        return redirect()->route('article.index');


        // $author = $request->input('author');
        // $title = $request->input('title');
        // $content = $request->input('content');
        // return "Name Author : ".$author." <br> Title : ".$title." <br> Content : ".$content;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
     
        $comments = Article::find($id)->comments->sortBy('comment.created_at');

            return view('articles.show')
            ->with('article', $article)->with('comments',$comments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articles = Article::find($id);
        return view('articles/edit')->with('articles', $articles);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Article::find($id)->update($request->all());
        return redirect()->route('article.show',$id);
    }



  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::destroy($id);
        return redirect()->route('article.index');
    }
}
