<?php
class Users extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }
//public function admin(){
//    $this->view('users/Admin/AdminDashboard');
//}
// public function pharmacist(){
//        $this->view('users/Pharmacist/PatientDetails');
//    }

    public function register() {
        $data = [
            'username' => '',
            'email' => '',
            'role' => '',
            'name' => '',
            'nic' => '',
            'telno' => '',
            'confirmPassword' => '',
            'usernameError' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => ''
        ];

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

              $data = [
                'username' => trim($_POST['Runame']),
                'email' => trim($_POST['Remail']),
                'password' => trim($_POST['Rpass']),
                'confirmPassword' => trim($_POST['Repass']),
                  'name' => trim($_POST['Rfname']),
                  'nic' => trim($_POST['Rnic']),
                  'role' => $_POST['Rrole'],
                  'telno' => trim($_POST['Rtelno']),
                'usernameError' => '',
                'emailError' => '',
                'passwordError' => '',
                'confirmPasswordError' => ''
            ];

            $nameValidation = "/^[a-zA-Z0-9]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

            //Validate username on letters/numbers
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter username.';
            } elseif (!preg_match($nameValidation, $data['username'])) {
                $data['usernameError'] = 'Name can only contain letters and numbers.';
            }



           // Validate password on length, numeric values,
            if(empty($data['password'])){
              $data['passwordError'] = 'Please enter password.';
            } elseif(strlen($data['password']) < 6){
              $data['passwordError'] = 'Password must be at least 8 characters';
            } elseif (preg_match($passwordValidation, $data['password'])) {
              $data['passwordError'] = 'Password must be have at least one numeric value.';
            }

            //Validate confirm password
             if (empty($data['confirmPassword'])) {
                $data['confirmPasswordError'] = 'Please enter password.';
            } else {
                if ($data['password'] != $data['confirmPassword']) {
                $data['confirmPasswordError'] = 'Passwords do not match, please try again.';
                }
            }

            // Make sure that errors are empty
            if (empty($data['usernameError'])  && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

                // Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //Register user from model function
                if ($this->userModel->register($data)) {
                    //Redirect to the login page

                    header('location: ' . URLROOT . '/users/login');
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this->view('users/Admin/AddUser', $data);
    }

    public function login() {

        $data = [
            'title' => 'Login page',
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => ''
        ];

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => trim($_POST['Runame']),
                'password' => trim($_POST['Rpass']),
                'usernameError' => '',
                'passwordError' => '',
            ];
            //Validate username
            if (empty($data['username'])) {
                $data['usernameError'] = 'Please enter a username.';
            }

            //Validate password
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter a password.';
            }

            //Check if all errors are empty
            if (empty($data['usernameError']) && empty($data['passwordError'])) {
                $loggedInUser = $this->userModel->login($data['username'], $data['password']);

                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                    switch ($loggedInUser->urole){
                        case "admin":
                            header('location:' . URLROOT . '/admins/admindashboard');
                            break;
                        case "cashier":
                            header('location:' . URLROOT . '/cashiers/cashierdashboard');
                            break;
                        case "counsellor":
                            header('location:' . URLROOT . '/counsellors/counsellordashboard');
                            break;
                        case "delivery":
                            header('location:' . URLROOT . '/deliverys/deliverydashboard');
                            break;
                        case "doctor":
                            header('location:' . URLROOT . '/doctors/doctordashboard');
                            break;
                        case "owner":
                            header('location:' . URLROOT . '/owners/ownerdashboard');
                            break;
                        case "pharmacist":
                            header('location:' . URLROOT . '/pharmacists/pharmacistdashboard');
                            break;
                        case "receptionist":
                            header('location:' . URLROOT . '/receptionists/receptionistdashboard');
                            break;
                    }

                    // $this->view('users/admin');

                } else {
                    $data['passwordError'] = 'Password or username is incorrect. Please try again.';

                    $this->view('users/login', $data);
                }
            }

        } else {
            $data = [
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => ''
            ];
        }
        $this->view('users/login', $data);
    }

    public function createUserSession($user) {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['username'] = $user->uname;
        $_SESSION['urole'] = $user->urole;
        
    }

    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        header('location:' . URLROOT . '/users/login');
    }
}
