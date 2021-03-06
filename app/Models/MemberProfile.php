<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MemberProfile
 * @package App\Models
 * @version July 19, 2018, 7:48 am UTC
 *
 * @property string fullname
 * @property string gender
 * @property string status
 * @property string nationality
 * @property string religion
 * @property date birthdate
 * @property integer height
 * @property integer weight
 * @property string military_status
 * @property string address
 * @property string phone
 * @property string interested_job
 * @property string keyword_interested_job
 * @property string money_need
 * @property string work_time
 */
class MemberProfile extends Model
{
  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function resume_have()
  {
    return $this->belongsToMany(MemberProfile::class, 'manager_member_profile');
  }

    use SoftDeletes;

    public $table = 'member_profiles';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'fullname',
        'gender',
        'status',
        'nationality',
        'religion',
        'birthdate',
        'height',
        'weight',
        'military_status',
        'address',
        'phone',
        'interested_job',
        'keyword_interested_job',
        'salary',
        'country',
        'certificate',
        'experience',
        'image',
        'work_time'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fullname' => 'string',
        'gender' => 'string',
        'status' => 'string',
        'nationality' => 'string',
        'religion' => 'string',
        'birthdate' => 'date',
        'height' => 'integer',
        'weight' => 'integer',
        'military_status' => 'string',
        'address' => 'string',
        'phone' => 'string',
        'interested_job' => 'string',
        'keyword_interested_job' => 'string',
        'salary' => 'string',
        'country' => 'string',
        'certificate' => 'string',
        'experience' => 'string',
        'image' => 'binary',
        'work_time' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
      'fullname' => 'required',
      'interested_job' => 'required',
      'phone' => 'required|numeric|min:10',
      'image'  => 'max:64',
    ];

    public static function search_option($request){

      $res = MemberProfile::where('interested_job', $request->interested_job)
      ->orWhere('certificate', $request->certificate)
      ->orWhere('country', $request->country)
      ->orWhere('salary', $request->salary)
      ->orWhere('experience', $request->experience);

      return $res;
    }

    
}
