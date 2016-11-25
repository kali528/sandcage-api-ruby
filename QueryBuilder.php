<?php

class QueryBuilder{

	protected $pdo;

	public function __construct($pdo){
		$this->pdo = $pdo;
	}

	public function selectAllUsers($table){

		$qUsers = $this->pdo->prepare("select * from {$table}");

		$qUsers->execute();
	
		return $qUsers->fetchAll(PDO::FETCH_CLASS);
	}
}
