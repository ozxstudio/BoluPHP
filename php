// src/Core/GunturSakti.php

// 1. Fungsi Ganti 'echo' (Senyum Archaic)
function _e($str) {
    echo htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

// 2. Fungsi Ambil Data (Dzat Origin)
function _in($key, $default = null) {
    return $_REQUEST[$key] ?? $default;
}

// 3. Fungsi Debugging (Gleger Cek)
function _dd($data) {
    echo "<pre style='background:#000; color:#00ff00; padding:10px;'>";
    print_r($data);
    echo "</pre>";
    die();
}

<div class="card">
    <h3><?= _e($judul) ?></h3>
    <p>Status: <?= _in('status', 'NORMAL') ?></p>
    
    <?php if(_in('debug')) _dd($data_sensor); ?>
</div>