@include('header_links')
<div id="cybershield_campaignadd-page" class="app_background background-fff height-full active_page" data-role="page">
    <div class="col-xs-4 padding-0 pageleftside"></div>
    <div class="app_content_body main_div_width" style="height: 624px; overflow: auto; margin-top: 81px;">
        <div class="mian">
            <div class="mobile-container">
            <form id="cubershieldcycleform" method="post" action="{{url('/cybershieldcampaignadd')}}" enctype="application/x-www-form-urlencoded" >
            @php
              $corp_id = session()->get('corp_id');
            @endphp
           
            {{ csrf_field() }}
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                
                </ul>
            </div>
            @endif
            @if(!empty($error_msg))
            <div class="alert alert-danger">
                <ul>66
                    <li>{{ $error_msg }}</li>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                
                </ul>
            </div>
            @endif
            <input type="hidden" id="corp_id" value="{{$corp_id}}"  enctype="application/x-www-form-urlencoded">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="card_layout padding-LR-5 passwordinput">
                            <fieldset class="titleclass form-group padding-0 label-static is-empty">
                                <label for="" class="control-label font-15">Title</label> <input type="text" class="form-control border-none" id="title" name="title" placeholder="" style="padding-left: 5px !important;" value="" required/>
                            </fieldset>
                        </div>
                        <div class="card_layout padding-LR-5 passwordinput">
                            <fieldset class="descriptionclass form-group padding-0 label-static is-empty">
                                <label for="" class="control-label font-15">Description</label>
                                <input type="text" class="form-control border-none" id="description" name="description" placeholder="" style="padding-left: 5px !important;" value="" required/>
                            </fieldset>
                        </div>
                          <div class="col-md-12 margin-top-5">
                                                        <div id="steptimeComponentCard" class="component-card row ">
                                                            <div class="col-xs-12 margin-top-2">
                                                                <div class="card-header newcardstyle padding-tb-5 card-vertical-middle background-bfb-20">
                                                                    <div class="col-sm-4 col-xs-12"> 									<button id="cyclestepafterName" class="btn btn-link collapsed btn-block text-left margin-0" type="button">Assign campaign to<span id="marketingcyclesetuptypeMandatory">*</span> 									</button> 								  </div>
                                                                    <div class="col-sm-8  col-xs-12 padding-tb-2">
                                                                        <div class="col-sm-3 col-xs-4">
                                                                            <div class="form-group margin-0">
                                                                                <div class="radio text-center"> 
                                                                                    <label style="font-size: 14px;"> 									<input type="radio" name="campaign_assign_for" value="1" data-text="all" data-attr="1" checked="true" data-onclickfn="" onclick="hideShowGrp(event)"><span class="circle"></span><span class="check"></span><span class="circle"></span><span class="check"></span> 					 All 		</label> 										
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-3 col-xs-4">
                                                                            <div class="form-group margin-0">
                                                                                <div class="radio text-center"> 
                                                                                    <label style="font-size: 14px;"> 									<input type="radio" name="campaign_assign_for" value="2" data-text="groupwise" data-attr="2" data-onclickfn="" onclick="hideShowGrp(event)"><span class="circle"></span><span class="check"></span><span class="circle"></span><span class="check"></span> 					Group Wise</label> 																														</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                           <div class="col-md-12 margin-top-5 hide" id="grp_list">
                                                        <div class="newcardstyle padding-LR-5 passwordinput" style="margin-bottom: 5px !important;">
                                                            <div class="form-group padding-0 label-static is-empty">
                                                                <label for="i2" class="control-label form_label_color">Select Group :</label>

                                                                <select name="group_id" id="group_id"  class="form-control">
                                                                   <option value="">Select</option>

                                                                    @foreach ($Group_list as $grp)

                                                                    <option value="{{ $grp->id }}">{{ $grp->title }}</option>

                                                                    @endforeach 
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                      
                        <!-- <div class="card_layout padding-LR-5 passwordinput">
                            <fieldset class="notesclass form-group padding-0 label-static is-empty">
                                <label for="" class="control-label font-15">Start Date</label> <input type="text" class="form-control border-none" id="notes" name="notes" placeholder="" style="padding-left: 5px !important;" value="" />
                            </fieldset>
                        </div>
                        <div class="card_layout padding-LR-5 passwordinput">
                            <fieldset class="notesclass form-group padding-0 label-static is-empty">
                                <label for="" class="control-label font-15">End Date</label> <input type="text" class="form-control border-none" id="notes" name="notes" placeholder="" style="padding-left: 5px !important;" value="" />
                            </fieldset>
                        </div> -->
                        <!-- <div class="card_layout padding-LR-5 passwordinput">
                            <div class="col-xs-6 padding-0">
                                <div class="card_layout padding-LR-5" onclick="">
                                    <div class="radio radio-primary padding-tb-5">
                                        <label class="color-333"> <input type="radio" name="arrangeCallOptionRadio" value="" /><span class="circle"></span><span class="check"></span> Cycle </label>
                                    </div>
                                </div> -->
                                <!--card_layout-->
                            <!-- </div>
                            <div class="col-xs-6 padding-0">
                                <div class="card_layout padding-LR-5" onclick="">
                                    <div class="radio radio-primary padding-tb-5">
                                        <label class="color-333"> <input type="radio" name="arrangeCallOptionRadio" value="" /><span class="circle"></span><span class="check"></span> Template </label>
                                    </div>
                                </div> -->
                                <!--card_layout-->
                            <!-- </div>
                        </div> -->
                        <!--row-->
                        <!-- <div class="card_layout padding-LR-5 passwordinput">
                            <fieldset class="notesclass form-group padding-0 label-static is-empty" data-toggle="modal" data-target="#selectEmployeelist">
                                <label for="" class="control-label font-15">Add Group</label> <input type="text" class="form-control border-none" id="notes" name="notes" placeholder="" style="padding-left: 5px !important;" value="" />
                            </fieldset>
                        </div> -->
                        <!-- <div class="card_layout padding-LR-5 passwordinput">
                            <fieldset class="notesclass form-group padding-0 label-static is-empty" data-toggle="modal" data-target="#selectGrouplist">
                                <label for="" class="control-label font-15">Add Employee</label> <input type="text" class="form-control border-none" id="notes" name="notes" placeholder="" style="padding-left: 5px !important;" value="" />
                            </fieldset>
                        </div> -->

                        <div id="cycleStepData_1ComponentCard" class="component-card row "  data-attr="">
                        <div class="col-xs-12 margin-top-2">
                            <div class="card-header newcardstyle padding-tb-5 card-vertical-middle background-bfb-20" id="headingTwo">
                                <div class="col-sm-9 creatNameWidth">                                     <button id="cycleStepData_0Name" class="btn btn-link padding-LR-10 collapsed text-capitalize btn-block text-left margin-0" type="button"> Step 1<span id="cycleStepData_1Mandatory">*</span></button>                                 </div>
                                <div class="col-sm-2 text-center padding-tb-5 creatvalueWidth">
                                    <p class="margin-0 color-333 font-14 line-word-break word-wrap ellipsis-clamp-2 value-item" name="cycleStepDataValue_1"></p>
                                    <input type="hidden" id="cycleSteptype_1" name="cycleSteptype_1" value=""> 
                                    <input type="hidden" id="cycleSteptypeData_1" name="cycleSteptypeData_1" value="">
                                    <input type="hidden" id="cycleStepCourseData_1" name="cycleStepCourseData_1" value=""> 
                                    <input type="hidden" id="cycleStepCertificateData_1" name="cycleStepCertificateData_1" value=""> 
                                </div>
                                <div class="col-sm-9 text-center padding-tb-5 creatButonWidth">
                                    <button name="cycleStepData_0Add" type="button" class="btn border-radius-25 btn-raised btn-min-width btn-theme btn-sm text-capitalize " onclick="addcyclestepsmodal('cycleStepDataCycleFormModal_1','1')" data-attr="">Add Step</button>                                     
                                    <p name="cycleStepData_0Edit" class="text-right margin-0 text-capitalize hide " data-target="#cycleStepDataCycleFormModal_1" data-attr="" onclick="addcyclestepsmodal('cycleStepDataCycleFormModal_1','1')" data-toggle=""><i class="icon icon-Forms fx-2xx color-theme pointer"></i></p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        </div>

                        <input type="hidden" name="totalstepscount" id="totalstepscount" value="1">


                    </div>
                    <!--end collapse-->
                    <div class="col-xs-12 text-center">
                        <button type="submit" class="btn btn-primary btn-theme btn-raised margin-tb-20  bold pointer" data-dismiss="modal" data-i18n="SI155"  id="savecycbershieldcycledata">Save</button>
                    </div>
                </div>
                </form>
               
            </div>
        </div>
    </div>
