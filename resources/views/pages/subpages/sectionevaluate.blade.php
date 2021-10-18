@extends('layouts.mainlayout')


@section('content')
<section id="main-content">
<section class="wrapper">
<!-- row -->
<div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
            <form action="section_evaluate_record" method="post">
              @csrf
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Section Leader Evaluation</h4>
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
                      <td><input type="text" style="border-style:none; background-color:#F9F9F9;" value="Quality of Work"></td>
                      <td><input type="radio" onclick="select()" name="quality" value="50" required></td>
                      <td><input type="radio" name="quality" value="30" required></td>
                      <td><input type="radio" name="quality" value="20" required></td>
                      <td><input type="radio" name="quality" value="-15" required></td>
                  </tr>
                  <tr>
                      <td><input type="text" style="border-style:none; background-color:#fff;" value="Productivity"></td>
                      <td><input type="radio" onclick="select()" name="productivity" value="50" required></td>
                      <td><input type="radio" name="productivity" value="30" required></td>
                      <td><input type="radio" name="productivity" value="20" required></td>
                      <td><input type="radio" name="productivity" value="-15" required></td>
                  </tr>
                  <tr>
                      <td><input type="text" style="border-style:none; background-color:#F9F9F9;" value="Knowledge"></td>
                      <td><input type="radio" onclick="select()" name="knowledge" value="50" required></td>
                      <td><input type="radio" name="knowledge" value="30" required></td>
                      <td><input type="radio" name="knowledge" value="20" required></td>
                      <td><input type="radio" name="knowledge" value="-15" required></td>
                  </tr>
                  <tr>
                      <td><input type="text" style="border-style:none; background-color:#fff;" value="Leading Skills"></td>
                      <td><input type="radio" onclick="select()" name="skills" value="50" required></td>
                      <td><input type="radio" name="skills" value="30" required></td>
                      <td><input type="radio" name="skills" value="20" required></td>
                      <td><input type="radio" name="skills" value="-15" required></td>
                  </tr>
                  <tr>
                      <td><input type="text" style="border-style:none; background-color:#F9F9F9;" value="Time Cautious"></td>
                      <td><input type="radio" onclick="select()" name="time" value="50" required></td>
                      <td><input type="radio" name="time" value="30" required></td>
                      <td><input type="radio" name="time" value="20" required></td>
                      <td><input type="radio" name="time" value="-15" required></td>
                  </tr>
                  <tr>
                      <td><input type="text" style="border-style:none; background-color:#F9F9F9;" value="Creativity"></td>
                      <td><input type="radio" onclick="select()" name="creativity" value="50" required></td>
                      <td><input type="radio" name="creativity" value="30" required></td>
                      <td><input type="radio" name="creativity" value="20" required></td>
                      <td><input type="radio" name="creativity" value="-15" required></td>
                  </tr>
                  <tr>
                      <td><input type="text" style="border-style:none; background-color:#fff;" value="Delegation"></td>
                      <td><input type="radio" onclick="select()" name="delegation" value="50" required></td>
                      <td><input type="radio" name="delegation" value="30" required></td>
                      <td><input type="radio" name="delegation" value="20" required></td>
                      <td><input type="radio" name="delegation" value="-15" required></td>
                  </tr>
                  <tr>
                      <td><input type="text" style="border-style:none; background-color:#F9F9F9;" value="Decision Making"></td>
                      <td><input type="radio" onclick="select()" name="decision" value="50" required></td>
                      <td><input type="radio" name="decision" value="30" required></td>
                      <td><input type="radio" name="decision" value="20" required></td>
                      <td><input type="radio" name="decision" value="-15" required></td>
                  </tr>
                  <tr>
                      <td><input type="text" style="border-style:none; background-color:#F9F9F9;" value="Meet Goals"></td>
                      <td><input type="radio" onclick="select()" name="goals" value="50" required></td>
                      <td><input type="radio" name="goals" value="30" required></td>
                      <td><input type="radio" name="goals" value="20" required></td>
                      <td><input type="radio" name="goals" value="-15" required></td>
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