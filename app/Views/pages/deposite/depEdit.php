<?= $this->extend('Backend/header');?>
<?= $this->section('content');?>
<!--------------------------------- Start Content ----------------------------->

    <!----------------------- Start Breadcrumb ------------------------------------>
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Dashboard <i class="fa fa-sign-in" aria-hidden="true"></i></h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Deposite</a></li>
                                <li class="active">Edit Deposite History</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----------------------- Start content ------------------------------------>
    <div class="col-lg-11 float-left p-3 3 mx-5 ">
            <div class="card justify-content-center">
                <div class="card-header">
                    <strong>Edit Deposite Information</strong>
                </div>
                <div class="card-body card-block">
                    <form action="<?= base_url(); ?>deposite/update/<?= $view['id'] ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    <div class="col-12 col-md-9"><input type="hidden" id="text-input" name="_method" value="PUT" class="form-control"></div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="name-input" class=" form-control-label">Name :</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="name-input" name="name" value="<?= $view['name'] ?>" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">E-mail :</label></div>
                            <div class="col-12 col-md-9"><input type="email" id="email-input" name="email" value="<?= $view['email'] ?>" class="form-control"></div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> <strong>Update</strong>
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

<!--------------------------------- End Content ----------------------------->
<?= $this->include('Backend/footerB');?>
<?= $this->endSection('content');?>