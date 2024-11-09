<?php

// Set the path
namespace App\Controllers;

class Index extends BaseController{
    public function index(){
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('index/login');
        }

        $data['title'] = "Welcome my Blog";

        return view('include\header', $data)
            .view('include\navbar')
            .view('index_view')
            .view('include\footer');
    }

    public function about(){
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('index/login');
        }
        $data['title'] = "About My Blog";

        return view('include\header', $data)
            .view('include\navbar')
            .view('about_view')
            .view('include\footer');
    }

    public function login(){
        // Check if submit button is clicked
        if($this->request->is('POST')){
            // Load model
            $usersmodel = model('Users_model');
            // Retrieve data from form
            $logindata = $this->request->getPost(['username', 'password']);
            // Set filter then query from tblusers
            $user  = $usersmodel->where('username', $logindata['username'])
                ->where('password', $logindata['password'])
                ->first();
            if(!$user){ // If there is no user found with the credentials
                // Code when user is not found
            }else{
                // Redirects to home page if log in was successful
                session()->set([
                    'isLoggedIn' => true,
                    'user' => $user
                ]);
                return redirect()->to('index');

            }
        }


        $data['title'] = "Log In";

        return view('include\header', $data)
            .view('login_view')
            .view('include\footer');
    }

    public function signup(){
        if($this->request->is('POST')){
            // Load model
            $usersmodel = model('Users_model');
            // Retrieve data from form
            $registerdata = $this->request->getPost([
                'username',
                'password',
                'email',
                'fullname',
            ]);
            // Insert data to the table
            $usersmodel->insert($registerdata);
            // Redirect to the users list page
            return redirect()->to('index/login');
        }
    }


    public function logout(){
        session()->destroy();
        return redirect()->to('index/login');
    }

    public function dd($data){
        echo "<pre>";
        echo print_r($data);
        echo "</pre>";
        die();
    }

    public function register(){
        $data['title'] = "Register";

        return view('include\header', $data)
            .view('include\navbar')
            .view('registration_view')
            .view('include\footer');
    }
}

?>