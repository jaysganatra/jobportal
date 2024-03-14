<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cms extends Model
{

    protected $table = 'cms';
    public $timestamps = true;
    protected $guarded = ['id'];

    protected $dates = ['created_at', 'updated_at'];

    public function cmsPages()
    {
        return $this->hasMany('App\CmsPages', 'page_id', 'id')
            ->orderBy('lang', 'ASC');
    }
}
