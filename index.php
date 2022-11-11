<?php
$play_count = 0;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;
$play_count = 0;

echo "I'm going to think of numbers between 1 and 10 (inclusive). Do you think you can guess correctly?\n";

function guessNumber()
{
    global $guess_high, $guess_low, $correct_guesses, $play_count;
    $play_count++;
    $percent_right = $correct_guesses / $play_count * 100;
    $random_number = rand(0, 10);

    echo "\n Make Your Guess... \n ";

    $guess = readline(">> ");
    $intValue = intval($guess);

    echo "Round: $play_count\nMy Number: $random_number\nYour guess: $guess\nCorrect Guesses: $correct_guesses\n";

    if ($random_number == $guess) {
        $correct_guesses++;
    } elseif ($random_number > $guess) {
        $guess_low++;
    } else {
        $guess_high++;
    }
    echo $percent_right . "% - how often you were correct! \n";
    if ($guess_high > $guess_low) {
        echo "When you guessed wrong, you tended to guess high.\n";
    } else {
        echo "When you guessed wrong, you tended to guess low.\n";
    }
}


for ($i = 0; $i < 10; $i++) {
    guessNumber();
}