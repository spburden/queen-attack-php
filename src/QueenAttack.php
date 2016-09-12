<?php
class Queen
{
    function canAttackHorizontal($queenX, $queenY, $pieceX, $pieceY) {
        if ($queenY == $pieceY) {
            return true;
        } else {
            return false;
        }
    }

    function canAttackVertical($queenX, $queenY, $pieceX, $pieceY) {
        if ($queenX == $pieceX) {
            return true;
        } else {
            return false;
        }
    }

    function canAttackDiagonal($queenX, $queenY, $pieceX, $pieceY) {
        $x_array = array(' ', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h');
        $queenXIndex = array_search($queenX, $x_array);
        $pieceXIndex = array_search($pieceX, $x_array);
        $xDifference = abs($queenXIndex - $pieceXIndex);
        $yDifference = abs($pieceY - $queenY);
        if ($xDifference == $yDifference) {
            return true;
        } else {
            return false;
        }
    }

    function canAttack($queenX, $queenY, $pieceX, $pieceY) {
        $x_array = array(' ', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h');
        $queenXIndex = array_search($queenX, $x_array);
        $pieceXIndex = array_search($pieceX, $x_array);
        $xDifference = abs($queenXIndex - $pieceXIndex);
        $yDifference = abs($pieceY - $queenY);
        if ($xDifference == $yDifference) {
            return true;
        } elseif ($queenX == $pieceX) {
            return true;
        } elseif ($queenY == $pieceY) {
            return true;
        } else {
            return false;
        }
    }

}
?>
