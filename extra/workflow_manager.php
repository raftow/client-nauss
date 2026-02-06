<?php
class NaussWorkflowManager
{
    public static function originalModule()
    {
        return "adm";
    }

    public static function originalClass()
    {
        return "ApplicationDesire";
    }

    public static function nbFields()
    {
        return 10;
    }

    public static function step($field_name)
    {
        return 99;
    }

    public static function attribProperty($field_name, $col_struct)
    {
        if ($col_struct == "css") return "width_pct_50";
        if ($col_struct == "step") return self::step($field_name);
        return true;
    }
}
