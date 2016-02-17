<?php

    class RPS {

      function computer() {
        $computer = rand(1,3);
        if($computer == 1) {
        $computerthrow == "rock";
        }
        if($computer == 2) {
          $computerthrow == "paper";
        }
        if($computer == 3) {
          $computerthrow == "scissors";
        }
      }

      function playRps($input1, $computer) {
        if($input1 == $computer) {
          return "It's a Draw";
        }
        elseif($input1 == 'rock' && $computerthrow == 'scissors') {
          return "You Win the Round.";
        }
        elseif($input1 == 'paper' && $computerthrow == 'rock') {
          return "You Win the Round.";
        }
        elseif($input == 'scissors' && $computerthrow == 'paper') {
          return "You Win the Round.";
        }
        else {
          return "Computer Wins the Round";
        }


      }
    }







 ?>
