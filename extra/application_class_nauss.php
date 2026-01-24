<?php
class ApplicationClassNauss
{
    public static function getLookup()
    {
        $lookup = [];
        $lookup[1] = [
            'ar' => 'غير مرشح - على حسابه الخاص',
            'en' => 'Not a candidate - on his own account',
        ];
        $lookup[2] = [
            'ar' => 'غير مرشح - منحة الأمير نايف',
            'en' => 'Not a candidate - Prince Nayef Scholarship',
        ];
        $lookup[3] = [
            'ar' => 'مرشح – ممول من جهة الترشيح',
            'en' => 'Candidate - funded by the nominating party',
        ];
        $lookup[4] = [
            'ar' => 'مرشح – على حسابه الخاص',
            'en' => 'Candidate - on his own account',
        ];
        $lookup[5] = [
            'ar' => 'مرشح – منحة الأمير نايف',
            'en' => 'Candidate - Prince Nayef Scholarship',
        ];

        $lookup[6] = [
            'ar' => 'مرشح – غير محدد التمويل',
            'en' => 'Candidate - Unspecified funding',
        ];

        return $lookup;
    }


    public static function getWorkflowCategoryLookup()
    {
        $lookup = [];
        $lookup[1] = [
            'ar' => 'الحاصلين على تقدير جيد جدا فأعلى',
            'en' => 'Graduates with Very Good grade or higher',
        ];
        $lookup[2] = [
            'ar' => 'الحاصلين على تقدير أقل من جيد جدا',
            'en' => 'Graduates less than Very Good grade',
        ];

        return $lookup;
    }

    /**
     * @param Application $applicationObj
     * @param ApplicationDesire $desireObj
     */

    public static function calcApplicationClassOf($applicationObj, $desireObj)
    {
        if (!$applicationObj) return 1;
        $ncObj = $applicationObj->calcNominatingCandidate("object");
        if (!$ncObj) {
            return 1;
        }
        // @todo : case 2 not implemented for the moment waiting Amjad give explanation 
        return $ncObj->getVal("study_funding_status_id") + 2;
    }


    /**
     * @param Application $applicationObj
     * @param ApplicationDesire $desireObj
     */

    public static function calcWorkflowCategoryOf($applicationObj, $desireObj)
    {
        if (!$applicationObj) return 2;
        if (!$desireObj) return 2;
        $aqObj = $desireObj->het("applicant_qualification_id");
        if (!$aqObj) return 2;
        $gsObj = $aqObj->het("grading_scale_id");
        if (!$gsObj) return 2;

        return ($gsObj->getVal("level") >= 7) ? 1 : 2;
    }
}
