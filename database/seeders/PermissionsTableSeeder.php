<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'location_create',
            ],
            [
                'id'    => 19,
                'title' => 'location_edit',
            ],
            [
                'id'    => 20,
                'title' => 'location_show',
            ],
            [
                'id'    => 21,
                'title' => 'location_delete',
            ],
            [
                'id'    => 22,
                'title' => 'location_access',
            ],
            [
                'id'    => 23,
                'title' => 'configuration_access',
            ],
            [
                'id'    => 24,
                'title' => 'competence_create',
            ],
            [
                'id'    => 25,
                'title' => 'competence_edit',
            ],
            [
                'id'    => 26,
                'title' => 'competence_show',
            ],
            [
                'id'    => 27,
                'title' => 'competence_delete',
            ],
            [
                'id'    => 28,
                'title' => 'competence_access',
            ],
            [
                'id'    => 29,
                'title' => 'ordertype_create',
            ],
            [
                'id'    => 30,
                'title' => 'ordertype_edit',
            ],
            [
                'id'    => 31,
                'title' => 'ordertype_show',
            ],
            [
                'id'    => 32,
                'title' => 'ordertype_delete',
            ],
            [
                'id'    => 33,
                'title' => 'ordertype_access',
            ],
            [
                'id'    => 34,
                'title' => 'availabilty_create',
            ],
            [
                'id'    => 35,
                'title' => 'availabilty_edit',
            ],
            [
                'id'    => 36,
                'title' => 'availabilty_show',
            ],
            [
                'id'    => 37,
                'title' => 'availabilty_delete',
            ],
            [
                'id'    => 38,
                'title' => 'availabilty_access',
            ],
            [
                'id'    => 39,
                'title' => 'order_create',
            ],
            [
                'id'    => 40,
                'title' => 'order_edit',
            ],
            [
                'id'    => 41,
                'title' => 'order_show',
            ],
            [
                'id'    => 42,
                'title' => 'order_delete',
            ],
            [
                'id'    => 43,
                'title' => 'order_access',
            ],
            [
                'id'    => 44,
                'title' => 'orderparticipation_create',
            ],
            [
                'id'    => 45,
                'title' => 'orderparticipation_edit',
            ],
            [
                'id'    => 46,
                'title' => 'orderparticipation_show',
            ],
            [
                'id'    => 47,
                'title' => 'orderparticipation_delete',
            ],
            [
                'id'    => 48,
                'title' => 'orderparticipation_access',
            ],
            [
                'id'    => 49,
                'title' => 'participationstatus_create',
            ],
            [
                'id'    => 50,
                'title' => 'participationstatus_edit',
            ],
            [
                'id'    => 51,
                'title' => 'participationstatus_show',
            ],
            [
                'id'    => 52,
                'title' => 'participationstatus_delete',
            ],
            [
                'id'    => 53,
                'title' => 'participationstatus_access',
            ],
            [
                'id'    => 54,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 55,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 56,
                'title' => 'content_management_access',
            ],
            [
                'id'    => 57,
                'title' => 'content_category_create',
            ],
            [
                'id'    => 58,
                'title' => 'content_category_edit',
            ],
            [
                'id'    => 59,
                'title' => 'content_category_show',
            ],
            [
                'id'    => 60,
                'title' => 'content_category_delete',
            ],
            [
                'id'    => 61,
                'title' => 'content_category_access',
            ],
            [
                'id'    => 62,
                'title' => 'content_tag_create',
            ],
            [
                'id'    => 63,
                'title' => 'content_tag_edit',
            ],
            [
                'id'    => 64,
                'title' => 'content_tag_show',
            ],
            [
                'id'    => 65,
                'title' => 'content_tag_delete',
            ],
            [
                'id'    => 66,
                'title' => 'content_tag_access',
            ],
            [
                'id'    => 67,
                'title' => 'content_page_create',
            ],
            [
                'id'    => 68,
                'title' => 'content_page_edit',
            ],
            [
                'id'    => 69,
                'title' => 'content_page_show',
            ],
            [
                'id'    => 70,
                'title' => 'content_page_delete',
            ],
            [
                'id'    => 71,
                'title' => 'content_page_access',
            ],
            [
                'id'    => 72,
                'title' => 'system_calendar_access',
            ],
            [
                'id'    => 73,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 74,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 75,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 76,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 77,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 78,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 79,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 80,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 81,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 82,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 83,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 84,
                'title' => 'declarationstatus_create',
            ],
            [
                'id'    => 85,
                'title' => 'declarationstatus_edit',
            ],
            [
                'id'    => 86,
                'title' => 'declarationstatus_show',
            ],
            [
                'id'    => 87,
                'title' => 'declarationstatus_delete',
            ],
            [
                'id'    => 88,
                'title' => 'declarationstatus_access',
            ],
            [
                'id'    => 89,
                'title' => 'declaration_create',
            ],
            [
                'id'    => 90,
                'title' => 'declaration_edit',
            ],
            [
                'id'    => 91,
                'title' => 'declaration_show',
            ],
            [
                'id'    => 92,
                'title' => 'declaration_delete',
            ],
            [
                'id'    => 93,
                'title' => 'declaration_access',
            ],
            [
                'id'    => 94,
                'title' => 'ordercompetence_create',
            ],
            [
                'id'    => 95,
                'title' => 'ordercompetence_edit',
            ],
            [
                'id'    => 96,
                'title' => 'ordercompetence_show',
            ],
            [
                'id'    => 97,
                'title' => 'ordercompetence_delete',
            ],
            [
                'id'    => 98,
                'title' => 'ordercompetence_access',
            ],
            [
                'id'    => 99,
                'title' => 'user_restore',
            ],
        ];

        Permission::insert($permissions);
    }
}
