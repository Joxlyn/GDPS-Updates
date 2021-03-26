<?php
/*
	QUESTS
*/
//NOW SET IN THE QUESTS TABLE IN THE MYSQL DATABASE
/*
	REWARDS
*/
//SMALL CHEST
$chest1minOrbs = 400;
$chest1maxOrbs = 800;
$chest1minDiamonds = 4;
$chest1maxDiamonds = 8;
$chest1minShards = 1;
$chest1maxShards = 2;
$chest1minKeys = 2;
$chest1maxKeys = 12;
//BIG CHEST
$chest2minOrbs = 1600;
$chest2maxOrbs = 3200;
$chest2minDiamonds = 16;
$chest2maxDiamonds = 32;
$chest2minShards = 2;
$chest2maxShards = 4; // THIS VARIABLE IS NAMED IMPROPERLY, A MORE ACCURATE NAME WOULD BE $chest2minItemID AND $chest2maxItemID, BUT I DON'T WANT TO RENAME THIS FOR COMPATIBILITY REASONS... IF YOU'RE GETTING A BLANK CUBE IN YOUR DAILY CHESTS, YOU SET THIS TOO HIGH
$chest2minKeys = 4;
$chest2maxKeys = 24;
//REWARD TIMES (in seconds)
$chest1wait = 1800;
$chest2wait = 7200;
?>