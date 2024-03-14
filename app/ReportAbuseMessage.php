<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportAbuseMessage extends Model
{

    protected $table = 'report_abuse_messages';
    public $timestamps = true;
    protected $guarded = ['id'];

    protected $dates = ['created_at', 'updated_at'];
}
