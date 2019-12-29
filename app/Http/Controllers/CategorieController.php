<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\Image;
use App\Http\Requests\categoryRequest;
use Illuminate\Support\Facades\DB;
class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catgs=DB::table('categories')->paginate(10);
        return view('Catégorie.index',['catgs'=>$catgs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('Catégorie.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(categoryRequest $request)
    {   
        $catgId=Categorie::create($request->only(['name','slug']));
       
        $images= explode(",",$request->get('image'));
         //Upload Image
        $request->file('image')->store('images');
        foreach($images as $image)
        { Image::create([
                'imageable_type'=>'App\Categorie',
                'imageable_id'=>$catgId->id,
                'file_name'=>$image
           ]);
        }
     
        return redirect('/Catégories')->with('success','Catégorie à été bien enregister');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $catg=Categorie::find($id);
        return view('Catégorie.show',['catg'=>$catg]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catg=Categorie::find($id);
        return view('Catégorie.edit',['catg'=>$catg]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(categoryRequest $request, $id)
    {

    $catg=Categorie::find($id);
    $catg->name=$request->input('name');
    $catg->slug=$request->input('slug');
   
    $catg->save();
    return redirect('/Catégories')->with('success','Catégorie à été bien  Modifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catg= Categorie::find($id);
        $catg->delete();
        $image=new Image();
        $image->where('imageable_id',$id)->delete();
        return redirect('/Catégories')->with('success','la suppression avec succée');
    }
}
