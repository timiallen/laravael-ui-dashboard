<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sidebar extends Component
{
    public array $menuGroups;

    public function __construct()
    {
        $this->menuGroups = [
            [
                'title' => 'Main Menu',
                'items' => [
                    [
                        'name' => 'Dashboard', 
                        'icon' => 'smart-home', 
                        'activePattern' => 'dashboard.*',
                        'subItems' => [
                            ['name' => 'Overview', 'route' => 'dashboard.index'],
                            ['name' => 'Analytics', 'route' => 'dashboard.analytics'],
                            ['name' => 'CRM', 'route' => 'dashboard.crm'],
                            ['name' => 'Ecommerce', 'route' => 'dashboard.ecommerce'],
                        ]
                    ],
                ]
            ],
            [
                'title' => 'Application',
                'items' => [
                    [
                        'name' => 'Point of Sale', 
                        'icon' => 'device-laptop', 
                        'activePattern' => 'pages.apps.pos',
                        'route' => 'pages.apps.pos' // Single menu tanpa sub-item
                    ],
                    [
                        'name' => 'E-Commerce', 
                        'icon' => 'shopping-cart', 
                        'activePattern' => 'ecommerce.*',
                        'subItems' => [
                            ['name' => 'Product List', 'route' => 'ecommerce.products.index'],
                            ['name' => 'Add Product', 'route' => 'ecommerce.products.create'],
                            ['name' => 'My Cart', 'route' => 'ecommerce.cart'],
                        ]
                    ],
                ]
            ],
            [
                'title' => 'User Management',
                'items' => [
                    [
                        'name' => 'Laravel Apps', 
                        'icon' => 'brand-laravel', 
                        'activePattern' => 'laravel.users.*',
                        'subItems' => [
                            ['name' => 'Users List', 'route' => 'laravel.users.index'],
                            ['name' => 'Create User', 'route' => 'laravel.users.create'],
                        ]
                    ],
                ]
            ],
            [
                'title' => 'UI Components',
                'items' => [
                    [
                        'name' => 'Elements', 
                        'icon' => 'category', 
                        'activePattern' => 'components.*',
                        'subItems' => [
                            ['name' => 'Buttons', 'route' => 'components.buttons'],
                            ['name' => 'Cards', 'route' => 'components.cards'],
                            ['name' => 'Alerts', 'route' => 'components.alerts'],
                            ['name' => 'Toasts', 'route' => 'components.toasts'],
                            ['name' => 'Modals', 'route' => 'components.modals'],
                            ['name' => 'Badges', 'route' => 'components.badges'],
                            ['name' => 'Widgets', 'route' => 'components.widgets'],
                        ]
                    ],
                    [
                        'name' => 'Forms', 
                        'icon' => 'forms', 
                        'activePattern' => 'components.forms.*',
                        'subItems' => [
                            ['name' => 'Input Elements', 'route' => 'components.forms.inputs'],
                            ['name' => 'Form Elements', 'route' => 'components.forms.elements'],
                            ['name' => 'Form Layouts', 'route' => 'components.forms.layouts'],
                        ]
                    ],
                    [
                        'name' => 'Tables', 
                        'icon' => 'table-alias', 
                        'activePattern' => 'components.tables.*',
                        'subItems' => [
                            ['name' => 'Basic Tables', 'route' => 'components.tables'],
                            ['name' => 'DataTables', 'route' => 'components.datatables'],
                        ]
                    ],
                ]
            ],
            [
                'title' => 'Extras',
                'items' => [
                    [
                        'name' => 'Authentication', 
                        'icon' => 'lock-open', 
                        'activePattern' => 'auth.*',
                        'subItems' => [
                            ['name' => 'Login Basic', 'route' => 'auth.login.basic'],
                            ['name' => 'Login Cover', 'route' => 'auth.login.cover'],
                            ['name' => 'Register Basic', 'route' => 'auth.register.basic'],
                            ['name' => 'Register Cover', 'route' => 'auth.register.cover'],
                        ]
                    ],
                    [
                        'name' => 'Pages', 
                        'icon' => 'file-description', 
                        'activePattern' => 'pages.*',
                        'subItems' => [
                            ['name' => 'Profile', 'route' => 'profile'],
                            ['name' => 'Blank Page', 'route' => 'pages.blank'],
                        ]
                    ],
                ]
            ],
        ];
    }

    public function render(): View|Closure|string
    {
        return view('layouts.sidebar');
    }
}