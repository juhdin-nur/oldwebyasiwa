<?php
/**
 *
 * Dynmic_menu.php
 *
 */
class Dynamic_menu {

    private $ci;                // for CodeIgniter Super Global Reference.

    private $id_menu        = 'id="menu"';
    private $class_menu        = 'class="menu"';
    private $class_parent    = 'class="parent"';
    private $class_last        = 'class="last"';

    // --------------------------------------------------------------------

    /**
     * PHP5        Constructor
     *
     */
    function __construct()
    {
        $this->ci =& get_instance();    // get a reference to CodeIgniter.
        $this->ci->load->helper('file');
        $this->ci->lang->load('menu','id');
        $this->ci->lang->load('adminpage','id');
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
    function build_menu($table = 'dyn_menu')
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

        if ($query->num_rows() > 0)
        {
            // `id`, `title`, `link_type`, `page_id`, `module_name`, `url`, `uri`, `dyn_group_id`, `position`, `target`, `parent_id`, `show_menu`
            $x = 1;
            foreach ($query->result() as $row)
            {
                $menu[$x]['id']            = $row->id;
                //$menu[$x]['title']        = $row->title;
                $menu[$x]['title']        = substr($row->title,0,strpos($row->title,";"));
                $menu[$x]['link']            = $row->link_type;
                $menu[$x]['page']            = $row->page_id;
                $menu[$x]['module']        = $row->module_name;
                $menu[$x]['url']            = $row->url;
                $menu[$x]['uri']            = $row->uri;
                $menu[$x]['dyn_group']    = $row->dyn_group_id;
                $menu[$x]['position']        = $row->position;
                $menu[$x]['target']        = $row->target;
                $menu[$x]['parent']        = $row->parent_id;
                $menu[$x]['is_parent']    = $row->is_parent;
                $menu[$x]['show']            = $row->show_menu;
                $x++;
            }
        }
        $query->free_result();    // The $query result object will no longer be available

        // ----------------------------------------------------------------------     
        // now we will build the dynamic menus.
        $html_out  = "\t".'<div '.$this->id_menu.'>'."\n";

		$html_out .= "\t\t".'<ul '.$this->class_menu.'>'."\n";

        // loop through the $menu array() and build the parent menus.
        for ($i = 1; $i <= count($menu); $i++)
        {
            if (is_array($menu[$i]))    // must be by construction but let's keep the errors home
            {
                if ($menu[$i]['show'] && $menu[$i]['parent'] == 0)    // are we allowed to see this menu?
                {
                    if ($menu[$i]['is_parent'] == TRUE)
                    {
                        // CodeIgniter's anchor(uri segments, text, attributes) tag.
                       // $html_out .= "\t\t\t".'<li>'.anchor('', '<span>'.$menu[$i]['title'].'</span>');
                        $html_out .= "\t\t\t".'<li><a href="#"><span>'.$this->ci->lang->line($menu[$i]['title']).'</span></a>';
                    }
                    else
                    {
                        $html_out .= "\t\t\t\t".'<li>'.anchor($menu[$i]['url'], '<span>'.$this->ci->lang->line($menu[$i]['title']).'</span>');
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

        $html_out .= "\t\t".'</ul>' . "\n";
        $html_out .= "\t".'</div>' . "\n";

        return $html_out;
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
        $html_out .= "\n\t\t\t\t".'<div>'."\n";
        $html_out .= "\t\t\t\t\t".'<ul>'."\n";

        for ($i = 1; $i <= count($menu); $i++)
        {
            if ($menu[$i]['show'] && $menu[$i]['parent'] == $parent_id)    // are we allowed to see this menu?
            {
                $has_subcats = TRUE;

                if ($menu[$i]['is_parent'] == TRUE)
                {
                    $html_out .= "\t\t\t\t\t\t".'<li>'.anchor('#', '<span>'.$this->ci->lang->line($menu[$i]['title']).'</span>');
                }
                else
                {
                    $html_out .= "\t\t\t\t\t\t".'<li>'.anchor($menu[$i]['url'], '<span>'.$this->ci->lang->line($menu[$i]['title']).'</span>');
                }

                // Recurse call to get more child submenus.
                $html_out .= $this->get_childs($menu, $i);

                $html_out .= '</li>' . "\n";
            }
        }
        $html_out .= "\t\t\t\t\t".'</ul>' . "\n";
        $html_out .= "\t\t\t\t".'</div>' . "\n";

        return ($has_subcats) ? $html_out : FALSE;
    }
}
// ------------------------------------------------------------------------
// End of Dynamic_menu Library Class.

// ------------------------------------------------------------------------
/* End of file Dynamic_menu.php */
/* Location: ../application/libraries/Dynamic_menu.php */  