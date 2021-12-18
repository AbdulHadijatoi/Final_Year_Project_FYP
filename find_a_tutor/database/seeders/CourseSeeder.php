<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Schedule;
use App\Models\StudentCourse;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::truncate();
        Schedule::truncate();
        StudentCourse::truncate();

        $courses = [
            ['category' => 'Computer Science',
            'title' => 'C++',
            'description' => 'In this course, you will learn C++ step by step from beginner level to advance.',
            'enrollment_key'=> 'ABC433',
            'status'=> '1',
            'tutor_id'=> '1',
            ],
            ['category' => 'Computer Science',
            'title' => 'OOP Concept',
            'description' => 'In this course, you will learn OOP concept step by step from beginner level to advance.',
            'enrollment_key'=> 'MNO123',
            'status'=> '1',
            'tutor_id'=> '1',
            ],
            ['category' => 'Computer Science',
            'title' => 'Operating system',
            'description' => 'In this course, you will learn OS linux commands step by step from beginner level to advance.',
            'enrollment_key'=> 'TZO123',
            'status'=> '1',
            'tutor_id'=> '1',
            ],
            ['category' => 'Computer Science',
            'title' => 'Database',
            'description' => 'In this course, you will learn C++ step by step from beginner level to advance.',
            'enrollment_key'=> 'TZD765',
            'status'=> '1',
            'tutor_id'=> '2',
            ],
            ['category' => 'Mathmatics',
            'title' => 'Precalculus',
            'description' => 'In this course, you will learn precalculus step by step from beginner level to advance.',
            'enrollment_key'=> 'STZ222',
            'status'=> '1',
            'tutor_id'=> '2',
            ],
            ['category' => 'Mathmatics',
            'title' => 'Calculus 1',
            'description' => 'In this course, you will learn Calculus 1 step by step from beginner level to advance.',
            'enrollment_key'=> 'CAL123',
            'status'=> '1',
            'tutor_id'=> '2',
            ],
            ['category' => 'Mathematics',
            'title' => 'Probability',
            'description' => 'In this course, you will learn Probabiliy step by step from beginner level to advance.',
            'enrollment_key'=> 'PRO321',
            'status'=> '1',
            'tutor_id'=> '2',
            ],
            ['category' => 'Business',
            'title' => 'Technology Enterpreneur',
            'description' => 'In this course, you will learn TE step by step from beginner level to advance.',
            'enrollment_key'=> 'TEE234',
            'status'=> '1',
            'tutor_id'=> '1',
            ],
            ['category' => 'Busicess',
            'title' => 'Economics',
            'description' => 'In this course, you will learn economics step by step from beginner level to advance.',
            'enrollment_key'=> '',
            'status'=> '1',
            'tutor_id'=> '1',
            ],
            ['category' => 'Electrical',
            'title' => 'Basic Electronics',
            'description' => 'In this course, you will learn basic electronics step by step from beginner level to advance.',
            'enrollment_key'=> 'ELE124',
            'status'=> '1',
            'tutor_id'=> '1',
            ],
            ['category' => 'Electrical',
            'title' => 'Thermodynamic',
            'description' => 'In this course, you will learn thermodynamic step by step from beginner level to advance.',
            'enrollment_key'=> 'THE009',
            'status'=> '1',
            'tutor_id'=> '1',
            ],
            ['category' => 'Electrical',
            'title' => 'Physics',
            'description' => 'In this course, you will learn physics step by step from beginner level to advance.',
            'enrollment_key'=> 'PHY345',
            'status'=> '1',
            'tutor_id'=> '1',
            ],
            ['category' => 'Computer Science',
            'title' => 'Networking',
            'description' => 'In this course, you will learn networking step by step from beginner level to advance.',
            'enrollment_key'=> 'NET876',
            'status'=> '1',
            'tutor_id'=> '1',
            ],
            ['category' => 'Software Engineering',
            'title' => 'Software requirement specification',
            'description' => 'In this course, you will learn software requirement specification step by step from beginner level to advance.',
            'enrollment_key'=> 'SRS342',
            'status'=> '1',
            'tutor_id'=> '2',
            ],
            ['category' => 'Software Engineering',
            'title' => 'Advance Software Engineering',
            'description' => 'In this course, you will learn ASE step by step from beginner level to advance.',
            'enrollment_key'=> 'ASE222',
            'status'=> '1',
            'tutor_id'=> '2',
            ],
            ['category' => 'Software Engineering',
            'title' => 'Software Engineering',
            'description' => 'In this course, you will learn SE step by step from beginner level to advance.',
            'enrollment_key'=> 'SEN333',
            'status'=> '1',
            'tutor_id'=> '2',
            ],
            ['category' => 'Software Engineering',
            'title' => 'Software Verification and Validation',
            'description' => 'In this course, you will learn SVV step by step from beginner level to advance.',
            'enrollment_key'=> 'SVV443',
            'status'=> '1',
            'tutor_id'=> '2',
            ],
            ['category' => 'Software Engineering',
            'title' => 'Data Structure',
            'description' => 'In this course, you will learn DS step by step from beginner level to advance.',
            'enrollment_key'=> 'DST111',
            'status'=> '1',
            'tutor_id'=> '2',
            ],
            ['category' => 'Computer Science',
            'title' => 'Data Mining',
            'description' => 'In this course, you will learn DM step by step from beginner level to advance.',
            'enrollment_key'=> 'DMI667',
            'status'=> '1',
            'tutor_id'=> '2',
            ],
            ['category' => 'Computer Science',
            'title' => 'Artifial Intelligence',
            'description' => 'In this course, you will learn AI step by step from beginner level to advance.',
            'enrollment_key'=> 'AIN001',
            'status'=> '1',
            'tutor_id'=> '1',
            ]
        ];

        $schedules = [
            ['course_id' => '1',
            'duration' => '30',
            'monday' => '1',
            'tuesday' => '1',
            'wednesday' => '1',
            'thursday' => '1',
            'friday' => '1',
            'saturday' => '1',
            'sunday' => '0'
            ],
            [
            'course_id' => '2',
            'duration' => '40',
            'monday' => '1',
            'tuesday' => '1',
            'wednesday' => '1',
            'thursday' => '1',
            'friday' => '1',
            'saturday' => '1',
            'sunday' => '0'
            ],
            [
            'course_id' => '3',
            'duration' => '30',
            'monday' => '1',
            'tuesday' => '1',
            'wednesday' => '1',
            'thursday' => '1',
            'friday' => '1',
            'saturday' => '1',
            'sunday' => '0'
            ],
            [
            'course_id' => '4',
            'duration' => '30',
            'monday' => '1',
            'tuesday' => '1',
            'wednesday' => '1',
            'thursday' => '1',
            'friday' => '1',
            'saturday' => '1',
            'sunday' => '0'
            ],
            [
            'course_id' => '5',
            'duration' => '30',
            'monday' => '1',
            'tuesday' => '1',
            'wednesday' => '1',
            'thursday' => '1',
            'friday' => '1',
            'saturday' => '1',
            'sunday' => '0'
            ],
            ['course_id' => '6',
            'duration' => '30',
            'monday' => '1',
            'tuesday' => '1',
            'wednesday' => '1',
            'thursday' => '1',
            'friday' => '1',
            'saturday' => '1',
            'sunday' => '0'
            ],
            [
            'course_id' => '7',
            'duration' => '30',
            'monday' => '1',
            'tuesday' => '1',
            'wednesday' => '1',
            'thursday' => '1',
            'friday' => '1',
            'saturday' => '1',
            'sunday' => '0'
            ],
            [
            'course_id' => '8',
            'duration' => '30',
            'monday' => '1',
            'tuesday' => '1',
            'wednesday' => '1',
            'thursday' => '1',
            'friday' => '1',
            'saturday' => '1',
            'sunday' => '0'
            ],
            [
            'course_id' => '9',
            'duration' => '30',
            'monday' => '1',
            'tuesday' => '1',
            'wednesday' => '1',
            'thursday' => '1',
            'friday' => '1',
            'saturday' => '1',
            'sunday' => '0'
            ],
            [
            'course_id' => '10',
            'duration' => '30',
            'monday' => '1',
            'tuesday' => '1',
            'wednesday' => '1',
            'thursday' => '1',
            'friday' => '1',
            'saturday' => '1',
            'sunday' => '0'
            ],
            ['course_id' => '11',
            'duration' => '30',
            'monday' => '1',
            'tuesday' => '1',
            'wednesday' => '1',
            'thursday' => '1',
            'friday' => '1',
            'saturday' => '1',
            'sunday' => '0'
            ],
            [
            'course_id' => '12',
            'duration' => '30',
            'monday' => '1',
            'tuesday' => '1',
            'wednesday' => '1',
            'thursday' => '1',
            'friday' => '1',
            'saturday' => '1',
            'sunday' => '0'
            ],
            [
            'course_id' => '13',
            'duration' => '30',
            'monday' => '1',
            'tuesday' => '1',
            'wednesday' => '1',
            'thursday' => '1',
            'friday' => '1',
            'saturday' => '1',
            'sunday' => '0'
            ],
            [
            'course_id' => '14',
            'duration' => '30',
            'monday' => '1',
            'tuesday' => '1',
            'wednesday' => '1',
            'thursday' => '1',
            'friday' => '1',
            'saturday' => '1',
            'sunday' => '0'
            ],
            [
            'course_id' => '15',
            'duration' => '30',
            'monday' => '1',
            'tuesday' => '1',
            'wednesday' => '1',
            'thursday' => '1',
            'friday' => '1',
            'saturday' => '1',
            'sunday' => '0'
            ],
            ['course_id' => '16',
            'duration' => '30',
            'monday' => '1',
            'tuesday' => '1',
            'wednesday' => '1',
            'thursday' => '1',
            'friday' => '1',
            'saturday' => '1',
            'sunday' => '0'
            ],
            [
            'course_id' => '17',
            'duration' => '30',
            'monday' => '1',
            'tuesday' => '1',
            'wednesday' => '1',
            'thursday' => '1',
            'friday' => '1',
            'saturday' => '1',
            'sunday' => '0'
            ],
            [
            'course_id' => '18',
            'duration' => '30',
            'monday' => '1',
            'tuesday' => '1',
            'wednesday' => '1',
            'thursday' => '1',
            'friday' => '1',
            'saturday' => '1',
            'sunday' => '0'
            ],
            [
            'course_id' => '19',
            'duration' => '30',
            'monday' => '1',
            'tuesday' => '1',
            'wednesday' => '1',
            'thursday' => '1',
            'friday' => '1',
            'saturday' => '1',
            'sunday' => '0'
            ],
            [
            'course_id' => '20',
            'duration' => '30',
            'monday' => '1',
            'tuesday' => '1',
            'wednesday' => '1',
            'thursday' => '1',
            'friday' => '1',
            'saturday' => '1',
            'sunday' => '0'
            ]
        ];

        $stdCourses = [
            [
                'student_id'=> '1',
                'course_id'=> '1',
            ],
            [
                'student_id'=> '1',
                'course_id'=> '2',
            ],
            [
                'student_id'=> '1',
                'course_id'=> '3',
            ],
            [
                'student_id'=> '1',
                'course_id'=> '4',
            ],
            [
                'student_id'=> '2',
                'course_id'=> '5',
            ],
            [
                'student_id'=> '2',
                'course_id'=> '6',
            ],
            [
                'student_id'=> '2',
                'course_id'=> '7',
            ],
            [
                'student_id'=> '3',
                'course_id'=> '8',
            ],
            [
                'student_id'=> '3',
                'course_id'=> '1',
            ],
            [
                'student_id'=> '4',
                'course_id'=> '2',
            ],
            [
                'student_id'=> '4',
                'course_id'=> '3',
            ],
            [
                'student_id'=> '4',
                'course_id'=> '4',
            ],
            [
                'student_id'=> '5',
                'course_id'=> '5',
            ],
            [
                'student_id'=> '5',
                'course_id'=> '1',
            ],
            [
                'student_id'=> '6',
                'course_id'=> '2',
            ],
            [
                'student_id'=> '6',
                'course_id'=> '3',
            ],
            [
                'student_id'=> '6',
                'course_id'=> '4',
            ],
            [
                'student_id'=> '7',
                'course_id'=> '1',
            ],
            [
                'student_id'=> '7',
                'course_id'=> '2',
            ],
            [
                'student_id'=> '7',
                'course_id'=> '3',
            ],
        ];

        
        Course::insert($courses);
        Schedule::insert($schedules);
        StudentCourse::insert($stdCourses);
    }
}
