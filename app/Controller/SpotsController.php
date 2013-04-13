<?php
class SpotsController extends AppController{

	public function index()
	{
		$this->set('spots', $this->Spot->find('all'));
	}

	public function add()
	{
		$this->set('spots', $this->Spot->find('all'));
	}

	public function edit()
	{
		$this->set('spots', $this->Spot->find('all'));
	}

	public function view()
	{
		$this->set('spots', $this->Spot->find('all'));
	}

	public function delete()
	{
		$this->set('spots', $this->Spot->find('all'));
	}

	public function find()
	{
		$this->set('spots', $this->Spot->find('all'));
	}
}