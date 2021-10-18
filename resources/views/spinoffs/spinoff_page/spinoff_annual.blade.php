@extends('spinoffs.layouts.mainlayout');

@section('content')
<div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Annual Report</h4>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="post" action="annual_report" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Company Name</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="company" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Report Period</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="period" value="Annual" type="text" readonly/>
                    </div>
                  </div>
               
                <div class="form-group">
                <label for="firstname" class="control-label col-lg-2">Report Doc</label>
                    <div class="col-lg-10">
                      <input type="file" class="default" name="file"/>
                    </div>
                  </div>
            
                  <div class="form-group">
                  <label for="firstname" class="control-label col-lg-2">Comments</label>
                    <div class="col-lg-10">
                      <textarea class="form-control" name="comment" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                      <div class="validate"></div>
                    </div>
                  </div>
                 
                  
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Submit Report</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->


@stop
