<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $fillable =['name', 'surname' , 'born', 'gender' , 'age', 'birth_place', 'CF', 'doc_number','printing_date', 'piastrine', 'GB', 'GR', 'EMO', 'EMA', 'VCM', 'CCM','CMC','AMD','VMP','EMI','ALT'];
}
