<?php

/**
 * @param $pass
 * @param $salt
 * @param bool $md5
 * @return string
 */
function topassword($pass, $salt, $md5 = false) {
    if ($md5) {
        return md5($pass . $salt);
    } else {
        return md5(md5($pass) . $salt);
    }
}

/**
 * @param $filesite
 * @param $filepath
 * @param string $prefix
 * @return string
 */
function image_url($filesite, $filepath, $prefix = 'source') {
    if ('source' == $prefix) {
        return getini('file/' . $filesite . '/url') . $filepath;
    } else {
        return getini('file/' . $filesite . '/url') . $filepath . '.' . $prefix . '.jpg';
    }
}

/**
 * @param $filesite
 * @param $filepath
 * @return string
 */
function file_path($filesite, $filepath) {
    return getini('file/' . $filesite . '/dir') . $filepath;
}