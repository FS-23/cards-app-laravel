<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('card.list', ["cards" => Card::all()]);
    }

    public function create()
    {
       return view('card.create');
    }

   
    public function store(Request $request)
    {

        $data = $request->all();
        $file = $request->file('image-file');
        $fileStoreResult = $file->store('/public/usersProfil'); 
        $data['image'] = str_replace('public', 'storage' , $fileStoreResult);
        Card::create($data);
        return redirect('/cards/list');
    }

    
    public function show(Card $card)
    {
        //
    }

  
    public function edit($id)
    {
        $card = Card::find($id);

        if(!$card)
          return redirect('/cards/create');
          
        return view('card.edit' , ["card" => $card]);
    }

   
    public function update(Request $request, $id)
    {
        $data = $request->all();
        if($request->hasFile('image-file')){
            $file = $request->file('image-file');
            $fileStoreResult = $file->store('/public/usersProfil'); 
            $data['image'] = str_replace('public', 'storage' , $fileStoreResult);
        }

        $card = Card::find($id);

        $card -> update($data);

        return redirect('/cards/list');
    }

  
    public function destroy(Card $card)
    {
        //
    }
}
