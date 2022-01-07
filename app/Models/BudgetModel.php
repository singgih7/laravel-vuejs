<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BudgetModel extends Model
{
    //use HasFactory;
    protected $table = "budget_models";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'mataanggaran', 'totalanggaran', 'consume', 'available'];
}
