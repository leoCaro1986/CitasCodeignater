<?php

class controlClinicaModel extends CI_Model
{

    public function control($data){

        $this->db->insert('appointment', $data);

    }


    public function ListUsers(){

        $response =$this->db->query("SELECT * FROM appointment")->result();
        return $response;

    }
    public function deleteAppointment($id){
    $result = $this->db->query("DELETE FROM appointment WHERE id={$id}");
   

    }

    public function listUser($id)
    {
    $result = $this->db->query("SELECT * FROM appointment WHERE id = {$id}")->result();
        return $result[0];
    }
    public function update($data)
    {
    $result=$this->db->query("UPDATE appointment SET name='{$data['name']}', lastName ='
    {$data['lastname']}', identification ='{$data['identification']}', 
    dateBirth ='{$data['dateBirth']}', city='{$data['city']}', district='{$data['district']}', 
    cellphone='{$data['cellPhone']}'"); 
    }
}