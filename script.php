<?php

$filename = "https://bc-v2.pressmatrix.com/pt-BR/profiles/c9e49eb97a66/editions/13e7845d8934afa67619/pages/toc";

$content = file_get_contents($filename);

$pattern = '/https:\/\/[\w-]+\.[\w-]+\.[\w-]+\/[\w-]+\.[\w-]+\.[\w-]+\.[\w-]+\/\w+\/[\w-]+\/[\w-]+\/[\w-]+\/\d+\/\d+\/\d+\/\w+\/\w+\/\w+\.jpg\?\d+/';

preg_match_all($pattern, $content, $match);

foreach ($match['0'] as $value) {
    echo $value . "<br>";
}