</div>

<div id="cycleStepDataCycleFormModaldata"></div>

<div id="CourselistCycleFormModal" class="modal animated_half_sec" role="dialog" >
   <div class="modal-dialog  modal-md ">
      <div class="modal-content border-radius-25" style="margin-top: 75.5px;">
            <div class="modal-header">
                <div class="row margin-0 text-center">
                    <div class="col-xs-2 margin-0"> </div>
                        <div class="col-xs-8 margin-0">                             
                            <span class="font-16 color-theme bold">Select Course</span>                         
                        </div>
                        <div class="col-xs-2 margin-0 padding-0 text-right pointer" data-dismiss="modal">                            
                            <i class="icon icon-close color-theme icon-2x"></i>                         
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12  padding-0">
                        <div class="form-group margin-0 margin-bottom-20 is-empty">                                         
                            <input class="form-control searchInput padding-LR-15" type="text" autocomplete="off" placeholder="Search" name="courselistId_1SearchField" id="searchCourse" onkeyup="searchFromLoadApi(event)" value="" data_attr="">                                     
                        </div>
                    </div>
                </div>
                <!--end modal header-->                 
            </div>
            <!--end row-->                 
         <div id="courselistId_0Scroll" class="modal-body text-left select-modal scroll_option">
            <div class="mobile-container">
               <div class="row" name="courselistId_0row">
                  <div class="col-xs-12 options-container" id="courselistdata">
                     
                  </div>
               </div>
               <!--end row-->                         <!--end individual-->                     
            </div>
            <!--end modal-body-->
            <div id="more_contact_names_div" class="col-xs-12 padding-0"></div>
         </div>
         <div class="modal-footer">
            <div class="row margin-tb-20">
               <div class="col-xs-6">                                 <button type="button" class="btn border-radius-25 create-btn btn-md text-capitalize btn-raised " data-dismiss="modal" data-i18n="" onclick="onCloseFormModal('CourselistCycleFormModal')">Close</button>                             </div>
               <div class="col-xs-6  text-left">                                 <button type="button" class="btn border-radius-25 btn-theme btn-md text-capitalize btn-raised" id="savecoursebtn" data-dismiss="modal" data_attr="" onclick="saveselectedcourseid(event)">Save</button>                             </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div id="certificatelistCycleFormModal" class="modal animated_half_sec" role="dialog" >
   <div class="modal-dialog  modal-md ">
      <div class="modal-content border-radius-25" style="margin-top: 75.5px;">
            <div class="modal-header">
                <div class="row margin-0 text-center">
                    <div class="col-xs-2 margin-0"> </div>
                        <div class="col-xs-8 margin-0">                             
                            <span class="font-16 color-theme bold">Select certificate</span>                         
                        </div>
                        <div class="col-xs-2 margin-0 padding-0 text-right pointer" data-dismiss="modal">                            
                            <i class="icon icon-close color-theme icon-2x"></i>                         
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12  padding-0">
                        <div class="form-group margin-0 margin-bottom-20 is-empty">                                         
                            <input class="form-control searchInput padding-LR-15" type="text" autocomplete="off" placeholder="Search" name="certificatelistId_1SearchField" onkeyup="searchFromLoadApi(event)" value="" data_attr="">                                     
                        </div>
                    </div>
                </div>
                <!--end modal header-->                 
            </div>
            <!--end row-->                 
         <div id="certificatelistId_0Scroll" class="modal-body text-left select-modal scroll_option">
            <div class="mobile-container">
               <div class="row" name="certificatelistId_0row">
                  <div class="col-xs-12 options-container" id="certificatelistdata">
                     
                  </div>
               </div>
               <!--end row-->                         <!--end individual-->                     
            </div>
            <!--end modal-body-->
            <div id="more_contact_names_div" class="col-xs-12 padding-0"></div>
         </div>
         <div class="modal-footer">
            <div class="row margin-tb-20">
               <div class="col-xs-6">                                 <button type="button" class="btn border-radius-25 create-btn btn-md text-capitalize btn-raised " data-dismiss="modal" data-i18n="" onclick="onCloseFormModal('certificatelistCycleFormModal')">Close</button>                             </div>
               <div class="col-xs-6  text-left">                                 <button type="button" class="btn border-radius-25 btn-theme btn-md text-capitalize btn-raised" id="savecertificatebtn" data-dismiss="modal" data_attr="" onclick="saveselectedcertificateid(event)">Save</button>                             </div>
            </div>
         </div>
      </div>
   </div>
