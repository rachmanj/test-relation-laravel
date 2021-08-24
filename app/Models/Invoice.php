<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['project', 'addocs'];

    public function project()
    {
        return $this->belongsTo(Project::class, 'projects_id', 'id');
    }

    public function addocs()
    {
        return $this->hasMany(Addoc::class, 'invoices_id', 'id');
    }
}
