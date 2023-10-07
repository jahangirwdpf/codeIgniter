<?= $this->extend('Backend/header'); ?>
<?= $this->section('content'); ?>
<!----------------- Start Content ------------------------>

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
                                <li><a href="#">House Rent</a></li>
                                <li class="active">Add House Rent</li>
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
                    <strong>House Rent Information</strong>
                </div>
                <div class="card-body card-block">
                    <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">House Rent :</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="rent" placeholder="enter your rent" class="form-control"></div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="current-input" class=" form-control-label">Current Bill :</label></div>
                            <div class="col-12 col-md-9"><input type="number" id="current-input" name="current_bill" placeholder="Please enter your current bill" class="form-control"></div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="water-input" class=" form-control-label">Water Bill :</label></div>
                            <div class="col-12 col-md-9"><input type="number" id="water-input" name="water_bill" placeholder="Please enter water bill" class="form-control"></div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="buabill-input" class=" form-control-label">Bua Bill :</label></div>
                            <div class="col-12 col-md-9"><input type="number" name="address" id="buabill-input" placeholder="Enter your address" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Gender :</label></div>
                            <div class="col col-md-9">
                                <div class="form-check">
                                    <div class="radio">
                                        <label for="radio1" class="form-check-label ">
                                            <input type="radio" id="radio1" name="gender" value="male" class="form-check-input">Male
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="radio2" class="form-check-label ">
                                            <input type="radio" id="radio2" name="gender" value="female" class="form-check-input">Female
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="radio3" class="form-check-label ">
                                            <input type="radio" id="radio3" name="gender" value="other" class="form-check-input">Others
                                        </label>
                                    </div>
                                </div>
                            </div>
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

<!----------------- End Content ------------------------>
<?= $this->include('Backend/footerB'); ?>
<?= $this->endSection('content'); ?>