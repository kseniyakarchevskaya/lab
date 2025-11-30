<?php
$fd1 = fopen("file1.txt", "r") or die("Не удалось открыть первый файл");
$str1 = trim(fread($fd1, filesize("file1.txt")));
fclose($fd1);
$fd2 = fopen("file2.txt", "r") or die("Не удалось открыть второй файл");
$str2 = trim(fread($fd2, filesize("file2.txt")));
fclose($fd2);
$words1 = explode(" ", $str1);
$words2 = explode(" ", $str2);
$count1 = array_count_values($words1);
$count2 = array_count_values($words2);
$only_first = array_diff(array_keys($count1), array_keys($count2));
$both = array_intersect(array_keys($count1), array_keys($count2));
$more_than_two = [];
foreach ($count1 as $word => $cnt) {
    if ($cnt > 2 && isset($count2[$word]) && $count2[$word] > 2) {
        $more_than_two[] = $word;
    }
}
$fd_new = fopen("result.txt", "w") or die("Не удалось создать файл результата");
fwrite($fd_new, "a) Только в первом файле:\n");
fwrite($fd_new, implode(" ", $only_first) . "\n\n");
fwrite($fd_new, "b) В обоих файлах:\n");
fwrite($fd_new, implode(" ", $both) . "\n\n");
fwrite($fd_new, "c) Более двух раз в каждом файле:\n");
fwrite($fd_new, implode(" ", $more_than_two) . "\n");
fclose($fd_new);
?>
