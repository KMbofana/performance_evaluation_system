@extends('layouts.mainlayout')


@section('content')
<section id="main-content">
<section class="wrapper">
<!-- row -->
<div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
            <form action="spinoffevaluate_record" method="post">
              @csrf
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Spin-off Evaluation</h4>
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
                      <td><input type="text" name="rating[]" style="border-style:none; background-color:#F9F9F9;" value="Business Quality"></td>
                      <td><input type="radio" onchange="select()" name="quality[]" id="qty" value="50"></td>
                      <td><input type="radio" onclick="select()" name="quality[]" id="qty" value="30"></td>
                      <td><input type="radio" onclick="select()" name="quality[]" id="qty" value="20"></td>
                      <td><input type="radio" onclick="select()" name="quality[]" id="qty" value="-15"></td>
                  </tr>
                  <tr>
                      <td><input type="text" name="rating[]" style="border-style:none; background-color:#fff;" value="Productivity"></td>
                      <td><input type="radio" onclick="select()" name="productivity[]" id="prd" value="50"></td>
                      <td><input type="radio" onclick="select()" name="productivity[]" id="prd" value="30"></td>
                      <td><input type="radio" onclick="select()" name="productivity[]" id="prd" value="20"></td>
                      <td><input type="radio" onclick="select()" name="productivity[]" id="prd" value="-15"></td>
                  </tr>
                  <tr>
                      <td><input type="text" name="rating[]" style="border-style:none; background-color:#F9F9F9;" value="Market Penetration"></td>
                      <td><input type="radio" onclick="select()" name="market[]" id="mrkt" value="50"></td>
                      <td><input type="radio" onclick="select()" name="market[]" id="mrkt" value="30"></td>
                      <td><input type="radio" onclick="select()" name="market[]" id="mrkt" value="20"></td>
                      <td><input type="radio" onclick="select()" name="market[]" id="mrkt" value="-15"></td>
                  </tr>
                  <tr>
                      <td><input type="text" name="rating[]" style="border-style:none; background-color:#fff;" value="Technical Skills"></td>
                      <td><input type="radio" onclick="select()" name="skills[]" id="skl" value="50"></td>
                      <td><input type="radio" onclick="select()" name="skills[]" id="skl" value="30"></td>
                      <td><input type="radio" onclick="select()" name="skills[]" id="skl" value="20"></td>
                      <td><input type="radio" onclick="select()" name="skills[]" id="skl" value="-15"></td>
                  </tr>
                  <tr>
                      <td><input type="text" name="rating[]" style="border-style:none; background-color:#F9F9F9;" value="Cash Inflows"></td>
                      <td><input type="radio" onclick="select()" name="inflows[]" id="in" value="50"></td>
                      <td><input type="radio" onclick="select()" name="inflows[]" id="in" value="30"></td>
                      <td><input type="radio" onclick="select()" name="inflows[]" id="in" value="20"></td>
                      <td><input type="radio" onclick="select()" name="inflows[]" id="in" value="-15"></td>
                  </tr>
                  <tr>
                      <td><input type="text" name="rating[]" style="border-style:none; background-color:#fff;" value="Cash Outflows"></td>
                      <td><input type="radio" onclick="select()" name="outflows[]" id="out" value="50"></td>
                      <td><input type="radio" onclick="select()" name="outflows[]" id="out" value="30"></td>
                      <td><input type="radio" onclick="select()" name="outflows[]" id="out" value="20"></td>
                      <td><input type="radio" onclick="select()" name="outflows[]" id="out" value="-15"></td>
                  </tr>
                  <tr>
                      <td><input type="text" name="rating[]" style="border-style:none; background-color:#F9F9F9;" value="Growth"></td>
                      <td><input type="radio" onclick="select()" name="growth[]" id="growth" value="50"></td>
                      <td><input type="radio" onclick="select()" name="growth[]" id="growth" value="30"></td>
                      <td><input type="radio" onclick="select()" name="growth[]" id="growth" value="20"></td>
                      <td><input type="radio" onclick="select()" name="growth[]" id="growth" value="-15"></td>
                  </tr>
                  <tr>
                      <td><input type="text" name="rating[]" style="border-style:none; background-color:#fff;" value="Product Success"></td>
                      <td><input type="radio" onclick="select()" name="success[]" id="suc" value="50"></td>
                      <td><input type="radio" onclick="select()" name="success[]" id="suc" value="30"></td>
                      <td><input type="radio" onclick="select()" name="success[]" id="suc" value="20"></td>
                      <td><input type="radio" onclick="select()" name="success[]" id="suc" value="-15"></td>
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