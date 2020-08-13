<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class readerModel extends CI_Model{
    
    public function __construct() {
        parent::__construct();

    }

    function getReader(){
        $this->db->order_by("name_r","desc");
        $query = $this->db->get('reader');
        return $query->result();
    }

    function getAddress(){
        $query = $this->db->get('address');
        return $query->result();
    }

    function addReader($reader, $lastName1, $lastName2, $sex, $phone, $mail, $notes, $route, $street_number, $locality, $administrative_area_level_1, $postal_code, $country){

        $fecha = getdate();
        $fechaactual = "$fecha[year]/$fecha[mon]/$fecha[mday]";
        
        $array = array('date_r'   => $fechaactual,
                        'name_r'  => $reader,
                        'last1_r' => $lastName1,
                        'last2_r' => $lastName2,
                        'sex'     => $sex,
                        'phone'   => $phone,
                        'email'   => $mail,
                        'notes_r' => $notes);
        $this->db->insert('reader', $array);

        $id=mysql_insert_id();

        $array = array('id_r'       => $id,
                        'street'    => $route,
                        'number'    => $street_number,
                        'location'  => $locality,
                        'state'     => $administrative_area_level_1,
                        'pc'        => $postal_code,
                        'country'   => $country);
        $this->db->insert('address', $array);        
    }

    function deleteReader($id){
        $this->db->where('id_r', $id);
        $this->db->delete('reader');
    }

    function updateReader($id, $reader, $lastName1, $lastName2, $sex, $phone, $mail, $notes, $route, $street_number, $locality, $administrative_area_level_1, $postal_code, $country){

        $array = array('name_r'   => $reader,
                        'last1_r' => $lastName1,
                        'last2_r' => $lastName2,
                        'sex'     => $sex,
                        'phone'   => $phone,
                        'email'   => $mail,
                        'notes_r' => $notes);
        $this->db->where('id_r', $id);
        $this->db->update('reader', $array);

        
        $this->db->select();
        $this->db->where('id_r', $id);
        $query = $this->db->get('address');
        if ($query->num_rows() == 0) {
            $array = array('id_r'       => $id,
                            'street'    => $route,
                            'number'    => $street_number,
                            'location'  => $locality,
                            'state'     => $administrative_area_level_1,
                            'pc'        => $postal_code,
                            'country'   => $country);
            $this->db->insert('address', $array); 
        } else {
            $array = array('street'     => $route,
                            'number'    => $street_number,
                            'location'  => $locality,
                            'state'     => $administrative_area_level_1,
                            'pc'        => $postal_code,
                            'country'   => $country);
            $this->db->where('id_r', $id);
            $this->db->update('address', $array);   
        }
    }
}