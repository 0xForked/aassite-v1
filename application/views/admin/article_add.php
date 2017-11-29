            
            <?php echo form_open_multipart('article/create'); ?>
            
                <!-- TinyMCE -->
                <script src="<?php echo base_url();?>assets/vendor/SBSMaterial/plugins/tinymce/tinymce.js"></script>
                <script>
                    tinymce.init({ 
                        selector:'textarea',
                        theme: 'modern',
                        plugins: [
                            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                            'searchreplace wordcount visualblocks visualchars code fullscreen',
                            'insertdatetime media nonbreaking save table contextmenu directionality',
                            'emoticons template paste textcolor colorpicker textpattern imagetools'
                        ], 
                        toolbar1: ' undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent' ,
                        toolbar2: ' link image media preview code | forecolor backcolor emoticons',
                        image_advtab: true
                    });
                </script>
                
                <section class="content">
                    <div class="container-fluid">
                        <div class="block-header">
                            <ol class="breadcrumb breadcrumb-bg-blue-grey">
                                <li><a href="javascript:void(0);"><i class="material-icons">text_fields</i> Article</a></li>   
                                <li class="active"><i class="material-icons">border_color</i> Add</li>    
                            </ol>
                        </div> 
                            
                         <!-- Flash messages -->
                        <?php if(validation_errors()): ?>
                            <?php 
                                 echo '<div class="alert bg-red alert-dismissible" style="margin-top:10px" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>'.validation_errors().'</div>'
                            ?>
                        <?php endif; ?> 

                        <div class="row clearfix" >
                            
                            <!--start main fix-->
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                <div class="card">
                                    <div class="header">
                                        <h2>Create new article</h2>
                                    </div>
                                    <div class="body">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="articleTitle" class="form-control" />
                                                <label class="form-label">Title</label>
                                            </div>
                                            <div class="form-line" style="margin: 15px 0 0px 0">
                                                <textarea rows="12" name="articleBody" id="tinymce" ></textarea>
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>
                            </div>
                             <!--end main-->

                             <!--start option fix-->
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="card">
                                    <div class="header">
                                        <h2>Options</h2>
                                    </div>
                                    <div class="body" style="text-align:center">
                                        <div class="switch" style="text-align:center; margin:0 0 15px 20px">
                                            <label>Article<input type="checkbox" name="articleStatus" ><span class="lever"></span>Featured</label>
                                        </div>
                                        <div class="switch" style="text-align:center; margin:0 0 15px 0">
                                            <label>Concept<input type="checkbox" name="articlePublish" checked><span class="lever"></span>Publish</label>
                                        </div>
                                        <button type="button" data-toggle="modal" data-target="#createModal" style="margin-left:5px; width:310px" class="btn btn-material btn-lg btn-primary waves-effect">PUBLISH</button>   
                                    </div>
                                </div>
                            </div>
                             <!--end option-->

                             <!--start images fix-->
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="card">
                                    <div class="header">
                                        <h2>Featured images</h2>
                                    </div>
                                    <div class="body">
                                    <label for="articleImage">
                                        <input type="file" name="articleImage" id="articleImage" style="display:none;" onchange="readIMG01(this);"/>
                                        <img id="img01" name="img01" src="<?php echo base_url();?>assets/images/items/addimage.png" height="217px" width="326px"/>
                                    </label>
                                       
                                    </div>
                                </div>
                            </div>
                             <!--end images-->

                            <!--start category fix -->
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="card">
                                    <div class="header">
                                        <h2>Categories</h2>
                                    </div>
                                    <div class="body">
                                        <?php foreach($categories as $category): ?>
                                        <tr>      
                                            <td>
                                                
                                                <input type="checkbox" name="articleCategory[]" id="<?php echo $category['category_id']; ?>" value="<?php echo $category['category_id']; ?>" class="filled-in chk-col-red"  />
                                                <label for="<?php echo $category['category_id']; ?>"><?php echo $category['category_title']; ?></label></br>

                                            </td>
                                        </tr>
                                        <?php endforeach; ?>  
       
                                    </div>
                                </div>
                            </div>
                             <!--end category-->

                             <!--start tags (-)autocomplete from database-->
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="card">
                                    <div class="header">
                                        <h2>Tags</h2>
                                    </div>
                                    <div class="body">                         

                                        <div class="form-group demo-tagsinput-area">
                                            <div class="form-line">
                                                <input type="text" name="articleTags" class="form-control" id="articleTags" data-role="tagsinput" value="Tags"/>

                                            </div>
                                        </div>
                                           
                                    </div>
                                </div>
                            </div>
                            <!--end tags-->

                        </div>

                    </div>
                </section>

                <!--modal fix-->
                <div class="modal fade" id="createModal" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content modal-col-blue-grey">
                            <div class="modal-header">
                                <h4 class="modal-title" id="smallModalLabel">CREATE ARTICLE</h4>
                            </div>
                            <div class="modal-body">
                                Are you sure?
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-link bg-blue waves-effect">CREATE</button>
                                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CANCEL</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--modal end-->

                <!--images JavaScript fix-->
                <script>
                    function readIMG01(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                $('#img01')
                                    .attr('src', e.target.result)
                                    .width(326)
                                    .height(217);
                            };
                            reader.readAsDataURL(input.files[0]);
                        }
                    }


                </script>
                <!--images-->

            <?php echo form_close(); ?>