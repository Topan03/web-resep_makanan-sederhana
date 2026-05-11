<?php
namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;

class ResepController extends Controller
{
    public function index(Request $request)
{
    $search = $request->search;

    $resep = Resep::when($search, function($query) use ($search){
        $query->where('title', 'like', "%$search%");
    })->latest()->get();

    return view('reseps.index', compact('resep'));
}
    
     public function create()
    {
        return view('reseps.create');
    }

    public function store(Request $request)
    {
        $imageName = null;

        if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

        Resep::create([
            'title' => $request->title,
            'image' => $imageName,
            'description' => $request->description,
            'ingredients' => $request->ingredients,
            'steps' => $request->steps,
        ]);

        return redirect('/')->with('success', 'Resep berhasil ditambahkan');
    }

    public function show(Resep $resep)
    {
        return view('reseps.show', compact('resep'));
    }

    public function edit(Resep $resep)
    {
        return view('reseps.edit', compact('resep'));
    }

    public function update(Request $request, Resep $resep)
    {
        $imageName = $resep->image;

        if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }

         $resep->update([
            'title' => $request->title,
            'image' => $imageName,
            'description' => $request->description,
            'ingredients' => $request->ingredients,
            'steps' => $request->steps,
        ]);

        return redirect('/')->with('success', 'Resep berhasil diupdate');
    }
       
    public function destroy(Resep $resep)
    {
        $resep->delete();

        return redirect('/')->with('success', 'Resep berhasil dihapus');
    }
}