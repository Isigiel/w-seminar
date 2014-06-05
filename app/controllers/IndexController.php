<?php

class IndexController extends BaseController 
{
    
    
    public function getIndex () {
        return Redirect::to('home');
    }

    public function getLogin()
    {
        return Redirect::to("home");
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
            $throttle = Sentry::findThrottlerByUserId(5);
            $time = $throttle->getSuspensionTime();

            Alert::add("danger","User is suspended for $time minutes.");
        }
        catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
        {
            Alert::add("danger",'User is banned.');
        }
        
        if (Sentry::check())
            Alert::add("success","Login Successful!");
        
        return Redirect::to("home");
    }
}