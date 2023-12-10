<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class HomeController extends Controller {

    //form
    public function login() {
        $this->call->view('login');
    }
    public function register() {
        $this->call->view('register');
    }
    public function forgotpassword() {
        $this->call->view('forgotpassword');
    }

    //Homepage
	public function home(){
        $this->call->view('homepage/home');
    }
    public function about(){
        $this->call->view('homepage/about');
    }
    public function services(){
        $this->call->view('homepage/services');
    }
    public function eligibility(){
        $this->call->view('homepage/eligibility');
    }
    public function rules(){
        $this->call->view('homepage/rules');
    }
    public function contact(){
        $this->call->view('homepage/contact');
    }
    public function search(){
        $this->call->view('homepage/search');
    }
    public function scdetails(){
        $this->call->view('homepage/scdetails');
    }

    // dashboard
    public function dashboard(){
        $this->call->view('admin/dashboard');
    }
    public function manageservices(){
        $this->call->view('admin/manageservices');
    }
    public function editservices(){
        $this->call->view('admin/editservices');
    }
    public function managescdetails(){
        $this->call->view('admin/managescdetails');
    }
    public function editscdetails(){
        $this->call->view('admin/editscdetails');
    }
    public function unreadenq(){
        $this->call->view('admin/unreadenq');
    }
    public function viewenquiry(){
        $this->call->view('admin/viewenquiry');
    }
    public function readenq(){
        $this->call->view('admin/readenq');
    }
    public function aboutus(){
        $this->call->view('admin/aboutus');
    }
    public function contactus(){
        $this->call->view('admin/contactus');
    }
    public function page(){
        $this->call->view('admin/eligibilityPage');
    }
    public function newrules(){
        $this->call->view('admin/newrules');
    }
    public function addservices(){
        $this->call->view('admin/addservices');
    }
    public function datesreports(){
        $this->call->view('admin/datesreports');
    }
    public function addscdetails(){
        $this->call->view('admin/addscdetails');
    }
    public function searchs(){
        $this->call->view('admin/search');
    }
}
?>
