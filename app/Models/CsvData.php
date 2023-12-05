<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CsvData extends Model
{
    use HasFactory;

    protected $fillable = [
        'column1',
        'column2',
        'column3',
        'column4',
        'column5',
        'column6',
        'column7',
        'column8',
        'column9',
        'column10',

        'column11',
        'column12',
        'column13',
        'column14',
        'column15',
        'column16',
        'column17',

      
        // Add other columns here (column3 to column12)
    ];
}
