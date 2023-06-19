<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class ListOfItemController extends Controller
{
    public function search() {
        $search_text = $_GET['query'];
        $inventories = Inventory::where('Item_Name', 'LIKE', '%'.$search_text.'%')->get();
        return view('ListSearchItem');
    }
}
