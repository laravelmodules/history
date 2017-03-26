<?php

\DashboardMenu::registerItem([
    'id' => 'History',
    'priority' => 20,
    'parent_id' => null,
    'heading' => '',
    // 'heading' => 'History',
    'title' => 'History',
    'font_icon' => 'fa fa-bars',
    // 'link' => route('history.history.index.get'),
    'link' => '',
    'css_class' => null,
    'permissions' => ['view-menus']
]);

// \DashboardMenu::registerResource([
//      'parent' => 'History', // Module Name
//      'prefix' => 'history', // Route prefix
//      'resource' => 'history', // Resouce name
//      'permissions' => 'view-backend', // Permissions Group
//      'priority' => 31, // priority Group
// ]);

// \MenuDashboard::registerItem([
//         'id' => route('history.history.index'),
//         'priority' => 1,
//         'parent_id' => 'History',
//         'heading' => 'Claro',
//         'title' => 'Claro',
//         'font_icon' => 'fa fa-plus-circle',
//         'link' => route('history.history.index'),
//         // 'link' => '',
//         'css_class' => null,
//         'permissions' => 'view-backend'
// ]);

includeFiles(__DIR__.'/Dashboard/');
