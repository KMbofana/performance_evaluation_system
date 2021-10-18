@extends('layouts.mainlayout')


@section('content')
<section id="main-content">
<section class="wrapper">
<!-- row -->
<div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
            <form action="employee_record" method="post">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Employee Evaluation</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> Rating Factors</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Excellent</th>
                    <th><i class="fa fa-question-circle"></i> Good</th>
                    <th><i class=" fa fa-question-circle"></i> Average</th>
                    <th><i class=" fa fa-question-circle"></i>Poor</th>
                  </tr>
                </thead>
                <tbody>
                 
                  <tr>
                      <td><input type="text" style="border-style:none; background-color:#F9F9F9;" value="Quality Of Work"></td>
                      <td><input type="radio" onclick="select()" name="quality" value="50"></td>
                      <td><input type="radio" name="quality" value="30"></td>
                      <td><input type="radio" name="quality" value="20"></td>
                      <td><input type="radio" name="quality" value="-15"></td>
                  </tr>
                  <tr>
                      <td><input type="text" style="border-style:none; background-color:#fff;" value="Productivity"></td>
                      <td><input type="radio" onclick="select()" name="productivity" value="50"></td>
                      <td><input type="radio" name="productivity" value="30"></td>
                      <td><input type="radio" name="productivity" value="20"></td>
                      <td><input type="radio" name="productivity" value="-15"></td>
                  </tr>
                  <tr>
                      <td><input type="text" style="border-style:none; background-color:#F9F9F9;" value="Punctuality"></td>
                      <td><input type="radio" onclick="select()" name="punctuality" value="50"></td>
                      <td><input type="radio" name="punctuality" value="30"></td>
                      <td><input type="radio" name="punctuality" value="20"></td>
                      <td><input type="radio" name="punctuality" value="-15"></td>
                  </tr>
                  <tr>
                      <td><input type="text" style="border-style:none; background-color:#fff;" value="Technical Skills"></td>
                      <td><input type="radio" onclick="select()" name="skills" value="50"></td>
                      <td><input type="radio" name="skills" value="30"></td>
                      <td><input type="radio" name="skills" value="20"></td>
                      <td><input type="radio" name="skills" value="-15"></td>
                  </tr>
                  <tr>
                      <td><input type="text" style="border-style:none; background-color:#F9F9F9;" value="Timeous"></td>
                      <td><input type="radio" onclick="select()" name="time" value=""></td>
                      <td><input type="radio" name="time" value="30"></td>
                      <td><input type="radio" name="time" value="20"></td>
                      <td><input type="radio" name="time" value="-15"></td>
                  </tr>
                  <tr>
                      <td><input type="text" style="border-style:none; background-color:#fff;" value="Creativity"></td>
                      <td><input type="radio" onclick="select()" name="creativity" value="50"></td>
                      <td><input type="radio" name="creativity" value="30"></td>
                      <td><input type="radio" name="creativity" value="20"></td>
                      <td><input type="radio" name="creativity" value="-15"></td>
                  </tr>
                  <tr>
                      <td><input type="text" style="border-style:none; background-color:#F9F9F9;" value="Decision Making"></td>
                      <td><input type="radio" onclick="select()" name="decision" value="50"></td>
                      <td><input type="radio" name="decision" value="30"></td>
                      <td><input type="radio" name="decision" value="20"></td>
                      <td><input type="radio" name="decision" value="-15"></td>
                  </tr>
                  <tr>
                      <td><input type="text" style="border-style:none; background-color:#fff;" value="Meet Goals"></td>
                      <td><input type="radio" onclick="select()" name="goals" value="50"></td>
                      <td><input type="radio" name="goals" value="30"></td>
                      <td><input type="radio" name="goals" value="20"></td>
                      <td><input type="radio" name="goals" value="-15"></td>
                  </tr>

                 
                 
                </tbody>
              </table>
              <div style="display:flex; justify-content:flex-end; margin:20px;">
              <input type="submit" class="btn btn-primary" value="Evaluate">
              </div>
              
              </form>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
</section>
</section>
@stop