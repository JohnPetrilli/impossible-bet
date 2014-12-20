impossible-bet
==============

Proof for the impossible bet problem. It is also called the "100 Prisoners Problem"

The 100 prisoners problem is a mathematical problem from probability theory and combinatorics. In this problem, in order to survive, 100 prisoners have to find their own numbers in one of 100 drawers. Thereby, each prisoner may open only 50 of the drawers and cannot communicate with the other prisoners. At first glance the situation appears hopeless, but a clever strategy exists which offers the prisoners a realistic chance of survival. The problem was first posed in 2003 by Danish computer scientist Peter Bro Miltersen.

Quoted from: http://en.m.wikipedia.org/wiki/100_prisoners_problem


How to use
==============
This is designed to be run via the command line, although you could tweak it to run via a web server (apache).


to run this
php ./impossible-bet.php N

N is the number of trials to run.

Example: 

php ./impossible-bet.php 100 

(will run 100 trials)

Examples:

john$ php impossible-bet.php 100

Total Wins: 28

Total Losses: 72

Trials: 100

Win %: 28

john$ php impossible-bet.php 1000

Total Wins: 318

Total Losses: 682

Trials: 1,000

Win %: 32