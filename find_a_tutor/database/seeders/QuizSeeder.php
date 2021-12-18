<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;
use App\Models\Questions;
use App\Models\Answers;

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
            ['question_type' => 'B',
            'question' => 'What is the default value of char variable?',
            'answer' => 'C',
            'quiz_id' => '1'
            ],
            ['question_type' => 'B',
            'question' => 'Final keyword prevents child classes from overriding a method by prefixing the definition with final?',
            'answer' => 'D',
            'quiz_id' => '1'
            ],
            ['question_type' => 'B',
            'question' => 'We can not create instance of_______',
            'answer' => 'A',
            'quiz_id' => '3'
            ],
            ['question_type' => 'B',
            'question' => 'OOPs is invented by _______',
            'answer' => 'B',
            'quiz_id' => '3'
            ],
            ['question_type' => 'B',
            'question' => 'The computer malware that disguises users by representing itself as legitimate software/program is known as',
            'answer' => 'A',
            'quiz_id' => '3'
            ],
            ['question_type' => 'B',
            'question' => 'A computer keyboard has _____ functions (F) keys',
            'answer' => 'D',
            'quiz_id' => '1'
            ],
            ['question_type' => 'B',
            'question' => 'The valid format of MS Word is ___',
            'answer' => 'B',
            'quiz_id' => '1'
            ],
            
            ['question_type' => 'B',
            'question' => 'To apply center alignment to a paragraph we can press______',
            'answer' => 'D',
            'quiz_id' => '1'
            ],
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
            'question' => 'What is class variable?',
            'answer' => 'Class variables are variables declared with in a class, outside any method, with the static keyword.',
            'quiz_id' => '1'
            ],
            ['question_type' => 'A',
            'question' => 'Can you assign the default values to a function parameters in PHP?',
            'answer' => 'Yes',
            'quiz_id' => '1'
            ],
            ['question_type' => 'A',
            'question' => 'In oops public, private & protected are called',
            'answer' => 'Access Modifiers',
            'quiz_id' => '1'
            ],
            ['question_type' => 'A',
            'question' => 'A private member of a class is visible to',
            'answer' => 'A private member of a class is visible to only members of same class',
            'quiz_id' => '1'
            ],
            ['question_type' => 'A',
            'question' => 'Can we overload constructor in derived class?',
            'answer' => 'No, we can not overload constructor in derived class',
            'quiz_id' => '1'
            ],
            ['question_type' => 'A',
            'question' => 'Which language does not support single level inheritance?',
            'answer' => 'C lanaguage do not have any concept of inheritance',
            'quiz_id' => '3'
            ],
            ['question_type' => 'A',
            'question' => 'If you need to paste the contents of MS Word, which command will you give?',
            'answer' => 'Ctrl + V',
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
            'quiz_id' => '1'
            ],
            ['question_type' => 'A',
            'question' => 'The process of removing unwanted part of an image is called',
            'answer' => 'Cropping',
            'quiz_id' => '1'
            ],
        ];
        
        
        
        
        
        $answers = [
            ['option1' => 'English',
            'option2' => 'Math',
            'option3' => 'Science',
            'option4' => 'None of these',
            'questions_id' => '1'
            ],
            ['option1' => 'Java',
            'option2' => 'C++',
            'option3' => 'Python',
            'option4' => 'None of these',
            'questions_id' => '2'
            ],
            ['option1' => 'School',
            'option2' => 'College',
            'option3' => 'Institute',
            'option4' => 'University',
            'questions_id' => '3'
            ],
            ['option1' => 'One',
            'option2' => 'Two',
            'option3' => 'Three',
            'option4' => 'Four',
            'questions_id' => '4'
            ],
            ['option1' => 'Five',
            'option2' => 'Six',
            'option3' => 'Seven',
            'option4' => 'Eight',
            'questions_id' => '5'
            ],
            ['option1' => 'Nine',
            'option2' => 'TEN',
            'option3' => 'Thirteen',
            'option4' => 'Fourteen',
            'questions_id' => '6'
            ],
            ['option1' => 'Gameplay',
            'option2' => 'VR',
            'option3' => 'Xbox series X',
            'option4' => 'PS5',
            'questions_id' => '7'
            ],
            ['option1' => 'AC Brotherhood',
            'option2' => 'Borderland',
            'option3' => 'ResidentEvil 4 Remake',
            'option4' => 'Ninja Town',
            'questions_id' => '8'
            ],
        ];

        Quiz::insert($quizes);
        Questions::insert($questions);
        Answers::insert($answers);
    }
}
