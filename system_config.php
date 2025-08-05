<?php
return [ 
    'db_prefix' => 'nauss_',
    'theme' => 'modern',
    'main_company_domain' => "nauss.edu.sa",
    'main_company' => "nauss",
    'amd_options' => [
            'tu_college' => 'many',
    ],
    'site_administrator' => 'Rafik BOUBAKER',
    'site_administrator_extension' => '0000',
    'site_administrator_email' => 'roubaker@nauss.edu.sa',

    'login_page_options' => [
        'register_as' => 'user',  
        'password_reminder' => true,
    ],

    'check_employee_from_external_system' => false,
    'internal_email_domains' => ["nauss.edu.sa"=>true],

    // company settings of structure
    'setting-academic_program-sis_program_code-mandatory' => true,
    'setting-jobrole-id_domain-*' => true,
];