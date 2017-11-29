<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <ol class="breadcrumb breadcrumb-bg-blue-grey">
                <li><a href="javascript:void(0);"><i class="material-icons">home</i> Dashboard</a></li>       
            </ol>
        </div>

        <!-- Widgets -->
        <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4 hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons col-teal">text_fields</i>
                        </div>
                        <div class="content">
                            <div class="text">ARTICLES</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $totalArticle?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4 hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons col-teal">business_center</i>
                        </div>
                        <div class="content">
                            <div class="text">PORTFOLIOS</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $totalPortfolio?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4 hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons col-teal">format_list_bulleted</i>
                        </div>
                        <div class="content">
                            <div class="text">CATEGORIES</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $totalCategories?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4 hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons col-teal">style</i>
                        </div>
                        <div class="content">
                            <div class="text">TAGS</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $totalTags?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- #END# Widgets -->    
        
        <!-- Widgets -->
        <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4 hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons col-teal">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">MESSAGES</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $totalMessages?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4 hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons col-teal">perm_media</i>
                        </div>
                        <div class="content">
                            <div class="text">MEDIA</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $totalMedia?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4 hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons col-teal">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">UNIQUE VISITORS</div>
                            <div class="number count-to" data-from="0" data-to="9999" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                
        </div>
        <!-- #END# Widgets -->     

        <div class="row clearfix">
                <!-- article Info fix -->
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
                        <div class="header">
                            <h2>ARTICLE CONCEPT</h2>
                            <ul class="header-dropdown m-r--5">
                                <li>
                                    <a data-tooltip="tooltip" title="See all!" style="margin-right:15px;" href="dashboard/article" >
                                        <i class="material-icons">view_list</i>
                                    </a>                                    
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th style="width:200px">Title</th>
                                            <th style="width:140px">Date Created</th>
                                            <th style="width:130px">Categories</th>
                                            <th style="width:150px">Tags</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0;foreach ($getArticle as $article ): ?>
                                            <tr>
                                                
                                                <td><?php $no++ ; echo $no ?></td>
                                                <td><?php echo $article['post_title'] ?></td>
                                                <td><?php 
                                                   
                                                    $timestamp = strtotime($article['created_at']);
                                                    echo date('d F Y', $timestamp);

                                                ?></td>
                                                <td>
                                                    <?php
                                                      
                                                       $cats = explode(',', $article['post_category']);
                                                       foreach ($cats as $key) {
                                                           foreach ($categories as $ctg ) {
                                                               if ($ctg['category_id'] == $key){
                                                                    echo '<span class="label bg-green">'.$ctg['category_title'].'</span>'.' ';
                                                                }
                                                           }
                                                           
                                                       }

                                                     ?>
                                                         
                                                </td>
                                                <td>                                            
                                                    <?php
                                                            $tags = explode(',', $article['post_tag'] );
                                                            foreach ($tags as $tag) {
                                                                echo '<span class="label bg-blue-grey">'.$tag.'</span>'.' ';
                                                            }

                                                        ?>                                         
                                                </td>
                                                <td>
                                                    <?php 
                                                        $status_article = $article['isPublished'];
                                                        if ($status_article == 'isConcept') {
                                                            echo '<span class="label bg-grey">Concept</span>';
                                                        }
                                                        
                                                    ?>
                                                </td>
                                               
                                            </tr>
                                         <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->
                
                <!-- messages fix -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>LATES MESSAGES</h2>
                            <ul class="header-dropdown m-r--5">
                                <li>
                                    <a data-tooltip="tooltip" title="See all!" style="margin-right:15px;" href="dashboard/messages" >
                                        <i class="material-icons">view_list</i>
                                    </a>                                    
                                </li>
                            </ul>
                        </div>                            
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <tbody>
                                        <?php foreach($getMessages as $message) : ?>
                                        <tr>
                                            
                                            <td>
                                                <img src="<?php echo base_url();?>/assets/vendor/SBSMaterial/images/user.png" width="38" height="38" alt="User" />
                                            </td>
                                            <td> 
                                                <?php echo $message['message_name'] ?> (<a href="mailto:<?php echo $message['message_email'] ?>" style="font-size:10px"><?php echo $message['message_email'] ?></a>) </br>
                                                <p style="font-size:12px"><?php echo $message['message_body'] ?></p>
                                            </td>  

                                        </tr>   
                                        <?php endforeach ?>                                                          
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# messages fix -->
        </div> 
    </div>
</section>