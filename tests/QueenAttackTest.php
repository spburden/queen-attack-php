<?php
    require_once "src/QueenAttack.php";

    class QueenAttackTest extends PHPUnit_Framework_TestCase
    {
        // function test_canAttackHorizontal()
        // {
        //     //Arrange
        //     $test_canAttackHorizontal = new Queen;
        //     $queenX = "a";
        //     $queenY = 4;
        //     $pieceX = "b";
        //     $pieceY = 4;
        //
        //     //Act
        //     $result = $test_canAttackHorizontal->canAttackHorizontal($queenX, $queenY, $pieceX, $pieceY);
        //
        //     //Assert
        //     $this->assertEquals(true, $result);
        // }

        // function test_canAttackVertical()
        // {
        //     //Arrange
        //     $test_canAttackVertical = new Queen;
        //     $queenX = "a";
        //     $queenY = 1;
        //     $pieceX = "a";
        //     $pieceY = 4;
        //
        //     //Act
        //     $result = $test_canAttackVertical->canAttackVertical($queenX, $queenY, $pieceX, $pieceY);
        //
        //     //Assert
        //     $this->assertEquals(true, $result);
        // }

        // function test_canAttackVertical()
        // {
        //     //Arrange
        //     $test_canAttackVertical = new Queen;
        //     $queenX = "a";
        //     $queenY = 1;
        //     $pieceX = "a";
        //     $pieceY = 4;
        //
        //     //Act
        //     $result = $test_canAttackVertical->canAttackVertical($queenX, $queenY, $pieceX, $pieceY);
        //
        //     //Assert
        //     $this->assertEquals(true, $result);
        // }

        // function test_canAttackDiagonal()
        // {
        //     //Arrange
        //     $test_canAttackDiagonal = new Queen;
        //     $queenX = "b";
        //     $queenY = 6;
        //     $pieceX = "a";
        //     $pieceY = 1;
        //
        //     //Act
        //     $result = $test_canAttackDiagonal->canAttackDiagonal($queenX, $queenY, $pieceX, $pieceY);
        //
        //     //Assert
        //     $this->assertEquals(false, $result);
        // }

        function test_canAttack()
        {
            //Arrange
            $test_canAttack = new Queen;
            $queenX = "a";
            $queenY = 1;
            $pieceX = "a";
            $pieceY = 8;

            //Act
            $result = $test_canAttack->canAttack($queenX, $queenY, $pieceX, $pieceY);

            //Assert
            $this->assertEquals(true, $result);
        }


    }
?>
