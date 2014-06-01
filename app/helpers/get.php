<?php
    class Get
    {
        public static function stability($num)
        {
            switch($num)
            {
                case 0:
                    return "Alpha";
                    break;
                case 1:
                    return "Beta";
                    break;
                case 2:
                    return "Release";
                    break;
                case 3:
                    return "Final";
                    break;
            }
        }
        
        public static function sclass($num)
        {
            switch($num)
            {
                case 0:
                    return "danger";
                    break;
                case 1:
                    return "warning";
                    break;
                case 2:
                    return "info";
                    break;
                case 3:
                    return "success";
                    break;
            }
        }

        public static function avatar( $email, $s = 80, $d = 'mm', $r = 'g', $img = false, $atts = array() ) {
            $url = 'http://www.gravatar.com/avatar/';
            $url .= md5( strtolower( trim( $email ) ) );
            $url .= "?s=$s&d=$d&r=$r";
            if ( $img ) {
                $url = '<img src="' . $url . '"';
                foreach ( $atts as $key => $val )
                    $url .= ' ' . $key . '="' . $val . '"';
                $url .= ' />';
            }
            return $url;
        }
    }