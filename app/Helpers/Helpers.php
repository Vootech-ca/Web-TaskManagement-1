<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

/*
 * get_year Function
 * Get the current year
 */
function getYear() {
    return date("Y");
}

/*
 * get_month Function
 * Get the current month
 */
function getMonth() {
    return date("m");
}

/*
 * getImagesPath Function
 * Get the image pathes in storage folder using storage_path function
 * @foldername: is the folder name that you want to store in it
 * @subFolerName: is the folder name that you want to store in it by default is images
 */
function getImagesPath($folderName, $subFolderName = 'images'): string
{
    return storage_path('app/public/files/' . $folderName . '/' . $subFolderName . '/' . getYear() . '/' . getMonth() . '/');
}

/*
 * getImagesStorage Function
 * Get the image pathes in storage folder using Storage::url
 * @foldername: is the folder name that you want to store in it
 * @subFolerName: is the folder name that you want to store in it by default is images
 */
function getImagesStorage($folderName, $subFolderName = 'images'): string
{
    return Storage::url('\\files\\' . $folderName . '\\' . $subFolderName . '\\' . getYear() . '\\' . getMonth() . '\\');
}

/*
 * getImagesPathWhenCreate Function
 * Get the image pathes in storage folder using storage_path function depends on the created_at month and year most use in update files in
 * storage pathes
 * @foldername: is the folder name that you want to store in it
 * @subFolerName: is the folder name that you want to store in it by default is images
 * @created_at: is the datetime that will find the file in it
 */
function getImagesPathWhenCreate($folderName, $subFolderName, $created_at): string
{
    $year  = convertYear($created_at);
    $month  = convertMonth($created_at);
    return storage_path('app/public/files/' . $folderName . '/' . $subFolderName . '/' . $year . '/' . $month . '/');
}

function getImagePath($folderName, $subFolderName, $created_at): string
{
    $year  = convertYear($created_at);
    $month  = convertMonth($created_at);
    return $folderName . '/' . $subFolderName . '/' . $year . '/' . $month . '/';
}

/*
 * convertYear Function
 *  This function will get only the year from datetime
 * @date: the date to get the year from it otherwise will return the current year
 */
function convertYear($date) {
    $time = strtotime($date);
    return $date === NULL ? date('Y') : date("Y", $time);
}

/*
 * convertMonth Function
 *  This function will get only the month from datetime
 * @date: the date to get the month from it otherwise will return the current month
 */
function convertMonth($date) {
    $time = strtotime($date);
    return $date === NULL ? date('m') : date("m", $time);
}

/*
 * withoutSpace Function
 * Use it to remove spaces inside strings
 * @string: is the string that you want to remove the spaces in it
 */
function withoutSpace($string) {
    return str_replace(' ', '', $string);
}

/*
 * set_active_class Function
 * Use it to add a class to sidebar nav
 * @path: is the path of the nav
 * @active: is the class name by default is active
 */
function setActiveClass($path, $active = 'active') {
    return call_user_func_array('Request::is', (array)$path) ? $active : '';
}

/*
 * authId Function
 * To get the authenticated id
 */
function authId() {
    return auth()->user()->id;
}

/*
 * checkUserCan Function
 * To check the user has permission or not
 * @permission: the permission name to check
 */
function checkUserCan($permission) {
    return optional(auth()->user())->can($permission);
}

/*
 * currency_format Function
 * Return number of a number with comma 25750 ==> 25,750
 * @value: the number to change
 * @length: is the number of digits after zero
 */
function currencyFormat($value, $length = 0): string
{
    return number_format($value, $length);
}

/*
 * generateCodes Function
 * Generate a random number depend on digits without ublicate
 * @digits: length of the number 3 => 100, 4 => 1000
 * @table: the table name to check if there is not duplicate
 * @column: the column name to search in it
 */
function generateCodes($digits, $table, $column): int
{
    $number = random_int(10 ** ($digits - 1), (10 ** $digits) - 1);
    $check = DB::table($table)
        ->where($column, $number)
        ->first();
    if($check) {
        generateCodes($digits, $table, $column);
    } else {
        return $number;
    }
    return 0;
}

function getUsername($username): string
{
    $userArray = explode(" ", $username);
    return strtolower($userArray[0]);
}

function getTotalWithModel($data, $page = 0, $take = 10): array
{
    return [$data->count(), $data->skip($page * $take)->take($take)->get()];
}
