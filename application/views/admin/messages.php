            <section class="content">
                <div class="container-fluid">
                    <div class="block-header">
                        <ol class="breadcrumb breadcrumb-bg-blue-grey">
                            <li><a href="javascript:void(0);"><i class="material-icons">forum</i> Message</a></li>   
                            <li class="active"><i class="material-icons">library_books</i> All</li>    
                        </ol>
                    </div>   

                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">
                                    <h2>
                                        Message list (<?php echo $totalMessages ?>)
                                    </h2>                                   
                                </div>
                                <div class="body">
                                    <div class="table-responsive">
                                        <table class="table  table-hover ">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>                                            
                                                    <th>Email</th>
                                                    <th>Title</th>                                                    
                                                    <th>Messages</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                         
                                            <tbody>
                                                 <?php $no=0; foreach($getMessages as $messages) : ?>
                                                    <tr>
                                                        <td><?php $no++; echo $no ?></td>
                                                        <td><?php echo $messages['message_name'] ?></td>
                                                        <td><?php echo $messages['message_email'] ?></td>
                                                        <td><?php echo $messages['message_title'] ?></td>      
                                                        <td><?php echo $messages['message_body'] ?></td>                    
                                                        <td>  
                                                            <?php
                                                                $status = $messages['message_status'];
                                                                if ($status == "isReplied") {
                                                                    echo "ALREADY REPLIED";
                                                                }else{
                                                                    $msgID = $messages['message_id'];
                                                                    echo '<a data-toggle="modal" data-tooltip="tooltip" title="Mark replied!" class="btn btn-material btn-lg btn-primary waves-effect" data-target="#repliedModal'.$msgID.'">MARK REPLIED</a>';
                                                                }
                                                            ?>                                                                                              
                                                        </td>
                                                        <td>
                                                            <a data-toggle="modal" data-tooltip="tooltip" title="Delete now!" data-target="#deleteModal<?php echo $messages['message_id'] ?>"><i style="color:red" class="material-icons waves-effect">delete</i></a>                                                            
                                                        </td>
                                                    </tr>
                                                                                                            
                                                    <tr><!-- delete modal -->
                                                        <div class="modal fade" id="deleteModal<?php echo $messages['message_id']  ?>" tabindex="-1" role="dialog">
                                                                <div class="modal-dialog modal-sm" role="document">
                                                                    <div class="modal-content modal-col-blue-grey">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="smallModalLabel">DELETE MESSAGE</h4>
                                                                    </div>
                                                                    <div class="modal-body" > Are you sure? </div>
                                                                    <div class="modal-footer">
                                                                        <a class="btn btn-link bg-red waves-effect" href="<?php echo base_url()?>messages/delete/<?php echo $messages['message_id'] ?>">DELETE</a>
                                                                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CANCEL</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </tr><!-- delete modal --> 

                                                    <tr><!-- replied modal -->                                             
                                                        <div class="modal fade" id="repliedModal<?php echo $messages['message_id']  ?>" tabindex="-1" role="dialog">
                                                            <div class="modal-dialog modal-sm" role="document">
                                                                <div class="modal-content modal-col-blue-grey">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="smallModalLabel">MARK REPLIED</h4>
                                                                    </div>
                                                                    <div class="modal-body" >
                                                                        Are you sure this message already replied?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a class="btn btn-link bg-blue waves-effect" href="<?php echo base_url()?>messages/mark/<?php echo $messages['message_id'] ?>">MARK</a>
                                                                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CANCEL</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </tr><!-- replied modal --> 

                                                 <?php endforeach; ?>                                                                                      
                                            </tbody>
                                        </table>
                                            <!-- Flash messages -->
                                            <?php if($this->session->flashdata('delete_message')): ?>
                                                <?php 
                                                    echo '<div class="alert bg-green alert-dismissible" style="margin-top:10px" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                                                    .$this->session->flashdata('delete_message').'</div>'
                                                ?>
                                            <?php endif; ?>
                                            <!-- Flash messages -->
                                            <?php if($this->session->flashdata('mark_message')): ?>
                                                <?php 
                                                    echo '<div class="alert bg-green alert-dismissible" style="margin-top:10px" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                                                    .$this->session->flashdata('mark_message').'</div>'
                                                ?>
                                            <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- #END# Exportable Table -->

                </div>
            </section>

    