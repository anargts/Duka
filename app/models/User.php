<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password','created_at','updated_at','profileId');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

  public function Profile(){
    return $this->belongsTo('Profile', 'profileId');
  }

  public function toArray()
  {
    $array = parent::toArray();
    $array['profile'] = $this->Profile->toArray();
    return $array;
  }

  public function Devices(){
    return $this->hasMany('Device', 'userId');
  }

  public function Horses(){
    $devices = $this->Devices;
    $horses = array();
    foreach ($devices as $device) {
      $horses = array_merge($horses, $device->Horses->toArray());
    }
    return $horses;
  }
}
