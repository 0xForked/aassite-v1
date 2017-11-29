            <section class="content">
                <div class="container-fluid">
                    
                    <div class="block-header">
                        <ol class="breadcrumb breadcrumb-bg-blue-grey">
                            <li><a href="javascript:void(0);"><i class="material-icons">text_fields</i> Article</a></li>   
                            <li class="active"><i class="material-icons">local_offer</i> Tags</li>    
                        </ol>
                    </div>   

                    <div class="row clearfix">
                        
                        <!-- Task Info -->
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                            <div class="card">
                                <div class="header">
                                    <h2>Create new tag</h2>
                                </div>
                                <div class="body">
                                    <?php echo form_open_multipart('tags/create'); ?>
                                    <form id="form_validation" method="POST">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="tagTitle" class="form-control" required autofocus>
                                                <label class="form-label">Title</label>
                                            </div>
                                            <div class="form-line" style="margin: 15px 0 15px 0">
                                                <textarea rows="4" name="tagDescription" class="form-control no-resize" required></textarea>
                                                <label class="form-label">Description</label>
                                            </div>                                            
                                        </div>
                                        <button type="submit" class="btn btn-block btn-lg btn-primary waves-effect">SUBMIT</button>
                                    </form>
                                        <!-- Flash messages -->
                                        <?php if($this->session->flashdata('tag_created')): ?>
                                            <?php 
                                                echo '<div class="alert bg-green alert-dismissible" style="margin-top:10px" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                                                        .$this->session->flashdata('tag_created').'</div>'
                                            ?>
                                        <?php endif; ?>   
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                            <div class="card">
                                <div class="header">
                                    <h2>Tag list (<?php echo $totalTags ?>)</h2>
                                </div>
                                <div class="body">
                                    <div class="table-responsive">
                                        <table class="table table-hover dashboard-task-infos">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th style="width:110px">Title</th>
                                                    <th>Description</th>
                                                    <th style="width:90px">Total used</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                                <tbody>

                                                    <!-- array result for tag -->
                                                    <?php $no=0; foreach($getTags as $tag) : ?>
                                                     <!-- list tag-->
                                                    <tr>

                                                        <td><?php $no++; echo $no; ?></td>
                                                        <td ><?php echo $tag['tag_title']; ?></td>
                                                        <td><?php echo $tag['tag_description']; ?></td>
                                                        <td><?php echo $tag['tag_count']; ?></td> 
                                                        <td>
                                                            <a data-toggle="modal" data-tooltip="tooltip" title="Delete now!" data-target="#deleteModal<?php echo $tag['tag_id']; ?>"><i style="color:red" class="material-icons waves-effect">delete</i></a>                                                            
                                                        </td> 
                                                    </tr>
                                                    <!-- list tag -->
                                                    <!-- delete modal -->
                                                    <tr>                                                        
                                                        <div class="modal fade" id="deleteModal<?php echo $tag['tag_id']; ?>" tabindex="-1" role="dialog">
                                                            <div class="modal-dialog modal-sm" role="document">
                                                                <div class="modal-content modal-col-blue-grey">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="smallModalLabel">DELETE TAG</h4>
                                                                    </div>
                                                                    <div class="modal-body" >
                                                                        Are you sure?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a class="btn btn-link bg-red waves-effect" href="<?php echo base_url()?>tags/delete/<?php echo $tag['tag_id']; ?>">DELETE</a>
                                                                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CANCEL</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </tr>
                                                    <!-- delete modal -->
                                                    <?php endforeach; ?>
                                                    <!-- array result for tag -->

                                                </tbody>
                                        </table>
                                             <!-- Flash messages -->
                                            <?php if($this->session->flashdata('tag_deleted')): ?>
                                                <?php 
                                                    echo '<div class="alert bg-green alert-dismissible" style="margin-top:10px" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                                                    .$this->session->flashdata('tag_deleted').'</div>'
                                                ?>
                                            <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
