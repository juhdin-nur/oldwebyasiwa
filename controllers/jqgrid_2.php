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
        $this->load->view('jqgrid_view');
    }
    function get_json_data()
    {
 
        $page = $_REQUEST['page'] ? $_REQUEST['page']:1; // get the requested page
        $limit = $_REQUEST['rows'] ? $_REQUEST['rows']:10; // get how many rows we want to have into the grid
        $sidx = $_REQUEST['sidx']; // get index row - i.e. user click to sort
        $sord = $_REQUEST['sord']; // get the direction if(!$sidx) $sidx =1;
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
		header('Content-type: application/json');
		$responce = new stdClass();
        $responce->page = $page;
		$responce->total = $total_pages;
        $responce->records = (string)$count;
		$i=0;
 
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
/*		if ( stristr($_SERVER["HTTP_ACCEPT"],"application/xhtml+xml") ) 
		{
			header("Content-type: application/xhtml+xml;charset=utf-8"); } else {
			header("Content-type: text/xml;charset=utf-8");
		}
		echo "<?xml version='1.0' encoding='utf-8'?>\n";
		echo "<rows>";
		echo "<page>".$page."</page>";
		echo "<total>".$total_pages."</total>";
		echo "<records>".$count."</records>";
		
		for($i=0;$i<count($result);$i++)
		{
			echo "<row id='". $row['id']."'>";			
			echo "<cell>". $row['id']."</cell>";
			echo "<cell>". $row['date']."</cell>";
			echo "<cell><![CDATA[". $row['name']."]]></cell>";
			echo "<cell>". $row['amount']."</cell>";
			echo "</row>";
		}
		echo "</rows>";*/
				
    }
    function crud(){
        $this->jqgrid->crud('factory_ouput', 'id', 'id', array('id', 'DatePro', 'Quantity'));
    }
}