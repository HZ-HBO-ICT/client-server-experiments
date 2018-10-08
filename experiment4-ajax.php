<?php
	//Now, let's play
	$returnText = 'You have not played yet. Select your weapon and hit the Play button';
	if (isset($_GET['choice'])) {
		$userChoice = $_GET['choice'];

        //Let the computer make a choice
		$computerChoice = getComputerChoice();

        //Now, let's play, and return the result  text!
		$returnText = "The server chose $computerChoice. ";
		$result = compare($userChoice, $computerChoice);
		if($result == 0) {
			$returnText .= 'The result is a Tie!';
		} else if($result == 1) {
			$returnText .= 'You won!';
		} else {
			$returnText .= 'The server won!';
		} 
	}
    
    // Echo the result to the HTTP response
    echo $returnText;

    /**
     * function creates a random choice between rock, paper or scissors
     */
    function getComputerChoice() 
    {
		$computerChoice = rand(0, 2);
		if ($computerChoice == 0) {
			return "rock";
		} else if ($computerChoice == 1) {
			return "paper";
		} else {
			return "scissors";
		}
    }

    /**
     * Function Compares two choices and returns a number representing the result:
     * 0 = the result is a Tie
     * 1 = $choice1 wins
     * 2 = $choice2 wins
     */
    function compare($choice1, $choice2) 
    {
        if ($choice1 === $choice2) {
            return 0;
        }
        if ($choice1 === 'rock') {
            if ($choice2 === 'scissors') {
                return 1;
            } else {
                return 2;
            }
        }
        if ($choice1 === 'paper') {
            if ($choice2 === 'rock') {
                return 1;
            } else {
                return 2;
            }
        }
        if ($choice1 === 'scissors') {
            if ($choice2 === 'paper') {
                return 1;
            } else {
                return 2;
            }
        }
    }    

?>
