@extends('startups.layouts.mainlayout');

@section('content')
<div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> Sales & Revenue Reports</h4>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="post" action="revenuesubmit" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Company Name</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="company" type="text" />
                    </div>
                  </div>
                  <div class="form-group">
                  <label for="firstname" class="control-label col-lg-2">Report Period</label>
                  <div class="col-lg-10">
                    <div class="input-group input-large" data-date="01/01/2014" data-date-format="mm/dd/yyyy">
                      <input type="date" class="form-control dpd1" name="from">
                      <span class="input-group-addon">To</span>
                      <input type="date" class="form-control dpd2" name="to">
                    </div>
                    <span class="help-block">Select date range</span>
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
