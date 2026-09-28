<?php
include("model_karyawan.php");
session_start();

// ==========================================
// 1. INISIALISASI SESSION & DATA DEFAULT
// ==========================================

// Session Karyawan
if (!isset($_SESSION['listkaryawan'])) {
    $_SESSION['listkaryawan'] = array(
        (object)['id' => 1, 'name' => 'Galih'],
        (object)['id' => 2, 'name' => 'Rama'],
        (object)['id' => 3, 'name' => 'Reynaldi']
    );
}

// Session Office
if (!isset($_SESSION['listoffice'])) {
    $_SESSION['listoffice'] = array(
        (object)['id' => 1, 'office_name' => 'UC Surabaya', 'city' => 'Surabaya'],
        (object)['id' => 2, 'office_name' => 'UC Makassar', 'city' => 'Makassar']
    );
}

// Session Relasi (Office-Employees)
if (!isset($_SESSION['listrelation'])) {
    $_SESSION['listrelation'] = array(
        (object)['employee_name' => 'Galih', 'office_name' => 'UC Surabaya'],
        (object)['employee_name' => 'Rama', 'office_name' => 'UC Makassar'],
        (object)['employee_name' => 'Reynaldi', 'office_name' => 'UC Surabaya']
    );
}


// ==========================================
// 2. FUNGSI (FUNCTIONS)
// ==========================================

// --- Karyawan ---
function createKaryawan(){
    $member = new stdClass();
    $member->name = $_POST['inputName'];
    $member->phone = $_POST['inputPhone'] ?? '';
    $member->email = $_POST['inputEmail'] ?? '';
    $member->note = $_POST['inputNote'] ?? '';
    array_push($_SESSION['listkaryawan'], $member);
}

function getAllKaryawan(){
    return $_SESSION['listkaryawan'];
}

// --- Office ---
function createOffice(){
    $office = new stdClass();
    $office->office_name = $_POST['office_name'];
    $office->phone = $_POST['phone'] ?? '';
    $office->email = $_POST['email'] ?? '';
    $office->note = $_POST['note'] ?? '';
    $office->city = $_POST['city'] ?? '-';
    array_push($_SESSION['listoffice'], $office);
}

function getAllOffice(){
    return $_SESSION['listoffice'];
}

// --- Relasi (Office-Employees) ---
function createRelation(){
    $relation = new stdClass();
    $relation->employee_name = $_POST['employee_name'];
    $relation->office_name = $_POST['office_name'];
    array_push($_SESSION['listrelation'], $relation);
}

// ==========================================
// 3. PENGENDALIAN KLIK BUTANG (ACTION POST)
// ==========================================

// Jika butang register Karyawan diklik
if (isset($_POST['button_register'])){
    createKaryawan();
    header("Location: view_karyawan.php");
    exit();
}

// Jika butang simpan Office diklik
if (isset($_POST['button_office'])){
    createOffice();
    header("Location: viewOffice.php");
    exit();
}

// Jika butang simpan Relasi diklik
if (isset($_POST['button_relation'])){
    createRelation();
    header("Location: viewRelation.php");
    exit();
}
?>