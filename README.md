# Exercises

***Generate Pyramid Asterisk*** - it will basically generate a pyramid using php for loop method.

# How to run the program.
***Usage:***
```
$ php asterisk.php -n <integer> [--with_line_space] [--inverted]
```

***Options***
```
-n  --num_asterisk        Number of asterisk.
-l  --without_line_space  Remove space between lines.
-i  --inverted            Inverted triangle.
```

# Example
***Pyramid with line space***
```
$ php asterisk.php -n 10

    *

   ***

  *****

 *******

*********
```

***Pyramid without line space***
```
$ php asterisk.php -n 10 -l

    *
   ***
  *****
 *******
*********
```

***Inverted pyramid without line space***
```
$ php asterisk.php -n 10 -l -i

 ***********
  *********
   *******
    *****
     ***
      *
```
