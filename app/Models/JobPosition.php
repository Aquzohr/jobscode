<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class JobPosition
 * @package App\Models
 * @version July 23, 2018, 3:55 am UTC
 *
 * @property string jobname
 * @property string companyname
 * @property string job
 * @property string certificate
 * @property string country
 * @property integer salary
 * @property string experience
 * @property string map
 */
class JobPosition extends Model
{
  public function company()
  {
    return $this->belongsTo(company::class);
  }
  
  public function users_register()
  {
    return $this->belongsToMany(User::class, 'member_register');
  }

  public function users_star()
  {
    return $this->belongsToMany(User::class, 'member_star');
  }


    
    use SoftDeletes;

    public $table = 'job_positions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'jobname',
        'job',
        'certificate',
        'country',
        'salary',
        'experience',
        'start_date',
        'end_date',
        'company_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'jobname' => 'string',
        'job' => 'string',
        'certificate' => 'string',
        'country' => 'string',
        'salary' => 'string',
        'start_date' => 'date',
        'end_date' => 'date',
        'experience' => 'string',
    ];

    public static $messages = [
      'required' => 'asdasdasdasdas is required.'
    ];
    
    public static $rules = [
        'jobname' => 'required',
        'job' => 'required',
        'country' => 'required',
        'start_date' => 'required',
        'end_date' => 'required',
    ];

    

    public static function search_option($request){
      $company_id = company::where('companyname',$request->companyname)->first() ?: null;
      if($company_id){
        $company_id = $company_id->id;
      }

      $res = JobPosition::where('jobname', $request->jobname)
      ->orWhere('company_id',$company_id)
      ->orWhere('job',$request->job)
      ->orWhere('certificate',$request->certificate)
      ->orWhere('country',$request->country)
      ->orWhere('salary',$request->salary)
      ->orWhere('experience',$request->experience);

      return $res;
    }

}
