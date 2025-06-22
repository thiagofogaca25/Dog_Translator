<?php
function toDogLanguage($phrase, $mode = 'normal') {
    $dictionary = [
        'normal' => ['au', 'woof', 'grrr', 'ruf', 'bark', 'arf'],
        'fofo' => ['bau', 'auzinho', 'ruf ruf', 'arf arf', 'yip'],
        'raivoso' => ['WOOF', 'GRRR', 'RAWR', 'AU! AU!', 'BARK!!']
    ];

    $words = explode(' ', strtolower($phrase));
    $dogWords = [];

    $barkSet = $dictionary[$mode] ?? $dictionary['normal'];

    foreach ($words as $word) {
        $barks = [];
        for ($i = 0; $i < rand(2, 4); $i++) {
            $barks[] = $barkSet[array_rand($barkSet)];
        }
        $dogWords[] = implode(' ', $barks);
    }

    return implode(' | ', $dogWords);
}
