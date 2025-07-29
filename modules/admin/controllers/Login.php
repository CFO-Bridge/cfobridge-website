<?php
class Login extends MX_Controller 
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }

    public function index()
	{
		$this->load->view('login');
    }

    function auth()
    {
        $username=$this->input->post('email');
		$password=$this->input->post('password');
	//	$this->session->sess_destroy('loginAttempt');
        
		if(empty($username) && empty($password)){
			$res['status']=false;
			$res['msg']='<p class="alert alert-warning">Check Required Fields!</p>';
			echo json_encode($res);
				exit;
			}
            //echo json_encode($_POST); exit;
			if($this->session->userdata('loginAttempt') >=5)
			{
			    $res['status']=false;
			    $res['msg']='<p class="alert alert-danger">Ops! Your Account is Locked!</p>';
			    echo json_encode($res);
			    exit;
			}
		$user = $this->admin_model->check_admin_exists($username,$password);
        //echo json_encode($user);exit;
	 	if($user) {
	 	//$role = $this->admin_model->checkAdminRole($username);
	        $redirect = base_url('admin');
	 	    $this->session->set_userdata('AdminLogin','TRUE');
	 	
		$this->session->set_userdata('ADMIN',$username);
		$res['status']=true;
		$res['redirect']=$redirect;
		$res['msg']='<p class="alert alert-success">Login Success</p>';
		}
		else{
		    $attempt = $this->session->userdata('loginAttempt');
		    $attempt++;
		    $this->session->set_userdata('loginAttempt',$attempt);
			$res['msg']='<p class="alert alert-danger">Invalid Login</p>';
			}
	echo json_encode($res);
	exit;

       
    }



}

?>
