<?php

class RegisterController extends BaseController 
{

    public function getIndex()
    {
        if (Sentry::check())
        {
            Alert::add("warning","You are already logged in!");
            return Redirect::to("concept/layout");
        } else {
            return View::make("register");
        }
    }
    
    public function postSubmit ()
    {
        $data           = Input::all();
        $data["name"]   = Input::get("fname")." ".Input::get("name");
        
        
        $rules["name"] = "required";
        $rules["fname"] = "required";
        $rules["password"] = "required|min:5|confirmed";
        $rules["email"] = "required|email|unique:users";
        $rules["username"] = "required|unique:users";
        
        
        $validator = Validator::make($data,$rules);
        if ($validator->fails())
        {
            $messages = $validator->messages()->all();
            foreach ($messages as $message)
            {
                Alert::add("danger",$message);
            }
            return Redirect::to("home");
        }
        
        
        
        
        $user = Sentry::register(array(
            'email'      => $data["email"],
            'password'   => $data["password"],
            'username'   => $data["username"],
            'first_name' => Input::get('fname'),
            'last_name'  => Input::get('name')
            ));

        $data["code"] = $user->getActivationCode();
        $data["id"] = $user->id;
        
        Session::put('data',$data);
        
        Mail::queue('mails.activate', $data, function($message) use ($data)
        {
            $message->to($data["email"], $data["name"])->subject('Welcome at Synopsis!');
        });
        
        Alert::add("success","Registration successfull!");
        Alert::add("info","Please check your mail to activate your Account!");
        
        return Redirect::to('home');
    }
    
    public function getActivate ($id, $key)
    {
        try
        {
            // Find the user using the user id
            $user = Sentry::findUserById($id);
            $name = $user->username;

            // Attempt to activate the user
            if ($user->attemptActivation($key))
            {
                try
                {
                    // Log the user in
                    Sentry::login($user, false);
                }
                catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
                {
                    Alert::add("warning",'Login field is required.');
                }
                catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
                {
                    Alert::add("warning",'User not found.');
                }
                catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
                {
                    Alert::add("warning",'User not activated.');
                }

                // Following is only needed if throttle is enabled
                catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
                {
                    $time = $throttle->getSuspensionTime();

                    Alert::add("warning","User is suspended for [$time] minutes.");
                }
                catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
                {
                    Alert::add("warning",'User is banned.');
                }


                Alert::add("success","<strong>$name</strong>, your account is activated now");
                Alert::add("success","Welcome to <strong>Synopsis</strong>, everything is ready to go, <strong>Rock on!</strong>");
            }
            else
            {
                // User activation failed
            }
        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            Alert::add("danger","The used Link was invalid!");
        }
        catch (Cartalyst\Sentry\Users\UserAlreadyActivatedException $e)
        {
            Alert::add("info","This user is already activated");;
        }
        
        return Redirect::to('home');
    }
}