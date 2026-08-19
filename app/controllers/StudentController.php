<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        $this->call->view('student/home');
    }

    public function access()
    {
        $_SESSION['student_access'] = true;
        redirect(site_url('student/profile'));
    }

    public function profile()
    {
        $student = [
            'student_id' => 'MCC2024-00012',
            'name' => 'Trisha Denisse O. Bundalian',
            'course' => 'BS Information Technology',
            'year' => '3rd Year',
            'section' => 'F1',
            'email' => 'trishadenissebundalian842@gmail.com',
            'description' => 'I am a BSIT student interested in web development and information technology.',
            'skills' => 'HTML, CSS, PHP, Database Management',
            'hobbies' => 'Watching movies, Listening to music, Exploring technology'
        ];

        $this->call->view('student/profile', $student);
    }
}