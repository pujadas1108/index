<?php
    echo '<center><h2>Measurement</h2></center>
    <div class="container my-3">
      <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Anthropometric measurements</h5>
            <p class="card-text"></p>
            <div class="card1">
              <div class="container1">
              <form action="mesure_formp.php" method="post">
                  <table border="0">
                  <div class="weight">
                      <tr>
                          <td><label for="weight">Weight:</td>
                          <td><input type="text" id="Anthropometricweight" name="Anthropometricweight" value=""/></td>
                      </tr>
                  </div>
                  <div class="height">
                      <tr>
                          <td><label for="height">Height:</td>
                          <td><input type="text" id="Anthropometricheight" name="Anthropometricheight" value=""/></td>
                      </tr>
                  </div>
                  <div class="Abdominal skinfold">
                      <tr>
                          <td><label for="as">Abdominal skinfold:</td>
                          <td><input type="text" id="Anthropometricas" name="Anthropometricas" value="">
                      </tr>
                  </div>
                  <div class="Chest skinfold">
                      <tr>
                          <td><label for="cs">Chest skinfold:</td>
                          <td><input type="text" id="Anthropometriccs" name="Anthropometriccs" value="">
                      </tr>
                  </div>
                  <div class="Front thigh skinfold">
                      <tr>
                          <td><label for="fts">Front thigh skinfold:</td>
                          <td><input type="text" id="Anthropometricfts" name="Anthropometricfts" value="">
                      </tr>
                  </div>
                  
                      <tr>
                          <td><label for="hc">Hip circumfence:</td>
                          <td><input type="text" id="Anthropometrichc" name="Anthropometrichc" value="">
                      </tr>
                      <tr>
                          <td><label for="ms">Midaxillary skinfold:</td>
                          <td><input type="text" id="Anthropometricms" name="Anthropometricms" value="">
                      </tr>
                      <tr>
                          <td><label for="sub">Subcapular skinfold:</td>
                          <td><input type="text" id="Anthropometricsub" name="Anthropometricsub" value="">
                      </tr>
                      <tr>
                          <td><label for="sup">Suprailiac skinfold:</td>
                          <td><input type="text" id="Anthropometricsup" name="Anthropometricsup" value="">
                      </tr>
                      <tr>
                          <td><label for="ts">Tricep skinfold:</td>
                          <td><input type="text" id="Anthropometricts" name="Anthropometricts" value="">
                      </tr>
                      <tr>
                          <td><label for="wc">Waist circumference:</td>
                          <td><input type="text" id="Anthropometricwc" name="Anthropometricwc" value="">
                      </tr>
                  </table>
              
          </div>
          </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Analytical data</h5>
            <p class="card-text"></p>
            <div class="card1">
              <div class="container1">

                  <table border="0">
                      <tr>
                          <td><label for="dbp">Diastolic blood pressure:</td>
                          <td><input type="text" id="Analyticaldbp" name="Analyticaldbp" value=""/></td>
                      </tr>
                      <tr>
                          <td><label for="Sbp">Systolic blood pressure:</td>
                          <td><input type="text" id="Analyticalsbp" name="Analyticalsbp" value=""/></td>
                      </tr>
                      <tr>
                          <td><label for="HDL">HDL Cholestrol:</td>
                          <td><input type="text" id="AnalyticalHDL" name="AnalyticalHDL" value=""/></td>
                      </tr>
                      <tr>
                          <td><label for="LDL">LDL Cholestrol:</td>
                          <td><input type="text" id="AnalyticalLDL" name="AnalyticalLDL" value=""/></td>
                      </tr>
                      <tr>
                          <td><label for="tc">Total cholestrol:</td>
                          <td><input type="text" id="Analyticaltc" name="Analyticaltc" value=""/></td>
                      </tr>
                      <tr>
                          <td><label for="tri">Triglycerides:</td>
                          <td><input type="text" id="Analyticaltri" name="Analyticaltri" value=""/></td>
                      </tr>
                  </table>
              
              </div>
          </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Body composition</h5>
            <p class="card-text"></p>
            <div class="card1">
      <div class="container1">
        
            <table border="0">
                <tr>
                    <td><label for="bfp">Body fat percentage:</td>
                    <td><input type="text" id="Bodybfp" name="Bodybfp" value=""/></td>
                </tr>
                <tr>
                    <td><label for="fm">Fat mass:</td>
                    <td><input type="text" id="Bodyfm" name="Bodyfm" value=""/></td>
                </tr>
                <tr>
                  <td><label for="mm">Muscle mass:</td>
                  <td><input type="text" id="Bodymm" name="Bodymm" value=""/></td>
              </tr>
              <tr>
                  <td><label for="mmp">Muscle mass percentage:</td>
                  <td><input type="text" id="Bodymmp" name="Bodymmp" value=""/></td>
              </tr>
            </table>
        
      </div>
    </div>  
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Measurements</h5>
            <p class="card-text">Consult the weight measurements of your clients</p>
            <div class="card1">
            <div class="container1">
              
                  <table border="0">
                      <tr>
                          <td><label for="date"></td>
                          <td><input type="date" id="Measurementsdate1" name="Measurementsdate1" value=""/></td>
                      </tr>
                      <tr>
                          <td><label for="date"></td>
                          <td><input type="date" id="Measurementsdate2" name="Measurementsdate2" value=""/></td>
                      </tr>
                  </table>
              
            </div>
          </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Goals</h5>
            <p class="card-text">Goals the client wants to achieve</p>
            <div class="card1">
            <div class="container1">
              
                  <table border="0">
                      <tr>
                          <td><label for="name"></td>
                          <td><input type="text" id="Goalsname1" name="Goalsname1" value=""/></td>
                      </tr>
                      <tr>
                          <td><label for="name"></td>
                          <td><input type="text" id="Goalsname2" name="Goalsname2" value=""/></td>
                      </tr>
                  </table>
              
            </div>
        </div>
          </div>
        </div>
      </div>
      <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Progress</h5>
          <p class="card-text">Consult your client progress over time</p>
          <div class="card1">
              <div class="container1">
              <h4><b></b></h4> 
              <p></p>
              <br>
              
                  <table border="0">
                      <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                      <div class="progress-bar-animated progress-bar-striped" style="width: 0%">0%</div>
                      </div>
                      <p>
                      <div class="progress" role="progressbar" aria-label="Success striped example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                      <div class="progress-bar-animated progress-bar-striped bg-success" style="width: 25%">25%</div>
                      </div>
                      <p>
                      <div class="progress" role="progressbar" aria-label="Info striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                      <div class="progress-bar-animated progress-bar-striped bg-info" style="width: 50%">50%</div>
                      </div>
                      <p>
                      <div class="progress" role="progressbar" aria-label="Warning striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                      <div class="progress-bar-animated progress-bar-striped bg-warning" style="width: 75%">75%</div>
                      </div>
                      <p>
                      <div class="progress" role="progressbar" aria-label="Danger striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                      <div class="progress-bar-animated progress-bar-striped bg-danger" style="width: 100%">100%</div>
                      </div>
                  </table>
              </div>
          </div> 
        </div>
      </div>
      <center><button type="submit" class="btn btn-primary"  id="submit" name="submit" value="Submit">Submit</button></center>
      </form>
    </div>
    </div>
  </div>';
?>