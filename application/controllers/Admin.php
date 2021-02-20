<?php 
class Admin extends MY_controller{



public function index()

{
	$this->load->library('form_validation');
	$this->form_validation->set_rules('username','user name','required|alpha');
		$this->form_validation->set_rules('password','password','required|max_length[12]');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
if($this->form_validation->run())
{
$username=$this->input->post('username');
$password=$this->input->post('password');
	$this->load->model('loginmodel');
	$login_id=$this->loginmodel->isvalidate($username,$password);
	if($login_id)
	{
//correct logic
	$this->load->library('session');
	$this->session->set_userdata('id',$login_id);
	return redirect('Admin/admindashbord');
	
	}
else{
//false

$this->session->set_flashdata('Login_failed','Invalid username or password');
return redirect('Admin/index');
}

}
else{
	// echo validation_errors();
	$this->load->view('Admin/login');
}

}

public function register()
{
	$this->load->view('Admin/register');
}



public function registerprocess()
 {
  
  $this->form_validation->set_rules('username','User Name','required|alpha');
  $this->form_validation->set_rules('password','Password','required|max_length[12]');
  $this->form_validation->set_rules('firstname','First Name','required|alpha');
  $this->form_validation->set_rules('lastname','last Name','required|alpha');
  $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[user.email]');
$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
  if($this->form_validation->run())
  {
        $post=$this->input->post(); 
      $this->load->model('loginmodel','user');
      if($this->user->add_user($post))
      {
         $this->session->set_flashdata('user','User added successfully');
         $this->session->set_flashdata('user_class','alert-success');
      }
      else
      {
        $this->session->set_flashdata('user','User not added Please try again!!');
        $this->session->set_flashdata('user_class','alert-danger');
      }
   // $this->load->view('Admin/login');
      return redirect('Admin/index');
 
    }
  else
  {
   $this->load->view('Admin/register');
  }
 }



 public function admindashbord()

 {
 	if(!$this->session->userdata('id'))
 		return redirect('Admin/index');
 	$this->load->model('loginmodel');
 	$articles=$this->loginmodel->articlelist();
 	$this->load->view('Admin/dashbord',['articles'=>$articles]);
 }




public function logout()
{
	$this->session->unset_userdata('id');
	return redirect('Admin/index');
}


}
?>