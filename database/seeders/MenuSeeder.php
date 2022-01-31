<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = Menu::create([
            'type' => 'backend',
            'name' => 'Backend Sidebar Menu',
            // 'items' => '[{"id":16,"name":"User Management","url":"admin.user.index","url_type":"route","open_in_new_tab":0,"view_permission_id":"view-user-management","content":"User Management"},{"id":15,"name":"Settings","url":"","url_type":"route","open_in_new_tab":0,"icon":"","view_permission_id":"edit-settings","content":"Settings","children":[{"view_permission_id":"edit-settings","icon":"fa-gear","open_in_new_tab":0,"url_type":"route","url":"admin.settings.edit?setting=1","name":"Settings","id":9,"content":"Settings"},{"id":11,"name":"Access Management","url":"","url_type":"route","open_in_new_tab":0,"icon":"fa-users","view_permission_id":"view-access-management","content":"Access Management","children":[{"id":13,"name":"Role Management","url":"admin.access.role.index","url_type":"route","open_in_new_tab":0,"view_permission_id":"view-role-management","content":"Role Management"},{"id":14,"name":"Permission Management","url":"admin.access.permission.index","url_type":"route","open_in_new_tab":0,"view_permission_id":"view-permission-management","content":"Permission Management"}]},{"id":1,"name":"Module","url":"admin.modules.index","url_type":"route","open_in_new_tab":0,"icon":"fa-wrench","view_permission_id":"view-module","content":"Module"},{"id":3,"name":"Menus","url":"admin.menus.index","url_type":"route","open_in_new_tab":0,"icon":"fa-bars","view_permission_id":"view-menu","content":"Menus"}]}]',
            'items' => '[{"id":1,"name":"User Management","url":"admin.users.index","url_type":"route","open_in_new_tab":0,"icon":"fa-user","view_permission_id":"manage-user","content":"User Management"},{"view_permission_id":"manage-module","open_in_new_tab":0,"icon":"fa-wrench","url_type":"route","url":"admin.modules.index","name":"Module","id":2,"content":"Module"},{"id":3,"name":"Permission Management","url":"admin.permissions.index","url_type":"route","open_in_new_tab":0,"icon":"fa-code-fork","view_permission_id":"view-permission-management","content":"Permission Management"},{"id":4,"name":"Role Management","url":"admin.roles.index","url_type":"route","open_in_new_tab":0,"icon":"fa-star","view_permission_id":"manage-role","content":"Role Management"},{"id":5,"name":"Menu Management","url":"admin.menus.index","url_type":"route","open_in_new_tab":0,"icon":"fa-bars","view_permission_id":"manage-menu","content":"Menu Management"},{"id":6,"name":"Settings","url":"admin.settings.edit?setting=1","url_type":"route","open_in_new_tab":0,"icon":"fa-gear","view_permission_id":"edit-setting","content":"Setting Management"}]',
            'created_by' => 1
        ]);
    }
}
