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

    /**
     * @param Application $applicationObj
     * @param ApplicationDesire $desireObj
     */

    public static function calcApplicationClassOf($applicationObj, $desireObj)
    {
        $ncObj = $applicationObj->calcNominatingCandidate("object");
        if (!$ncObj) {
            return 1;
        }
        // @todo : case 2 not implemented for the moment waiting Amjad give explanation 
        return $ncObj->getVal("study_funding_status_id") + 2;
    }
}
