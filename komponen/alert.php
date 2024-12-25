<?php
$show_alert = "";
if (isset($_SESSION['alert'])) {
    if ($_SESSION['alert'] == "danger") {
        $show_alert = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>' . $_SESSION['message'] . '</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
    } else if ($_SESSION['alert'] == "success") {
        $show_alert = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>' . $_SESSION['message'] . '</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
    }
}

echo $show_alert;

// Setelah menampilkan alert, kita hapus session agar tidak muncul lagi pada refresh
unset($_SESSION['alert']);
unset($_SESSION['message']);
?>
