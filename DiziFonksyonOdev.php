<?php
declare(strict_types=1);
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];
// Filter once to remove empty and null entries, then reindex for cache-friendly access
$filteredPlanets = array_values(array_filter($planets));

if (PHP_SAPI !== 'cli') {
    header('Content-Type: application/json; charset=utf-8');
}

function getRandomItems(array $items, int $count): array {
    $total = count($items);
    if ($count <= 0) {
        return [];
    }
    if ($count >= $total) {
        return $items;
    }
    $keys = array_rand($items, $count);
    if (!is_array($keys)) {
        $keys = [$keys];
    }
    $result = [];
    foreach ($keys as $keyIndex) {
        $result[] = $items[$keyIndex];
    }
    return $result;
}

$results = [
    'random2' => getRandomItems($filteredPlanets, 2),
    'random3' => getRandomItems($filteredPlanets, 3),
    'random2b' => getRandomItems($filteredPlanets, 2),
    'random4' => getRandomItems($filteredPlanets, 4),
    'random5' => getRandomItems($filteredPlanets, 5),
];

echo json_encode($results, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
