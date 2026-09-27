<?php
/**
 * Counter Logic for Gyanganga Institute of Technology and Sciences
 * Manages persistent visitor hit counter in counter.txt
 */

function get_counter($filepath = __DIR__ . '/counter.txt') {
    if (!file_exists($filepath)) {
        file_put_contents($filepath, '0');
        return 0;
    }
    $count = trim(file_get_contents($filepath));
    return is_numeric($count) ? (int)$count : 0;
}

function increment_counter($filepath = __DIR__ . '/counter.txt') {
    $fp = fopen($filepath, 'c+');
    if ($fp === false) {
        return get_counter($filepath);
    }
    
    $count = 0;
    if (flock($fp, LOCK_EX)) {
        $filesize = filesize($filepath);
        if ($filesize > 0) {
            $content = fread($fp, $filesize);
            $count = is_numeric(trim($content)) ? (int)trim($content) : 0;
        }
        $count++;
        ftruncate($fp, 0);
        rewind($fp);
        fwrite($fp, (string)$count);
        fflush($fp);
        flock($fp, LOCK_UN);
    } else {
        $count = get_counter($filepath) + 1;
    }
    fclose($fp);
    return $count;
}
?>
