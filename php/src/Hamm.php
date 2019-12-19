<?php namespace Acme;

class Hamm 
{
    public function countingPointMutations(string $input): int
    {
        $input = preg_split('/\n/', $input);

        $countInput = strlen($input[0]);
        $numberOfMutations = 0;

        if (!$this->doDnaStringsHaveSameLength($input[0], $input[1])) {
            return 'Different size strings';
        }

        for ($i = 0; $i < $countInput; $i += 1) {
            $numberOfMutations += !$this->compareChars($input[0][$i], $input[1][$i]);
        }
        
        return $numberOfMutations;
    }

    private function compareChars(string $a, string $b): bool
    {
        return ($a === $b) ? 1 : 0;
    }

    private function doDnaStringsHaveSameLength(string $first, string $second): bool
    {
        return strlen($first) === strlen($second);
    }
}