</div>



<div id="ModulelistCycleFormModal" class="modal animated_half_sec" role="dialog" >
   <div class="modal-dialog  modal-md ">
      <div class="modal-content border-radius-25" style="margin-top: 75.5px;">
            <div class="modal-header">
                <div class="row margin-0 text-center">
                    <div class="col-xs-2 margin-0"> </div>
                        <div class="col-xs-8 margin-0">                             
                            <span class="font-16 color-theme bold">Select Module Type</span>                         
                        </div>
                        <div class="col-xs-2 margin-0 padding-0 text-right pointer" data-dismiss="modal">                            
                            <i class="icon icon-close color-theme icon-2x"></i>                         
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12  padding-0">
                        <div class="form-group margin-0 margin-bottom-20 is-empty">                                         
                            <input class="form-control searchInput padding-LR-15" type="text" autocomplete="off" placeholder="Search" name="courselistId_1SearchField" onkeyup="searchFromLoadApi(event)" value="" data_attr="">                                     
                        </div>
                    </div>
                </div>
                <!--end modal header-->                 
            </div>
            <!--end row-->                 
         <div id="ModulelistCycleFormModal_0Scroll" class="modal-body text-left select-modal scroll_option">
            <div class="mobile-container">
               <div class="row" name="courselistId_0row">
                  <div class="col-xs-12 options-container" id="ModulelistCycleFormlist">
                     
					<!--<div class=" radio  padding-tb-10 text-uppercase select_item row layout_card layout_card_js vertical-middle" id="countryid">
                        <div class="col-xs-10 padding-LR-15" style="width:calc(100% - 56px);" data-attr="" onclick="(event)">Cyber Shield</div>
                        <label class=" margin-0 col-xs-2 text-right" style="width:56px;"> 														<input type="radio" name="course_module_type_0"  value="1" ><span class="circle"></span><span class="check"></span> 											</label> 									
                     </div>
					<div class=" radio  padding-tb-10 text-uppercase select_item row layout_card layout_card_js vertical-middle" id="countryid">
                        <div class="col-xs-10 padding-LR-15" style="width:calc(100% - 56px);" data-attr="" onclick="(event)">Cyber Safe</div>
                        <label class=" margin-0 col-xs-2 text-right" style="width:56px;"> 														<input type="radio" name="course_module_type_0"  value="2" ><span class="circle"></span><span class=""></span> 											</label> 									
                     </div>-->
                  </div>
               </div>
               <!--end row-->                         <!--end individual-->                     
            </div>
            <!--end modal-body-->
            <div id="more_contact_names_div" class="col-xs-12 padding-0"></div>
         </div>
         <div class="modal-footer">
            <div class="row margin-tb-20">
               <div class="col-xs-6">                                 <button type="button" class="btn border-radius-25 create-btn btn-md text-capitalize btn-raised " data-dismiss="modal" data-i18n="" onclick="onCloseFormModal('CourselistCycleFormModal')">Close</button>                             </div>
               <div class="col-xs-6  text-left">                                 <button type="button" class="btn border-radius-25 btn-theme btn-md text-capitalize btn-raised" id="savecoursModeltypeebtn" data-index="" data-dismiss="modal" data_attr="" onclick="saveselectedcoursemodule(event)">Save</button>                             </div>
            </div>
         </div>
      </div>
   </div>
