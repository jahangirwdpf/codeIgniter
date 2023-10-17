
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
                    <strong>Add House Rent Information</strong>
                </div>
                <div class="card-body card-block">
                    <form action="houseRent" method="POST" enctype="multipart1/form-data" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">House Rent :</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="rent" placeholder="enter your rent" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="gas-input" class=" form-control-label">Gas Bill :</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="gas-input" name="gas" placeholder="Please enter your gas bill" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="current-input" class=" form-control-label">Current Bill :</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="current-input" name="current" placeholder="Please enter current bill" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="bua-input" class=" form-control-label">Bua Bill :</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="bua-input" name="bua" placeholder="Please enter bua bill" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="wifi-input" class=" form-control-label">Wifi Bill :</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="wifi-input" name="wifi" placeholder="Please enter wifi bill" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="city-input" class=" form-control-label">City Corpo. Bill :</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="city-input" name="city" placeholder="Please enter city corpo. bill" class="form-control"></div>
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