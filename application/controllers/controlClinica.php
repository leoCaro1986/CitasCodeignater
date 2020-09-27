<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controlClinica extends CI_Controller {

	
	public function index()
	{
    
		$this->load->view('layouts/header');
		$this->load->view('home');
		$this->load->view('layouts/footer');
    }
    

    public function save()
    {
            if ($this->input->post('name') == null)
        {
             echo "the name in requiered";
        }
        elseif
        ($this->input->post('lastName' ) == null)
       {
            echo "the lastname in requiered";
       } else
       if
       ($this->input->post('identification' ) == null)
       {
            echo "only numbers are allowed";
       } else
       if
       ($this->input->post('datebirth' ) == null)
       {
            echo "the datebirth in requiered";
       } else
       if
       ($this->input->post('city' ) == null)
       {
            echo "the city in requiered";
       } else
       if
       ($this->input->post('district' ) == null)
       {
            echo "the district in requiered";
       }else
     if 
       ($this-> input->post('cellphone' =="") && strlen('cellphone') < 10)
       {
            echo"enter ten numbers";
       }else
       


        {
                $name = $_POST['name'];
                $lastname = $_POST['lastName'];
                $identification = $_POST['identification'];
                $datebirth = $_POST['dateBirth'];
                $city = $_POST['city'];
                $district = $_POST['district'];
                $cellphone = $_POST['cellphone'];
                $data = array(
                    'name' =>$name,
                    'lastname' =>$lastname,
                    'identification' =>$identification,
                    'datebirth' =>$datebirth,
                    'city' =>$city,
                    'district' =>$district,
                    'cellPhone' =>$cellphone
                );
                $this->controlClinicaModel->control($data);
                
                header('location: http://localhost/WEBII/CitasCodeignater/ControlUser/');
               

            
        }
    }
    public function deleteAppointment()
    {
        $id = $this->input->get('id');
        $this->controlClinicaModel->deleteAppointment($id);
        header('location: http://localhost/WEBII/CitasCodeignater/ControlUser/');
    }

    public function updateAppointment()
    {
        $id = $this->input->get('id');
        $appointment = array('appointment' => $this-> controlClinicaModel->listUser($id));
        $this->load->view('layouts/header');
        $this->load->view('updateUser', $appointment);
        $this->load->view('layouts/footer');
    }

    public function update()
    {
        $id = $this->input->get('id');
        $name = $_POST['name'];
        $lastname = $_POST['lastName'];
        $identification = $_POST['identification'];
        $datebirth = $_POST['datebirth'];
        $city = $_POST['city'];
        $district = $_POST['district'];
        $cellphone = $_POST['cellphone'];
        $data = array(
            'name' =>$name,
            'lastname' =>$lastname,
            'identification'=>$identification,
            'dateBirth'=>$datebirth,
            'city'=>$city,
            'district'=>$district,
            'cellPhone'=>$cellphone
        );
        $this->controlClinicaModel->update($data);
        header('location: http://localhost/WEBII/CitasCodeignater/ControlUser/');
    }

}