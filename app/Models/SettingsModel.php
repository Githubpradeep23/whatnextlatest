<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingsModel extends Model
{
    use HasFactory;

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('del', function (Builder $builder) {
            $builder->where('del', '0');
        });
    }

      protected $fillable = [
        'title','keywords','description','logo', 'top_email','top_address', 'top_mobile','favicon','status', 'del','created_at','updated_at'
    ];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'site_settings';
    public $timestamps = false;
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime'];
}

