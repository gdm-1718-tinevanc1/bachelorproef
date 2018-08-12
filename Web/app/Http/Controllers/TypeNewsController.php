<?php

namespace EDS_site\Http\Controllers;

use EDS_site\Models\TypeNew;
use Illuminate\Http\Request;

class TypeNewsController extends Controller
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

    public function index()
    {
        $type_news = TypeNew::orderBy('created_at','desc')->paginate(10);
        return view('type_news.index', compact('type_news'));
    }

    public function create(){

        return view('type_news.create');
    }


    public function store(TypeNew $typenew){

        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required',
        ]);


        TypeNew::create([
            'name' => request('name'),
            'description' => request('description')
        ]);

        session()->flash('message', 'Je hebt een nieuws type toegevoegd.');
        return redirect('/types/news');
    }

    public function edit($id)
    {
        $type_new = TypeNew::find($id);
        return view('type_news.edit', compact('type_new'));
    }

    public function update(Request $request, $id)
    {
        $this->validate(request(),[
            'name' => 'required',
            'description' => 'required',
        ]);


        $typenew = TypeNew::find($id);
        $typenew->name   = request('name');
        $typenew->description = request('description');
        $typenew->save();

        session()->flash('message', 'Je hebt een nieuws type aangepast.');

        return redirect('/types/news');
    }


    public function delete($id){

        $type_new = TypeNew::find($id);
        return view('type_news.destroy', compact('type_new'));
    }

    public function destroy($id){
        $typenew = TypeNew::findOrFail($id);
        $typenew->delete();

        session()->flash('message', 'Je hebt een nieuws type verwijderd.');

        return redirect('/types/news');
    }
}
