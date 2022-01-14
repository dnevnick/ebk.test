<?php
/* Так, попробуем тут алгоритм написать и начать его запускать из консоли
 Потом всю шелупонь обернем, api-json и все остальное
14:22 МСК 14.01.2022
Я не могу оценить сколько времени займет написание алгоритма

Сервис, который принимает
1. целое число (далее N)
2. массив целых чисел

Необходимо разделить входной массив таким образом, чтобы количество чисел N в первой части оказалось равно количеству
чисел не равных N во второй и это количество должно быть больше 0.
Если невозможно возвращаем -1.
Сложность алгоритма должна быть o(n) по времени и о(1) по памяти

Пример:
N = 5
[5, 5, 1, 7, 2, 3, 5]
делим так:
[5, 5, 1, 7 | 2, 3, 5]
две пятерки в первой части и две не-пятерки во второй.
в ответе нужен индекс числа, перед которым ставим разделитель
число: 2
ответ: 4

*/