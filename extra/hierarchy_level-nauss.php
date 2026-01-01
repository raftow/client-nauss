<?php
$hierarchy_level = [];

if (((!$current_domain) or ($current_domain == 25)) and  // admission
        ((!$current_module) or ($current_module == 1282))) {
    $hierarchy_level[50] = ['ar' => 'مدير التطبيق', 'en' => 'Application manager'];
    $hierarchy_level[100] = ['ar' => 'مدير القبول', 'en' => 'Admission manager'];
    // $hierarchy_level[400] = ['ar' => 'مشرف قبول', 'en' => 'Admission supervisor'];
    $hierarchy_level[999] = ['ar' => 'موظف قبول', 'en' => 'Admission employee'];
    // $hierarchy_level[999] = ['ar' => 'موظف مراجعة وثائق', 'en' => 'Document review employee'];
}
