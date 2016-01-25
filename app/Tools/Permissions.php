<?php

namespace App\Tools;
use Silber\Bouncer\BouncerFacade as Bouncer;
use DB;
use App\User;

class Permissions
{
    public static function check($permission)
    {
        if(env('PERMISSIONS_OVERRIDE'))
            return true;
        return Bouncer::allows($permission);
    }
	
	public function get_role($id)
    {
		$user=User::where('id',$id) -> first();
		$results = DB::table('roles')->get();
		foreach ($results as $role)
		{
			//dd($user);
			if($user->is($role->name)){
				return $role->name;
			}
		}
		return 'User';
    }
}