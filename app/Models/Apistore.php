<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apistore extends Model
{
    //using third party API store the data into databse and fetch from the database also
    use HasFactory;

    protected $fillable =[
        'id',
        'symbol', 
        'name', 
        'price', 
        'changesPercentage', 
        'change', 
        'dayLow', 
        'dayHigh', 
        'yearHigh', 
        'yearLow', 
        'marketCap', 
        'priceAvg50', 
        'priceAvg200', 
        'volume', 
        'avgVolume', 
        'exchange', 
        'open', 
        'previousClose', 
        'eps', 
        'pe', 
        'earningsAnnouncement',
        'sharesOutstanding',
    ];


}
