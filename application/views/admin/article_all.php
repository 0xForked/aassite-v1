            <section class="content">
                <div class="container-fluid">
                    <div class="block-header">
                        <ol class="breadcrumb breadcrumb-bg-blue-grey">
                            <li><a href="javascript:void(0);"><i class="material-icons">text_fields</i> Article</a></li>   
                            <li class="active"><i class="material-icons">library_books</i> All</li>    
                        </ol>
                    </div>   
                    <!-- Flash messages -->
                    <?php if($this->session->flashdata('article_created')): ?>
                        <?php 
                            echo '<div class="alert bg-green alert-dismissible" style="margin-top:10px" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                            .$this->session->flashdata('article_created').'</div>'
                        ?>
                    <?php endif; ?>
                     <?php if($this->session->flashdata('mark_headline')): ?>
                        <?php 
                            echo '<div class="alert bg-green alert-dismissible" style="margin-top:10px" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                            .$this->session->flashdata('mark_headline').'</div>'
                        ?>
                    <?php endif; ?>
                     <?php if($this->session->flashdata('mark_publish')): ?>
                        <?php 
                            echo '<div class="alert bg-green alert-dismissible" style="margin-top:10px" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                            .$this->session->flashdata('mark_publish').'</div>'
                        ?>
                    <?php endif; ?>
                    <?php if($this->session->flashdata('article_deleted')): ?>
                        <?php 
                            echo '<div class="alert bg-green alert-dismissible" style="margin-top:10px" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                            .$this->session->flashdata('article_deleted').'</div>'
                        ?>
                    <?php endif; ?>
                    <?php if($this->session->flashdata('article_update')): ?>
                        <?php 
                            echo '<div class="alert bg-green alert-dismissible" style="margin-top:10px" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                            .$this->session->flashdata('article_update').'</div>'
                        ?>
                    <?php endif; ?>

                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">
                                    <h2>
                                        ARTICLE LIST
                                    </h2>                                   
                                </div>
                                <div class="body">
                                    <div class="table-responsive">
                                        <table class="table  table-hover ">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th style="width:300px">Title</th>                                            
                                                    <th style="width:230px">Category</th>
                                                    <th style="width:230px">Tags</th>
                                                    <th>Status</th>                                                    
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                         
                                            <tbody>
                                                
                                                <tr><?php $n=0; foreach($articleAll as $article ): ?>
                                                    <td><?php $n++; echo $n ?></td>
                                                    <td><?php echo $article['post_title'] ?></td>                                                    
                                                    <td><?php
                                                      
                                                       $cats = explode(',', $article['post_category']);
                                                       foreach ($cats as $key) {
                                                           foreach ($categories as $ctg ) {
                                                               if ($ctg['category_id'] == $key){
                                                                    echo '<span class="label bg-green">'.$ctg['category_title'].'</span>'.' ';
                                                                }
                                                           }
                                                           
                                                       }

                                                     ?></td>
                                                    <td >                                            
                                                        
                                                        <?php
                                                            $tags = explode(',', $article['post_tag'] );
                                                            foreach ($tags as $tag) {
                                                                echo '<span class="label bg-blue-grey">'.$tag.'</span>'.' ';
                                                            }

                                                        ?>
                                                                                              
                                                    </td>  
                                                    <td>
                                                        <?php
                                                            $status = $article['isPublished'];
                                                            $featured = $article['post_status'];
                                                            if ($status == "isPublished") {
                                                                echo '<span class="label bg-indigo">PUBLISHED</span>'." ";
                                                            }else{
                                                                echo '<span class="label bg-light-blue">CONCEPT</span>' ." ";
                                                            }

                                                            if ($featured == "isFeatured"){
                                                              echo '<span class="label bg-brown">FEATURED</span>';
                                                            }else{
                                                                echo '<span class="label bg-grey">ORDINARY</span>';
                                                            }
                                                        ?>
                                                    </td>                                                 
                                                    <td> 
                                                        
                                                        <a data-tooltip="tooltip" title="Detail!" href="<?php echo base_url(); ?>blog/<?php echo $article['post_slug'] ?>" target="_blank"><i class="material-icons waves-effect" style="color:green">remove_red_eye</i></a>

                                                        <a href="<?php echo base_url(); ?>article/update/<?php echo $article['post_slug'] ?>" data-tooltip="tooltip" title="Edit now!"  ><i class="material-icons waves-effect" >edit</i></a> 

                                                        <a data-toggle="modal" data-tooltip="tooltip" title="Delete now!"  data-target="#deleteModal<?php echo $article['posts_id'] ?>"><i class="material-icons waves-effect" style="color:red">delete</i></a> 
   
                                                        
                                                        <?php
                                                            $status = $article['post_status'];
                                                            if ($status == "isArticle") {
                                                                echo '<a data-toggle="modal" data-tooltip="tooltip" title="Make headline!"  data-target="#featuredModal'.$article['posts_id'].'" ><i class="material-icons waves-effect" style="color:brown">star</i></a>';
                                                            }
                                                        ?>
                                                         
                                                        <?php
                                                            $status = $article['isPublished'];
                                                            if ($status == "isConcept") {
                                                                 echo '<a data-toggle="modal" data-tooltip="tooltip" title="Publish now!" data-target="#actionModal'.$article['posts_id'].'"><i class="material-icons waves-effect" style="color:blue">publish</i></a>';
                                                            }
                                                            
                                                        ?> 

                                                    </td>
                                                    <!--modal-->
                                                    <td>
                                                        <!-- delete Size modal -->
                                                        <div class="modal fade" id="deleteModal<?php echo $article['posts_id'] ?>" tabindex="-1" role="dialog">
                                                            <div class="modal-dialog modal-sm" role="document">
                                                                <div class="modal-content modal-col-blue-grey">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="smallModalLabel">DELETE ARTICLE</h4>
                                                                    </div>
                                                                    <div class="modal-body" >
                                                                        Are you sure?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a class="btn btn-link bg-red waves-effect" href="<?php echo base_url()?>article/delete/<?php echo $article['posts_id'] ?>">Delete</a>
                                                                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Cancel</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                         <!-- action Size modal -->
                                                         <div class="modal fade" id="actionModal<?php echo $article['posts_id'] ?>" tabindex="-1" role="dialog">
                                                            <div class="modal-dialog modal-sm" role="document">
                                                                <div class="modal-content modal-col-blue-grey">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="smallModalLabel">PUBLISH ARTICLE</h4>
                                                                    </div>
                                                                    <div class="modal-body" >
                                                                        Are you sure to publish this article?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a class="btn btn-link bg-blue waves-effect" href="<?php echo base_url()?>article/publish/<?php echo $article['posts_id'] ?>">PUBLISH</a>
                                                                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CANCEL</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- featured Size modal -->
                                                         <div class="modal fade" id="featuredModal<?php echo $article['posts_id'] ?>" tabindex="-1" role="dialog">
                                                            <div class="modal-dialog modal-sm" role="document">
                                                                <div class="modal-content modal-col-blue-grey">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="smallModalLabel">FEATURED ARTICLE</h4>
                                                                    </div>
                                                                    <div class="modal-body" >
                                                                        Are you sure to mark this article as Featured article?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <a class="btn btn-link bg-brown waves-effect" href="<?php echo base_url()?>article/headline/<?php echo $article['posts_id'] ?>">MARK</a>
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

        