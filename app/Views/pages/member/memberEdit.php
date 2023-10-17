
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
                                <li><a href="#">Member</a></li>
                                <li class="active">Member Details</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <!----------------------- Start Content ------------------------------------>
        <div class="col-lg-11 float-left p-3 3 mx-5 ">
            <div class="card justify-content-center">
                <div class="card-header">
                    <strong>Member Information</strong>
                </div>
                <div class="card-body card-block">
                    <form action="<?= base_url(); ?>member/update/<?= $member['id'] ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        <div class="col-12 col-md-9"><input type="hidden" id="text-input" name="_method" value="PUT" class="form-control"></div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">ID :</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="id" value="<?= $member['id'] ?>" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Full Name :</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" value="<?= $member['name'] ?>" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Address :</label></div>
                                <div class="col-12 col-md-9"><textarea name="address" id="textarea-input" rows="5" class="form-control"> <?= $member['address'] ?></textarea></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="email-input" class=" form-control-label">E-mail (username):</label></div>
                                <div class="col-12 col-md-9"><input type="email" id="email-input" name="email" value="<?= $member['email'] ?>" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                            <div class="col col-md-3"><label for="mobile-input" class=" form-control-label">Contact Number :</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="mobile-input" name="mobile" value="<?= $member['mobile'] ?>" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="password-input" class=" form-control-label">Password :</label></div>
                                <div class="col-12 col-md-9"><input type="password" id="password-input" name="password" value="<?= $member['password'] ?>" class="form-control"></div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Update
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<!--------------------------------- End Content ----------------------------->
<?= $this->include('Backend/footerB');?>
<?= $this->endSection('content');?>
