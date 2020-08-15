<?php

use Illuminate\Database\Seeder;

class TemplateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('templates')->get()->count() == 0) {

            DB::table('templates')->insert([

                [
                    'name' => 'template1',
                    'fields' => json_encode([
                        'project_title',
                        'project_image',
                        'section_1_description',
                        'section_1_video_image',
                        'section_1_video_link',
                        'section_2_description',
                        'images',
                    ]),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'template2',
                    'fields' => json_encode([
                        'project_title',
                        'project_image',
                        'link',
                        'section_1_image',
                        'section_1_description',
                        'section_2_image',
                        'section_2_description',
                        'report_text',
                        'report_owner',
                        'report_owner_image',
                        'gif',
                    ]),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'template3',
                    'fields' => json_encode([
                        'project_title',
                        'project_image',
                        'section_1_description',
                        'section_1_image',
                        'section_2_description',
                        'section_2_image',
                    ]),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'template4',
                    'fields' => json_encode([
                        'project_title',
                        'project_image',
                        'link',
                        'section_1_description tine mce',
                        'section_1_images',
                        'section_2_description tine mce',
                        'section_2_images',
                    ]),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'template5',
                    'fields' => json_encode([
                        'project_title',
                        'project_image',
                        'section_1_descrition tine mce',
                        'link',
                        'section_1_images',
                        'section_2_description',
                        'section_2_image',
                    ]),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'template6',
                    'fields' => json_encode([
                        'project_title',
                        'project_image',
                        'images',
                    ]),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'template7',
                    'fields' => json_encode([
                        'project_title',
                        'project_image',
                        'section_1_description',
                        'link',
                        'section_1_image',
                        'section_2_image',
                        'section_3_description',
                        'section_3_image',
                        'section_4_image',
                    ]),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'template8',
                    'fields' => json_encode([
                        'project_title',
                        'project_video',
                        'description',
                        'images',
                    ]),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'template9',
                    'fields' => json_encode([
                        "project_title",
                        "project_image",
                        "link",
                        "section_1_description",
                        "section_1_images",
                        "section_2_description",
                        "section_2_video_image",
                        "section_2_video_link",
                        "section_3_image",
                        "section_3_description",
                        "images",
                    ]),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],

            ]);

        } else {
            echo "\e[31mTable is not empty, therefore NOT ";
        }

    }
}
