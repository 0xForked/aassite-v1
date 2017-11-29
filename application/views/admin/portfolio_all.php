            <section class="content">
                <div class="container-fluid">
                    <div class="block-header">
                        <ol class="breadcrumb breadcrumb-bg-blue-grey">
                            <li><a href="javascript:void(0);"><i class="material-icons">business_center</i> Portfolio</a></li>
                            <li class="active"><i class="material-icons">layers</i> all</li>
                        </ol>
                    </div>

                     <!-- Flash messages -->
                     <?php if($this->session->flashdata('project_created')): ?>
                        <?php
                            echo '<div class="alert bg-green alert-dismissible" style="margin-top:10px" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                            .$this->session->flashdata('project_created').'</div>'
                        ?>
                    <?php endif; ?>
                     <?php if($this->session->flashdata('project_deleted')): ?>
                        <?php
                            echo '<div class="alert bg-green alert-dismissible" style="margin-top:10px" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                            .$this->session->flashdata('project_deleted').'</div>'
                        ?>
                    <?php endif; ?>
                     <?php if($this->session->flashdata('mark_publish')): ?>
                        <?php
                            echo '<div class="alert bg-green alert-dismissible" style="margin-top:10px" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                            .$this->session->flashdata('mark_publish').'</div>'
                        ?>
                    <?php endif; ?>
                    <?php if($this->session->flashdata('mark_headline')): ?>
                        <?php
                            echo '<div class="alert bg-green alert-dismissible" style="margin-top:10px" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                            .$this->session->flashdata('mark_headline').'</div>'
                        ?>
                    <?php endif; ?>
                    <?php if($this->session->flashdata('project_update')): ?>
                        <?php
                            echo '<div class="alert bg-green alert-dismissible" style="margin-top:10px" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                            .$this->session->flashdata('project_update').'</div>'
                        ?>
                    <?php endif; ?>


                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">
                                    <h2>
                                        PROJECT LIST
                                    </h2>
                                </div>
                                <div class="body">
                                    <div class="table-responsive">
                                        <table class="table  table-hover ">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th style="width:220px">Title</th>
                                                    <th style="width:130px">Category</th>
                                                    <th style="width:220px">Tags</th>
                                                    <th style="width:180px">Status</th>
                                                    <th style="width:170px">Link</th>
                                                    <th style="width:160px">Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                <tr><?php $n=0; foreach($projectAll as $project ): ?>
                                                    <td><?php $n++; echo $n ?></td>
                                                    <td><?php echo $project['portfolio_title'] ?></td>
                                                    <td><?php echo $project['portfolio_category'] ?></td>
                                                    <td >

                                                        <?php
                                                            $tags = explode(',', $project['portfolio_tags'] );
                                                            foreach ($tags as $tag) {
                                                                echo '<span class="label bg-blue-grey">'.$tag.'</span>'.' ';
                                                            }

                                                        ?>

                                                    </td>
                                                    <td>
                                                        <?php
                                                            $headline = $project['status_headline'];
                                                            $projects = $project['status_project'];
                                                            if ($projects == "isPublished") {
                                                                echo '<span class="label bg-indigo">PUBLISHED</span>'." ";
                                                            }else{
                                                                echo '<span class="label bg-light-blue">CONCEPT</span>' ." ";
                                                            }

                                                            if ($headline == "isFeatured"){
                                                              echo '<span class="label bg-brown">FEATURED</span>';
                                                            }else{
                                                                echo '<span class="label bg-grey">ORDINARY</span>';
                                                            }
                                                        ?>
                                                    </td>
                                                    <td>

                                                        <?php
                                                            $store_google = $project['link_store_google'];
                                                            $store_apple = $project['link_store_apple'];
                                                            $url_web = $project['link_url_web'];
                                                            $url_demo = $project['link_demo_web'];
                                                            $github = $project['link_github'];
                                                        ?>

                                                        <?php if($store_google != null) : ?>

                                                            <a data-tooltip="tooltip" title="Android Store" href="<?php echo $store_google ?>" target="_blank" style="font-size:25px; color:green; margin-right:5px"><i class="fa fa-android" aria-hidden="true"></i></a>

                                                        <?php endif; ?>

                                                        <?php if($store_apple != null) : ?>

                                                            <a data-tooltip="tooltip" title="Apple Store" href="<?php echo $store_apple  ?>" target="_blank" style="font-size:25px; color:black; margin-right:5px"><i class="fa fa-apple" aria-hidden="true"></i></a>

                                                        <?php endif; ?>

                                                        <?php if($url_web != null) : ?>

                                                            <a data-tooltip="tooltip" title="URL web" href="<?php echo $url_web ?>" target="_blank" style="font-size:25px; color:blue-grey; margin-right:5px"><i class="fa fa-globe" aria-hidden="true"></i></a>

                                                        <?php endif; ?>

                                                        <?php if($url_demo != null) : ?>

                                                            <a data-tooltip="tooltip" title="URL demo" href="<?php echo $url_demo ?>" target="_blank" style="font-size:25px; color:grey; margin-right:5px"><i class="fa fa-globe" aria-hidden="true"></i></a>

                                                        <?php endif; ?>

                                                        <?php if($github != null) : ?>

                                                            <a data-tooltip="tooltip" title="Github" href="<?php echo $github ?>" target="_blank" style="font-size:25px; color:black; margin-right:5px"><i class="fa fa-github" aria-hidden="true"></i></a>

                                                        <?php endif; ?>


                                                    </td>
                                                    <td>

                                                        <a data-tooltip="tooltip" title="Detail!" href="<?php echo base_url(); ?>blog/<?php echo $project['portfolio_slug'] ?>" target="_blank"><i class="material-icons waves-effect" style="color:green">remove_red_eye</i></a>

                                                        <a href="<?php echo base_url(); ?>portfolio/update/<?php echo $project['portfolio_slug'] ?>" data-tooltip="tooltip" title="Edit now!"  ><i class="material-icons waves-effect" >edit</i></a>

                                                        <a data-toggle="modal" data-tooltip="tooltip" title="Delete now!"  data-target="#deleteModal<?php echo $project['portfolio_id'] ?>"><i class="material-icons waves-effect" style="color:red">delete</i></a>


                                                        <?php
                                                            $status = $project['status_headline'];
                                                            if ($status == "isOrdinary") {
                                                                echo '<a data-toggle="modal" data-tooltip="tooltip" title="Make headline!"  data-target="#featuredModal'.$project['portfolio_id'].'" ><i class="material-icons waves-effect" style="color:brown">star</i></a>';
                                                            }
                                                        ?>

                                                        <?php
                                                            $status = $project['status_project'];
                                                            if ($status == "isConcept") {
                                                                 echo '<a data-toggle="modal" data-tooltip="tooltip" title="Publish now!" data-target="#actionModal'.$project['portfolio_id'].'"><i class="material-icons waves-effect" style="color:blue">publish</i></a>';
                                                            }

                                                        ?>

                                                    </td>
                                                    <!--modal-->
                                                    <td>
                                                        <!-- delete Size modal -->
                                                        <div class="modal fade" id="deleteModal<?php echo $project['portfolio_id'] ?>" tabindex="-1" role="dialog">
                                                            <div class="modal-dialog modal-sm" role="document">
                                                                <div class="modal-content modal-col-blue-grey">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="smallModalLabel">DELETE PROJECT</h4>
                                                                    </div>
                                                                    <div class="modal-body" >
                                                                        Are you sure?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a class="btn btn-link bg-red waves-effect" href="<?php echo base_url()?>portfolio/delete/<?php echo $project['portfolio_id'] ?>">Delete</a>
                                                                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Cancel</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                         <!-- action Size modal -->
                                                         <div class="modal fade" id="actionModal<?php echo $project['portfolio_id'] ?>" tabindex="-1" role="dialog">
                                                            <div class="modal-dialog modal-sm" role="document">
                                                                <div class="modal-content modal-col-blue-grey">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="smallModalLabel">PUBLISH PROJECT</h4>
                                                                    </div>
                                                                    <div class="modal-body" >
                                                                        Are you sure to publish this project?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a class="btn btn-link bg-blue waves-effect" href="<?php echo base_url()?>portfolio/publish/<?php echo $project['portfolio_id'] ?>">PUBLISH</a>
                                                                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CANCEL</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- featured Size modal -->
                                                         <div class="modal fade" id="featuredModal<?php echo $project['portfolio_id'] ?>" tabindex="-1" role="dialog">
                                                            <div class="modal-dialog modal-sm" role="document">
                                                                <div class="modal-content modal-col-blue-grey">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="smallModalLabel">FEATURED PROJECT</h4>
                                                                    </div>
                                                                    <div class="modal-body" >
                                                                        Are you sure to mark this project as Featured project?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a class="btn btn-link bg-brown waves-effect" href="<?php echo base_url()?>portfolio/headline/<?php echo $project['portfolio_id'] ?>">MARK</a>
                                                                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CANCEL</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </td>
                                                </tr><?php endforeach ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- #END# Exportable Table -->

                </div>
            </section>
