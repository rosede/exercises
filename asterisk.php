<?php
/**
* asterisk.php
*
* Generate Pyramid Asterisk.
*
* @author Rose Estrada
*/

  echo "\n";
  if (empty($argv[1])) {
    echo "Argument is empty. Please pass an integer.\n"
      ."Usage: asterisk.php -n <integer> [--with_line_space] [--inverted]\n"
      ."Options:\n"
      ."   -n \t --num_asterisk \t Number of asterisk.\n\n"
      ."   -l \t --without_line_space \t Remove space between lines.\n\n"
      ."   -i \t --inverted \t\t Inverted triangle.\n\n";
    exit(1);
  } else {
    $shortopts = "n:l::i::";
    $longopts = array(
      'num_asterisk:',
      'without_line_space::',
      'inverted::',
    );
    // Get the options
    $options = getopt($shortopts, $longopts);

    // Number of asterisk
    $num = $options['n'];

    // Put space for each line
    $without_line_space = False;
    if (array_key_exists('l', $options)
    or array_key_exists('without_line_space', $options)) {
      $without_line_space = True;
    }

    // Output pyramid
    if (array_key_exists('i', $options)
    or array_key_exists('inverted', $options)) {
      asterisk_inverted_pyramid($num, $without_line_space);
    } else {
      asterisk_pyramid($num, $without_line_space);
    }
  }

  /*
  * Output pyramid base on the number of given astekrisk.
  */
  function asterisk_pyramid($num, $without_line_space=False) {
    // Number of spaces before printing asterisk.
    $num_spaces = (int)($num / 2) - 1;

    for ($i = 0; $i < $num; ++$i) {
      // Doesn't print on even number/count.
      if ($i % 2)
        continue;
        if (!$without_line_space)
          echo "\n";

      // Print space continuesly until it reached $num_space value
      for ($j = 0; $j < $num_spaces; ++$j) {
        echo " ";
      }
      --$num_spaces;

      // Print asterisk
      for ($j = 0; $j <= $i; ++$j) {
        echo "*";
      }
      echo "\n";
    }
  }

  /*
  * Output inverted pyramid base on the number of given astekrisk.
  */
  function asterisk_inverted_pyramid($num, $without_line_space=False) {
    // Get the number of space before printing the asterisk.
    $num_spaces = (int)($num / 2) - 1;
    $total_num_spaces = $num_spaces;

    for ($i = $num; $i >= 0; --$i) {
      if ($i % 2)
        continue;
        if (!$without_line_space)
          echo "\n";
      // Print space
      for ($j = $total_num_spaces; $j <= $num_spaces; ++$j) {
        echo " ";
      }
      --$total_num_spaces;

      // Print asterisk until the $j value will be equal to 0.
      for ($j = $i; $j >= 0; --$j) {
        echo "*";
      }
      echo "\n";
    }
  }

?>
