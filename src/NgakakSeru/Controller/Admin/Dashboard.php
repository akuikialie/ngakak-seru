<?php

namespace NgakakSeru\Controller\Dashboard;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silex\Application;

class Dashboard
{
    private $errorMessage='';
    
    public function uploadPicture(Request $request, Application $app)
    {
        // Render a template
        $data['error'] = $this->errorMessage;
        return new Response($app['view']->render('uploadindex', $data));
    }
    
    public function uploadPicture_do(Request $request, Application $app)
    {
        if(empty($_POST['judul'])){
            $this->errorMessage .= 'Judul harus diisi<br>';
        }
        
        if(!$this->errorMessage){
            //PROSES UPLOAD DISINI
            $upload = true;
            if($upload){
                $insert = array(
                    'id_user' = $_SESSION['id_user'],
                    'judul' = $_POST['judul'],
                    'namafile' = $_POST['namafile']
                );
                $data['database']->insertTable('tbl_post',$insert);
                $app['helper']->redirect(base_url().'dashboard/history');
            }
            $app['helper']->redirect(base_url().'dashboard/uploadpicture');
        }
    }
    
    public function History(Request $request, Application $app)
    {
        $app['database']->getQuery("select * from tbl_post where id_user = '".$_SESSION['id_user']."' order by id DESC");
        $data = $app['database']->result();
        return new Response($app['view']->render('history', $data));
    }
}
