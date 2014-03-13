<?php

class IndexController extends BaseController 
{
    
    //Controller Filters
    public function __construct()
    {
        $this->beforeFilter('auth', array('except' => array('getLogin','postLogin')));
    }
    
    public function getLogin()
    {
        Redirect::to("concept/layout");
    }
    
    public function postLogin()
    {
        try
        {
            // Set login credentials
            $credentials = Input::all();

            // Try to authenticate the user
            $user = Sentry::authenticate($credentials, false);
        }
        catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
        {
            Alert::add("danger",'Email field is required.');
        }
        catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
        {
            Alert::add("danger",'Password field is required.');
        }
        catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
        {
            Alert::add("danger",'Wrong password or email, try again.');
        }
        catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
        {
            Alert::add("danger",'User not activated, please check your mails!');
        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            Alert::add("danger",'User not found, did you register?');
        }

        // Following is only needed if throttle is enabled
        catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
        {
            $time = $throttle->getSuspensionTime();

            Alert::add("danger","User is suspended for [$time] minutes.");
        }
        catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
        {
            Alert::add("danger",'User is banned.');
        }
        
        if (Sentry::check())
            Alert::add("success","Login Successful!");
        
        return Redirect::to("concept/layout");
    }
    
    public function getCp ()
    {
        $user = Sentry::getUser()["id"];
        
        

        
        //$mods = $user->mods->toArray();
        //$sites = $user->sites->toArray();
        
        $mods=DB::select("	SELECT *
         					FROM modAuthors a, mods m 
         					WHERE a.user_id = ?
         					AND a.mod_id = m.id", array($user));
        
        $sites=DB::select("	SELECT *
         					FROM siteAuthors a, sites m 
         					WHERE a.user_id = ?
         					AND a.site_id = m.id", array($user));
        
        $res=array();
        if (count($mods) !== 0)
        {

            
            foreach ($mods as $m=>$mod)
            {
                if (Site::where("mod_id",$mod->id)->exists())
                {
                    $mods[$m]->site=true;
                } else {
                    $mods[$m]->site=false;
                }
            }

        
        } else {
            $mods=false;
        }
        
        if (count($sites) !== 0)
        {
        
        } else {
            $sites=false;
        }
        
        return View::make("cp")->with(array("mods"=>$mods, "user"=>$user, "sites"=>$sites));
        
    }
}