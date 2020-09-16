      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">


              <div class="row">
                  <div class="col-lg-8 col-lg-offset-2">

                              <?php 
                              
            if($this->session->flashdata('success')){
            ?>

            <div class="alert alert-success alert-block fade in">
                <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="icon-remove"></i>
                </button>
                    <strong>Success: </strong><?php echo $this->session->flashdata('success'); ?>
            </div>
            <?php } elseif($this->session->flashdata('error')) { ?>
                <div class="alert alert-block alert-danger fade in">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                        <i class="icon-remove"></i>
                    </button>
                    <strong>Ooops!!! </strong><?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php } ?>
                      <section class="panel">
                              <header class="panel-heading">
                                 EDIT EXTRAS
                              </header>
                          <div class="panel-body">
                            <?php //print_r($fields); ?>

                            <!-----------Employee Form Start------>

                              <form class="form-horizontal" method="POST" action="<?php echo base_url(); ?>extras/ExtrasController/updateExtras">
                     
                                  <div class="form-group">
                                      <label class="col-sm-2 col-sm-2 control-label">Extra name</label>
                                      <div class="col-sm-10">
                                         <input type="hidden" name="id" value="<?php echo !empty($fields[0]['id'])? $fields[0]['id']:""; ?>">
                                          <input type="text" class="form-control" name="extra_name" placeholder="cafeteria etc" value="<?php echo $fields[0]['extra_name']; ?>">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">Currency</label>
                                      <div class="col-lg-10">
                                          <select class="form-control m-bot15" name="currency_mode">
                                              <option value="0" <?php if($fields[0]['currency']==0){echo "selected"; }else{echo ""; } ?>>Peso</option>
                                              <option value="1" <?php if($fields[0]['currency']==1){echo "selected"; }else{echo ""; } ?>>Dollar</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Unit price</label>
                                        <div class="col-sm-10">
                                            <input type="text" placeholder="" class="form-control" name="unit_price" value="<?php echo $fields[0]['unit_price']; ?>">
                                        </div>
                                  </div>

                                <div class="form-group">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-info btn" name="submit">Submit</button>
                                        <button type="cancel" class="btn btn-danger btn">Cancel</button>
                                    </div>
                                </div>
                              </form>

                                <!-----------Employee Form End------>

                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->