    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <ol class="breadcrumb breadcrumb-bg-blue-grey">
                    <li><a href="javascript:void(0);"><i class="material-icons">perm_media</i> Media</a></li>       
                </ol>
            </div> 
        
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header" >
                            <h2 style="font-size:40px">Media (<?php echo $totalMedia ?>)</h2>      
                            <ul class="header-dropdown m-r--5">
                                <li>
                                    <button class="btn btn-primary" data-tooltip="tooltip" title="add image!" style="margin-right:25px;" data-toggle="modal" data-target="#addImageModal" >
                                        <i class="material-icons" style="color:white; padding: 5px 8px 11px 8px">add_a_photo</i>
                                    </button>                                    
                                </li>
                            </ul>                             
                        </div>
                        
                        <div class="body">
                         <!-- Flash messages -->
                         <?php if(validation_errors()): ?>
                            <?php 
                                 echo '<div class="alert bg-red alert-dismissible" style="margin-top:10px" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>'.validation_errors().'</div>'
                            ?>
                        <?php endif; ?>
                        <?php if($this->session->flashdata('media_created')): ?>
                            <?php 
                                echo '<div class="alert bg-green alert-dismissible" style="margin-top:10px" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                                .$this->session->flashdata('media_created').'</div>'
                            ?>
                        <?php endif; ?>
                        <?php if($this->session->flashdata('media_deleted')): ?>
                            <?php 
                                echo '<div class="alert bg-green alert-dismissible" style="margin-top:10px" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                                .$this->session->flashdata('media_deleted').'</div>'
                            ?>
                        <?php endif; ?>
                            <div class="list-unstyled row clearfix">
                                
                                <?php foreach($getMedia as $media) : ?>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <a data-tooltip="tooltip" title="Click to see!" target="_blank" href="<?php echo base_url(); ?>assets/images/<?php echo $media['image_folder'] ?>/<?php echo $media['image_name'] ?>" data-sub-html="Demo Description">
                                            <img class="img-responsive thumbnail" src="<?php echo base_url(); ?>assets/images/<?php echo $media['image_folder'] ?>/<?php echo $media['image_name'] ?>">
                                        </a>

                                        <div style="text-align:center">                                            
                                            <button class="btn btn-primary" onClick="myFunction<?php echo $media['image_id'] ?>()" data-tooltip="tooltip" title="Copy link!"><i class="material-icons">content_copy</i></button> 
                                            <button class="btn btn-primary" data-toggle="modal" data-tooltip="tooltip" title="Delete image!" data-target="#deleteModal<?php echo $media['image_id'] ?>" ><i class="material-icons">delete</i></button>
                                            <input type="text" style="color:transparent; border-color:transparent" value="<?php echo base_url(); ?>assets/images/<?php echo $media['image_folder'] ?>/<?php echo $media['image_name'] ?>" id="myInput<?php echo $media['image_id'] ?>"><br>
                                        </div>   
                                        <!-- Khusus untuk prulangan -->
                                            <script>
                                                function myFunction<?php echo $media['image_id'] ?>(){
                                                    var copyText = document.getElementById("myInput<?php echo $media['image_id'] ?>");
                                                    copyText.focus();
                                                    copyText.select();
                                                    document.execCommand("Copy");
                                                    alert("Copied the text: " + copyText.value);
                                                }
                                            </script>
                                            
                                            <div class="modal fade" id="deleteModal<?php echo $media['image_id']  ?>" tabindex="-1" role="dialog">
                                                <div class="modal-dialog modal-sm" role="document">
                                                    <div class="modal-content modal-col-blue-grey">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="smallModalLabel">DELETE IMAGE</h4>
                                                        </div>
                                                        <div class="modal-body" > Are you sure? </div>
                                                        <div class="modal-footer">
                                                            <a href="<?php echo base_url()?>media/delete/<?php echo $media['image_id'] ?>" class="btn btn-link bg-red waves-effect" href="<?php echo base_url()?>media/delete/<?php echo $media['image_id'] ?>">DELETE</a>
                                                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CANCEL</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                        <!-- end khusus  -->
                                    </div>
                                <?php endforeach ?>

                            </div>
                        </div> 

                    </div>
                </div>
            </div>

        </div>
    </section>
            <?php echo form_open_multipart('media/create'); ?>
            <!-- Default Size -->
            <div class="modal fade" id="addImageModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content ">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Add Image</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" name="imageTitle" class="form-control">
                                    <label class="form-label">Title</label>
                                </div>
                                <div class="form-line" style="margin-top:20px">
                                    <select class="form-control show-tick" name="imageFolder">
                                        <option value="">- Please select folder -</option>
                                        <option value="demopic">Demopic</option>
                                        <option value="items">Items</option>
                                        <option value="post">Post</option>
                                        <option value="project">Project</option>                                    
                                    </select>
                                </div>
                                
                                <label for="mediaImage" style="margin-top:20px; text-align:center">
                                    <input type="file" name="mediaImage" id="mediaImage" style="display:none;" onchange="readIMG01(this);"/>
                                    <img id="img01" name="img01" src="<?php echo base_url();?>assets/images/items/addimage.png" width="580px" class="img-responsive"/>
                                </label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-link waves-effect bg-blue" style="color:white">SAVE</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
            <!--images JavaScript fix-->
            <script>
                function readIMG01(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();
                        reader.onload = function (e) {
                            $('#img01')
                                .attr('src', e.target.result)
                                .width(580)
                        };
                        reader.readAsDataURL(input.files[0]);
                    }
                }
            </script>
            <!--images-->
