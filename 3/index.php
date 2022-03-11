<?php

// Возьмите все числа от 1 до 10000 (включительно). 
// Выбросьте из этой последовательности все числа, где встречаются 
// последовательности из трех последовательно восходящих цифр (например 012 или 678). 
// Найдите сумму оставшихся чисел.

function checkIsAscNumbers($stringNumber)
{
  for ($i = 1; $i < strlen($stringNumber) - 1; $i++) {
    if ($stringNumber[$i] - 1 == $stringNumber[$i - 1] && $stringNumber[$i] + 1 == $stringNumber[$i + 1]) return false;
  }
  return true;
}

for ($i = 1; $i <= 10000; $i++) {
  if (checkIsAscNumbers(strval($i))) $sum += $i;
}

echo $sum;
