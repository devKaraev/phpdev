<?php

class validate
{
    public static function checkName($name)
    {
        if(strlen($name)>=2)
        {
            return TRUE;
        } else
        {
            return FALSE;
        }
    }
    
    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
            return TRUE;
        } else
        {
            return FALSE;
        }
    }
}
