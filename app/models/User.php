<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	
	protected $table = 'users';
    protected $softDelete = true;

    protected $guarded = array();  // Important
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	
	public $errors;
    
    protected $fillable = array('email', 'nombre', 'password','documento','idrol','estado','telefono');

    public function isValid($data)
    {
        $rules = array(
            'email'     => 'required|email|unique:users',
            'nombre' => 'required|min:4|max:40',
            'password'  => 'required|min:8|confirmed'
        );
        
        $validator = Validator::make($data, $rules);
        
        if ($validator->passes())
        {
            return true;
        }
        
        $this->errors = $validator->errors();
        
        return false;
    }

}
