<?php

namespace EDS_site\Http\Controllers;

use EDS_site\Models\Image;
use EDS_site\Models\Exercisetherapy;
use EDS_site\Models\TypeExercisetherapy;
use Illuminate\Http\Request;

class ExercisetherapiesController extends Controller
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
        $exercisetherapies = Exercisetherapy::orderBy('created_at','desc')->paginate(10);
        return view('exercisetherapies.index', compact('exercisetherapies'));
    }

    public function show(Exercisetherapy $exercisetherapy){
        return view('exercisetherapies.show', compact('exercisetherapy'));
    }

    public function create(){

        $type_exercisetherapies = TypeExercisetherapy::all();

        return view('exercisetherapies.create', compact('type_exercisetherapies'));
    }


    public function store(Exercisetherapy $exercisetherapy, Request $request){

        $this->validate(request(), [
            'text' => 'required',
            'right' => 'required',
            'type_exercisetherapy_id' => 'required'
        ]);


        if ($request->has('image')) {
            $this->validate(request(), [
                'image.*' => 'image|mimes:jpeg,jpg,bmp,png,gif|max:2048'
            ]);
        }

        $exercisestherapy = Exercisetherapy::create([
            'text' => request('text'),
            'right' => request('right'),
            'type_exercisetherapy_id' => request('type_exercisetherapy_id')
        ]);


        if( $request->hasFile('image')) {
            foreach($request->file('image') as $image){

                $imageName = $image->getClientOriginalName();
                $path = base_path() . '/public/uploads/images/';
                $image->move($path, $imageName);
                $imageUrl = url('/').'/uploads/images/'.$imageName;

                Image::create([
                    'url' => $imageUrl,
                    'exercisetherapy_id' => $exercisestherapy->getAttribute('id')
                ]);
            }
        }

        session()->flash('message', 'Je hebt een oefeningstherapie toegevoegd.');
        return redirect('exercisetherapies');
    }

    public function edit($id)
    {
        $type_exercisetherapies = TypeExercisetherapy::all();

        $exercisetherapy = Exercisetherapy::find($id);
        return view('exercisetherapies.edit', compact('exercisetherapy', 'type_exercisetherapies'));
    }

    public function update(Request $request, $id)
    {
        $this->validate(request(),[
            'text' => 'required',
            'right' => 'required',
            'type_exercisetherapy_id' => 'required'
        ]);

        if ($request->has('image')) {
            $this->validate(request(), [
                'image.*' => 'image|mimes:jpeg,jpg,bmp,png,gif|max:2048'
            ]);
        }

        $exercisetherapy = Exercisetherapy::find($id);
        $exercisetherapy->text   = request('text');
        $exercisetherapy->right = request('right');
        $exercisetherapy->type_exercisetherapy_id = request('type_exercisetherapy_id');
        $exercisetherapy->save();


        if( $request->hasFile('image')) {
            foreach($request->file('image') as $image){

                $imageName = $image->getClientOriginalName();
                $path = base_path() . '/public/uploads/images/';
                $image->move($path, $imageName);
                $imageUrl = url('/').'/uploads/images/'.$imageName;

                Image::create([
                    'url' => $imageUrl,
                    'exercisetherapy_id' => $id
                ]);
            }
        }

        session()->flash('message', 'Je hebt een oefeningstherapie aangepast.');

        return redirect('exercisetherapies');
    }


    public function delete($id){

        $exercisetherapy = Exercisetherapy::find($id);
        return view('exercisetherapies.destroy', compact('exercisetherapy'));
    }

    public function destroy($id){
        $exercisetherapy = Exercisetherapy::findOrFail($id);
        $exercisetherapy->delete();

        session()->flash('message', 'Je hebt een oefeningstherapie verwijderd.');

        return redirect('exercisetherapies');
    }

    public function deleteImage($id){
        $image = Image::findOrFail($id);
        $image->delete();

        return redirect()->back();
    }
}
