<?php

$html = '<div class="textiki"><p class="text">Я текст</p><p class="text2">Я тоже текст</p></div>';
$pattern = "/<(\w+)(\s+[^>]*)?>/";
preg_match_all($pattern, $html, $matches);
echo 'Найденные теги:<br><br>';
foreach ($matches[0] as $tag) {
    echo htmlspecialchars($tag) . '<br>';
}