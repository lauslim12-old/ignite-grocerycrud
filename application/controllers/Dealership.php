<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dealership extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->database();
		$this->load->library('grocery_CRUD');
  }

	public function output($output = null) {
    $this->load->view('table_display', (array) $output);
  }
  
  // 1. Simple, four line code.
  public function employees() {
    $crud = new grocery_CRUD();
    $crud->set_table('karyawan');
    $output = $crud->render();
    $this->load->view('table_display.php', $output);
  }

  // 2. More detailed code.
  public function vehicles() {
    $crud = new grocery_CRUD();
    $crud->set_table('mobil')
        ->set_subject('Vehicles')
        ->columns('SerialNumber', 'Merek', 'NamaMobil', 'Model', 'HargaJual')
        ->display_as('SerialNumber', 'Nomor Seri')
        ->display_as('NamaMobil', 'Nama Mobil')
        ->display_as('HargaJual', 'Harga Promo (Rp.)')
        ->set_theme('datatables');

    $output = $crud->render();
    $this->output($output);   
  }

  // 3. Relational database connections.
  public function relational() {
    $crud = new grocery_CRUD();
    $crud->set_table('karyawan')
        ->set_subject('Karyawan')
        ->columns('ID_Karyawan', 'NamaDepan', 'NamaBelakang', 'Email', 'JobID', 'ID_Manager', 'ID_Perusahaan')
        
        ->display_as('ID_Perusahaan', 'Nama Perusahaan')
        ->display_as('JobID', 'Job Desc')
        ->display_as('ID_Manager', 'ID Manager')
        
        ->set_relation('ID_Perusahaan', 'Perusahaan', 'NamaPerusahaan')
        ->set_relation('JobID', 'Job', 'JobDesc')
        ->set_relation('ID_Manager', 'Karyawan', 'ID_Karyawan')

        ->unset_delete()
        ->unset_print()
        ->unset_export();
    
    $output = $crud->render();
    $this->output($output);
  }

  // 4. Validations
  public function validation() {
    $crud = new grocery_CRUD();
    $crud->set_table('perusahaan')
        ->set_subject('Perusahaan')
        ->columns('NamaPerusahaan', 'ZipCode', 'NoTelp', 'Email')
        ->fields('NamaPerusahaan', 'ZipCode', 'NoTelp', 'Email')
        
        // Follows CodeIgniter's validation rules.
        ->set_rules('NamaPerusahaan', 'Nama Perusahaan', 'required')
        ->set_rules('ZipCode', 'Zip Code', 'integer')
        ->set_rules('NoTelp', 'Nomor Telepon', 'numeric')
        ->set_rules('Email', 'Email', 'valid_email');

    $output = $crud->render();
    $this->output($output);
  }

}
