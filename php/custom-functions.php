<?php
function generateRandomIndex($hexCodes, &$usedIndices)
{
    $count = count($hexCodes);
    $indices = [1, 2, 3]; // Possible indices

    if ($count >= 3) {
        // Remove indices that have been used before
        $availableIndices = array_diff($indices, $usedIndices);

        if (empty($availableIndices)) {
            // If all indices have been used, reset the usedIndices array
            $usedIndices = [];
            $availableIndices = $indices;
        }

        $randomIndex = array_rand($availableIndices);
        $usedIndices[] = $availableIndices[$randomIndex];

        return $hexCodes[$availableIndices[$randomIndex] - 1];
    } else {
        // If the count is less than 3, return the next hex code
        return $hexCodes[$count];
    }
}

$hexCodes = ['#93e8d3', '#a2d8e1', '#b2c9ef'];
$usedIndices = [];

?>