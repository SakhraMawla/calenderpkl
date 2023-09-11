<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('_partials/head'); ?>
</head>
<body>
    <div class="content animate-panel">
        <?php $this->load->view('_partials/calender.php') ?>
    </div>
    <?php $this->load->view('_partials/modals/tambah-data.php') ?>
    <?php $this->load->view('_partials/script/script-surat.php') ?>
</body>
</html>