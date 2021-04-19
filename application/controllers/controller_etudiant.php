<?php 
    class controller_etudiant extends CI_Controller{
        public function index_etudiant(){
            $data['result'] = $this->model_etudiant->load_all_etudiants();
            $this->load->view('header');
            $this->load->view('Index_etudiant', $data );
            $this->load->view('footer');
        }

        public function ajouter_etudiant(){
            $this->model_etudiant->create_etudiant();
            redirect("controller_etudiant/index_etudiant");
        }

        public function editer_etudiant($id){
            $data['row'] = $this->model_etudiant->load_etudiant($id);
            $this->load->view('header');
            $this->load->view('edit_etudiant', $data);
            $this->load->view('footer');
        }

        public function update_etudiant($id){
            $this->model_etudiant->update_etud($id);
            redirect("controller_etudiant/index_etudiant");
        }

        public function delete_etudiant($id){
            $this->model_etudiant->delete_etud($id);
            redirect("controller_etudiant/index_etudiant");
        }
    }
?>