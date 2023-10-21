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
                                <li><a href="#">Payment</a></li>
                                <li class="active">Edit Payment History</li>
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
                    <strong>Payment Information</strong>
                </div>
                <div class="card-body card-block">
                    <form action="<?= base_url(); ?>payment/update/<?= $pay['pm_id'] ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        <div class="col-12 col-md-9"><input type="hidden" id="text-input" name="_method" value="PUT" class="form-control"></div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="date-input" class=" form-control-label">Date :</label></div>
                                <div class="col-12 col-md-9"><input type="date" id="date-input" name="date" value="<?= $pay['date'] ?>" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="date-input" class=" form-control-label">Member :</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="member_id" value="<?= $pay['member_id'] ?>" class="form-control"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="amount-input" class=" form-control-label">Amount :</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="amount-input" name="amount" value="<?= $pay['amount'] ?>" class="form-control"></div>
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