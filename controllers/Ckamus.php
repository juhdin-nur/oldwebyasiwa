<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ckamus extends CI_Controller
{
	function __construct() 
    { 
		parent::__construct(); 
		$this->load->model('mkamus');
    } 
 	function crud(){
        $this->mkamus->crud('tclass', 'id', 'id', array('id', 'className'));
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
  
            $result = $this->mkamus->countData($wh_ews);
  
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
  
                $qry_data = $this->mkamus->loadData($wh_ews, $sidx, $sord, $start, $limit);
  
                
 
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
                 
					echo "<row id='". $responce->rows[$i]['id']=$row->idClass."'>";
						  echo "<cell>".$responce->rows[$i]['id']=$row->idClass."</cell>";                    
                    echo "<cell>".$responce->rows[$i]['className']=$row->className."</cell>";
                    echo "<cell>".$responce->rows[$i]['className']=$row->className."</cell>";
                    echo "</row>";               
                    $i++; 
                }
 
    echo "</rows>";
            }
  
        }

//fungsi untuk ordo
	public function loadDataOrdo()
   {
   	$aColumns = array('id','orderName','className');
   	// paging
        $sLimit = "";
        if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' ){
            $sLimit = "LIMIT ".$_GET['iDisplayStart'].", ".
                 $_GET['iDisplayLength'] ;
        }
        $numbering =  $_GET['iDisplayStart'] ;
        $page = 1;
        
        // ordering
        if ( isset( $_GET['iSortCol_0'] ) ){
            $sOrder = "ORDER BY  ";
            for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ ){
                if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" ){
                    $sOrder .= $aColumns[ intval( $_GET['iSortCol_'.$i] ) ]."
                        ".  $_GET['sSortDir_'.$i]  .", ";
                }
            }
            
            $sOrder = substr_replace( $sOrder, "", -2 );
            if ( $sOrder == "ORDER BY" ){
                $sOrder = "";
            }
        }

        // filtering
        $sWhere = "";
        if ( $_GET['sSearch'] != "" ){
            $sWhere = "WHERE (b.";
            for ( $i=0 ; $i<count($aColumns) ; $i++ ){
                $sWhere .= $aColumns[$i]." LIKE '%". $_GET['sSearch'] ."%' OR ";
            }
            $sWhere = substr_replace( $sWhere, "", -3 );
            $sWhere .= ')';
        }
        
        // individual column filtering
        for ( $i=0 ; $i<count($aColumns) ; $i++ ){
            if ( $_GET['bSearchable_'.$i] == "true" && $_GET['sSearch_'.$i] != '' ){
                if ( $sWhere == "" ){
                    $sWhere = "WHERE ";
                }
                else{
                    $sWhere .= " AND ";
                }
                $sWhere .= $aColumns[$i]." LIKE '%".$_GET['sSearch_'.$i]."%' ";
            }
        }
            
            
            $rResult = $this->mkamus->loadDataOrdo($aColumns,$sWhere, $sOrder, $sLimit);
        
        $iFilteredTotal = 10;
        
        $rResultTotal = $this->mkamus->countOrdo();
        $iTotal = $rResultTotal->row()->count;
        $iFilteredTotal = $iTotal;
        
        $output = array(
            "sEcho" => intval($_GET['sEcho']),
            "iTotalRecords" => $iTotal,
            "iTotalDisplayRecords" => $iFilteredTotal,
            "aaData" => array()
        );
        
        foreach ($rResult->result_array() as $aRow){
            $row = array();
            for ( $i=0 ; $i<count($aColumns) ; $i++ ){
                /* General output */
                if($i < 1)
                    $row[] = $numbering+$page.'|'.$aRow[ $aColumns[$i] ];
                else
                    $row[] = $aRow[ $aColumns[$i] ];
            }
            $page++;
            $output['aaData'][] = $row;
        }
        
        echo json_encode( $output );
                
            
  
   }//end function loadOrder
         
        
        
        
//fungsi untuk family
	public function loadDataFamily()
   {
   	$aColumns = array('id','familyName','orderName','className');
   	$aFields = array('DT_RowId','familyName','orderName','className');
   	// paging
        $sLimit = "";
        if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' ){
            $sLimit = "LIMIT ".$_GET['iDisplayStart'].", ".
                 $_GET['iDisplayLength'] ;
        }
        $numbering =  $_GET['iDisplayStart'] ;
        $page = 1;
        
        // ordering
        if ( isset( $_GET['iSortCol_0'] ) ){
            $sOrder = "ORDER BY  ";
            for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ ){
                if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" ){
                    $sOrder .= $aColumns[ intval( $_GET['iSortCol_'.$i] ) ]."
                        ".  $_GET['sSortDir_'.$i]  .", ";
                }
            }
            
            $sOrder = substr_replace( $sOrder, "", -2 );
            if ( $sOrder == "ORDER BY" ){
                $sOrder = "";
            }
        }

        // filtering
        $sWhere = "";
        if ( $_GET['sSearch'] != "" ){
            $sWhere = "WHERE (c.";
            for ( $i=0 ; $i<count($aColumns) ; $i++ ){
                $sWhere .= $aColumns[$i]." LIKE '%". $_GET['sSearch'] ."%' OR ";
            }
            $sWhere = substr_replace( $sWhere, "", -3 );
            $sWhere .= ')';
        }
        
        // individual column filtering
        for ( $i=0 ; $i<count($aColumns) ; $i++ ){
            if ( $_GET['bSearchable_'.$i] == "true" && $_GET['sSearch_'.$i] != '' ){
                if ( $sWhere == "" ){
                    $sWhere = "WHERE ";
                }
                else{
                    $sWhere .= " AND ";
                }
                $sWhere .= $aColumns[$i]." LIKE '%".$_GET['sSearch_'.$i]."%' ";
            }
        }
            
            
            $rResult = $this->mkamus->loadDataFamily($aColumns,$sWhere, $sOrder, $sLimit);
        
        $iFilteredTotal = 10;
        
        $rResultTotal = $this->mkamus->countFamily();
        $iTotal = $rResultTotal->row()->count;
        $iFilteredTotal = $iTotal;
        $output = array("data" => array());
        foreach($rResult->result_array() as $aRow)
        {        			
        			$row = array(
        			$aFields['0']=>"row_".$aRow[$aColumns['0']],
        			$aFields['1']=>$aRow[$aColumns['1']],
        			$aFields['2']=>$aRow[$aColumns['2']],
        			$aFields['3']=>$aRow[$aColumns['3']]
        			);
        		$output['data'][]=$row;
        }
        echo json_encode($output);
        
        /*$output = array(
            "sEcho" => intval($_GET['sEcho']),
            "iTotalRecords" => $iTotal,
            "iTotalDisplayRecords" => $iFilteredTotal,
            "aaData" => array()
        );
        
        foreach ($rResult->result_array() as $aRow){
            $row = array();
            for ( $i=0 ; $i<count($aColumns) ; $i++ ){
                /* General output 
                if($i < 1)
                    $row[] = $numbering+$page.'|'.$aRow[ $aColumns[$i] ];
                else
                    $row[] = $aRow[ $aColumns[$i] ];
            }
            $page++;
            $output['aaData'][] = $row;
        }
        
        echo json_encode( $output );*/
                
            
  
   }//end function loadFamily

        
     
}