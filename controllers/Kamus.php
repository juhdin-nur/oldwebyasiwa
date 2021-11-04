<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Kamus extends CI_Controller
{
	function __construct() 
    { 
		parent::__construct(); 
		$this->load->model('kamus_model');
    } 
 	function crud(){
        $this->kamus_model->crud('tclass', 'id', 'id', array('id', 'className'));
    }
         
public function loadDataKelas()
        {
            $responce = new StdClass;
            // load data jqgrid
            if(isset($_REQUEST['page'])){ $page = $_REQUEST['page']; }else{ $page = ''; }
            if(isset($_REQUEST['rows'])){ $limit = $_REQUEST['rows']; }else{ $limit ='10'; }
            if(isset($_REQUEST['sidx'])){ $sidx = $_REQUEST['sidx']; }else{ $sidx = ''; }
            if(isset($_REQUEST['sord'])){ $sord = $_REQUEST['sord']; }else{ $sord = ''; }
            $wh_ews = "";
  
         //   $limit = 100;
  
            $result = $this->kamus_model->countData($wh_ews);
  
            if ($result) {
                $count = $result->row()->count;
                if ($count > 0) {
                    $total_pages = ceil($count/$limit);
                } else {
                    $total_pages = 0;
                }
  
                if ($page > $total_pages) $page=$total_pages;
                    $start = $limit*$page - $limit; // do not put $limit*($page - 1)
                if($start < 0) $start = 0;
                if(!$sidx) $sidx =1;
                $responce->page = $page; 
                $responce->total= $total_pages; 
                $responce->records = $count;
  
                $qry_data = $this->kamus_model->loadData($wh_ews, $sidx, $sord, $start, $limit);
  
                
 
if ( stristr($_SERVER["HTTP_ACCEPT"],"application/xhtml+xml") ) {
    header("Content-type: application/xhtml+xml;charset=utf-8");
    } else {
            header("Content-type: text/xml;charset=utf-8");
           }
     // echo "<limit>".$limit."</limit>";
   
    echo "<?xml version='1.0' encoding='utf-8'?>\n";
    echo "<rows>";
    echo "<page>".$page."</page>";
    echo "<total>".$total_pages."</total>";
    echo "<records>".$count."</records>";
     
                 $i=0;
                $def = '';
                foreach ($qry_data->result() as $row) {
                 
					echo "<row id='". $responce->rows[$i]['id']=$row->id."'>";
                    echo "<cell>".$responce->rows[$i]['id']=$row->id."</cell>";
                    echo "<cell>".$responce->rows[$i]['className']=$row->className."</cell>";
                    echo "</row>";               
                    $i++; 
                }
 
    echo "</rows>";
            }
  
        }
     
}