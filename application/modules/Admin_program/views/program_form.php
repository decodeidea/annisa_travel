        <div class="row">
            <div class="col-md-12">
              <div class="grid simple">
                <div class="grid-title no-border">
                  
                  <div class="tools"> <a href="javascript:;" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="javascript:;" class="reload"></a> <a href="javascript:;" class="remove"></a> </div>
                </div>
                <form enctype="multipart/form-data" method="post" action="<?php echo site_url() ?>/<?php echo $controller."/".$function?>_<?php if(isset($data)){echo"update";}else{echo"add";} ?>">
                <input type="hidden" name="id" value="<?php if(isset($data)){ echo $data->id; } ?>">
                <input type="hidden" name="controller" id="controller" value="<?php echo $controller ?>">
              <input type="hidden" name="method" value="<?php echo $function ?>" id="method">
                <div class="grid-body no-border">
                  <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-8">
                      <div class="form-group">
                        <label class="form-label">Title</label>
                        <div class="controls">
                          <input type="text" name="title" required class="form-control" value="<?php if(isset($data)){ echo $data->title; } ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Rating</label>
                        <div class="controls">
                          <input type="text" name="rating" required class="form-control" value="<?php if(isset($data)){ echo $data->rating; } ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Destination</label>
                        <div class="controls">
                          <select class="select2 form-control" name="id_destination" required>
                            <option value="">Select Destination</option>
                            <?php foreach ($destination as $key) { ?>
                            <option value="<?php echo $key->id ?>" <?php if(isset($data) and $key->id==$data->id_destination){ echo"selected";} ?>><?php echo $key->title ?></option>
                            <?php } ?>
                          </select>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Program Category</label>
                        <div class="controls">
                         <select class="select2 form-control" name="id_program_category" required>
                            <option value="">Select Program Category</option>
                            <?php foreach ($category as $key) { ?>
                            <option value="<?php echo $key->id ?>" <?php if(isset($data) and $key->id==$data->id_program_category){ echo"selected";} ?>><?php echo $key->title ?></option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Quad Price</label>
                        <div class="controls">
                          <input type="text" name="price1" required class="form-control" value="<?php if(isset($data)){ echo $data->price1; } ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Triple Price</label>
                        <div class="controls">
                          <input type="text" name="price2" required class="form-control" value="<?php if(isset($data)){ echo $data->price2; } ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Double Price</label>
                        <div class="controls">
                          <input type="text" name="price3" required class="form-control" value="<?php if(isset($data)){ echo $data->price3; } ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Discount(%)</label>
                        <div class="controls">
                          <input type="text" name="disc" required class="form-control" value="<?php if(isset($data)){ echo $data->disc; } ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Promo</label>
                        <div class="controls">
                          <select required class="select2 form-control" name="promo">
                            <option value="0" <?php if(isset($data) and $data->promo==0){ echo"selected";} ?>>No</option>
                             <option value="1" <?php if(isset($data) and $data->promo==1){ echo"selected";} ?>>Yes</option>
                          </select>
                        </div>
                      </div>


                      <div class="form-group">
                        <label class="form-label">Short Content</label>
                        <div class="controls">
                          <textarea name="summary" style="height: 300px;" required class="form-control"><?php if(isset($data)){ echo $data->summary; } ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Itenary</label>
                       
                        <div class="controls">
                           <textarea id="summernote" name="itenary" placeholder="Enter text ..." class="form-control" rows="10"><?php if(isset($data)){ echo $data->itenary; } ?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="form-label">Fasilitas</label>
                       
                        <div class="controls">
                           <textarea id="summernote2" name="fasilitas" placeholder="Enter text ..." class="form-control" rows="10"><?php if(isset($data)){ echo $data->fasilitas; } ?></textarea>
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
