<?php
    class Alert
    {
        public static function add ($type, $message)
        {
            if (Session::has('alert'))
            {
                $alerts = Session::get('alert');
                $i = count($alerts);
                $alerts[$i] = " <div class=\"alert alert-$type \">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                                $message
                                </div>";
                Session::put("alert",$alerts);
            } else {
                $alerts[0] = "  <div class=\"alert alert-$type \">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                                $message
                                </div>";
                Session::put("alert",$alerts);
            }
        }
        
        public static function render ()
        {
            $result="";
            if (Session::has("alert"))
            {
                $alerts = Session::get("alert");
                foreach ($alerts as $alert)
                {
                    $result = $result.$alert;
                }
                Session::forget("alert");
            }
            return $result;
        }
    }