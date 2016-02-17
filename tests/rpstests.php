<?php
    require_once "src/rps_functions.php";

    class rpstests extends PHPUnit_Framework_TestCase {

        function test_rockpaperscissors() {

            //Arrange
            $test_rockpaperscissors = new RPS;
            $first_input = "rock";
            $second_input ="scissors";

            //Act
            $result = $test_rockpaperscissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Player Wins", $result);
        }
        function test_rockpaperscissors() {

            //Arrange
            $test_rockpaperscissors = new RPS;
            $first_input = "rock";
            $second_input ="paper";

            //Act
            $result = $test_rockpaperscissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Computer Wins", $result);
        }
        function test_rockpaperscissors() {

            //Arrange
            $test_rockpaperscissors = new RPS;
            $first_input = "rock";
            $second_input ="rock";

            //Act
            $result = $test_rockpaperscissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Draw", $result);
          }
          function test_rockpaperscissors() {

              //Arrange
              $test_rockpaperscissors = new RPS;
              $first_input = "paper";
              $second_input ="rock";

              //Act
              $result = $test_rockpaperscissors->playGame($first_input, $second_input);

              //Assert
              $this->assertEquals("Player Wins", $result);
        }
        function test_rockpaperscissors() {

            //Arrange
            $test_rockpaperscissors = new RPS;
            $first_input = "paper";
            $second_input ="paper";

            //Act
            $result = $test_rockpaperscissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Draw", $result);
          }
          function test_rockpaperscissors() {

              //Arrange
              $test_rockpaperscissors = new RPS;
              $first_input = "paper";
              $second_input ="scissors";

              //Act
              $result = $test_rockpaperscissors->playGame($first_input, $second_input);

              //Assert
              $this->assertEquals("Computer Wins", $result);
            }
            function test_rockpaperscissors() {

                //Arrange
                $test_rockpaperscissors = new RPS;
                $first_input = "scissors";
                $second_input ="rock";

                //Act
                $result = $test_rockpaperscissors->playGame($first_input, $second_input);

                //Assert
                $this->assertEquals("Computer Wins", $result);
              }
              function test_rockpaperscissors() {

                  //Arrange
                  $test_rockpaperscissors = new RPS;
                  $first_input = "scissors";
                  $second_input ="paper";

                  //Act
                  $result = $test_rockpaperscissors->playGame($first_input, $second_input);

                  //Assert
                  $this->assertEquals("Player Wins", $result);
                }
                function test_rockpaperscissors() {

                    //Arrange
                    $test_rockpaperscissors = new RPS;
                    $first_input = "scissors";
                    $second_input ="scissors";

                    //Act
                    $result = $test_rockpaperscissors->playGame($first_input, $second_input);

                    //Assert
                    $this->assertEquals("Draw", $result);
              }
    }



 ?>
