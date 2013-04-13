<?php
class SpotsController extends AppController{

	public function index()
	{
		$this->set('spots', $this->Spot->find('all'));
	}
}