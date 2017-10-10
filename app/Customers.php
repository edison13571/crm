<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class Customers extends Model
{

    protected $table='customers';
    protected $fillable=['name','en_name','sex','id_number','birthday','school','grade','major_now','major_intention','school_intention','country_intention','status_intention','saler','partner','email','qq','wechat','phone','city','postcode','address','remark','creater_id'];
    protected $dates =['delete_at'];
}
