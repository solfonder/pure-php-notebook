<?php return array(
    'root' => array(
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => NULL,
        'name' => '__root__',
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => NULL,
            'dev_requirement' => false,
        ),
        'fzaninotto/faker' => array(
            'pretty_version' => 'v1.5.0',
            'version' => '1.5.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../fzaninotto/faker',
            'aliases' => array(),
            'reference' => 'd0190b156bcca848d401fb80f31f504f37141c8d',
            'dev_requirement' => false,
        ),
        'twbs/bootstrap' => array(
            'pretty_version' => 'v5.1.3',
            'version' => '5.1.3.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../twbs/bootstrap',
            'aliases' => array(),
            'reference' => '1a6fdfae6be09b09eaced8f0e442ca6f7680a61e',
            'dev_requirement' => false,
        ),
        'twitter/bootstrap' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => 'v5.1.3',
            ),
        ),
    ),
);
