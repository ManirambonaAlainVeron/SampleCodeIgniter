<?php 
    class model_etudiant extends CI_model{
        public function __construct(){
            $this->load->database();
        }

        public function create_etudiant(){
            $data = array(
                'nom' => $this->input->POST('nom') , 
                'prenom' => $this->input->POST('prenom'),
                'naissance' => $this->input->POST('naissance'),
                'contact' => $this->input->POST('contact'),
                'bio' => $this->input->POST('bio')
            );
            $this->db->insert('etudiant',$data);
        }

        public function load_all_etudiants(){
            $query = $this->db->get('etudiant');
            return $query->result();
        }

        public function load_etudiant($id){
            $query = $this->db->get_where('etudiant', array('id'=>$id));
            return $query->row();
        }

        public function update_etud($id){
            $data = array(
                'nom' => $this->input->POST('nom') , 
                'prenom' => $this->input->POST('prenom'),
                'naissance' => $this->input->POST('naissance'),
                'contact' => $this->input->POST('contact'),
                'bio' => $this->input->POST('bio')
            );
            $this->db->where('id',$id);
            $this->bd->update('etudiant', $data);

        }

        public function delete_etud($id){
            $this->db->where('id',$id);
            $this->db->delete('etudiant');
        }
    }
?>