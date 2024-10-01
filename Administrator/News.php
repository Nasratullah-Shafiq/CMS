<?php 

include('./Assets/_Partial Components/Header.php');

?>

<div class="row" id="row">
<!-- BEGIN LEFT SIDE BAR -->
    <div class="left-side-bar">
        <?php include('./Assets/_Partial Components/Navigation.php');?>
    </div>
    <!-- END OF LEFT SIDE BAR DIV-->
    <!-- BEGIN RIGHT SIDE BAR DIV-->
    <div class="right-side-bar">
    <div class="row"> 
        <div class="col-xs-6"> <h1 style = "color: #2C3E50"> <small> News </small></div>
            <div class="col-xs-6">
                <div class = "col-sm-12 text-right">
                    <form class=" "  method="POST">
                        <div class="form-group">
                            <label> Search News Here</label>
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" name ="searchNews" id ="searchNews" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn green" type="button">Go!</button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-1">testing</div>
            <div class="col-xs-1">testing</div>
            <div class="col-xs-1">testing</div>
            <div class="col-xs-1">testing</div>
            <div class="col-xs-1">testing</div>
            <div class="col-xs-1">testing</div>
            <div class="col-xs-1">testing</div>
            <div class="col-xs-1">testing</div>
            <div class="col-xs-1">testing</div>
            <div class="col-xs-1">testing</div>
            <div class="col-xs-1">testing</div>
            <div class="col-xs-1">testing</div>
        </div>
        <!-- <div class="row" style="background: red;"> -->
            <!-- <div calss = "col-md-9">
                <h1 style = "color: #2C3E50"> <small> Home <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> News </small></h1><hr>
                 <ol class="breadcrumb">
                    <li style="color: #5C9BD1"><a href="index"> <i class = "fa fa-dashboard"></i>  Dashboard </a></li>
                    <li class = ""> <a href="javascript:;" data-toggle="modal" data-target="#News_Data_Modal"> <i class = "fa fa-list-alt"> </i> Create News </a></li>
                </ol>
            </div> -->
<!--=====================================================================================================================
    START OF MODAL DIV WE CAN CREATE NEWS AND SUBMIT IT TO THE DATABASE
======================================================================================================================-->
<div id="News_Data_Modal" class="modal Myfade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel"> You can add news here </h4>
        </div>

        <div class="modal-body">
            <form class="form-horizontal" method="POST" id = "News_Form">
                      
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Heading </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Heading" id="Heading" placeholder="Heading">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Body </label>
                        <div class="col-sm-10">
                          <textarea id="Body" col="30" rows="10" class="form-control" name="Body" ></textarea>
                        </div>
                      </div>
                        <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Source </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Source" id="Source" placeholder="Sourse">
                        </div>
                      </div> 
                        <div class="form-group">
                            <label style="text-align: left;" class="col-sm-2 control-label"> File </label>
                            <div class="col-sm-10">
                                <input type = "file" name = "News_Image" id = "News_Image"/>
                                
                            </div>
                        </div>  
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <input type = "hidden" name = "action" id = "action"/>
                        <input type = "submit" name = "button_action" class = "button-start-the-quiz" id = "button_action" value = "Add News" />
                          <span id="span-val" class="span-validation"></span> 
                        </div>

                    </div>
                
                </form>
            </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    
        </div>
    </div>    
</div>
<!--====================================================================================================================
    END OF MODAL DIV
======================================================================================================================-->

            
<!--=============================================================================================================================
    START OF TABLE SHOWING NEWS RESULT
===============================================================================================================================-->
            <div class="col-md-12" id = "News_Table">
                 <!-- id = "resultNews" -->
            </div>  
<!--=============================================================================================================================
    END OF DIV SHOWING NEWS RESULT TABLE
===============================================================================================================================-->

<!-- Start of Div show Edit News -->

<div id = "Edit-News-Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Edit News Here...</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" id = "News_For">
                      <div class="form-group" style="">
                        <label style="text-align: left;" class="col-sm-2 control-label"> ID </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "News-News-ID" id="News-News_ID" placeholder="News ID">
                        </div>
                        </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Heading </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "News-Heading" id="News-Heading" placeholder="Heading">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Body </label>
                        <div class="col-sm-10">
                          <textarea id="News-Body" col="30" rows="10" class="form-control" name="Body" ></textarea>
                        </div>
                      </div>
                        <div class="form-group">
                        <label style="text-align: left;" class="col-sm-2 control-label"> Source </label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name = "Source" id="News-Source" placeholder="Sourse">
                        </div>
                      </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="button-start-the-quiz" name="btn-edit-news" id = "btn-edit-news" > Update News </button>
                        <span id="span-valid" class="span-validation"></span>
                        </div>

                    </div>
                    
                </form>
          
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> 

<!-- End of Div show Edit News -->

	</div>
<!-- END OF RIGHT SIDE BAR DIV -->
</div>
<!-- END OF ROW DIV -->
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
<?php 
include('./Assets/_Partial Components/Footer.php');
?>