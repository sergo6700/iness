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
                        [
                            'name' => 'section_1_description',
                            'type' => 'textarea'
                        ],
                        [
                            'name' => 'section_1_video_image',
                            'type' => 'file'
                        ],
                        [
                            'name' => 'section_1_video_link',
                            'type' => 'text'
                        ],
                        [
                            'name' => 'section_2_description',
                            'type' => 'textarea'
                        ],
                        [
                            'name' => 'images',
                            'type' => 'file'
                        ]
                    ]),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'template2',
                    'fields' => json_encode([
                        [
                            'name' => 'link',
                            'type' => 'text'
                        ],
                        [
                            'name' => 'section_1_image',
                            'type' => 'file'
                        ],
                        [
                            'name' => 'section_1_description',
                            'type' => 'textarea'
                        ],
                        [
                            'name' => 'section_2_image',
                            'type' => 'file'
                        ],
                        [
                            'name' => 'section_2_description',
                            'type' => 'textarea'
                        ],
                        [
                            'name' => 'report_text',
                            'type' => 'textarea'
                        ],
                        [
                            'name' => 'report_owner',
                            'type' => 'text'
                        ],
                        [
                            'name' => 'report_owner_image',
                            'type' => 'file'
                        ],
                        [
                            'name' => 'gif',
                            'type' => 'file'
                        ]
                    ]),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'template3',
                    'fields' => json_encode([

                        [
                            'name' => 'section_1_description',
                            'type' => 'textarea'
                        ],
                        [
                            'name' => 'section_1_image',
                            'type' => 'file'
                        ],
                        [
                            'name' => 'section_2_description',
                            'type' => 'textarea'
                        ],
                        [
                            'name' => 'section_2_image',
                            'type' => 'file'
                        ]
                    ]),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'template4',
                    'fields' => json_encode([

                        [
                            'name' => 'link',
                            'type' => 'text'
                        ],
                        [
                            'name' => 'section_1_description',
                            'type' => 'textarea'
                        ],
                        [
                            'name' => 'section_1_images',
                            'type' => 'file'
                        ],
                        [
                            'name' => 'section_2_description',
                            'type' => 'textarea'
                        ],
                        [
                            'name' => 'section_2_images',
                            'type' => 'file'
                        ],
                    ]),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'template5',
                    'fields' => json_encode([

                        [
                            'name' => 'section_1_description',
                            'type' => 'textarea'
                        ],
                        [
                            'name' => 'link',
                            'type' => 'text'
                        ],
                        [
                            'name' => 'section_1_images',
                            'type' => 'file'
                        ],
                        [
                            'name' => 'section_2_description',
                            'type' => 'textarea'
                        ],
                        [
                            'name' => 'section_2_image',
                            'type' => 'file'
                        ],
                    ]),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'template6',
                    'fields' => json_encode([
                        [
                            'name' => 'project_title',
                            'type' => 'text'
                        ],
                        [
                            'name' => 'project_image',
                            'type' => 'file'
                        ],
                        [
                            'name' => 'images',
                            'type' => 'file'
                        ]
                    ]),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'template7',
                    'fields' => json_encode([
                        [
                            'name' => 'link',
                            'type' => 'text'
                        ],
                        [
                            'name' => 'section_1_description',
                            'type' => 'textarea'
                        ],
                        [
                            'name' => 'section_1_image',
                            'type' => 'file'
                        ],

                        [
                            'name' => 'section_2_image',
                            'type' => 'file'
                        ],
                        [
                            'name' => 'section_3_description',
                            'type' => 'textarea'
                        ],
                        [
                            'name' => 'section_3_images',
                            'type' => 'file'
                        ],
                        [
                            'name' => 'section_4_images',
                            'type' => 'file'
                        ],
                    ]),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'template8',
                    'fields' => json_encode([
                        [
                            'name' => 'project_video',
                            'type' => 'file'
                        ],
                        [
                            'name' => 'description',
                            'type' => 'textarea'
                        ],
                        [
                            'name' => 'images',
                            'type' => 'file'
                        ],
                    ]),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'template9',
                    'fields' => json_encode([
                        [
                            'name' => 'link',
                            'type' => 'text'
                        ],
                        [
                            'name' => 'section_1_images',
                            'type' => 'file'
                        ],
                        [
                            'name' => 'section_1_description',
                            'type' => 'textarea'
                        ],
                        [
                            'name' => 'section_1_images',
                            'type' => 'file'
                        ],
                        [
                            'name' => 'section_2_description',
                            'type' => 'textarea'
                        ],
                        [
                            'name' => 'section_2_video_image',
                            'type' => 'file'
                        ],
                        [
                            'name' => 'section_2_video_link',
                            'type' => 'file'
                        ],
                        [
                            'name' => 'section_3_image',
                            'type' => 'file'
                        ],
                        [
                            'name' => 'section_3_description',
                            'type' => 'textarea'
                        ],
                        [
                            'name' => 'images',
                            'type' => 'file'
                        ],
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