</div>
@include('header');

<script>

function addcyclestepsmodal(modalid,index){
    console.log("in addcyclestepsmodal");
    console.log("in addcyclestepsmodal_check");
    
    var htmlstructure ="";
    htmlstructure+=`<div id="cycleStepDataCycleFormModal_${index}" class="modal" role="dialog" style="">
   <div class="modal-dialog  modal-md">
      <div class="modal-content border-radius-25">
         <div class="modal-header">
            <div class="row margin-0 text-center">
               <div class="col-xs-2 margin-0">                         </div>
               <div class="col-xs-8 margin-0">                             <span class="font-16 color-theme bold">Step ${index}</span>                         </div>
               <div class="col-xs-2 margin-0 padding-0 text-right pointer" data-dismiss="modal">                            <i class="icon icon-close color-theme icon-2x"></i>                         </div>
            </div>
            <!--end modal header-->                 
         </div>
         <!--end row-->                 
         <div class="modal-body text-left scroll_option">
            <div name="cycleStepData_${index}row" class="mobile-container">
                <div id="steptimeComponentCard" class="component-card row ">
                    <div class="col-xs-12 margin-top-2">
                        <div class="card-header newcardstyle padding-tb-5 card-vertical-middle background-bfb-20">
                            <div class="col-sm-4 col-xs-12"> 									<button id="cyclestepafterName" class="btn btn-link collapsed btn-block text-left margin-0" type="button"> 								Step After<span id="marketingcyclesetuptypeMandatory">*</span> 									</button> 								  </div>
                            <div class="col-sm-8  col-xs-12 padding-tb-2">
                                <div class="col-sm-3 col-xs-4">
                                <div class="form-group margin-0">
                                    <div class="radio text-center"> 
                                    <label style="font-size: 14px;"> 									<input type="radio" name="cyclestepaftertype_${index}" value="1" data-attr="" checked="true" data-onclickfn="" onclick="saveStepTypeChange(event,'${index}')"><span class="circle"></span><span class="check"></span> 					 Hours 		</label> 										
                                    </div>
                                </div>
                                </div>
                                <div class="col-sm-3 col-xs-4">
                                <div class="form-group margin-0">
                                    <div class="radio text-center"> 
                                    <label style="font-size: 14px;"> 									<input type="radio" name="cyclestepaftertype_${index}" value="2"  data-attr="" data-onclickfn="" onclick="saveStepTypeChange(event,'${index}')"><span class="circle"></span><span class="check"></span> 					Days</label> 																														</div>
                                </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div id="steptimetypeComponentCard" class="component-card row ">
                    <div class="col-xs-12 margin-top-2">
                        <div class="card-header newcardstyle padding-tb-5 card-vertical-middle background-bfb-20">
                            <div class=" col-xs-12"> 	
                                <div class="card_layout padding-LR-5 passwordinput">
                                    <fieldset class="titleclass form-group padding-0 label-static is-empty">
                                        <label for="" class="control-label font-15" id="stepafterlabel_${index}">Enter Hours</label> <input type="text" class="form-control border-none" id="stepcycletypedata_${index}" name="stepcycletypedata_${index}" placeholder="" style="padding-left: 5px !important;" value="" required="">
                                    </fieldset>
                                </div>									
                            </div>
                           
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
				
				 <div id="CouseId_1ComponentCard" class="component-card row " data_readonly="0" data-attr="" onclick="selectModule('${index}')">
                  <div class="col-xs-12 margin-top-2">
                     <div class="card-header newcardstyle padding-tb-5 card-vertical-middle background-bfb-20" id="headingTwo">

                     <input type="hidden" id="CouseId_${index}" name="CouseId_${index}" value=""> 

                        <div class="col-sm-9 creatNameWidth">                                   
                        <button id="CouseId_1Name" class="btn btn-link padding-LR-10 text-capitalize collapsed btn-block text-left margin-0" type="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo"> Select Module for Course<span id="Module_Couse_${index}Mandatory">*</span> </button>                                 </div>
                        <div class="col-sm-2 text-center padding-tb-5 creatvalueWidth">
                           <p class="margin-0 color-333 font-14 line-word-break word-wrap ellipsis-clamp-2 value-item" name="Module_Couse_Value_${index}" data-attr=""> </p>
                        </div>
                        <div class="col-sm-2 text-center padding-tb-5 creatButonWidth">
                           <button type="button" name="CouseId_1Add" class="btn border-radius-25 btn-raised btn-min-width btn-theme btn-sm text-capitalize hide" data_readonly="0" data-attr="" onclick="addcyclesteps('','${index}')">Select</button>                                     
                           
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
               </div>
               
               <div id="CouseId_1ComponentCard" class="component-card row " data_readonly="0" data-attr="" onclick="addcyclesteps('','${index}')">
                  <div class="col-xs-12 margin-top-2">
                     <div class="card-header newcardstyle padding-tb-5 card-vertical-middle background-bfb-20" id="headingTwo">

                     <input type="hidden" id="CouseId_${index}" name="CouseId_${index}" value=""> 

                        <div class="col-sm-9 creatNameWidth">                                   
                        <button id="CouseId_1Name" class="btn btn-link padding-LR-10 text-capitalize collapsed btn-block text-left margin-0" type="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo"> Select Course<span id="CouseId_${index}Mandatory">*</span> </button>                                 </div>
                        <div class="col-sm-2 text-center padding-tb-5 creatvalueWidth">
                           <p class="margin-0 color-333 font-14 line-word-break word-wrap ellipsis-clamp-2 value-item" name="CouseIdValue_${index}"> </p>
                        </div>
                        <div class="col-sm-2 text-center padding-tb-5 creatButonWidth">
                           <button type="button" name="CouseId_1Add" class="btn border-radius-25 btn-raised btn-min-width btn-theme btn-sm text-capitalize hide" data_readonly="0" data-attr="" onclick="addcyclesteps('','${index}')">Select</button>                                     
                           
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
               </div>

               <div id="CertificateId_1ComponentCard" class="component-card row " data_readonly="0" data-attr="" onclick="addCertificate('${index}')">
                  <div class="col-xs-12 margin-top-2">
                     <div class="card-header newcardstyle padding-tb-5 card-vertical-middle background-bfb-20" id="headingTwo">

                     <input type="hidden" id="CertificateId_${index}" name="CertificateId_${index}" value=""> 

                        <div class="col-sm-9 creatNameWidth">                                   
                        <button id="CertificateId_1Name" class="btn btn-link padding-LR-10 text-capitalize collapsed btn-block text-left margin-0" type="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo"> Select Certificate<span id="CertificateId_${index}Mandatory">*</span> </button>                                 </div>
                        <div class="col-sm-2 text-center padding-tb-5 creatvalueWidth">
                           <p class="margin-0 color-333 font-14 line-word-break word-wrap ellipsis-clamp-2 value-item" name="CertificateIdValue_${index}"> </p>
                        </div>
                        <div class="col-sm-2 text-center padding-tb-5 creatButonWidth">
                           <button type="button" name="CertificateId_1Add" class="btn border-radius-25 btn-raised btn-min-width btn-theme btn-sm text-capitalize hide" data_readonly="0" data-attr="" onclick="addcyclesteps('','${index}')">Select</button>                                     
                           
                        </div>
                        <div class="clearfix"></div>
                     </div>
                  </div>
               </div>
              
               <!--end row-->                         <!--end individual-->                     
            </div>
            <!--end modal-body-->                 
         </div>
         <div class="modal-footer">
            <div class="row margin-tb-20">
               <div class="col-xs-6">                                 
                    <button type="button" class="btn border-radius-25 create-btn  btn-md text-capitalize btn-raised" data-dismiss="modal" data-i18n="" onclick="onCloseFormModal('cycleStepDataCycleFormModal_${index}')">Close</button>
                </div>
               <div class="col-xs-6  text-left">
                    <button type="button" class="btn border-radius-25 btn-theme  btn-md text-capitalize btn-raised" data-attr="" index ="${index}" onclick="saveCycleStepNodeData(event,'cycleStepData_1CycleFormModal','${index}')" data-i18n="CR87">Save</button>
                </div>
            </div>
         </div>
      </div>
   </div>
</div>`;
$("#cycleStepDataCycleFormModaldata").html(htmlstructure);
$.material.init();
    $("#cycleStepDataCycleFormModal_"+index).modal("show");
}

