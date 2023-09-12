<?php 

function intToRom($number)
{
    $roman = '';
    $values = array(
        1000, 900, 500, 400,
        100, 90, 50, 40,
        10, 9, 5, 4, 1
    );
    $romanSymbols = array(
        'M', 'CM', 'D', 'CD',
        'C', 'XC', 'L', 'XL',
        'X', 'IX', 'V', 'IV',
        'I'
    );

    for ($i = 0; $i < count($values); $i++) {
        while ($number >= $values[$i]) {
            $roman .= $romanSymbols[$i];
            $number -= $values[$i];
        }
    }

    return $roman;
}

function romToInt($roman)
{
    $romanValues = array(
        'I' => 1, 'V' => 5, 'X' => 10,
        'L' => 50, 'C' => 100, 'D' => 500,
        'M' => 1000
    );

    $result = 0;
    $prevValue = 0;

    for ($i = strlen($roman) - 1; $i >= 0; $i--) {
        $currentValue = $romanValues[$roman[$i]];
        if ($currentValue < $prevValue) {
            $result -= $currentValue;
        } else {
            $result += $currentValue;
        }
        $prevValue = $currentValue;
    }

    return $result;
}

?>