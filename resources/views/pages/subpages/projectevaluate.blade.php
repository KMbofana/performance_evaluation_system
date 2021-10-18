@extends('layouts.mainlayout')


@section('content')
<section id="main-content">
<section class="wrapper">
<!-- row -->
<div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
            <form action="" method="">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Project Leader Evaluation</h4>
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
                      <td><input type="text" style="border-style:none; background-color:#F9F9F9;" value="Business Quality"></td>
                      <td><input type="radio" onclick="select()" name="quality" Value="50"></td>
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
                      <td><input type="text" style="border-style:none; background-color:#F9F9F9;" value="Market Penetration"></td>
                      <td><input type="radio" onclick="select()" name="market" value="50"></td>
                      <td><input type="radio" name="market" value="30"></td>
                      <td><input type="radio" name="market" value="20"></td>
                      <td><input type="radio" name="market" value="-15"></td>
                  </tr>
                  <tr>
                      <td><input type="text" style="border-style:none; background-color:#fff;" value="Technical Skills"></td>
                      <td><input type="radio" onclick="select()" name="skills" value="50"></td>
                      <td><input type="radio" name="skills" value="30"></td>
                      <td><input type="radio" name="skills" value="20"></td>
                      <td><input type="radio" name="skills" value="-15"></td>
                  </tr>
                  <tr>
                      <td><input type="text" style="border-style:none; background-color:#F9F9F9;" value="Cash Inflows"></td>
                      <td><input type="radio" onclick="select()" name="inflows" value="50"></td>
                      <td><input type="radio" name="inflows" value="30"></td>
                      <td><input type="radio" name="inflows" value="20"></td>
                      <td><input type="radio" name="inflows" value="-15"></td>
                  </tr>
                  <tr>
                      <td><input type="text" style="border-style:none; background-color:#fff;" value="Cash Outflows"></td>
                      <td><input type="radio" onclick="select()" name="outflows" value="50"></td>
                      <td><input type="radio" name="outflows" value="30"></td>
                      <td><input type="radio" name="outflows" value="20"></td>
                      <td><input type="radio" name="outflows" value="-15"></td>
                  </tr>
                  <tr>
                      <td><input type="text" style="border-style:none; background-color:#F9F9F9;" value="Growth"></td>
                      <td><input type="radio" onclick="select()" name="growth" value="50"></td>
                      <td><input type="radio" name="growth" value="30"></td>
                      <td><input type="radio" name="growth" value="20"></td>
                      <td><input type="radio" name="growth" value="-15"></td>
                  </tr>
                  <tr>
                      <td><input type="text" style="border-style:none; background-color:#fff;" value="Product Success"></td>
                      <td><input type="radio" onclick="select()" name="success" value="50"></td>
                      <td><input type="radio" name="success" value="30"></td>
                      <td><input type="radio" name="success" value="20"></td>
                      <td><input type="radio" name="success" value="-15"></td>
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