function saveStepTypeChange(event,index){
    console.log("in saveStepTypeChange");
    if($(event.currentTarget).is(":checked")){
        var val= $(event.currentTarget).val();
        if(val == 1){
            $("#stepafterlabel_"+index).text("Enter Hour");
        }else{
            $("#stepafterlabel_"+index).text("Enter Days");
        }
    }
}

function addCertificate(index){
    console.log("in Certificate => ",index);
    let dropdowndata;
    $.ajax({
            type: 'post',
            url: 'https://sic-rest.ngageapp.com/index.php/Compliment/getTypewiseDataMaster',
            data: {
                    "type":4,
                    "PageNo":1,
                    "RowCountPerPage":10000
                },
            success: function(data){
               if(data.ResponseHeader.response_type=="success"){
                dropdowndata=data.ResponseDetail[0] ;
               console.log("getTypewiseDataMaster ==> ", dropdowndata);
               var list = data.ResponseDetail[0];
                    var opt ="";
                    for (var i = 0; i < list.length; i++){
                    opt += ` <div class=" radio  padding-tb-10 text-uppercase select_item row layout_card layout_card_js vertical-middle" id="countryid">
                        <div class="col-xs-10 padding-LR-15" style="width:calc(100% - 56px);" data-attr="" onclick="(event)">${list[i].title}</div>
                        <label class=" margin-0 col-xs-2 text-right" style="width:56px;"> 														<input type="radio" name="certificatelistdataid" data-text="${list[i].title}" value="${list[i].id}" data_item="" data-elementattr="" onclick="(event)"><span class="circle"></span><span class="check"></span> 											</label> 									
                     </div>`;
                }
                $("#savecertificatebtn").attr("index",index);
                $("#certificatelistCycleFormModal").modal("show");
               $("#certificatelistdata").html(opt);
               $.material.init()
                
               }else{
                   alert("no data found");
               }
            },
            error: function(){
                console.log('success');
            },
        });
}

