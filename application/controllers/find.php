<?php

class Find extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->helper('form');

        $this->load->model('searchmodel');
    }

    public function index() {
        $this->home();
    }

//navigation bar, header and footer
    public function home() {
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('footer');
    }

    public function homepage() {
        $this->load->view('header');
        $this->load->view('adminnav');
        $this->load->view('footer');
    }

    public function search() {
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('searchview');
        $this->load->view('footer');
    }

    function findemp() {
        $this->load->model('searchmodel'); //find function loading the searchmodel

        $firstname = $this->input->get('firstname');
        $lastname = $this->input->get('lastname');
        $department = $this->input->get('department');
        $title = $this->input->get('title');

        $results = $this->searchmodel->search($firstname, $lastname, $department, $title);

        $data['count'] = count($results['rows']);
        $data['results'] = $results['rows']; // inside array

        echo json_encode($data);
    }

    public function execute_search() {
        // this is where posted search term is retrieved
        $search_term = $this->input->post('search');

        //search model is retrieved.
        $data['results'] = $this->searchmodel->get_results($search_term);

        // Now it passing the results to searchview.
        $this->load->view('searchview', $data);
    }

    function addemp() {
        $this->load->view('header');
        $this->load->view('adminnav');
        $this->load->view('addemp');
        $this->load->view('footer');
        
        $firstname = $this->input->get('firstname');  //storing input into object variables
        $lastname = $this->input->get('lastname');
        $dateofbirth = $this->input->get('dateofbirth');
        $gender = $this->input->get('gender');
        $department = $this->input->get('department');
        $dept_no = $this->input->get('dept_no');
        $title = $this->input->get('title');
        $hiredate = $this->input->get('hiredate');
        $fromdate = $this->input->get('fromdate');
        $todate = $this->input->get('todate');
        $salary = $this->input->get('salary');
    }

    public function do_Add() {
        $this->session->sess_destroy(); //add session
        redirect('add');
    }

}

?>
