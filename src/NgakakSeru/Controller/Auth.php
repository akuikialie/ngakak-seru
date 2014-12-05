<?php

namespace NgakakSeru\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silex\Application;

class Auth
{
    private $errorMessage='';
    
    public function index(Request $request, Application $app)
    {
        // Render a template
        $data['base_url'] = $request->getBasePath();        
        return new Response($app['view']->render('auth',$data));
    }
    
    public function register(Request $request, Application $app)
    {
        if(empty($_POST['username'])){
            $this->errorMessage .= 'Username harus diisi<br>';
        }
        if(empty($_POST['email'])){
            $this->errorMessage .= 'Email harus diisi<br>';
        }
        if(empty($_POST['password'])){
            $this->errorMessage .= 'Password Harus diisi<br>';
        }
        if(!empty($_POST['password']) && $_POST['password'] != $_POST['password_confirm']){
            $this->errorMessage .= 'Pasword konfirmasi harus disi';
        }
        
        if(!$this->errorMessage){
            $input = array(
                'username' => $_POST['username'], 
                'email' => $_POST['email'],
                'password' => md5($_POST['password']),
            );
            return new Response($app['view']->render('auth',$data));
            $insertUser = NgakakSeru\Database\DatabaseCrud::insert($app['database'], 'users', $input);
            $app['helper']->redirect(base_url().'dashboard');
        }
    }
    
    public function login(Request $request, Application $app)
    {
        if(empty($_POST['username'])){
            $this->errorMessage .= 'Username harus diisi<br>';
        }
        if(empty($_POST['password'])){
            $this->errorMessage .= 'Password Harus diisi<br>';
        }
        if(!$this->errorMessage){
            $app['database']->getQuery("select *, count(*) as jml from tbl_user where username = '".mysql_real_escape_string($_POST['username'])."' AND  password = '".mysql_real_escape_string(md5($_POST['password']))."'");
            $data = $app['database']->result();
            if($data->jml > 0){
                $_SESSION['id_user'] = $data->id_user;
                $_SESSION['email'] = $data->email;
                $app['helper']->redirect(base_url().'dashboard');
            }
            $this->errorMessage .= 'Password Harus diisi<br>';
            $app['helper']->redirect(base_url().'auth');
        }
    }

}
