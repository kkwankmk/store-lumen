<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Item;

class ItemController extends Controller
{
    public function index()
    {
        return response()->json(Item::all());
    }

    public function store(Request $request)
    {
        $item = Item::firstOrCreate($request->all());
        
        return response()->json($item->fresh());
    }

    public function show($id)
    {
        $item = Item::findOrFail($id);

        return response()->json($item);
    }

    public function update(Request $request, $id)
    {
        $title = $request->input('title');
        $description = $request->input('description');

        $item = Item::where('id', $id)->update(['title' => $title, 'description' => $description]);
        
        return response()->json($item);
    }

    public function delete($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        
        return response()->json();
    }
}
