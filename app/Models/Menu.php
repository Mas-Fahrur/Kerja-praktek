<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

     protected $table = 'menu';

    protected $primaryKey = 'menu_id';

    protected $keyType = 'string';

    protected $fillable = [
        'menu_id',
        'nama_menu',
        'harga',
        'gambar'
    ];

    public $timestamps = true;

}
