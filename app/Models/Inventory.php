<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    
    protected $table= "inventories"; //associate the table with the model
    protected $fillable = ['id', 'Item_Name', 'item_Price', 'InStock_Qty', 'Item_Date']; //defining the data inserted by the user
}