function selectModule(index){
	console.log('in selectModule');
	var html_data=radionode_cybershild(index)
	$('#ModulelistCycleFormlist').html(html_data)
	$('#savecoursModeltypeebtn').attr('data-index',index)
	 $('#ModulelistCycleFormModal').modal('show')		
}
function saveselectedcoursemodule(){
	console.log('in selectModule');
	var index=$(event.currentTarget).attr('data-index');

	var vlaue_select=$('[name="course_module_type_'+index+'"]:checked').val();
	var name_select=$('[name="course_module_type_'+index+'"]:checked').attr('data-text');
	
	//alert('saveselectedcoursemodule');
	$('p[name="Module_Couse_Value_'+index+'"]').attr('data-attr',vlaue_select)
	$('p[name="Module_Couse_Value_'+index+'"]').text(name_select)
	
}

function radionode_cybershild(index){
	console.log('in radionode_cybershild');
	var htmlstructure='';
	htmlstructure+=`
					<div class=" radio  padding-tb-10 text-uppercase select_item row layout_card layout_card_js vertical-middle" id="countryid">
                        <div class="col-xs-10 padding-LR-15" style="width:calc(100% - 56px);">Cyber Shield</div>
                        <label class=" margin-0 col-xs-2 text-right" style="width:56px;"> 														<input type="radio" name="course_module_type_${index}"  data-text="Cyber Shield" value="1" ><span class="circle"></span><span class="check"></span> 											</label> 									
                     </div>
					<div class=" radio  padding-tb-10 text-uppercase select_item row layout_card layout_card_js vertical-middle" id="countryid">
                        <div class="col-xs-10 padding-LR-15" style="width:calc(100% - 56px);" data-attr="" onclick="(event)">Cyber Safe</div>
                        <label class=" margin-0 col-xs-2 text-right" style="width:56px;"> 														<input type="radio" name="course_module_type_${index}"  data-text="Cyber Safe"   value="2" ><span class="circle"></span><span class="check"></span> 											</label> 									
                     </div>
                 
`;
return htmlstructure;
			
}
function addcyclesteps(modalid,index,search){
    console.log("in addcyclesteps");
    $("#searchCourse").attr("index",index);
    //    $("#searchCourse").attr("course_id",course_id)
    var corp_id = $("#corp_id").val();
	var module_type=$('p[name="Module_Couse_Value_'+index+'"]').attr('data-attr');
	if(!module_type){
		alert('Please Select Module Type  First.');
		return;
	}
    showCustomLoader();
    $.ajax({
            type: 'post',
            url: 'https://sic-rest.ngageapp.com/index.php/Lmsv2/get_courseList',
            data: {'corp_id':'','module_type':module_type,"Search":search?search:""},
            success: function(data){
               console.log(data);
               if(data.ResponseHeader.response_type=="success"){
                    var list = data.ResponseDetail[0];
                    var opt ="";
                    for (var i = 0; i < list.length; i++){
                    opt += ` <div class=" radio  padding-tb-10 text-uppercase select_item row layout_card layout_card_js vertical-middle" id="countryid">
                        <div class="col-xs-10 padding-LR-15" style="width:calc(100% - 56px);" data-attr="" onclick="(event)">${list[i].title}</div>
                        <label class=" margin-0 col-xs-2 text-right" style="width:56px;"> 														<input type="radio" name="courselistdataid" data-text="${list[i].title}" value="${list[i].id}" data_item="" data-elementattr="" onclick="(event)"><span class="circle"></span><span class="check"></span> 											</label> 									
                     </div>`;
                }
                $("#savecoursebtn").attr("index",index);
                $("#CourselistCycleFormModal").modal("show");
               $("#courselistdata").html(opt);
               hideCustomLoader();
               $.material.init()
               }else{
                   alert("no data found");
               }
             
               
            },
            error: function(){
                console.log('success');
            },
        });
    //$("#cycleStepData_0CycleFormModal").modal("show");
}

