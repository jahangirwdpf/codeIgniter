
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
                    <strong class="card-title">Deposite Information (Details)</strong>
                </div>
                <div class="card-body card-">
                    <form action="mealAdd" method="POST" enctype="multipart1/form-data" class="form-horizontal">
<<<<<<< HEAD
                        <div class="row form-group d-flex">
=======
                        <div class="row form-group d-flex text-center">
                            <div class="col col-md-3">
                                <label for="date-input" class=" form-control-label">Select Member :</label>
                                <select class="form-select" aria-label="Default select example" name="member_id">
                                    <option selected>Select a Member</option>
                                    <?php foreach ($member as $row) :?>
                                    <option value="<?= $row['id']?>"><?= $row['name']?></option>
                                    <?php endforeach?>
                                </select>   
                            </div>
                        </div>
                        <div class="row form-group d-flex text-center">
>>>>>>> 9a9c065abbeac9a92ed18201fb93dea79dba00ac
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
                        <div class="row form-group d-flex text-center">  
                            <div class="col col-md-2">
                                <label for="bfast-input" class=" form-control-label">Breakfast :</label>
                            </div>
                            <div class="col-12 col-md-2">
                                <input type="number" id="bfast-input" name="bfast" placeholder="0" class="form-control">
                            </div>
                            <div class="col col-md-2">
                                <label for="lunch-input" class=" form-control-label">Lunch :</label>
                            </div>
                            <div class="col-12 col-md-2">
                                <input type="number" id="lunch-input" name="lunch" placeholder="0" class="form-control">
                            </div>
                            <div class="col col-md-2">
                                <label for="dinner-input" class=" form-control-label">Dinner :</label>
                            </div>
                            <div class="col-12 col-md-2">
                                <input type="number" id="dinner-input" name="dinner" placeholder="0" class="form-control">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm text-center">
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