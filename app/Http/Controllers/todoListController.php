<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//import model to access db table.
use App\Models\ListItem;

class todoListController extends Controller
{
    public function index(){
        return view("welcome", ['listItemsPass' => ListItem::where('is_complete', 0)->get()]);
    }
    public function saveItem(Request $request){
        $newListItem = new ListItem();
        $newListItem->name = $request->listItemName;
        $newListItem->is_complete = 0;
        $newListItem->save();
        return redirect('/');
    }
    public function markItem($id){
        $item = ListItem::find($id);
        $item->is_complete = 1;
        $item->save();
        return redirect('/');
    }
}
