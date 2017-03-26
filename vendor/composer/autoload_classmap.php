<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Modules\\History\\Database\\Seeders\\HistoryDatabaseSeeder' => $baseDir . '/Database/Seeders/HistoryDatabaseSeeder.php',
    'Modules\\History\\Database\\Seeders\\HistoryTypeTableSeeder' => $baseDir . '/Database/Seeders/HistoryTypeTableSeeder.php',
    'Modules\\History\\Models\\History\\History' => $baseDir . '/Models/History/History.php',
    'Modules\\History\\Models\\History\\HistoryType' => $baseDir . '/Models/History/HistoryType.php',
    'Modules\\History\\Models\\History\\Traits\\Relationship\\HistoryRelationship' => $baseDir . '/Models/History/Traits/Relationship/HistoryRelationship.php',
    'Modules\\History\\Providers\\BreadcrumbsServiceProvider' => $baseDir . '/Providers/BreadcrumbsServiceProvider.php',
    'Modules\\History\\Providers\\HistoryServiceProvider' => $baseDir . '/Providers/HistoryServiceProvider.php',
    'Modules\\History\\Providers\\RouteServiceProvider' => $baseDir . '/Providers/RouteServiceProvider.php',
    'Modules\\History\\Providers\\SidebarServiceProvider' => $baseDir . '/Providers/SidebarServiceProvider.php',
    'Modules\\History\\Repositories\\Backend\\History\\EloquentHistoryRepository' => $baseDir . '/Repositories/Backend/History/EloquentHistoryRepository.php',
    'Modules\\History\\Repositories\\Backend\\History\\Facades\\History' => $baseDir . '/Repositories/Backend/History/Facades/History.php',
    'Modules\\History\\Repositories\\Backend\\History\\HistoryContract' => $baseDir . '/Repositories/Backend/History/HistoryContract.php',
    'Modules\\History\\Repositories\\BaseRepository' => $baseDir . '/Repositories/BaseRepository.php',
);