
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
                                <li class="active">Add Deposite</li>
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
                    <strong class="card-title">Add Purchase Information.</strong>
                </div>
                <div class="card-body card-block">
                    <form action="bazarAdd" method="POST" enctype="multipart1/form-data" class="form-horizontal">
                        <div class="row form-group d-flex">
                            <div class="col col-md-3">
                                <label for="date-input" class=" form-control-label">Date :</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="date" id="date-input" name="date" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Member Selection :</label></div>
                            <div class="col-12 col-md-9">
                                <select name="member_id" id="select" class="form-control">
                                    <option value="0">Please select a Member</option>
                                        <?php foreach ($member as $row) :?>
                                            <option value="<?= $row['id']?>"><?= $row['name']?></option>
                                        <?php endforeach?>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="p_des-input" class=" form-control-label">Product Description :</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="p_des-input" name="p_des" placeholder="enter your product description" class="form-control"></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="price-input" class=" form-control-label">Price :</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="price-input" name="price" placeholder="Please enter price" class="form-control"></div>
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