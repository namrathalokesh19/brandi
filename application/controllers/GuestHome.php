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
		$product = $this->input->post('product');
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$phone = $this->input->post('contact');
		$unisex = $this->input->post('unisex');
		$male = $this->input->post('male');
		$female = $this->input->post('female');
		$total = $this->input->post('total');
		$front = $this->input->post('front');
		$rear = $this->input->post('rear');
		$pocket = $this->input->post('pocket');
		$left_sleeve = $this->input->post('left');
		$right_sleeve = $this->input->post('right');
		$message = $this->input->post('msg');

		$this->load->model('BulkOrderModel');
		$this->BulkOrderModel->save_order($product, $name, $email, $phone, $unisex, $male, $female, $total, $front, $rear, $pocket, $left_sleeve, $right_sleeve, $message);
	}
}