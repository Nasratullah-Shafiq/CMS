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
        <!-- <div class="row" style="background: red;"> -->
            <div calss = "col-md-9">
                <h1 style = "color: #2C3E50"> <small> Home <i class = "fa fa-chevron-right" style = "font-size: 15px; padding-left: 5px; padding-right: 5px;"> </i> Listening </small></h1><hr>
                 <ol class="breadcrumb">
                    <li style="color: #5C9BD1"><a href="index"> <i class = "fa fa-dashboard"></i>  Dashboard </a></li>
                    <li class = ""> <a href="javascript:;" data-toggle="modal" data-target="#Audio_Data_Modal">  <img alt="" class="img-circle" width="17px" height = "17px" src = "../Assets/img/icons/Audio_26px.png" />  Add Audio </a></li>
                </ol>
            </div>
            <div class = "col-sm-9">

            </div>
<!--=====================================================================================================================
    START OF MODAL DIV WE CAN REGISTER STUDENTS AND SUBMIT IT TO THE DATABASE
======================================================================================================================-->
<div id="Audio_Data_Modal" class="modal Myfade" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel"> Add Audio Here </h4>
        </div>

        <div class="modal-body">
            <form class="form-horizontal" method="POST" id = "Audio_Form"  enctype="multipart/form-data">
                      
             <div class="form-group">
                        
                    <label style="text-align: left;" class="col-sm-3 control-label"> Audio </label>
                    <div class="col-sm-9">
                        <input type = "file" name = "Change_Audio" id = "Change_Audio"/>
                        
                    </div>
                </div> 
                      <div class="form-group">
                          <label for="Book" style="text-align: left;" class="col-sm-3 control-label"> Book </label>
                            <div class="col-sm-9">
                              <select name="Book_ID" id = "Book_ID" class="form-control">
                              <?php 
                               $Book = $mtd->getBook();
                                  if(!$Book){
                                      echo "<option value=''> Book Table Not Exist! </option>";
                                    }
                                    else{
                                      if($Book->num_rows>0){
                                        while ($result = $Book->fetch_assoc()) { ?>
                                              
                                        <option value="<?php echo $result['Book_ID']; ?>"> 
                                        <?php echo $result['Book_Name']; ?> </option>
                                <?php 
                              }}
                                      else{
                                        echo "<option value=''> Book Table is empty </option>"; 
                                        }} ?>
                              </select>
                            </div>
                        </div> 
                        <div class="form-group">
                        <label style="text-align: left;" class="col-sm-3 control-label"> Question </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "Question" id="Question" placeholder="Question">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-3 control-label">1st Answer </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "First_Answer" id="First_Answer" placeholder="First Answer">
                        </div>
                      </div> 
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-3 control-label">2nd Answer </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "Second_Answer" id="Second_Answer" placeholder="Second Answer">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-3 control-label">3rd Answer </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "Third_Answer" id="Third_Answer" placeholder="Third Answer">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-3 control-label"> 4rth Answer </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "Fourth_Answer" id="Fourth_Answer" placeholder="Fourth Answer">
                        </div>
                      </div>
                      <div class="form-group">
                          <label for="Book" style="text-align: left;" class="col-sm-3 control-label"> Right Answer </label>
                            <div class="col-sm-9">
                              <select name="Right_Answer" id = "Right_Answer" class="form-control">
                                   <option value="0"> First Answer </option>
                                   <option value="1"> Second Answer </option>
                                   <option value="2"> Third Answer </option>
                                   <option value="3"> Fourth Answer </option>
                              </select>
                            </div>
                        </div>
                        <div class="form-group">
                        <label style="text-align: left;" class="col-sm-3 control-label"> Description </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "Description" id="Description" placeholder="Description">
                        </div>
                      </div> 
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                        <input type = "hidden" name = "action" id = "action"/>
                        <input type = "submit" name = "button_action" class = "button-start-the-quiz" id = "button_action" value = "Add Audio" />
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
    END OF MODAL STUDENT TABLEDIV
======================================================================================================================-->

            <div class = "col-sm-3 text-right">
                <form class=" "  method="POST">
                        <div class="form-group">
                            <label> Search Audios Here</label>
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" name ="searchAudio" id ="searchAudio" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn green" type="button">Go!</button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </div>
                    </form>
            </div>
<!--=============================================================================================================================
    START OF TABLE SHOWING NEWS RESULT
===============================================================================================================================-->
            <div class="col-md-12" id = "Audio_Table">
                 <!-- id = "resultNews" -->
            </div>  
<!--=============================================================================================================================
    END OF DIV SHOWING NEWS RESULT TABLE
===============================================================================================================================-->

<!-- Start of Div show Edit News -->

<div id = "Edit-Audio-Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"> Edit Audio Here...</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST"> 
                      <div class="form-group" style="display:;">
                        <label style="text-align: left;" class="col-sm-3 control-label"> ID </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "Audio_Audio_ID" id="Audio_Audio_ID" placeholder="ID">
                        </div>
                      </div>
                        <div class="form-group">
                        <label style="text-align: left;" class="col-sm-3 control-label"> Question </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "Audio_Question" id="Audio_Question" placeholder="Question">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-3 control-label">1st Answer </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "Audio_First_Answer" id="Audio_First_Answer" placeholder="First Answer">
                        </div>
                      </div> 
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-3 control-label">2nd Answer </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "Audio_Second_Answer" id="Audio_Second_Answer" placeholder="Second Answer">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-3 control-label">3rd Answer </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "Audio_Third_Answer" id="Audio_Third_Answer" placeholder="Third Answer">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-3 control-label"> 4rth Answer </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "Audio_Fourth_Answer" id="Audio_Fourth_Answer" placeholder="Fourth Answer">
                        </div>
                      </div>
                      <div class="form-group">
                          <label for="Book" style="text-align: left;" class="col-sm-3 control-label"> Right Answer </label>
                            <div class="col-sm-9">
                              <select name="Audio_Right_Answer" id = "Audio_Right_Answer" class="form-control">
                                   <option value="1"> First Answer </option>
                                   <option value="2"> Second Answer </option>
                                   <option value="3"> Third Answer </option>
                                   <option value="4"> Fourth Answer </option>
                              </select>
                            </div>
                        </div>
                      <div class="form-group">
                        <label style="text-align: left;" class="col-sm-3 control-label"> Description </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name = "Audio_Description" id="Audio_Description" placeholder="Description">
                        </div>
                      </div>
                        <div class="form-group">
                          <label for="Book" style="text-align: left;" class="col-sm-3 control-label"> Book </label>
                            <div class="col-sm-9">
                              <select name="Audio_Book_ID" id = "Audio_Book_ID" class="form-control">
                              <?php 
                               $Book = $mtd->getBook();
                                  if(!$Book){
                                      echo "<option value=''> Book Table Not Exist! </option>";
                                    }
                                    else{
                                      if($Book->num_rows>0){
                                        while ($result = $Book->fetch_assoc()) { ?>
                                              
                                        <option value="<?php echo $result['Book_ID']; ?>"> 
                                        <?php echo $result['Book_Name']; ?> </option>
                                <?php 
                              }}
                                      else{
                                        echo "<option value=''> Book Table is empty </option>"; 
                                        }} ?>
                              </select>
                            </div>
                        </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="button-start-the-quiz" name="btn-edit-audio" id = "btn-edit-audio" > Update </button>
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