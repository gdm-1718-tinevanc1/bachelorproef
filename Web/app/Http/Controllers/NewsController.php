<?php

namespace EDS_site\Http\Controllers;

use EDS_site\Models\News;
use EDS_site\Models\TypeNew;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware(['admin', 'auth']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $news = News::orderBy('created_at','desc')->paginate(10);
        return view('news.index', compact('news'));
    }

    public function show(News $news){
        return view('news.show', compact('news'));

    }

    public function create(){

        $type_news = TypeNew::all();

        return view('news.create', compact('type_news'));
    }


    public function store(Device $device){

        $this->validate(request(), [
            'title' => 'required',
            'subtitle' => 'required',
            'date' => 'required',
            'source' => 'required',
            'place' => 'required',
            'text' => 'required'
        ]);


        $news = News::create([
            'title' => request('title'),
            'subtitle' => request('subtitle'),
            'date' => request('date'),
            'source' => request('source'),
            'place' => request('place'),
            'text' => request('text')
        ]);

            
        if (is_array('type_new_id'))
        {
            foreach (request('type_new_id') as $typenew){
                $news->typeNews()->attach($typenew);
            }
        }
        else{
            $news->typeNews()->attach(request('type_new_id'));
        }

        session()->flash('message', 'Je hebt een nieuwsbericht opgeslaan.');
        return redirect('news');
    }

    public function edit($id)
    {
        $type_news = TypeNew::all();
        $news = News::find($id);
        return view('news.edit', compact('news', 'type_news'));

    }


    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'title' => 'required',
            'subtitle' => 'required',
            'date' => 'required',
            'source' => 'required',
            'place' => 'required',
            'text' => 'required'
        ]);

        $news = News::find($id);
        $news->title   = request('title');
        $news->subtitle = request('subtitle');
        $news->date = request('date');
        $news->source = request('source');
        $news->place = request('place');
        $news->text = request('text');
        $news->save();

        if (is_array('type_new_id'))
        {
            $news->typeNews()->detach();
            foreach (request('type_new_id') as $typenew){
                $news->typeNews()->attach($typenew);
            }
        }
        else{
            $news->typeNews()->detach();
            $news->typeNews()->attach(request('type_new_id'));
        }

        session()->flash('message', 'Je hebt een nieuwsbericht aangepast.');

        return redirect('/news');

    }


    public function delete($id){

        $news = News::find($id);
        return view('/news.destroy', compact('news'));

    }

    public function destroy($id){
        $news = News::findOrFail($id);
        $news->delete();

        session()->flash('message', 'Je hebt een nieuwsbericht verwijderd.');

        return redirect('/news');
    }
}
