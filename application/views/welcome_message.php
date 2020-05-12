<br />
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card">

        <div class="card-body">
          <div class="card-title mb-4">
            <div class="d-flex justify-content-start">
              <div class="image-container">

                <?php if ($this->session->userdata('photo')) { ?>
                  <img src="<?php echo base_url(); ?>uploads/<?= $this->session->userdata('photo') ?>" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail">
                <?php } else { ?>
                  <img src="<?php echo base_url(); ?>uploads/images.png" id="imgProfile" class="img-thumbnail" alt="" style="width: 150px; height: 150px">
                <?php } ?>

              </div>
              <div class="userData ml-3">
                <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold">Welcome Back <?php echo ucfirst($this->session->userdata('name')); ?></h2>

              </div>

            </div>
          </div>

          <div class="row">
            <div class="col-12">

              <div class="tab-content ml-1">
            
                  <div class="row">
                    <div class="col-sm-3 col-md-2 col-5">
                      <label style="font-weight:bold;">Full Name</label>
                    </div>
                    <div class="col-md-8 col-6">
                      <?php echo ucfirst($this->session->userdata('name')); ?>
                    </div>
                  </div>
                  <hr />

                  <div class="row">
                    <div class="col-sm-3 col-md-2 col-5">
                      <label style="font-weight:bold;">Email</label>
                    </div>
                    <div class="col-md-8 col-6">
                      <?php echo $this->session->userdata('email'); ?>
                    </div>
                  </div>
                  <hr />


                  <div class="row">
                    <div class="col-sm-3 col-md-2 col-5">
                      <label style="font-weight:bold;">Gender</label>
                    </div>
                    <div class="col-md-8 col-6">
                      <?php echo $this->session->userdata('gender'); ?>
                    </div>
                  </div>
                  <hr />
                  <div class="row">
                    <div class="col-sm-3 col-md-2 col-5">
                      <label style="font-weight:bold;">Contact Number</label>
                    </div>
                    <div class="col-md-8 col-6">
                      <?php echo $this->session->userdata('contactnumber'); ?>
                    </div>
                  </div>
                  <hr />
                  <div class="row">
                    <div class="col-sm-3 col-md-2 col-5">
                      <label style="font-weight:bold;">CNIC Number</label>
                    </div>
                    <div class="col-md-8 col-6">
                      <?php echo $this->session->userdata('cnic'); ?>
                    </div>
                  </div>
                  <hr />
                  <div class="row">
                    <div class="col-sm-3 col-md-2 col-5">
                      <label style="font-weight:bold;">Created At</label>
                    </div>
                    <div class="col-md-8 col-6">
                      <?php echo $this->session->userdata('date_time'); ?>
                    </div>
                  </div>
                  <hr />
                  <a class="btn btn-danger" href="<?= base_url() . 'login/logout'; ?>">Logout</a>
                </div>

              </div>
            </div>
          </div>


        </div>

      </div>
    </div>
  </div>
</div>