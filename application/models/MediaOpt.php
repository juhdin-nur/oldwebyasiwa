<?php
class MediaOpt extends CI_Model{
    var $table = 'Pcategory';
    var $table2 = 'mediaposts';
    public function getData()
    {
        $hasil=array();
        $hasil[''] = 'Please Select';
        $query = $this->db->get($this->table);
        foreach ($query->result() as $row) {
            $hasil[$row->catId] = $row->title_cat;
        }
        // $data = array('list'=>$hasil,
        //               'selected' => $this->input->post('album') ? $this->input->post('album'):'');
        return $hasil;
    }
    public function galleryViewFront(){
        $this->db->select('*');
        $this->db->from($this->table2 .' a');
        $this->db->join($this->table .' b','a.idCat=b.catid','inner');
        // $this->db->group_by('a.idCat');
        return $this->db->get();
    }
    public function viewCategory(){
        return $query=$this->db->get($this->table);
    }
    public function gallery_view()
    {
        // $this->db->from($this->table2);
        // $this->db->where('state',$cari);
        // return $this->db->get()->result();
        $data = array();
        $this->db->select('*');
        $this->db->from($this->table2 .' a');
        $this->db->join($this->table .' b','a.idCat=b.catid','inner');
        $this->db->group_by('b.catid');
        $query = $this->db->get();
        $cout_query = $query->num_rows();
        $hitung = 0;
        $judul_kat = 0;
        $state = '';
        $html_out ='';
        $judul_album='';
        foreach ($query->result() as $row){

            $html_out .= '<li>
                                            <a href="'.base_url('dashboard/gallery_detail/'.$row->idCat).'" title="'.$row->title_cat.'" data-rel="colorbx" class="cbxElement">
                                                <img width="150" height="150" alt="150x150" src="'.site_url($row->path2).'">
                                            </a>

                                            <div class="tags">
                                                <span class="label-holder">
                                                    <span class="label label-info">'.$row->title_cat.'</span>
                                                </span>
                                            </div>
                                        </li>';
              
        }
                $data=array('data' =>$html_out,'count'=>$cout_query);
         return $data;
        // //echo $html_out;

    }
    public function gallery_detail($id)
    {
        $this->db->select('*');
        $this->db->from($this->table2 .' a');
        $this->db->join($this->table .' b','a.idCat=b.catid','inner');
        $this->db->where('catId',$id);
        $data = array();
        $query = $this->db->get();
        $cout_query = $query->num_rows();
        $hitung = 0;
        $judul_kat = 0;
        $state = '';
        $html_out ='';
        $judul_album='';
        foreach ($query->result() as $row){
            $imageId ="dashboard/deleteImage/";
            $html_out .= '<li>
                                            <a href="'.site_url($row->path).'" title="'.$row->title.'" data-rel="colorbox" class="cboxElement">
                                                <img width="150" height="150" alt="'.$row->description.'" src="'.site_url($row->path2).'" class="groupGallery">
                                            </a>

                                            <div class="tags">
                                                <span class="label-holder">
                                                    <span class="label label-success">'.$row->title.'</span>
                                                </span>
                                            </div>
                                            <div class="tools">
                                                <a href="#" class="edit" title="'.$row->mediaId.'">
                                                    <i class="ace-icon fa fa-pencil"></i>
                                                </a>

                                                <a href="'.site_url($imageId.$row->mediaId.'/'.$row->catId).'">
                                                    <i class="ace-icon fa fa-times red"></i>
                                                </a>
                                            </div>
                                        </li>';
              
        }
                if($cout_query<=0)
                {
                    redirect("dashboard/upload");
                }
                $data = array('data' => $html_out,'count'=>$cout_query );
         return $data;
        // //echo $html_out;

    }
    public function medit_gallery($id)
    {
        $query = $this->db->get_where($this->table2,array('mediaId'=>$id));
        return $query;
    }
    public function mupdate_gallery($where,$data)
    {
        $query = $this->db->update($this->table2,$data,$where);
        return $this->db->affected_rows();
    }
    public function delete_by_idForegn($id)
    {
        $query=$this->db->get_where($this->table2, array('idCat' => $id));
        foreach ($query->result() as $row) {
            @unlink($row->path);
            @unlink($row->path2);
        }
        $this->db->from($this->table2);
        $this->db->where('idCat', $id);
        $this->db->delete($this->table2);
    }
    public function deleteImage($id)
    {
        $query = $this->db->get_where($this->table2,array('mediaId'=>$id));
        $hasilq = $query->row();
        $hasil = $query->num_rows();
        if(isset($hasilq))
        {
            @unlink($hasilq->path);
            @unlink($hasilq->path2);
        }     
        $this->db->where('mediaId', $id);
        $this->db->delete($this->table2);
        return $hasil;
    }
}
		