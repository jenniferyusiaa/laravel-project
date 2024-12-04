<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    // If the table name differs from the default pluralized form of the model
    protected $table = 'menus';

    // Specify the primary key if it's not 'id'
    protected $primaryKey = 'id';

    // Disable timestamps if they are not used in the table
    public $timestamps = true;

    // Specify which attributes are mass assignable
    protected $fillable = [
        'kode_makanan',
        'nama_makanan',
        'rincian',
        'harga',
        'created_at',
        'updated_at',
    ];

    // If you want to disable mass assignment protection
    // protected $guarded = [];
}
