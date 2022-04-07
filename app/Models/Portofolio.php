<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function usermenu_portofolio_url()
    {
        return 'portofolio';
    }

    public function profile()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function usermenu_home_url()
    {
        return '/';
    }

    public function usermenu_artist_url()
    {
        return 'portofolio';
    }

    // public function usermenu_artist_url()
    // {
    //     return 'portofolio';
    // }

    // public function usermenu_artist_url()
    // {
    //     return 'portofolio';
    // }
}
