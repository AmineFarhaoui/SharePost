<?php
    class Users extends Controller
    {
        public function __construct()
        {
            
        }

        public function register()
        {
            // Check for POST request
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Process form

                // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                
                // Init data
                $data = [
                    'name' => trim($_POST['name']),
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'confirm_password' => trim($_POST['confirm_password']),
                    'name_error' => '',
                    'email_error' => '',
                    'password_error' => '',
                    'confirm_password_error' => '',
                ];

                // Validate Email
                if (empty($data['email'])) {
                    $data['email_error'] = 'Please enter email';
                }

                // Validate Name
                if (empty($data['name'])) {
                    $data['name_error'] = 'Please enter name';
                }

                // Validate Password
                if (empty($data['password'])) {
                    $data['password_error'] = 'Please enter password';
                } elseif (strlen($data['password'] < 6)) {
                    $data['password_error'] = 'Password not strong enough!';
                }

                // Validate Confirm Password
                if (empty($data['confirm_password'])) {
                    $data['confirm_password_error'] = 'Please confirm password';
                } else{
                    if ($data['confirm_password'] != $data['password']) {
                        $data['confirm_password_error'] = 'Passwords do not match';
                    }
                }

                // Check if errors are empty
                if (empty($data['email_error']) && empty($data['name_error']) && empty($data['password_error']) && empty($data['confirm_password_error'])) {
                    die('SUCCES');
                } else {
                    // Load view with errors
                    $this->view('/users/register', $data);
                }
            } else {
                // Init data
                $data = [
                    'name' => '',
                    'email' => '',
                    'password' => '',
                    'confirm_password' => '',
                    'name_error' => '',
                    'email_error' => '',
                    'password_error' => '',
                    'confirm_password_error' => '',
                ];

                $this->view('users/register', $data);
            }
        }

        public function login()
        {
            // Check for POST request
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Process form

                // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                // Init data
                $data = [
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'email_error' => '',
                    'password_error' => '',
                ];

                // Validate Email
                if (empty($data['email'])) {
                    $data['email_error'] = 'Please enter email';
                }

                // Validate Password
                if (empty($data['password'])) {
                    $data['password_error'] = 'Please enter password';
                }

                // Check if errors are empty
                if (empty($data['email_error']) && empty($data['password_error'])) {
                    die('SUCCES');
                } else {
                    // Load view with errors
                    $this->view('/users/login', $data);
                }
            } else {
                // Init data
                $data = [
                    'email' => '',
                    'password' => '',
                    'email_error' => '',
                    'password_error' => '',
                ];

                $this->view('users/login', $data);
            }
        }
    }
    