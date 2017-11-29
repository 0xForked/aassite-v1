            <?php echo form_open_multipart('portfolio/create'); ?>
            
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
                                <li><a href="javascript:void(0);"><i class="material-icons">layers</i> Portfolio</a></li>   
                                <li class="active"><i class="material-icons">border_color</i> add</li>    
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
                                    <h2>Create new portfolio</h2>
                                </div>
                                <div class="body">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="projectTitle" class="form-control" />
                                            <label class="form-label">Title</label>
                                        </div>
                                      
                                        <div class="form-line" style="margin: 15px 0 0px 0">
                                            <textarea rows="16" name="projectDescription" id="tinymce" ></textarea>
                                        </div>
                                        <div class="form-line" style="margin: 25px 0 0 0">
                                            <input type="text" name="link_googleStore" class="form-control" />
                                            <label class="form-label">Mobile - Link Store Google</label>
                                        </div>
                                        <div class="form-line" style="margin: 25px 0 0 0">
                                            <input type="text" name="link_appleStore" class="form-control" />
                                            <label class="form-label">Mobile - Link Store Apple</label>                                         
                                        </div>                                       
                                        <div class="form-line" style="margin: 25px 0 0 0">
                                            <input type="text" name="link_URLWeb" class="form-control" />
                                            <label class="form-label">Website - Link URL</label>                                         
                                        </div>
                                        <div class="form-line" style="margin: 25px 0 0 0">
                                            <input type="text" name="link_URLDemo" class="form-control" />
                                            <label class="form-label">Website - Link Demo</label>                                         
                                        </div>
                                        <div class="form-line" style="margin: 25px 0 0 0">
                                            <input type="text" name="link_GithubSource" class="form-control" />
                                            <label class="form-label">Open Source - Link Github</label>
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
                                    <div class="switch" style="text-align:center; margin:0 0 15px 10px">
                                        <label>Ordinary<input type="checkbox" name="projectHeadline" ><span class="lever"></span>Featured</label>
                                    </div>
                                    <div class="switch" style="text-align:center; margin:0 0 15px 0">
                                        <label>Concept<input type="checkbox" name="projectStatus" checked><span class="lever"></span>Publish</label>
                                    </div>
                                    <button type="button" data-toggle="modal" data-target="#createModal" style="margin-left:5px; width:310px" class="btn btn-material btn-lg btn-primary waves-effect">PUBLISH</button>   
                                </div>
                            </div>
                        </div>
                         <!--end option-->

                        <!--start category fix -->
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="card">
                                <div class="header">
                                    <h2>Categories</h2>
                                </div>
                                <div class="body">
                                    
                                <div class="form-line" style="margin-bottom:10px">
                                    <select class="form-control show-tick" name="projectCategory">
                                        <option value="">- Please select category -</option>
                                        <option value="mobile">Mobile</option>
                                        <option value="web">Web</option>
                                                                           
                                    </select>
                                </div>
                            
   
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
                                            <input type="text" name="projectTags" class="form-control" id="projectTags" data-role="tagsinput" value="Tags"/>

                                        </div>
                                    </div>
                                       
                                </div>
                            </div>
                        </div>
                        <!--end tags-->

                         <!--start images fix-->
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="card">
                                <div class="header">
                                    <h2>Project Logo/Image</h2>
                                </div>
                                <div class="body">
                                <label for="projectLogo">
                                    <input type="file" name="projectLogo" id="projectLogo" style="display:none;" onchange="readIMG01(this);"/>
                                    <img id="img01" name="img01" src="<?php echo base_url();?>assets/images/items/addimage.png" height="217px" width="326px"/>
                                </label>
                                   
                                </div>
                            </div>
                        </div>
                         <!--end images-->

                      
                        <!--start images fix-->
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="card">
                                <div class="header">
                                    <h2>Featured images one</h2>
                                </div>
                                <div class="body">
                                <label for="featuredImage01">
                                    <input type="file" name="featuredImage01" id="featuredImage01" style="display:none;" onchange="readIMG02(this);"/>
                                    <img id="img02" name="img02" src="<?php echo base_url();?>assets/images/items/addimage.png" height="217px" width="326px"/>
                                </label>
                                   
                                </div>
                            </div>
                        </div>
                         <!--end images-->
                        
                         <!--start images fix-->
                         <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="card">
                                <div class="header">
                                    <h2>Featured images two</h2>
                                </div>
                                <div class="body">
                                <label for="featuredImage02">
                                    <input type="file" name="featuredImage02" id="featuredImage02" style="display:none;" onchange="readIMG03(this);"/>
                                    <img id="img03" name="img03" src="<?php echo base_url();?>assets/images/items/addimage.png" height="217px" width="326px"/>
                                </label>
                                   
                                </div>
                            </div>
                        </div>
                         <!--end images-->

                          <!--start images fix-->
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="card">
                                <div class="header">
                                    <h2>Featured images three</h2>
                                </div>
                                <div class="body">
                                <label for="featuredImage03">
                                    <input type="file" name="featuredImage03" id="featuredImage03" style="display:none;" onchange="readIMG04(this);"/>
                                    <img id="img04" name="img04" src="<?php echo base_url();?>assets/images/items/addimage.png" height="217px" width="326px"/>
                                </label>
                                   
                                </div>
                            </div>
                        </div>
                         <!--end images-->

                    </div>

                </div>
            </section>

            <!--modal fix-->
            <div class="modal fade" id="createModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content modal-col-blue-grey">
                        <div class="modal-header">
                            <h4 class="modal-title" id="smallModalLabel">CREATE PROJECT</h4>
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

            <!--images-->
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
                
                function readIMG02(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#img02')
                                .attr('src', e.target.result)
                                .width(326)
                                .height(537);
                        };
                        reader.readAsDataURL(input.files[0]);
                    }
                }

                function readIMG03(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#img03')
                                .attr('src', e.target.result)
                                .width(326)
                                .height(537);
                        };
                        reader.readAsDataURL(input.files[0]);
                    }
                }

                function readIMG04(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#img04')
                                .attr('src', e.target.result)
                                .width(326)
                                .height(537);
                        };
                        reader.readAsDataURL(input.files[0]);
                    }
                }

            </script>
            <!--images-->

        <?php echo form_close(); ?>