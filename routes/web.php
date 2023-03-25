<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('struktur', function(){
    return view('struktur');
});

Route::get('mapel', function () {
    return view('mapel');
});

Route::get('piket', function () {
    return view('piket');
});

Route::get('list', function () {
    $list = [
        ["Afifah Aqilah", "student"],
        ["Alfinansyah", "Seksi Agama"],
        ["Atika Azzahroh", "student"],
        ["Davina Putri Rahmania", "student"],
        ["Dhavin Radithya Dhuha", "Seksi Agama"],
        ["Dwi Rahmawati", "Wakil Ketua"],
        ["Fadila Annur", "Seksi Olahraga"],
        ["Greeys Esa Sabilillah", "student"],
        ["Intan Safitrih", "Seksi Kebersihan"],
        ["Jihan Amelia Putri", "Bendahara"],
        ["Karmila", "Seksi Keamanan"],
        ["Kusnul Khotimah", "student"],
        ["Lathifah", "Sekretaris"],
        ["Maftuh Rahdiyan Gifari", "Seksi Pendidikan"],
        ["Mohamad Adrian Faturachman", "Seksi Pendidikan"],
        ["Muhamad Arifin", "Seksi Olahraga"],
        ["Muhammad Ferozul Atqiya", "student"],
        ["Muhammad Jeffri", "Ketua"],
        ["Nabillah Cahyani Putri", "student"],
        ["Naila Awalia Astri", "student"],
        ["Najwa Nadiatul Fadhilah", "Seksi Kebersihan"],
        ["Natasya Lira Putri", "student"],
        ["Nur Chayani", "student"],
        ["Nur Meila Andieni", "student"],
        ["Nuryanti", "student"],
        ["Rafli Ferdiansyah Saputra", "Bendahara"],
        ["Salsabila Zulfa", "student"],
        ["Salwa Selviah", "student"],
        ["Silvi Ayu Pratiwi", "student"],
        ["Sinta Febriyanti", "student"],
        ["Siska Dwi Rattania", "student"],
        ["Siti Khoirul Anwariyah", "student"],
        ["Siti Nurhayu", "Seksi Keamanan"],
        ["Suci Amelia", "student"],
        ["Syifaul Kholilah", "Sekretaris"],
        ["Zaskia Ramadhani", "student"]
    ];
    return view('list', ["list" => $list]);
});
