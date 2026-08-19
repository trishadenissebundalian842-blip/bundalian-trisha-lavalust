<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentMiddleware
{
    public function handle(Closure $next)
    {
        if (!isset($_SESSION['student_access'])) {
            $_SESSION['student_access'] = false;
        }

        if ($_SESSION['student_access'] !== true) {
            echo "<div style='
                font-family: Arial, sans-serif;
                text-align: center;
                margin-top: 100px;
                padding: 30px;
            '>
                <h1 style='color: #4f46e5;'>Student Access Required</h1>

                <p>
                    Welcome, Trisha! Please verify your student access
                    before viewing this profile.
                </p>

                <a href='/lavalust/student' style='
                    display: inline-block;
                    margin-top: 15px;
                    padding: 10px 20px;
                    background: #4f46e5;
                    color: white;
                    text-decoration: none;
                    border-radius: 8px;
                '>Back to Student Home</a>
            </div>";

            return;
        }

        return $next();
    }
}