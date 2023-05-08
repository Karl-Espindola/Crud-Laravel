<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Persona extends Model
{
    use HasFactory;
    protected $table = "tbl_personas";

    public function pais():HasOne
    {
        return $this->hasOne(Pais::class, 'per_pai_id', 'id');
    }

    public function categoria():HasOne
    {
        return $this->hasOne(Categoria::class, 'per_cat_id', 'id');
    }

}
