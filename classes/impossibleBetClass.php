<?php
class impossibleBet{
	static $settings;
	static $maxTries;
	
	function __construct(){
		//habit to create this
		$this->settings['users'] = 100;
		$this->settings['maxTries'] = 50;
	}
	function displaySettings(){
		print_r($this->settings);
	}
	function buildData(){
		$numbers = range(1, $this->settings['users']);
		shuffle($numbers);
		$numbers[100] = $numbers[0];
		unset($numbers[0]);
		for($user=1;$user<=$this->settings['users'];$user++)
			$this->settings['boxes'][$user] = $numbers[$user];
	}
	function trialEachUser(){
		$result = array();
		for($user=1;$user<=$this->settings['users'];$user++){
			$result[$user] = $this->runThroughBoxes($user);
		}
		$this->setResults($result);
	}
	function setResults($result){
		$wins = 0;
		$losses = 0;
		foreach($result as $k=>$v){
			if($v == 1)
				$wins++;
			else
				$losses++;
		}
		if($wins == $this->settings['users'])
			$allWin = true;
		else
			$allWin = false;
		$this->settings['results'] = array('wins'=>$wins,'losses'=>$losses,'allWin'=>$allWin);
	}
	function getResults(){
		return $this->settings['results'];
	}
	function runThroughBoxes($user_id){
		/*
			lets start at the box with our ID. 
			If we get a box with our ID in it (which leads us back to our starting box
			within 50 tries, we win. Otherwise we lose.
		*/
		$goto = $user_id;
		$tries = 1;
		$win = false;
		while($tries <= $this->settings['maxTries']){
			//echo "Tries: $tries Goto: $goto ".$this->settings['boxes'][$goto]."\n";
			if($this->settings['boxes'][$goto] == $user_id){
				$win = true;
				break;
			}else{
				$goto = $this->settings['boxes'][$goto];
			}
			$tries++;
		}
		return $win;
		
	}

	
}