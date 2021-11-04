
<?php
/**
 *
 * Dynmic_menu.php
 *
 */
class Dynamic_menu_admin {

    private $ci;                // for CodeIgniter Super Global Reference.

    //private $id_menu        = 'id="menu"';
    private $class_menu        = 'class="nav nav-list"';
    private $class_parent    = 'class="parent"';
    private $class_last        = 'class="last"';

    // --------------------------------------------------------------------

    /**
     * PHP5        Constructor
     *
     */
    function __construct()
    {
        //parent::__construct();
        $this->ci =& get_instance();    // get a reference to CodeIgniter.
        $this->ci->load->helper('file');
        $this->ci->lang->load('menu','en');
        $this->ci->lang->load('adminpage','en');
    }

    // --------------------------------------------------------------------

    /**
     * build_menu($table, $type)
     *
     * Description:
     *
     * builds the Dynaminc dropdown menu
     * $table allows for passing in a MySQL table name for different menu tables.
     * $type is for the type of menu to display ie; topmenu, mainmenu, sidebar menu
     * or a footer menu.
     *
     * @param    string    the MySQL database table name.
     * @param    string    the type of menu to display.
     * @return    string    $html_out using CodeIgniter achor tags.
     */
    
    function build_menu($table = 'dyn_menu', $type = '2')
    {
        
        function pilih($text,$pil)
        {
            $text2="";
            for($j = 0; $j<=3;$j++)
            {
                //echo ltrim(substr($menu[$j]['title'],0,strpos($menu[$j]['title'],";")),";");

                if($j==0)
                {
                    $text3 = $text;
                    $text1 = substr($text,0,strpos($text,";"));
                    $text = $text3;
                    $text2 = $text1;
                }
                else 
                {
                    $text=ltrim(strpbrk($text, ';'),";");
                    $text2 = substr($text,0,strpos($text,";"));
                }
                if($j==$pil)
                {
                    return $text2;
                }
            }
        }

        $menu = array();

        // use active record database to get the menu.
        $query = $this->ci->db->get($table);
        $bahasa = "<?php defined('BASEPATH') OR exit('No direct script access allowed');"."\n";
        //$bahasa = ""; 
        $langu =0;
        $enable = FALSE;
        switch ($langu) {
            case 0:
                $_lang = "en";
                break;
            case 1:
                $_lang = "id";
                break;
            case 2:
                $_lang = "ge";
                break;
            
            default:
                # code...
                break;
        }
        if ($query->num_rows() > 0)
        {
            // `id`, `title`, `link_type`, `page_id`, `module_name`, `url`, `uri`, `dyn_group_id`, `position`, `target`, `parent_id`, `show_menu`
            $j=1;
            foreach ($query->result() as $row)
            {
                $menu[$j]['id']            = $row->id;
                $menu[$j]['title']        = substr($row->title,0,strpos($row->title,";"));
                $bahasa .=  '$lang[\''.pilih($row->title,0).'\'] = \''.pilih($row->title,$langu).'\''.";"."\n";         
                //$bahasa .= $bahasa;
                $menu[$j]['icon']            = $row->icon;
                $menu[$j]['link']            = $row->link_type;
                $menu[$j]['page']            = $row->page_id;
                $menu[$j]['module']        = $row->module_name;
                $menu[$j]['url']            = $row->url;
                $menu[$j]['uri']            = $row->uri;
                $menu[$j]['dyn_group']    = $row->dyn_group_id;
                $menu[$j]['position']        = $row->position;
                $menu[$j]['target']        = $row->target;
                $menu[$j]['parent']        = $row->parent_id;
                $menu[$j]['is_parent']    = $row->is_parent;
                $menu[$j]['show']            = $row->show_menu;
                $menu[$j]['showonadmin']            = $row->showonadmin;
                $j++;
            }
        }
        $query->free_result();    // The $query result object will no longer be available
        /*if($enable==TRUE)
        {
            $handle = fopen('./application/language/'.$_lang.'/menu_lang.php', 'w');
            fwrite($handle, $bahasa);
            fclose($handle);
            $enable=FALSE;
        }*/
        /*for($k=1;$k<=count($menu);$k++)
        {
            $str = $menu[$k]['title'];
            pilih($str,2);
        }*/
        // ----------------------------------------------------------------------
        // echo "-------------------------------------------".$this->ci->lang->line('Dashboard');
        // echo "-------------------------------------------".$this->ci->lang->line('User');
        // now we will build the dynamic menus.
        //$html_out  = "\t".'<div '.$this->id_menu.'>'."\n";
        $html_out  = "\t"."\n";
                

        /**
         * check $type for the type of menu to display.
         *
         * ( 0 = top menu ) ( 1 = horizontal ) ( 2 = vertical ) ( 3 = footer menu ).
         */
        switch ($type)
        {
            case 0:            // 0 = top menu
                break;

            case 1:            // 1 = horizontal menu
                $html_out .= "\t\t".'<ul '.$this->class_menu.'>'."\n";
                break;

            case 2:            // 2 = sidebar menu
                $html_out .= "\t\t".'<ul '.$this->class_menu.'>'."\n";
                break;

            case 3:            // 3 = footer menu
                break;

            default:        // default = horizontal menu
                $html_out .= "\t\t".'<ul '.$this->class_menu.'>'."\n";

                break;
        }
        // loop through the $menu array() and build the parent menus.
        for ($i = 1; $i <= count($menu); $i++)
        {
            if (is_array($menu[$i]))    // must be by construction but let's keep the errors home
            {
                if ($menu[$i]['showonadmin'] && $menu[$i]['parent'] == 0)    // are we allowed to see this menu?
                {
                    if ($menu[$i]['is_parent'] == TRUE)
                    {
                        // CodeIgniter's anchor(uri segments, text, attributes) tag.
                        $html_out .= "\t\t\t".'<li><a href="'.$menu[$i]['link'].'" class="dropdown-toggle"><i class="menu-icon '.$menu[$i]['icon'].'"></i><span class="menu-text">'.$this->ci->lang->line($menu[$i]['title']).'</span><b class="arrow fa fa-angle-down"></b></a><b class="arrow"></b>';
                    }
                    else if($menu[$i]['is_parent']==FALSE && $menu[$i]['parent']==0)
                    {
                        $html_out .= "\t\t\t".'<li><a href="javascript:void(0)" id="'.$menu[$i]['link'].'"><i class="menu-icon '.$menu[$i]['icon'].'"></i><span class="menu-text">'.$this->ci->lang->line($menu[$i]['title']).'</span></a>';
                    }
                    else
                    {
                        $html_out .= "\t\t\t\t".'<li>'.anchor($menu[$i]['link'], '<span>'.$this->ci->lang->line($menu[$i]['title']).'</span>');
                    }

                    // loop through and build all the child submenus.
                    $html_out .= $this->get_childs($menu, $i);

                    $html_out .= '</li>'."\n";
                }
            }
            else
            {
                exit (sprintf('menu nr %s must be an array', $i));
            }
        }

        $html_out .= '<li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-cog fa-spin fa-3x fa-fw"></i>
                            <span class="menu-text">' .$this->ci->lang->line('setting'). '</span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>

                        <ul class="submenu nav-hide" style="display: none;">
                            <li class="">
                                <a href="javascript:void(0)" id="dashboard/menupg">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    '.$this->ci->lang->line('menu_management').'
                                </a>

                                <b class="arrow"></b>
                            </li>                                   
                            <li class="">
                                <a href="javascript:void(0)" id="dashboard/cprofile">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    '.$this->ci->lang->line('company_profile').'
                                </a>

                                <b class="arrow"></b>
                            </li>                                   
                        </ul>
                    </li>';
        $html_out .= "\t\t".'</ul>' . "\n";
        //$html_out .= "\t".'</div>' . "\n";
        return $html_out;
        //echo $html_out;
    }  
        /**
     * get_childs($menu, $parent_id) - SEE Above Method.
     *
     * Description:
     *
     * Builds all child submenus using a recurse method call.
     *
     * @param    mixed    $menu    array()
     * @param    string    $parent_id    id of parent calling this method.
     * @return    mixed    $html_out if has subcats else FALSE
     */
    function get_childs($menu, $parent_id)
    {
        $has_subcats = FALSE;

        $html_out  = '';
        //$html_out .= "\n\t\t\t\t".'<div>'."\n";
        $html_out .= "\t\t\t\t\t".'<ul class="submenu nav-hide">'."\n";

        for ($i = 1; $i <= count($menu); $i++)
        {
            if ($menu[$i]['showonadmin'] && $menu[$i]['parent'] == $parent_id)    // are we allowed to see this menu?
            {
                $has_subcats = TRUE;

                if ($menu[$i]['is_parent'] == TRUE)
                {
                    /*$html_out .= "\t\t\t\t\t\t".'<li>'.anchor($menu[$i]['link'], '<i class="menu-icon '.$menu[$i]['icon'].'"></i>'.$this->ci->lang->line($menu[$i]['title']));*/
                    $html_out .= "\t\t\t".'<li><a href="'.$menu[$i]['link'].'" class="dropdown-toggle"><i class="menu-icon '.$menu[$i]['icon'].'"></i><span class="menu-text">'.$this->ci->lang->line($menu[$i]['title']).'</span><b class="arrow fa fa-angle-down"></b></a><b class="arrow"></b>';
                }
                else if($menu[$i]['is_parent']==FALSE && $menu[$i]['parent']!=0)
                {
                        $html_out .= "\t\t\t".'<li><a href="javascript:void(0)" id="'.$menu[$i]['link'].'"><i class="menu-icon '.$menu[$i]['icon'].'"></i><span class="menu-text">'.$this->ci->lang->line($menu[$i]['title']).'</span></a>';
                }
                else
                {
                    //$html_out .= "\t\t\t\t\t\t".'<li>'.anchor($menu[$i]['link'], '<i class="menu-icon '.$menu[$i]['icon'].'"></i><span>'.$menu[$i]['title'].'</span>');
                /*    $html_out .= "\t\t\t\t\t\t".'<li><a href="'.$menu[$i]['link'].'"><i class="menu-icon '.$menu[$i]['icon'].'"></i>'.$this->ci->lang->line($menu[$i]['title']).'</a>';*/

                        /*$html_out .= "\t\t\t".'<li><a href="javascript:void(0)" id="'.$menu[$i]['link'].'"><i class="menu-icon '.$menu[$i]['icon'].'"></i><span class="menu-text">'.$this->ci->lang->line($menu[$i]['title']).'</span></a>';*/
                        $html_out .= "\t\t\t\t".'<li>'.anchor($menu[$i]['link'], '<span>'.$this->ci->lang->line($menu[$i]['title']).'</span>');
                
                }

                // Recurse call to get more child submenus.
                $html_out .= $this->get_childs($menu, $i);

                $html_out .= '</li>' . "\n";
            }
        }

        $html_out .= "\t\t\t\t\t".'</ul>' . "\n";
         //$html_out .= "\t\t\t\t".'</div>' . "\n";

        return ($has_subcats) ? $html_out : FALSE;
    }


}

// ------------------------------------------------------------------------
// End of Dynamic_menu Library Class.

// ------------------------------------------------------------------------
/* End of file Dynamic_menu.php */
/* Location: ../application/libraries/Dynamic_menu.php */  