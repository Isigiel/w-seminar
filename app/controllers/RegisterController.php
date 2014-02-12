<?php

class RegisterController extends BaseController 
{
    public function postSubmit ()
    {
        $data           = Input::all();
        $data["name"]   = Input::get("fname")." ".Input::get("name");
        
        
        $rules["name"] = "required";
        $rules["fname"] = "required";
        $rules["password"] = "required|min:6|confirmed";
        $rules["email"] = "required|email";
        $rules["username"] = "required|unique:users";
        
        
        $validator = Validator::make($data,$rules);
        if ($validator->fails())
        {
            $messages = $validator->messages()->all();
            foreach ($messages as $message)
            {
                Alert::add("danger",$message);
            }
            return Redirect::to("concept/register");
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
        
        Mail::send('emails.activate', $data, function($message) use ($data)
        {
            $message->to($data["email"], $data["name"])->subject('Welcome at Synopsis!');
        });
        
        Alert::add("success","Registration successfull!");
        Alert::add("info","Please check your mail to activate your Account!");
        
        return Redirect::to('concept/layout');
    }
    
    public function getActivate ($id, $key)
    {
        try
        {
            // Find the user using the user id
            $user = Sentry::findUserById($id);

            // Attempt to activate the user
            if ($user->attemptActivation($key))
            {
                echo 'User is activated now.';
            }
            else
            {
                // User activation failed
            }
        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            echo 'User was not found.';
        }
        catch (Cartalyst\Sentry\Users\UserAlreadyActivatedException $e)
        {
            echo 'User is already activated.';
        }
    }
}