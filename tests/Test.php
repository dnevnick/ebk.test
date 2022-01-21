<?php
include '..\SeparateArray.php';

class Test
{
    private array $cases = [];

    public function __construct($testCases)
    {
        $this->cases =  $testCases;
    }

    public function run(): bool
    {
        foreach($this->cases as $case){
            $separateArray = new SeparateArray($case['number'], $case['set']);
            $algorithmResult = $separateArray->splitArrayWithLinearAlgorithm();

            if($algorithmResult !== $case['result']){
                $this->consoleLogErrorMessage( $case['set'], $case['result'], $algorithmResult);
                return false;
            }

        }

        return true;
    }

    public function consoleLogErrorMessage($set, $caseResult, $algorithmResult)
    {
        echo("Результат алгоритма: $algorithmResult \n");
        echo("Ответ из теста: $caseResult \n");
        print_r($set);
    }

}