<?php

class GuestHome extends MY_Controller
{
	public function index()
	{
		$this->load->helper('form');
		$this->load->view('guest/guesthome');
	}

	public function bulkOrder()
	{
		$name = $this->input->post('name');
		echo "name: $name";
	}
}