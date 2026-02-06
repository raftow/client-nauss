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


    public static function nbFields()
    {
        return 7;
    }

    public static function originalField($field_order)
    {
        if ($field_order == 1) return "originalObject.applicant_qualification_id.qualification_id";
        if ($field_order == 2) return "originalObject.applicant_qualification_id.major_category_id";
        if ($field_order == 3) return "originalObject.applicant_qualification_id.qualification_major_id";
        if ($field_order == 4) return "originalObject.applicant_qualification_id.gpa";
        if ($field_order == 5) return "originalObject.applicant_qualification_id.gpa_from";
        if ($field_order == 6) return "originalObject.applicant_qualification_id.grading_scale_id";
        if ($field_order == 7) return "originalObject.applicant_qualification_id.source_name";
        // if ($field_order == 8) return "originalObject.applicant_qualification_id.gpa";
        // if ($field_order == 9) return "originalObject.applicant_qualification_id.gpa";
        // if ($field_order == 10) return "originalObject.applicant_qualification_id.gpa";
    }
}
