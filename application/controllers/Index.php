<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('index_model');
        $this->load->helper('url');
    }

    public function listFilesAndFolders($directory) {
        $results = [];
        $items = scandir($directory, SCANDIR_SORT_NONE);
        foreach ($items as $item) {
            if ($item === '.' || $item === '..') {
                continue;
            }
            $path = $directory . DIRECTORY_SEPARATOR . $item;
            if (is_dir($path)) {     
                $results[$item] = $this->listFilesAndFolders($path);
            } else {
                $results[] = $item;
            }
        }
        return $results;
    }

    public function index() {
        $data['page'] = "home";
        $data['folderStructure'] = $this->listFilesAndFolders(APPPATH); // Assuming APPPATH points to the root of your CodeIgniter application
        $this->load->view('index', $data);

    }

    public function api_view() {
        $data['page'] = "home";
        $this->load->view('api_view', $data);
    }
}
