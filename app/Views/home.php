
    <?= $this->extend('includes/nav');?>

    <?= $this->section('content');?>

        <div class="">
                <?= $this->include('includes/content')?>
            </div>
        </div>

    <?= $this->include('includes/footer');?>

    <?= $this->endSection('content');?>
