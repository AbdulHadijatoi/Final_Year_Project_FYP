<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\Questions;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quiz::truncate();
        Questions::truncate();

        $quizes = [
            ['title' => 'C++',
            'description' => 'The test is not official, its just a nice way to see how much you know, or do not know, about C++.',
            'duration' => '30',
            'course_id'=> 1,
            ],
            ['title' => 'Operating System',
            'description' => 'The test is not official, its just a nice way to see how much you know, or do not know, about Operating System.',
            'duration' => '45',
            'course_id'=> 3,
            ],
            ['title' => 'Java',
            'description' => 'The test is not official, its just a nice way to see how much you know, or do not know, about Java.',
            'duration' => '40',
            'course_id'=> 5,
            ],
            ['title' => 'Database',
            'description' => 'The test is not official, its just a nice way to see how much you know, or do not know, about database.',
            'duration' => '30',
            'course_id'=> 2,
            ],
            ['title' => 'OOP',
            'description' => 'The test is not official, its just a nice way to see how much you know, or do not know, about OOP.',
            'duration' => '15',
            'course_id'=> 1,
            ],
            ['title' => 'Introduct to Computer',
            'description' => 'The test is not official, its just a nice way to see how much you know, or do not know, about Introduction to computer.',
            'duration' => '40',
            'course_id'=> 1,
            ],
            ['title' => 'Software Requrements',
            'description' => 'The test is not official, its just a nice way to see how much you know, or do not know, about getting software requirements.',
            'duration' => '60',
            'course_id'=> 3,
            ],
            ['title' => 'English Preposition',
            'description' => 'The test is not official, its just a nice way to see how much you know, or do not know, about basic English preposition.',
            'duration' => '15',
            'course_id'=> 5,
            ],
            ['title' => 'Biology',
            'description' => 'The test is not official, its just a nice way to see how much you know, or do not know, about Biology.',
            'duration' => '30',
            'course_id'=> 5,
            ],
            ['title' => 'Chemistry',
            'description' => 'The test is not official, its just a nice way to see how much you know, or do not know, about Chemistry.',
            'duration' => '30',
            'course_id'=> 2,
            ],
            ['title' => 'Networking',
            'description' => 'The test is not official, its just a nice way to see how much you know, or do not know, about networking.',
            'duration' => '30',
            'course_id'=> 2,
            ],
            ['title' => 'Data Strucutre',
            'description' => 'The test is not official, its just a nice way to see how much you know, or do not know, about data structure.',
            'duration' => '40',
            'course_id'=> 2,
            ],
            ['title' => 'Discrete mathematics',
            'description' => 'The test is not official, its just a nice way to see how much you know, or do not know, about discrete mathematics.',
            'duration' => '40',
            'course_id'=> 5,
            ],
            ['title' => 'Android',
            'description' => 'The test is not official, its just a nice way to see how much you know, or do not know, about Android.',
            'duration' => '50',
            'course_id'=> 6,
            ],
            ['title' => 'PHP',
            'description' => 'The test is not official, its just a nice way to see how much you know, or do not know, about PHP.',
            'duration' => '30',
            'course_id'=> 4,
            ],
            ['title' => 'Html and Css',
            'description' => 'The test is not official, its just a nice way to see how much you know, or do not know, about Html and Css.',
            'duration' => '30',
            'course_id'=> 7,
            ],
            ['title' => 'Laravel',
            'description' => 'The test is not official, its just a nice way to see how much you know, or do not know, about Laravel.',
            'duration' => '10',
            'course_id'=> 7,
            ],
            ['title' => 'Economics',
            'description' => 'The test is not official, its just a nice way to see how much you know, or do not know, about economics.',
            'duration' => '10',
            'course_id'=> 8,
            ],
            ['title' => 'General Knowledge',
            'description' => 'The test is not official, its just a nice way to see how much you know, or do not know, about GK.',
            'duration' => '25',
            'course_id'=> 9,
            ],
            ['title' => 'Digital analysis and design',
            'description' => 'The test is not official, its just a nice way to see how much you know, or do not know, about DLD.',
            'duration' => '30',
            'course_id'=> 10,
            ]
        ];

        $questions = [
            ['question_type' => 'A',
            'question' => 'Java is a general purpose object oriented programming language developed by',
            'answer' => 'Microsystems of USA',
            'quiz_id' => '1'
            ],
            ['question_type' => 'A',
            'question' => 'Can we have multiple classes in same java file?',
            'answer' => 'Yes',
            'quiz_id' => '1'
            ],
            ['question_type' => 'A',
            'question' => 'What is the default value of char variable?',
            'answer' => '\u0000',
            'quiz_id' => '1'
            ],
            ['question_type' => 'A',
            'question' => 'What is class variable?',
            'answer' => 'Class variables are variables declared with in a class, outside any method, with the static keyword.',
            'quiz_id' => '1'
            ],
            ['question_type' => 'A',
            'question' => 'Can you assign the default values to a function parameters in PHP?',
            'answer' => 'Yes',
            'quiz_id' => '2'
            ],
            ['question_type' => 'A',
            'question' => 'Final keyword prevents child classes from overriding a method by prefixing the definition with final?',
            'answer' => 'Yes',
            'quiz_id' => '2'
            ],
            ['question_type' => 'A',
            'question' => 'In oops public, private & protected are called',
            'answer' => 'Access Modifiers',
            'quiz_id' => '2'
            ],
            ['question_type' => 'A',
            'question' => 'A private member of a class is visible to',
            'answer' => 'A private member of a class is visible to only members of same class',
            'quiz_id' => '2'
            ],
            ['question_type' => 'A',
            'question' => 'Can we overload constructor in derived class?',
            'answer' => 'No, we can not overload constructor in derived class',
            'quiz_id' => '2'
            ],
            ['question_type' => 'A',
            'question' => 'We can not create instance of_______',
            'answer' => 'Abstract class',
            'quiz_id' => '3'
            ],
            ['question_type' => 'A',
            'question' => 'OOPs is invented by _______',
            'answer' => 'Alan Kay',
            'quiz_id' => '3'
            ],
            ['question_type' => 'A',
            'question' => 'Which language does not support single level inheritance?',
            'answer' => 'C lanaguage do not have any concept of inheritance',
            'quiz_id' => '3'
            ],
            ['question_type' => 'A',
            'question' => 'The computer malware that disguises users by representing itself as legitimate software/program is known as',
            'answer' => 'Trojans',
            'quiz_id' => '3'
            ],
            ['question_type' => 'A',
            'question' => 'If you need to paste the contents of MS Word, which command will you give?',
            'answer' => 'Ctrl + V',
            'quiz_id' => '1'
            ],
            ['question_type' => 'A',
            'question' => 'A computer keyboard has _____ functions (F) keys',
            'answer' => '13',
            'quiz_id' => '1'
            ],
            ['question_type' => 'A',
            'question' => 'A set of instructions or guidelines that commands computer how to perform a task is known as',
            'answer' => 'Program',
            'quiz_id' => '1'
            ],
            ['question_type' => 'A',
            'question' => 'MS word is software of ____',
            'answer' => 'Microsoft',
            'quiz_id' => '2'
            ],
            ['question_type' => 'A',
            'question' => 'The valid format of MS Word is ___',
            'answer' => '.doc',
            'quiz_id' => '2'
            ],
            ['question_type' => 'A',
            'question' => 'The process of removing unwanted part of an image is called',
            'answer' => 'Cropping',
            'quiz_id' => '2'
            ],
            ['question_type' => 'A',
            'question' => 'To apply center alignment to a paragraph we can press______',
            'answer' => 'Ctrl + E',
            'quiz_id' => '3'
            ],
        ];

        Quiz::insert($quizes);
        Questions::insert($questions);
    }
}
