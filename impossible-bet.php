<?php
require_once './classes/impossibleBetClass.php';

$runTimes = $argv[1];
$results = array('completeWin'=>0
				 );
$run = 1;
while($run <=$runTimes){
	$x = new impossibleBet();
	$x->buildData();
	$x->trialEachUser();
	$res = $x->getResults();
	//print_r($res);
	if($res['allWin'] == 1)
		$results['completeWin']++;
	$run++;
}
// is/of = %/100
$percent = ($results['completeWin'] * 100) / $runTimes;
echo "Total Wins: ".number_format($results['completeWin'])."\n";
echo "Total Losses: ".number_format($runTimes-$results['completeWin'])."\n";
echo "Trials: ".number_format($runTimes)."\n";
echo "Win %: ".number_format($percent)."\n";