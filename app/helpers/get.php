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
    }