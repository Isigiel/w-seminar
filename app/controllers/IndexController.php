<?php

class IndexController extends BaseController 
{
    public function getIndex()
    {
        
    }
    
    public function getLogin()
    {
        return Redirect::to('/')->with('Login', true);
    }
    
    public function postLogin()
    {
        try
        {
            // Set login credentials
            $remember = Input::get('remember');
            $credentials = array(
                'email'    => Input::get('email'),
                'password' => Input::get('password'),
            );
            
            $alert[0]=false;

            // Try to authenticate the user
            $user = Sentry::authenticate($credentials, $remember);
        }
        catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
        {
            $alert[$i] = 'Email is required.';
            $i++;
        }
        catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
        {
            $alert[$i] = 'Password is required.';
            $i++;
        }
        catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
        {
            $alert[$i] = 'Password is wrong.';
            $i++;
        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            $alert[$i] = 'User wasn\'t found.';
            $i++;
        }
        catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
        {
           $alert[$i] = 'User isn\'t activated.';
            $i++;
        }
        
        if ($alert[0]!=false)
        {
            return Redirect::to('/')->with('LoginErrors',$alert);
        }
        else
        {
            return Redirect::intendet('/');
        }
    }
}