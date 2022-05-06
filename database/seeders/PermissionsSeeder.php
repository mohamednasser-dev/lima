<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            // sliders permissions
            [
                'path' => 'sliders',
                'name' => 'read-sliders',
                'display_name' => 'read sliders',
                'description' => 'عرض صور العرض',
            ],
            [
                'path' => 'sliders',
                'name' => 'update-sliders',
                'display_name' => 'update sliders',
                'description' => 'تعديل صور العرض',
            ],
            [
                'path' => 'sliders',
                'name' => 'create-sliders',
                'display_name' => 'create sliders',
                'description' => 'إضافة صور العرض',
            ],
            [
                'path' => 'sliders',
                'name' => 'delete-sliders',
                'display_name' => 'delete sliders',
                'description' => 'حذف صور العرض',
            ],

            // cities permissions
            [
                'path' => 'cities',
                'name' => 'read-cities',
                'display_name' => 'read cities',
                'description' => 'عرض المدن',
            ],
            [
                'path' => 'cities',
                'name' => 'update-cities',
                'display_name' => 'update cities',
                'description' => 'تعديل المدن',
            ],
            [
                'path' => 'cities',
                'name' => 'create-cities',
                'display_name' => 'create cities',
                'description' => 'إضافة المدن',
            ],
            [
                'path' => 'cities',
                'name' => 'delete-cities',
                'display_name' => 'delete cities',
                'description' => 'حذف المدن',
            ],
            // categories permissions
            [
                'path' => 'categories',
                'name' => 'read-categories',
                'display_name' => 'read categories',
                'description' => 'عرض الاقسام',
            ],
            [
                'path' => 'categories',
                'name' => 'update-categories',
                'display_name' => 'update categories',
                'description' => 'تعديل الاقسام',
            ],
            [
                'path' => 'categories',
                'name' => 'create-categories',
                'display_name' => 'create categories',
                'description' => 'إضافة الاقسام',
            ],
            [
                'path' => 'categories',
                'name' => 'delete-categories',
                'display_name' => 'delete categories',
                'description' => 'حذف الاقسام',
            ],

            // posts permissions
            [
                'path' => 'posts',
                'name' => 'read-posts',
                'display_name' => 'read posts',
                'description' => 'عرض المنشور',
            ],
            [
                'path' => 'posts',
                'name' => 'update-posts',
                'display_name' => 'update posts',
                'description' => 'تعديل المنشور',
            ],
            [
                'path' => 'posts',
                'name' => 'create-posts',
                'display_name' => 'create posts',
                'description' => 'إضافة المنشور',
            ],
            [
                'path' => 'posts',
                'name' => 'delete-posts',
                'display_name' => 'delete posts',
                'description' => 'حذف المنشور',
            ],



            // users permissions
            [
                'path' => 'users',
                'name' => 'read-users',
                'display_name' => 'read users',
                'description' => 'عرض العملاء',
            ],
            [
                'path' => 'users',
                'name' => 'update-users',
                'display_name' => 'update users',
                'description' => 'تعديل العملاء',
            ],
            [
                'path' => 'users',
                'name' => 'create-users',
                'display_name' => 'create users',
                'description' => 'إضافة العملاء',
            ],
            [
                'path' => 'users',
                'name' => 'delete-users',
                'display_name' => 'delete users',
                'description' => 'حذف العملاء',
            ],
            // settings permissions
            [
                'path' => 'settings',
                'name' => 'read-settings',
                'display_name' => 'read settings',
                'description' => 'عرض الاعدادت',
            ],
            [
                'path' => 'settings',
                'name' => 'update-settings',
                'display_name' => 'update settings',
                'description' => 'تعديل الاعدادت',
            ],

            // roles permissions
            [
                'path' => 'roles',
                'name' => 'read-roles',
                'display_name' => 'read roles',
                'description' => 'عرض الصلاحيات',
            ],
            [
                'path' => 'roles',
                'name' => 'update-roles',
                'display_name' => 'update roles',
                'description' => 'تعديل الصلاحيات',
            ],
            [
                'path' => 'roles',
                'name' => 'create-roles',
                'display_name' => 'create roles',
                'description' => 'إضافة الصلاحيات',
            ],
            [
                'path' => 'roles',
                'name' => 'delete-roles',
                'display_name' => 'delete roles',
                'description' => 'حذف الصلاحيات',
            ],
            // admins permissions
            [
                'path' => 'admins',
                'name' => 'read-admins',
                'display_name' => 'read admins',
                'description' => 'عرض المديرين',
            ],
            [
                'path' => 'admins',
                'name' => 'update-admins',
                'display_name' => 'update admins',
                'description' => 'تعديل المديرين',
            ],
            [
                'path' => 'admins',
                'name' => 'create-admins',
                'display_name' => 'create admins',
                'description' => 'إضافة المديرين',
            ],
            [
                'path' => 'admins',
                'name' => 'delete-admins',
                'display_name' => 'delete admins',
                'description' => 'حذف المديرين',
            ],

        ];
        foreach ($data as $get) {
            Permission::updateOrCreate($get);
        }
    }
}
