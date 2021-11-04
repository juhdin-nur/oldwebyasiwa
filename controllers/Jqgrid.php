<?php
class Jqgrid extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('jqgrid_model','jqgrid');
        //$this->output->enable_profiler(TRUE);
    }
 
    function index()
    {
        // cukup load view tanpa harus load data
        // data dari grid di load melalui js, di bagian url
        $this->load->view('jqgrid_view_3');
    }
    function get_json_data()
    {
		header('Content-type: application/json');
		$responce = new stdClass();
        $page =1; // get the requested page
        $limit = 10; // get how many rows we want to have into the grid
        $sidx = 1; // get index row - i.e. user click to sort
        $sord = 'asc'; // get the direction if(!$sidx) $sidx =1;
		if(!$sidx) $sidx =1;
        $req_param = array (
                "sort_by" => $sidx,
                "sort_direction" => $sord,
                "limit" => $limit,
               
        );
        $row = $this->jqgrid->get_data($req_param)->result_array();
        $count = count($row);
        if( $count >0 ) {
            $total_pages = ceil($count/$limit);
        } else {
            $total_pages = 0;
        }
        if ($page > $total_pages)
            $page=$total_pages;
        $start = $limit*$page - $limit; // do not put $limit*($page - 1)
 
        $req_param['limit'] = array(
                    'start' => $start,
                    'end' => $limit
        );
 
        $result = $this->jqgrid->get_data($req_param)->result_array();
        // sekarang format data dari dB sehingga sesuai yang diinginkan oleh jqGrid dalam hal ini aku pakai JSON format

//		$responce = new stdClass();
        $responce->page = $page;
		$responce->total = $total_pages;
        $responce->records = (string)$count;
		for($i=0;$i<$count;$i++){
            $responce->rows[$i]['id']=$row[$i]['id'];
            // data berikut harus sesuai dengan kolom-kolom yang ingin ditampilkan di view (js)
            $responce->rows[$i]['cell']=array(
                    $row[$i]['id'],
                                            $row[$i]['date'],
                                            $row[$i]['name'],
                                            $row[$i]['amount']
                                            );
				$i++;
				}
		        echo json_encode($responce);
		        print("\n");
		        print("\n");		        
		        echo $row[11]['id'];
		        
		        
		        
    }
    function crud(){
        $this->jqgrid->crud('factory_ouput', 'id', 'id', array('id', 'DatePro', 'Quantity'));
    }
}