<?php
    class Pages extends Controller
    {
        public function __construct()
        {
            
        }
        public function index()
        {
            $data = [
                'title' => 'sharepost',
                'description' => 'Simple social network built on the Mvc-Framework'
            ];

            $this->view('pages/index', $data);
        }

        public function about()
        {
            $data = [
                'title' => 'About',
                'description' => 'App to share posts with other users'
            ];
            $this->view('pages/about', $data);
        }
    }
    