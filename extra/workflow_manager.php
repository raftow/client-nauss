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
        return 8;
    }

    public static function originalField($field_order)
    {
        if ($field_order == 1) return "originalObject.applicant_qualification_id.qualification_id";
        if ($field_order == 2) return "originalObject.applicant_qualification_id.major_category_id";
        if ($field_order == 3) return "originalObject.applicant_qualification_id.qualification_major_id";
        if ($field_order == 4) return "originalObject.applicant_qualification_id.gpa";
        if ($field_order == 5) return "originalObject.applicant_qualification_id.study_type_id";
        if ($field_order == 6) return "originalObject.applicant_qualification_id.grading_scale_id";
        if ($field_order == 7) return "originalObject.applicant_qualification_id.university";
        if ($field_order == 8) return "originalObject.applicant_id.aptitude_university";
        if ($field_order == 9) return "originalObject.cv_score";
        // if ($field_order == 10) return "originalObject.applicant_qualification_id.gpa";
    }

    public static function originalFieldCategory($field_order)
    {
        if ($field_order == 1) return "";
        if ($field_order == 2) return "";
        if ($field_order == 3) return "";
        if ($field_order == 4) return "";
        if ($field_order == 5) return "";
        if ($field_order == 6) return "";
        if ($field_order == 7) return "";
        if ($field_order == 8) return "";
        if ($field_order == 9) return ".FORMULA";
    }


    public static function getOriginalFieldLabel($field_order, $lang, $short)
    {
        if ($field_order == 1) $attribute = "qualification_id";
        elseif ($field_order == 2) $attribute = "major_category_id";
        elseif ($field_order == 3) $attribute = "qualification_major_id";
        elseif ($field_order == 4) $attribute = "gpa";
        elseif ($field_order == 5) $attribute = "study_type_id";
        elseif ($field_order == 6) $attribute = "grading_scale_id";
        elseif ($field_order == 7) $attribute = "university";
        elseif ($field_order == 8) $attribute = "aptitude_university";
        elseif ($field_order == 9) $attribute = "cv_score";
        else $attribute = "unknownOrd$field_order";
        $obj = new WorkflowRequest();
        $return = AfwLanguageHelper::getAttributeTranslation($obj, $attribute, $lang, $short);
        if (!$return or ($return == $attribute)) {
            $obj = new ApplicantQualification();
            $return = AfwLanguageHelper::getAttributeTranslation($obj, $attribute, $lang, $short);
        }

        return $return;
    }
}
