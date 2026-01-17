<?php
global $application_additional_fields;

$application_additional_fields = [
    'attribute_1' => array(
        'type' => 'YN',
        'css' => 'width_pct_25',
        'size' => 64,
        'step' => 93,
        'field_code' => 'program_approved',
        'optional' => false,
        'readonly' => true,
        'title_ar' => 'اعتماد أهلية طلب التقديم على البرنامج الأكاديمي',
        'title_en' => 'Approval of eligibility for application to the academic program',
        'formula' => 'calcQualificationGrade',
    ),


    'attribute_2' => array(
        'type' => 'FK',
        'css' => 'width_pct_25',
        'size' => 64,
        'step' => 93,
        'answer' => 'academic_program',
        'ansmodule' => 'adm',
        'field_code' => 'supplementary_program_id',
        'optional' => false,
        'title_ar' => 'البرنامج التكميلي',
        'title_en' => 'Supplementary Program',
        'help' => ''
    ),

    'attribute_3' => array(
        'type' => 'ENUM',
        'css' => 'width_pct_25',
        'size' => 64,
        'step' => 1,
        'field_code' => 'qualification_level',
        'optional' => false,
        'readonly' => true,
        'title_ar' => 'مستوى المؤهل',
        'title_en' => 'qualification age',
        'category' => 'FORMULA',
        'formula' => 'calcQualificationLevel',
    ),

    'attribute_4' => array(
        'type' => 'YN',
        'css' => 'width_pct_25',
        'size' => 64,
        'step' => 1,
        'field_code' => 'qualification_imported',
        'optional' => false,
        'readonly' => true,
        'title_ar' => 'المؤهل المتقدم به مستورد',
        'title_en' => 'qualification imported',
        'category' => 'FORMULA',
        'formula' => 'calcQualificationImported',
    ),


    'attribute_5' => array(
        'type' => 'ENUM',
        'css' => 'width_pct_25',
        'size' => 64,
        'step' => 1,
        'field_code' => 'qualification_grade',
        'optional' => false,
        'readonly' => true,
        'title_ar' => 'تقدير المؤهل',
        'title_en' => 'qualification grade',
        'category' => 'FORMULA',
        'formula' => 'calcQualificationGrade',
    ),


    'attribute_6' => array(
        'type' => 'INT',
        'css' => 'width_pct_25',
        'size' => 64,
        'step' => 1,
        'field_code' => 'applicant_age',
        'optional' => false,
        'readonly' => true,
        'title_ar' => 'عمر المتقدم',
        'title_en' => 'applicant age',
        'category' => 'FORMULA',
        'formula' => 'calcApplicantAge',
    ),

    'attribute_7' => array(
        'type' => 'INT',
        'css' => 'width_pct_25',
        'size' => 64,
        'step' => 1,
        'field_code' => 'qualification_age',
        'optional' => false,
        'readonly' => true,
        'title_ar' => 'عمر المؤهل',
        'title_en' => 'qualification age',
        'category' => 'FORMULA',
        'formula' => 'calcQualificationAge',
    ),



];

$file_dir_name = dirname(__FILE__);
require($file_dir_name . "/application_formula_manager.php");
