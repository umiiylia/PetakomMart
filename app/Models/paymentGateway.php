<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paymentGateway extends Model
{
    use HasFactory;
    protected $table= "payment"; //associate the table with the model
    protected $fillable = ['id', 'Item_ID', 'Item_Quantity', 'Item_Price', 'Payment_Date']; //defining the data inserted by the user
}
