<?php

namespace EDS_site\Http\Controllers;

use EDS_site\Models\TypePractitioner;
use Illuminate\Http\Request;

class TypePractitionersController extends Controller
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
        $type_practitioners = TypePractitioner::orderBy('created_at','desc')->paginate(10);
        return view('type_practitioners.index', compact('type_practitioners'));
    }

    public function create(){

        return view('type_practitioners.create');
    }


    public function store(TypePractitioner $typepractitioner){

        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required',
        ]);


        TypePractitioner::create([
            'name' => request('name'),
            'description' => request('description')
        ]);

        session()->flash('message', 'Je hebt een behandelaars type toegevoegd.');
        return redirect('/types/practitioners');
    }

    public function edit($id)
    {
        $type_practitioner = TypePractitioner::find($id);
        return view('type_practitioners.edit', compact('type_practitioner'));
    }

    public function update(Request $request, $id)
    {
        $this->validate(request(),[
            'name' => 'required',
            'description' => 'required',
        ]);


        $typepractitioner = TypePractitioner::find($id);
        $typepractitioner->name   = request('name');
        $typepractitioner->description = request('description');
        $typepractitioner->save();

        session()->flash('message', 'Je hebt een behandelaars type aangepast.');

        return redirect('/types/practitioners');
    }


    public function delete($id){

        $type_practitioner = TypePractitioner::find($id);
        return view('type_practitioners.destroy', compact('type_practitioner'));
    }

    public function destroy($id){
        $typepractitioner = TypePractitioner::findOrFail($id);
        $typepractitioner->delete();

        session()->flash('message', 'Je hebt een behandelaars type verwijderd.');

        return redirect('/types/practitioners');
    }
}