function searchFromLoadApi(event){
        console.log("in searchFromLoadApi")
        var val = $(event.currentTarget).val();
        var index = $("#searchCourse").attr("index");
        var course_id = $("#searchCourse").attr("course_id")
        addcyclesteps('',index,val)

}


function saveselectedcourseid(event){
    console.log("in saveselectedcourseid");
    var index = $(event.currentTarget).attr("index");
    console.log(index);
    var courseid = $('input[name="courselistdataid"]:checked').val();
    $("#cycleStepData_"+index).val(courseid);
    var coursename =$('input[name="courselistdataid"]:checked').attr("data-text");
   
    $("[name='CouseIdValue_"+index+"']").text(coursename);
    $("#CouseId_"+index).val(courseid);
    $("#CouseId_"+index).attr('data-text',coursename)

}

function saveselectedcertificateid(event){
    console.log("in saveselectedcertificateid");
    var index = $(event.currentTarget).attr("index");
    console.log(index);
    var certificateid = $('input[name="certificatelistdataid"]:checked').val();
    $("#cycleStepData_"+index).val(certificateid);
    var certificatename =$('input[name="certificatelistdataid"]:checked').attr("data-text");
   
    $("[name='CertificateIdValue_"+index+"']").text(certificatename);
    $("#CertificateId_"+index).val(certificateid);
    $("#CertificateId_"+index).attr('data-text',certificatename);
}

