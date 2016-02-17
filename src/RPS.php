<?php

    class RPS {
      function playRps($input1, $computer) {
        if($input1 == $computer) {
          return "It's a Draw";
        }
        elseif($input1 == 'rock' && $computer == 'scissors') {
          return "You Win the Round.";
        }
        elseif($input1 == 'paper' && $computer == 'rock') {
          return "You Win the Round.";
        }
        elseif($input == 'scissors' && $computer == 'paper') {
          return "You Win the Round.";
        }
        else {
          return "Computer Wins the Round";
        }
      }
    }







 ?>
