
<?= $this->extend('frontend/nav');?>
<?= $this->section('content');?>

    <div class="">
            <?= $this->include('frontend/content')?>
        </div>
    </div>

<?= $this->include('frontend/footer');?>
<?= $this->endSection('content');?>
