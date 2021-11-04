<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('mlogin');
		$this->load->model('managementuser', 'dashboard');
		$this->load->model('mediaOpt', 'album');
		$this->load->model('mposProject', 'mproject');
		$this->load->model('mposNews', 'mpos');
		$this->load->helper('form');
		$this->auth->cekAuth(); //ngambil auth dari library		
	}
	function index()
	{	
		$ambil_akun = $this->mlogin->ambiluser($this->session->userdata('uname'));
		$data = array('title'=>'Yasiwas App',
			'user'	=> $ambil_akun,
			'breadcrumb' => $this->breadcrumbz(array())
			);
		$level = $this->session->userdata('lvl');
		$level = 1;
		if($level==1){//admin
			$this->load->view('Dashboard/Konten/home',$data);
		}else{ //user
			$this->load->view('app',$data);
		}
	}
	function phpinfo()
	{
		phpinfo();
	}
	function home_admin()
	{
		$data['title']="Admin Home";
		$this->load->view('admin/home_admin',$data);
	}
	function home()
	{
		redirect('dashboard');
	}
	function project_c()
	{
		$data = array('title'=>'Yasiwas App',
			'breadcrumb' => $this->breadcrumbz(array())
			);
		$this->load->view('Dashboard/Konten/project',$data);
	}
	function project()
	{
		$ambil_akun = $this->mlogin->ambiluser($this->session->userdata('uname'));
		$data = array('title'=>'Project',
			'user'	=> $ambil_akun,
			'breadcrumb' => $this->breadcrumbz(array())
			);
		$this->load->view('Dashboard/Konten/project',$data);
	}
	function posting()
	{
		$ambil_akun = $this->mlogin->ambiluser($this->session->userdata('uname'));
		$data = array('title'=>'Project',
			'user'	=> $ambil_akun,
			'breadcrumb' => $this->breadcrumbz(array())
			);
		$this->load->view('Dashboard/Konten/posting',$data);
	}
	function upload()
	{
		$ambil_akun = $this->mlogin->ambiluser($this->session->userdata('uname'));
		$data = array('title'=>'Album',
			'user'	=> $ambil_akun,
			'breadcrumb' => $this->breadcrumbz(array()),
			'list'=>$this->album->getData(),
                      'selected' => $this->input->post('album') ? $this->input->post('album'):'',
                      'gambar'=> $this->album->gallery_view()
			);
		//$data = $this->album->getData();
		$this->load->view('Dashboard/Konten/upload',$data);
	}
	function deleteImage($id,$id2)
    {
        $row = $this->album->deleteImage($id);
        echo json_encode(array("status"=>TRUE));
        
        redirect('dashboard/gallery_detail/'.$id2.'');
    }
	function gallery_detail($id)
	{
		$ambil_akun = $this->mlogin->ambiluser($this->session->userdata('uname'));
		$data = array('title'=>'Gallery',
			'user'	=> $ambil_akun,
			'breadcrumb' => $this->breadcrumbz(array()),
			'list'=>$this->album->getData(),
                      'selected' => $this->input->post('album') ? $this->input->post('album'):'',
                      'gambar'=> $this->album->gallery_detail($id)
			);
		//$data = $this->album->getData();
		$this->load->view('Dashboard/Konten/upload',$data);
	}
	function gallery_edit($id)
	{
		$ambil_akun = $this->mlogin->ambiluser($this->session->userdata('uname'));
		$data = array('title'=>'Gallery',
			'user'	=> $ambil_akun,
			'breadcrumb' => $this->breadcrumbz(array()),
			'list'=>$this->album->getData(),
                      'selected' => $this->input->post('album') ? $this->input->post('album'):'',
                      'gambar'=> $this->album->gallery_detail($id)
			);
		//$data = $this->album->getData();
		$this->load->view('Dashboard/Konten/upload',$data);
	}
	function cprofile()
	{
		$ambil_akun = $this->mlogin->ambiluser($this->session->userdata('uname'));
		$data = array('title'=>'Profile',
			'user'	=> $ambil_akun,
			'breadcrumb' => $this->breadcrumbz(array())
			);
		$this->load->view('Dashboard/Konten/cprofile',$data);
	}
	function user()
	{
		$data = array('title'=>'Yasiwas App',
			'breadcrumb' => $this->breadcrumbz(array())
			);
		$this->load->view('Dashboard/Konten/user',$data);
	}
	function d_kamus()
	{
		$data['title']="Kamus";
		$this->load->view('Dashboard/Konten/d_kamus',$data);
	}
	function attribut_peng() 
	{
		$data['title']="Attribut Pengamatan";
		$this->load->view('Dashboard/Konten/attribut_peng',$data);
	}
	function d_pengamatan() 
	{
		$data['title']="Entri Pengamatan";
		$this->load->view('Dashboard/Konten/d_pengamatan',$data);
	}
	function t_kelas()
	{
		$this->load->view('Dashboard/Konten/tableclass');
	}
	function tk_complex() 
	{
		$this->load->view('Dashboard/Konten/tkcomplex');
	}
	function t_siteid() 
	{
		$this->load->view('Dashboard/Konten/att_siteid');
	}
	function t_tksn() 
	{
		$this->load->view('Dashboard/Konten/att_tksn');
	}
	function t_tdaerah() 
	{
		$this->load->view('Dashboard/Konten/att_tdaerah');
	}
	function t_thbuse() 
	{
		$this->load->view('Dashboard/Konten/att_hbuse');
	}
	function t_tjtem() 
	{
		$this->load->view('Dashboard/Konten/att_tjtem');
	}
	function d_form() 
	{
		$this->load->view('Dashboard/Konten/d_form');
	}
	function r_user()
	{
		$data['title']="Data User";
		$this->load->view('Dashboard/Konten/user',$data);
	}
	function homepg()
	{
		$data = array('title'=>'Yasiwas App',
			'breadcrumb' => $this->breadcrumbz(array('Posting','Home'))
			);
		$this->load->view('Dashboard/Konten/homepg',$data);
	}
	function aboutpg() {
		$data = array('title'=>'Yasiwas App',
			'breadcrumb' => $this->breadcrumbz(array('Posting','About Us'))
			);
		$this->load->view('Dashboard_old/Konten/aboutpg',$data);
	}
	function addaboutus() {
		$this->load->view('Dashboard/Konten/add_aboutus');
	}
	function editaboutus() {
		$this->load->view('Dashboard/Konten/edit_aboutus');
	}
	function scope() {
		$data = array('title'=>'Yasiwas App',
			'breadcrumb' => $this->breadcrumbz(array('Posting','How We Work','Scope Of Work'))
			);
		$this->load->view('Dashboard/Konten/scope',$data);
	}
	function addscope() {
		$this->load->view('Dashboard/Konten/add_scope');
	}
	function editscope() {
		$this->load->view('Dashboard/Konten/edit_scope');
	}
	function menupg() {
		$ambil_akun = $this->mlogin->ambiluser($this->session->userdata('uname'));
		$data = array('title'=>'Yasiwas App Menu',
			'user'	=> $ambil_akun,
			'breadcrumb' => $this->breadcrumbz(array())
			);
		$this->load->view('Dashboard/Konten/menupg',$data);
		
	}
	function addProject() {
		$ambil_akun = $this->mlogin->ambiluser($this->session->userdata('uname'));
		$data = array('title'=>'Add Project',
			'user'	=> $ambil_akun,
			'formTitle'=>'Add',
			'breadcrumb' => $this->breadcrumbz(array())
			);
		$this->load->view('Dashboard/Konten/addProject',$data);
	}
	function editPrj($id) {
		$ambil_akun = $this->mlogin->ambiluser($this->session->userdata('uname'));
		$data = array('title'=>'Edit Project',
			'user'	=> $ambil_akun,
			'formTitle'=>'Edit',
			'breadcrumb' => $this->breadcrumbz(array()),
			'hasil'=>$this->mproject->get_by_id($id)
			);
		$this->load->view('Dashboard/Konten/editProject',$data);
	}
	function addnews() {
		$ambil_akun = $this->mlogin->ambiluser($this->session->userdata('uname'));
		$data = array('title'=>'Add News',
			'user'	=> $ambil_akun,
			'formTitle'=>'Add',
			'breadcrumb' => $this->breadcrumbz(array())
			);
		$this->load->view('Dashboard/Konten/addNews',$data);
	}
	function editnews($id) {
		$ambil_akun = $this->mlogin->ambiluser($this->session->userdata('uname'));
		$data = array('title'=>'Edit News',
			'user'	=> $ambil_akun,
			'formTitle'=>'Edit',
			'breadcrumb' => $this->breadcrumbz(array()),
			'hasil'=>$this->mpos->get_by_id($id)
			);
		$this->load->view('Dashboard/Konten/editNews',$data);
	}
	function photopg() {
		$data = array('title'=>'Yasiwas App',
			'breadcrumb' => $this->breadcrumbz(array('Posting','Gallery','Photo'))
			);
		$this->load->view('Dashboard/Konten/photopg',$data);
	}
	function createAlbum() {
		//$data = array('formTitle'=>'Add');
		$ambil_akun = $this->mlogin->ambiluser($this->session->userdata('uname'));
		$data = array('title'=>'Upload',
			'user'	=> $ambil_akun,
			'breadcrumb' => $this->breadcrumbz(array()),
			'list'=>$this->album->getData(),
                      'selected' => $this->input->post('album') ? $this->input->post('album'):'',
                      'gambar'=> $this->album->gallery_view()
			);
		$this->load->view('Dashboard/Konten/createAlbum',$data);
	}
	function malinau()
	{
		$data = array('title'=>'Yasiwas App',
			'breadcrumb' => $this->breadcrumbz(array('Posting','Project','Malinau'))
			);
		$this->load->view('Dashboard_old/Konten/malinau',$data);
	}
	function addmalinau() {
		$this->load->view('Dashboard/Konten/add_malinau');
	}
	function editmalinau() {
		$this->load->view('Dashboard/Konten/edit_malinau');
	}
	function mancalong()
	{
		$data = array('title'=>'Yasiwas App',
			'breadcrumb' => $this->breadcrumbz(array('Posting','Project','Muara Ancalong'))
			);
		$this->load->view('Dashboard/Konten/mancalong',$data);
	}
	function addmancalong() {
		$this->load->view('Dashboard/Konten/add_mancalong');
	}
	function editmancalong() {
		$this->load->view('Dashboard/Konten/edit_mancalong');
	}
	function papua()
	{
		$data = array('title'=>'Yasiwas App',
			'breadcrumb' => $this->breadcrumbz(array('Posting','Project','Papua'))
			);
		$this->load->view('Dashboard/Konten/papua',$data);
	}
	function addpapua() {
		$this->load->view('Dashboard/Konten/add_papua');
	}
	function editpapua() {
		$this->load->view('Dashboard/Konten/edit_papua');
	}
	function ourteam()
	{
		$data = array('title'=>'Yasiwas App',
			'breadcrumb' => $this->breadcrumbz(array('Posting','How We Work','Our Team'))
			);
		$this->load->view('Dashboard/Konten/ourteam',$data);
	}
	function addourteam() {
		$this->load->view('Dashboard/Konten/add_ourteam');
	}
	function editourteam() {
		$this->load->view('Dashboard/Konten/edit_ourteam');
	}
	function login()
	{
		$session = $this->session->userdata('isLogin');
    	if($session == FALSE)
    	{
      		$this->load->view('home');
    	}else
    	{
      		redirect('dashboard','refresh');
    	}
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'login','refresh');
	}
    function get_json_data()
    {
 
        $page = $_REQUEST['page']; // get the requested page
        $limit = $_REQUEST['rows']; // get how many rows we want to have into the grid
        $sidx = $_REQUEST['sidx']; // get index row - i.e. user click to sort
        $sord = $_REQUEST['sord']; // get the direction if(!$sidx) $sidx =1;
 
        $req_param = array (
                "sort_by" => $sidx,
                "sort_direction" => $sord,
                "limit" => null,
                "search" => $_REQUEST['_search'],
                "search_field" => isset($_REQUEST['searchField'])?$_REQUEST['searchField']:null,
                "search_operator" => isset($_REQUEST['searchOper'])?$_REQUEST['searchOper']:null,
                "search_str" => isset($_REQUEST['searchString'])?$_REQUEST['searchString']:null
        );
 
        $row = $this->dashboard->get_data($req_param)->result_array();
        $count = count($row);
        if( $count >0 ) 
		{
            $total_pages = ceil($count/$limit);
        }
		else 
		{
            $total_pages = 0;
        }
        if ($page > $total_pages)
            $page=$total_pages;
        $start = $limit*$page - $limit; // do not put $limit*($page - 1)
 
        $req_param['limit'] = array(
                    'start' => $start,
                    'end' => $limit
        );
 
        $result = $this->dashboard->get_data($req_param)->result_array();
        // sekarang format data dari dB sehingga sesuai yang diinginkan oleh jqGrid dalam hal ini aku pakai JSON format
        $responce->page = $page;
        $responce->total = $total_pages;
        $responce->records = $count;
        for($i=0; $i<count($result); $i++)
		{
 
            $responce->rows[$i]['idUser']=$result[$i]['idUser'];
            // data berikut harus sesuai dengan kolom-kolom yang ingin ditampilkan di view (js)
            $responce->rows[$i]['cell']=array(
                    $result[$i]['idUser'],
                    $result[$i]['userCode'],
                    $result[$i]['userName'],
					$result[$i]['password'],
					$result[$i]['level']);
 
        }
 		echo json_encode($responce);
    }
    function crud()
	{
        $this->dashboard->crud('tuser', 'idUser ','id', array('idUser', 'userCode','userName','password','level'));
    }
    private function breadcrumbz($crumb = array())
    {
    	$out ='';
    	$out.= '<ul class="breadcrumb">';
    	if((count($crumb)>0) )
    	{
    		$out.= '<li><i class="ace-icon fa fa-home home-icon"></i><a href="#">Home</a></li>';
    		for($i=0;$i<count($crumb);$i++)
			{

				
				if($i!=(count($crumb)-1))
				{
					$out.= '<li><a href="#">'.$crumb[$i].'</a></li>';
				}
				else
				{
					$out.= '<li class="active">'.$crumb[$i].'</li>';
				}
			}
    	}
    	else
    	{
    		$out.= '<li><i class="ace-icon fa fa-home home-icon"></i><a href="#">Home</a></li>';
    	}
    	$out.= '</ul>';
    	return $out;
    }
}