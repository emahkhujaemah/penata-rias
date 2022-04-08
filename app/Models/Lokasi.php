<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function usermenu_lokasi_url()
    {
        return 'lokasi';
    }

    public function usermenu_p_lokasi_url()
    {
        return 'p-lokasi';
    }
}
