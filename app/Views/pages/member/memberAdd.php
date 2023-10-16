
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
                                <li class="active">Add Member</li>
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
                    <strong>Add Member Information</strong>
                </div>
                <div class="card-body card-block">
                    <form action="memberSignup" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Full Name :</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="name" placeholder="Enter your ful name" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Address :</label></div>
                            <div class="col-12 col-md-9"><textarea name="address" id="textarea-input" rows="5" placeholder="Enter your address" class="form-control"></textarea></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">E-mail (username) :</label></div>
                            <div class="col-12 col-md-9"><input type="email" id="email-input" name="email" placeholder="Please enter your email address" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="mobile-input" class=" form-control-label">Contact Number :</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="mobile-input" name="mobile" placeholder="Please enter your contact number" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Password :</label></div>
                            <div class="col-12 col-md-9"><input type="password" id="password-input" name="password" placeholder="Please enter a complex password" class="form-control"></div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> <strong>Submit</strong>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<!--------------------------------- End Content ----------------------------->
<?= $this->include('Backend/footerB');?>
<?= $this->endSection('content');?>