function saveCycleStepNodeData(event,modalid,index){
    console.log("in saveCycleStepNodeData");
    var index = $(event.currentTarget).attr("index");
    console.log(index);
    var courseid = $("#CouseId_"+index).val();
    var coursename =$("#CouseId_"+index).attr("data-text");
    var Certificateid = $("#CertificateId_"+index).val();
    var Certificatename =$("#CertificateId_"+index).attr("data-text");
    var cyclesteptype = $('[name = "cyclestepaftertype_'+index+'"]:checked').val(); 
    var cyclesteptypedata = $("#stepcycletypedata_"+index).val()
    $("#cycleSteptype_"+index).val(cyclesteptype);
    $("#cycleSteptypeData_"+index).val(cyclesteptypedata);
    $('#cycleStepCourseData_'+index).val(courseid)
    $('#cycleStepCertificateData_'+index).val(Certificateid)
    if(cyclesteptype==1){
        type ="hour";
    }else{
        type= "days";
    }
    var string ="Run step "+index+" after "+cyclesteptypedata+" "+type+ " and course selected is "+ coursename+".";
    $("[name='cycleStepDataValue_"+index+"']").text(string);
    
   
    var nextindex = Number(index)+1;
    var htmlStructure = `  <div id="cycleStepData_${nextindex}ComponentCard" class="component-card row "  data-attr="">
                        <div class="col-xs-12 margin-top-2">
                            <div class="card-header newcardstyle padding-tb-5 card-vertical-middle background-bfb-20" id="headingTwo">
                                <div class="col-sm-9 creatNameWidth">                                     <button id="cycleStepData_0Name" class="btn btn-link padding-LR-10 collapsed text-capitalize btn-block text-left margin-0" type="button"> Step ${nextindex}<span id="cycleStepData_${nextindex}Mandatory">*</span></button>                                 </div>
                                <div class="col-sm-2 text-center padding-tb-5 creatvalueWidth">
                                    <p class="margin-0 color-333 font-14 line-word-break word-wrap ellipsis-clamp-2 value-item" name="cycleStepDataValue_${nextindex}"></p>
                                    
                                    <input type="hidden" id="cycleSteptype_${nextindex}" name="cycleSteptype_${nextindex}" value=""> 
                                    <input type="hidden" id="cycleSteptypeData_${nextindex}" name="cycleSteptypeData_${nextindex}" value="">
                                    <input type="hidden" id="cycleStepCourseData_${nextindex}" name="cycleStepCourseData_${nextindex}" value=""> 
                                    <input type="hidden" id="cycleStepCertificateData_${nextindex}" name="cycleStepCertificateData_${nextindex}" value=""> 
                                </div>
                                <div class="col-sm-9 text-center padding-tb-5 creatButonWidth">
                                    <button name="cycleStepData_${nextindex}Add" type="button" class="btn border-radius-25 btn-raised btn-min-width btn-theme btn-sm text-capitalize " onclick="addcyclestepsmodal('cycleStepData_0CycleFormModal','${nextindex}')" data-attr="">Add Step</button>                                     
                                    <p name="cycleStepData_0Edit" class="text-right margin-0 text-capitalize hide " data-target="#cycleStepData_1CycleFormModal" data-attr="" onclick="addcyclestepsmodal('cycleStepData_0CycleFormModal','${nextindex}')" data-toggle=""><i class="icon icon-Forms fx-2xx color-theme pointer"></i></p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        </div>`;

    
    $('#cycleStepData_'+index+'ComponentCard').after(htmlStructure);
    $("#totalstepscount").val(nextindex);
    $("#cycleStepDataCycleFormModal_"+index).modal("hide");

   $("#cycleStepDataCycleFormModaldata").html("");

}

function onCloseFormModal(modalid){
    console.log("in onCloseFormModal");
    $("#"+modalid).modal("hide");
}
function hideShowGrp(event){
    console.log("in hideShowGrp");
   var text=$(event.currentTarget).attr('data-attr');
   if(text=='1'){
       $('#grp_list').addClass('hide');
       $('#group_id').val('');
   }else if(text=='2'){
        $('#grp_list').removeClass('hide');
   }
}
function showCustomLoader(data) {
    if ($("#loading_div").length > 0) {
        $(".loader_Wrapper").remove();
    }
    var htmlStructure = "";
    //htmlStructure += '<div class="loader">';
    //htmlStructure += '	<svg class="circular" viewBox="25 25 50 50">';
    //htmlStructure += '		<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"/>';
    //htmlStructure += '	</svg>';
    //htmlStructure += '</div>';

    htmlStructure += '<div class="spinner">';
    htmlStructure += '	<div class="bounce1"></div>';
    htmlStructure += '	<div class="bounce2"></div>';
    htmlStructure += '	<div class="bounce3"></div>';
    htmlStructure += '</div>';

    $('body').append($('<div/>', {
        id: 'loading_div',
        class: 'loader_Wrapper',
    }));

    $("#loading_div").html(htmlStructure);
    $("#loading_div").off();
    $("#loading_div").on('click', function() {
        $(this).remove();
    })
}
function hideCustomLoader() {
    $("#loading_div").remove();
}
</script>

@include('leftbar');

@include('footer');

