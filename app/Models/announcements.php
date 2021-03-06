<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class announcements
 * @package App\Models
 * @version July 31, 2018, 5:29 am UTC
 *
 * @property string title
 * @property string description
 * @property date start_date
 */
class announcements extends Model
{
    use SoftDeletes;

    public $table = 'announcements';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'description',
        'status',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'description' => 'string',
        'status' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'description' => 'required',
    ];

    
}
