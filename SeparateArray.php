<?php

class SeparateArray
{
    private int $numberToFind;
    private array $arrayToSplit;

    public function __construct($num, $arr)
    {
        $this->numberToFind = $num;
        $this->arrayToSplit = $arr;
    }

    public function splitArrayWithLinearAlgorithm(): int
    {
        $arrayLength = count($this->arrayToSplit);
        $leftSum = 0;
        $rightSum = 0;
        $leftArray = [];
        $rightArray = [];


        for($i = 1; $i < $arrayLength; $i++){

            //Начинаем со второго элемента массива и смотрим на цифру слева от него
            //Проверяем, что слева целое число, если нет - выходим
            if(gettype($this->arrayToSplit[$i-1])!=='integer')
            {
                return -1;
            }

            if ($this->arrayToSplit[$i-1] === $this->numberToFind){
                $leftSum++;
            }
            $leftArray[$i] = $leftSum;

            //Идем с обратной стороны массива и смотрим на цифру справа от предпоследнего
            //Проверяем, что справа целое число
            if(gettype($this->arrayToSplit[$arrayLength - $i])!=='integer')
            {
                return -1;
            }

            if($this->arrayToSplit[$arrayLength - $i] !== $this->numberToFind){
                $rightSum++;
            }
            $rightArray[$arrayLength - $i] = $rightSum;

            if($leftArray[$i]===$rightArray[$i]
                && $leftArray[$i]!=null
                && $rightArray[$i]!=null)
            {
                return $i;
            }

            if($leftArray[$arrayLength - $i]===$rightArray[$arrayLength - $i]
                && $leftArray[$arrayLength - $i]!=null
                && $rightArray[$arrayLength - $i]!=null)
            {
                return $arrayLength - $i;
            }
        }

        return -1;

    }

    public function splitArrayWithQuadraticAlgorithm(): int
    {
        $leftSum=0;

        for($i=0; $i<count($this->arrayToSplit); $i++){
            $rightSum=0;
            if($this->arrayToSplit[$i]==$this->numberToFind){
                $leftSum++;
            }
            for($j=$i+1;$j<count($this->arrayToSplit); $j++){

                if($this->arrayToSplit[$j]!=$this->numberToFind){
                    $rightSum++;
                }
            }

            if($leftSum==$rightSum && $leftSum!=0 && $rightSum!=0){
                return $i+1;

            }
        }
        return -1;
    }
}