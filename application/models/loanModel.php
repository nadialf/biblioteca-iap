<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class loanModel extends CI_Model{
    
    public function __construct() {
        parent::__construct();

    }

    function updateAllLoans(){
        date_default_timezone_set('America/Mexico_City');
        $fecha = getdate();
        $fechaactual = "$fecha[year]-$fecha[mon]-$fecha[mday]";

        $fechahoy = new DateTime($fechaactual);

        $this->db->select('id_ln, end_date');
        $query = $this->db->get('loan');

        foreach ($query->result() as $row) {
            $id_ln = $row->id_ln;
            $end_date = new DateTime($row->end_date);

            if ($fechahoy <= $end_date){
                $advance = "Vigente";
            } else {
                 $advance = "Vencido";
            }

            $array = array('advance' => $advance);
            $this->db->where('id_ln', $id_ln);
            $this->db->update('loan', $array);
        }

    }

    function getLoans(){
        $this->db->select('loan.id_ln, loan.start_date, loan.end_date, loan.advance, loan.delivery, loan.notes_l, loan.credential, reader.id_r, reader.name_r, reader.last1_r, reader.last2_r, book.id_b, book.title');
        $this->db->from('loan');
        $this->db->join('reader', 'reader.id_r = loan.id_r');
        $this->db->join('book', 'book.id_b = loan.id_b');

        $query = $this->db->get();
        return $query->result();
    }

    function getAllLoans(){
        $this->db->select('loan.id_ln, loan.start_date, loan.advance, loan.delivery, reader.id_r, reader.name_r, reader.last1_r, book.id_b, book.title');
        $this->db->from('loan');
        $this->db->join('reader', 'reader.id_r = loan.id_r');
        $this->db->join('book', 'book.id_b = loan.id_b');

        $this->db->order_by("start_date","desc");
        $query = $this->db->get();
        return $query->result();
    }

    function getBooks(){
        $this->db->select('title');
        $this->db->where('copy > copy_loan');
        $this->db->order_by("title","asc");
        $query = $this->db->get('book');
        return $query->result();

    }

    function addLoan($reader, $book, $start_date, $end_date, $credential, $notes_l){
        
        $this->db->select('id_r, CONCAT(name_r," ",last1_r," ",last2_r) AS name', FALSE);
        $query = $this->db->get('reader');
        foreach ($query->result() as $row) {
            if ($row->name == $reader) {
                $id_r = $row->id_r;
            }
        }

        $this->db->where('title', $book);
        $query2 = $this->db->get('book');
        if ($query2->num_rows() == 1) {
            foreach ($query2->result() as $row) {
                $id_b = $row->id_b;
            }
        }

        date_default_timezone_set('America/Mexico_City');
        $fecha = getdate();
        $fechaactual = "$fecha[year]-$fecha[mon]-$fecha[mday]";

        $fechahoy = new DateTime($fechaactual);
        $fechafin = new DateTime($end_date);

        if ($fechahoy <= $fechafin){
            $advance = "Vigente";
        } else {
            $advance = "Vencido";
        }

        $array = array('start_date' => $start_date,
                        'end_date'  => $end_date,
                        'advance'   => $advance,
                        'delivery' => 'No',
                        'notes_l'   => $notes_l,
                        'credential' => $credential,
                        'id_r'      => $id_r,
                        'id_b'      => $id_b
                    );
        $this->db->insert('loan', $array);

        $this->db->select('copy_loan');
        $this->db->where('id_b', $id_b);
        $query = $this->db->get('book');
        foreach ($query->result() as $row) {
            $copy_loan = $row->copy_loan+1;
        }

        $array = array('copy_loan' => $copy_loan);
        $this->db->where('id_b', $id_b);
        $this->db->update('book', $array);
    }

    function deleteLoan($id){
        $this->db->select('id_b, delivery');
        $this->db->where('id_ln', $id);
        $query = $this->db->get('loan');
        
        foreach ($query->result() as $row) {
            if ($row->delivery == "No") {
                $id_b = $row->id_b;
            }
        }

        $this->db->where('id_ln', $id);
        $this->db->delete('loan');

        $this->db->select('copy_loan');
        $this->db->where('id_b', $id_b);
        $query2 = $this->db->get('book');
        if ($query2->num_rows() == 1) {
            foreach ($query2->result() as $row) {
                $copy_loan = $row->copy_loan-1;
            }
        }

        $array = array('copy_loan' => $copy_loan);
        $this->db->where('id_b', $id_b);
        $this->db->update('book', $array);
    }

    function updateLoan($id, $end_date, $delivery, $credential, $notes_l){
        date_default_timezone_set('America/Mexico_City');
        $fecha = getdate();
        $fechaactual = "$fecha[year]-$fecha[mon]-$fecha[mday]";

        $fechahoy = new DateTime($fechaactual);
        $fechafin = new DateTime($end_date);

        if ($fechahoy <= $fechafin) {
            $advance = "Vigente";
        } else {
            $advance = "Vencido";
        }

        $this->db->select('id_b');
        $this->db->where('id_ln', $id);
        $query = $this->db->get('loan');
        
        foreach ($query->result() as $row) {
                $id_b = $row->id_b;
        }

        $array = array('end_date'  => $end_date,
                        'advance'  => $advance,
                        'delivery' => $delivery,
                        'notes_l'  => $notes_l,
                        'credential' => $credential
                    );
        $this->db->where('id_ln', $id);
        $this->db->update('loan', $array);

        if ($delivery == "Si") {
            $this->db->select('copy_loan');
            $this->db->where('id_b', $id_b);
            $query2 = $this->db->get('book');
            if ($query2->num_rows() == 1) {
                foreach ($query2->result() as $row) {
                    $copy_loan = $row->copy_loan-1;
                }
            }

            $array = array('copy_loan' => $copy_loan);
            $this->db->where('id_b', $id_b);
            $this->db->update('book', $array);
        }
    }
    
}