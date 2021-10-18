@extends('startups.layouts.mainlayout')

@section('content')
<div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i>Request Workshop Resources</h4>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="post" action="workshop_resources" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Company Name</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="company" type="text" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Workshop Date</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="dates" value="Annual" type="date"/>
                    </div>
                  </div>
               
                <div class="form-group">
                    <div class="checkbox col-lg-10" >
                        <label>
                        <input type="radio" value="yes" name="room">
                            Room
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="checkbox col-lg-10" >
                        <label>
                        <input type="radio" value="below 30" name="expected">
                            Number of expected Visitors (below 30)
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="checkbox col-lg-10" >
                        <label>
                        <input type="radio" value="above 30" name="expected">
                             Number of expected Visitors (above 30)
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="checkbox col-lg-10" >
                        <label>
                        <input type="radio" value="breakfastandlunch" name="breakfastandlunch">
                             Food(breakfast and lunch)
                        </label>
                    </div>
                </div>
            
                  <div class="form-group">
                  <label for="firstname" class="control-label col-lg-2">Additional Details</label>
                    <div class="col-lg-10">
                      <textarea class="form-control" name="additionalinfo" id="contact-message" placeholder="Additional Information" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                      <div class="validate"></div>
                    </div>
                  </div>
                 
                  
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Request Resource</button>
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
