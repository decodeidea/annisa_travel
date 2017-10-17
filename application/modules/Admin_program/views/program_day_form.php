        <div class="row">
            <div class="col-md-12">
              <div class="grid simple">
                <div class="grid-title no-border">
                  
                  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                </div>
                <form enctype="multipart/form-data" method="post" action="<?php echo site_url() ?>/<?php echo $controller."/".$function?>_<?php if(isset($data)){echo"update";}else{echo"add";} ?>">
                <input type="hidden" name="id" value="<?php if(isset($data)){ echo $data->id; } ?>">
                <input type="hidden" name="controller" id="controller" value="<?php echo $controller ?>">
               <input type="hidden" name="id_program" value="<?php if(isset($_GET['id_program'])){ echo $_GET['id_program']; }elseif($data){ echo $data->id_program;} ?>">
              <input type="hidden" name="method" value="<?php echo $function ?>" id="method">
                <div class="grid-body no-border">
                  <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-8">
                      <div class="form-group">
                        <label class="form-label">Start Date</label>
                        <div class="controls">
                          <input type="text" name="day" class="datepicker form-control" required value="<?php if(isset($data)){ echo $data->day; } ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">End date</label>
                        <div class="controls">
                          <input type="text" name="off_day" class="datepicker form-control" required value="<?php if(isset($data)){ echo $data->off_day; } ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Kuota</label>
                        <div class="controls">
                          <input type="text" name="stock" class="form-control" required value="<?php if(isset($data)){ echo $data->stock; } ?>">
                        </div>
                      </div>
                        <div class="form-group">
                        <div class="controls">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                </form>
              </div>
            </div>
          </div>

<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>
