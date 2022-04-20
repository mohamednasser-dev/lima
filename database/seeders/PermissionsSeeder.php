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
            // orders permissions
            [
                'path' => 'orders',
                'name' => 'read-orders',
                'display_name' => 'read orders',
                'description' => 'عرض الطلبات',
            ],
            [
                'path' => 'orders',
                'name' => 'update-orders',
                'display_name' => 'update orders',
                'description' => 'تعديل الطلبات',
            ],
            [
                'path' => 'orders',
                'name' => 'create-orders',
                'display_name' => 'create orders',
                'description' => 'إضافة الطلبات',
            ],
            [
                'path' => 'orders',
                'name' => 'delete-orders',
                'display_name' => 'delete orders',
                'description' => 'حذف الطلبات',
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

            // inboxes permissions
            [
                'path' => 'inboxes',
                'name' => 'read-inboxes',
                'display_name' => 'read inboxes',
                'description' => 'عرض الرسائل',
            ],
            [
                'path' => 'inboxes',
                'name' => 'delete-inboxes',
                'display_name' => 'delete inboxes',
                'description' => 'حذف الرسائل',
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
            // brands permissions
            [
                'path' => 'brands',
                'name' => 'read-brands',
                'display_name' => 'read brands',
                'description' => 'عرض العلامات التجاريه',
            ],
            [
                'path' => 'brands',
                'name' => 'update-brands',
                'display_name' => 'update brands',
                'description' => 'تعديل العلامات التجاريه',
            ],
            [
                'path' => 'brands',
                'name' => 'create-brands',
                'display_name' => 'create brands',
                'description' => 'إضافة العلامات التجاريه',
            ],
            [
                'path' => 'brands',
                'name' => 'delete-brands',
                'display_name' => 'delete brands',
                'description' => 'حذف العلامات التجاريه',
            ],
 // brand_products permissions
            [
                'path' => 'brand_products',
                'name' => 'read-brand_products',
                'display_name' => 'read brand products',
                'description' => 'عرض المنتجات',
            ],
            [
                'path' => 'brand_products',
                'name' => 'update-brand_products',
                'display_name' => 'update brand products',
                'description' => 'تعديل المنتجات',
            ],
            [
                'path' => 'brand_products',
                'name' => 'create-brand_products',
                'display_name' => 'create brand products',
                'description' => 'إضافة المنتجات',
            ],
            [
                'path' => 'brand_products',
                'name' => 'delete-brand_products',
                'display_name' => 'delete brand products',
                'description' => 'حذف المنتجات',
            ],
            // coupons permissions
            [
                'path' => 'coupons',
                'name' => 'read-coupons',
                'display_name' => 'read coupons',
                'description' => 'عرض كوبونات الخصم',
            ],
            [
                'path' => 'coupons',
                'name' => 'update-coupons',
                'display_name' => 'update coupons',
                'description' => 'تعديل كوبونات الخصم',
            ],
            [
                'path' => 'coupons',
                'name' => 'create-coupons',
                'display_name' => 'create coupons',
                'description' => 'إضافة كوبونات الخصم',
            ],
            [
                'path' => 'coupons',
                'name' => 'delete-coupons',
                'display_name' => 'delete coupons',
                'description' => 'حذف كوبونات الخصم',
            ],

        ];
        foreach ($data as $get) {
            Permission::updateOrCreate($get);
        }
    }
}
