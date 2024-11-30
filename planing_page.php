<?php
echo '
<center><h1>Planing page here</h1></center>
<div class="container my-3">
  <div class="card">
    <div class="containerp my-3">
          <!--<h4><b><h4>Client information</h4></b></h4> 
        <p>Set weight and BMI goals</p>-->
          <form action="#" method="post">
            <table class="table">
              <tr>
                <th scope="col"><sup><h5>Client information</h5></sup>
                  <p><sub>Set weight and BMI goals</sub></p></th>  
                  <th scope="col"><sub>Formula</sub></th>
                  <th scope="col"><sub>Current</sub></th>
                  <th scope="col"><sub>Goals</sub></th>
                  <th scope="col"><sub>Reference value</sub></th>
              </tr>
                <!-- <tbody class="table-group-divider">-->
              <tr>
                <!--<th scope="row">1</th>-->
                  <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-universal-access" viewBox="0 0 16 16">
                        <path d="M9.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0M6 5.5l-4.535-.442A.531.531 0 0 1 1.531 4H14.47a.531.531 0 0 1 .066 1.058L10 5.5V9l.452 6.42a.535.535 0 0 1-1.053.174L8.243 9.97c-.064-.252-.422-.252-.486 0l-1.156 5.624a.535.535 0 0 1-1.053-.174L6 9z"/>
                        </svg> <b>Weight</b></td>
                    <td>-----</td>
                    <td>70.0<sub>kg</sub></td>
                    <td>58.8<sub>kg</sub>
                      <p><sub>11.2 kg decreace</sub></p></td>
                    <td>58.8<sub>kg</sub>
                      <p><sub>11.2 kg decreace</sub></p></td>
              </tr>
              <tr>
                    <!--<th scope="row">2</th>-->
                    <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-percent" viewBox="0 0 16 16">
                      <path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0M4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5m7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3m0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                      </svg><b> Body fat percentage</b>
                        <p>set the client body fat percentages</p></td>
                    <td>Peterson Equation</td>
                    <td>29.56%</td>
                    <td>Undefined</td>
                    <td>23-38%</td>
              </tr>
              <tr>
                    <!--<th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>-->
                    <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-arms-up" viewBox="0 0 16 16">
                      <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
                        <path d="m5.93 6.704-.846 8.451a.768.768 0 0 0 1.523.203l.81-4.865a.59.59 0 0 1 1.165 0l.81 4.865a.768.768 0 0 0 1.523-.203l-.845-8.451A1.5 1.5 0 0 1 10.5 5.5L13 2.284a.796.796 0 0 0-1.239-.998L9.634 3.84a.7.7 0 0 1-.33.235c-.23.074-.665.176-1.304.176-.64 0-1.074-.102-1.305-.176a.7.7 0 0 1-.329-.235L4.239 1.286a.796.796 0 0 0-1.24.998l2.5 3.216c.317.316.475.758.43 1.204Z"/>
                      </svg> <b>Body mass index</b>
                        <p>set the clients BMI goal<p></td>
                    <td>-----</td>
                    <td>25.1<sub>kg/m<sup>2</sup></sub><p>overweight</p></td>
                    <td>21.1<sub>kg/m<sup>2</sup></sub><p>Normal</p></td>
                    <td>25.1<sub>kg/m<sup>2</sup></sub><p>Normal</p></td>
              </tr>
                    <!--</tbody>-->
            </table>
        </div>
     </div>
     <br>
     <div class="card">
    <div class="containerp">
      <!--<h4><b><h4>Calculation</h4></b></h4> 
      <p>Set goals for physical activity and DDE</p>-->
          <table class="table">
              <tr>
                <th scope="col"><sup><h5>Calculation</h5></sup>
                <p><sub>Set goals for physical activity and DDE</sub></p></th>  
                <th scope="col"><sub>Formula</sub></th>
                <th scope="col"><sub>Current</sub></th>
                <th scope="col"><sub>Goals</sub></th>
                <th scope="col"><sub>Reference value</sub></th>
              </tr>
              <!-- <tbody class="table-group-divider">-->
              <tr>
                <!--<th scope="row">1</th>-->
                <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-walking" viewBox="0 0 16 16">
                  <path d="M9.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0M6.44 3.752A.75.75 0 0 1 7 3.5h1.445c.742 0 1.32.643 1.243 1.38l-.43 4.083a1.8 1.8 0 0 1-.088.395l-.318.906.213.242a.8.8 0 0 1 .114.175l2 4.25a.75.75 0 1 1-1.357.638l-1.956-4.154-1.68-1.921A.75.75 0 0 1 6 8.96l.138-2.613-.435.489-.464 2.786a.75.75 0 1 1-1.48-.246l.5-3a.75.75 0 0 1 .18-.375l2-2.25Z"/>
                  <path d="M6.25 11.745v-1.418l1.204 1.375.261.524a.8.8 0 0 1-.12.231l-2.5 3.25a.75.75 0 1 1-1.19-.914zm4.22-4.215-.494-.494.205-1.843.006-.067 1.124 1.124h1.44a.75.75 0 0 1 0 1.5H11a.75.75 0 0 1-.531-.22Z"/>
                </svg> <b>Physical activity level</b>
                <p><sub>Set the clients physical activity level goal</sub></p></td>
                <td>-----</td>
                <td>Undefined</td>
                <td>Activity
                  <p><sub>PAL 1.745</sub></p></td>
                <td>-----</td>
              </tr>
              <tr>
                <!--<th scope="row">2</th>-->
                <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ubuntu" viewBox="0 0 16 16">
                  <path d="M2.273 9.53a2.273 2.273 0 1 0 0-4.546 2.273 2.273 0 0 0 0 4.547Zm9.467-4.984a2.273 2.273 0 1 0 0-4.546 2.273 2.273 0 0 0 0 4.546M7.4 13.108a5.54 5.54 0 0 1-3.775-2.88 3.27 3.27 0 0 1-1.944.24 7.4 7.4 0 0 0 5.328 4.465c.53.113 1.072.169 1.614.166a3.25 3.25 0 0 1-.666-1.9 6 6 0 0 1-.557-.091m3.828 2.285a2.273 2.273 0 1 0 0-4.546 2.273 2.273 0 0 0 0 4.546m3.163-3.108a7.44 7.44 0 0 0 .373-8.726 3.3 3.3 0 0 1-1.278 1.498 5.57 5.57 0 0 1-.183 5.535 3.26 3.26 0 0 1 1.088 1.693M2.098 3.998a3.3 3.3 0 0 1 1.897.486 5.54 5.54 0 0 1 4.464-2.388c.037-.67.277-1.313.69-1.843a7.47 7.47 0 0 0-7.051 3.745"/>
                </svg><b> Basal metabolic rate (BMR)</b>
                  <p>Information about clients basal metabolic rate</p></td>
                <td>WHO Equation</td>
                <td>1414
                  <p>kcal/day</p>
                </td>
                <td>-----</td>
                <td>1323
                  <p>kcal/day</p>
                </td>
              </tr>
              <tr>
                <!--<th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>-->
                <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                  <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16m0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15"/>
                </svg> <b>Daily energy expenditure</b>
                  <p>Set the clients daily energy expenditure</p></td>
                <td>EER,IOM 2005</td>
                <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-exclamation" viewBox="0 0 16 16">
                  <path d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.553.553 0 0 1-1.1 0z"/>
                  <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911z"/>
                </svg><p>You havent yet logged the client physical activity level</p></td>
                <td>2281<sub>kcal/day</sub></td>
                <td>25.1<sub>kcal/day</sub></td>
              </tr>
              <!--</tbody>-->
            </table>
        </div>
      </div>
      <br>
      <div class="card">
        <div class="containep">
      <!--<h4><b><h4>Macronutrients distribution</h4></b></h4> 
      <p>Set the distribution of macronutrients</p>-->
          <table class="table">
              <tr>
                <th scope="col"><sup><h5>Macronutrients distribution</h5></sup>
                  <p><sub>Set the distribution of macronutrients</sub></p></th>  
                <th scope="col"><sub>percentage</sub></th>
                <th scope="col"><sub>Total quanttity</sub></th>
                <th scope="col"><sub>Quantity per g/kg</sub></th>
                <th scope="col"><sub>Reference value</sub></th>
              </tr>
              <!-- <tbody class="table-group-divider">-->
              <tr>
                <!--<th scope="row">1</th>-->
                <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-1-square" viewBox="0 0 16 16">
                  <path d="M9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383z"/>
                  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm15 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
                </svg> <b>Proteins</b>
                <p><sub>Distribution of proteins in the meal plan</sub></p></td>
                <td>20.0%</td>
                <td>114<sub>g</sub></td>
                <td>1.63<sub>g/kg</sub></td>
                <td>10-35%</td>
              </tr>
              <tr>
                <!--<th scope="row">2</th>-->
                <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-2-square" viewBox="0 0 16 16">
                  <path d="M6.646 6.24v.07H5.375v-.064c0-1.213.879-2.402 2.637-2.402 1.582 0 2.613.949 2.613 2.215 0 1.002-.6 1.667-1.287 2.43l-.096.107-1.974 2.22v.077h3.498V12H5.422v-.832l2.97-3.293c.434-.475.903-1.008.903-1.705 0-.744-.557-1.236-1.313-1.236-.843 0-1.336.615-1.336 1.306"/>
                  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm15 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
                </svg><b> Carbohydrates</b>
                  <p>Distribution of carbohydrates in the meal plan</p></td>
                <td>50.0%</td>
                <td>285<sub>g</sub></td>
                <td>4.07<sub>g/kg</sub></td>
                <td>45-65%</td>
              </tr>
              <tr>
                <!--<th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>-->
                <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-3-square" viewBox="0 0 16 16">
                  <path d="M7.918 8.414h-.879V7.342h.838c.78 0 1.348-.522 1.342-1.237 0-.709-.563-1.195-1.348-1.195-.79 0-1.312.498-1.348 1.055H5.275c.036-1.137.95-2.115 2.625-2.121 1.594-.012 2.608.885 2.637 2.062.023 1.137-.885 1.776-1.482 1.875v.07c.703.07 1.71.64 1.734 1.917.024 1.459-1.277 2.396-2.93 2.396-1.705 0-2.707-.967-2.754-2.144H6.33c.059.597.68 1.06 1.541 1.066.973.006 1.6-.563 1.588-1.354-.006-.779-.621-1.318-1.541-1.318"/>
                  <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm15 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
                </svg> <b>Fats</b>
                  <p>Distribution of fats in the meal plan</p></td>
                <td>30.0%</td>
                <td>76<sub>g</sub></td>
                <td>1.09<sub>g/kg</sub></td>
                <td>20-35%</td>
              </tr>
              <!--</tbody>-->
            </table>
        </div>
      </div>
      <br>
      <div class="card">
      <div class="containerp">
      <!--<h4><b><h4>Nutrients quantification</h4></b></h4> 
      <p>Set the amount of nutrients in the meal plan</p>-->
          <table class="table">
              <tr>
                <th scope="col"><sup><h5>Nutrients quantification</h5></sup>
                  <p><sub>Set the amount of nutrients in the meal plan</sub></p></th>  
                <th scope="col"><sub>Source</sub></th>
                <th scope="col"><sub>Quality</sub></th>
                <th scope="col"><sub>Reference value</sub></th>
              </tr>
              <!-- <tbody class="table-group-divider">-->
              <tr>
                <!--<th scope="row">1</th>-->
                <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-suit-club-fill" viewBox="0 0 16 16">
                  <path d="M11.5 12.5a3.5 3.5 0 0 1-2.684-1.254 20 20 0 0 0 1.582 2.907c.231.35-.02.847-.438.847H6.04c-.419 0-.67-.497-.438-.847a20 20 0 0 0 1.582-2.907 3.5 3.5 0 1 1-2.538-5.743 3.5 3.5 0 1 1 6.708 0A3.5 3.5 0 1 1 11.5 12.5"/>
                </svg> <b>Dietary fiber</b>
                <p><sub>Set the amount of fiber in the meal plan</sub></p></td>
                <td>Food And Nutrition Board / IOM</td>
                <td>31.9<sub>g</sub></td>
                <td>31.9<sub>g</sub></td>
              </tr>         
              <!--</tbody>-->
            </table>
         </div>
      </div>
      <br>
            <div class="card">
            <div class="containerp">
            <!--<h4><b><h4>Duration</h4></b></h4> 
            <p>Set the duration of meal plan</p>-->
                <table class="table">
                    <tr>
                      <th scope="col"><sup><h5>Duration</h5></sup>
                        <p><sub>Set the duration of meal plan</sub></p></th>  
                      <th scope="col"><sub>Begin date</sub></th>
                      <th scope="col"><sub>Last update</sub></th>
                      <th scope="col"><sub>Forecast finish date</sub></th>
                    </tr>
                    <!-- <tbody class="table-group-divider">-->
                    <tr>
                      <!--<th scope="row">1</th>-->
                      <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                        <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                      </svg> <b>Duration</b>
                      <p><sub>Set the duration of meal plan</sub></p></td>
                      <td>June 2022</td>
                      <td>November 2023</td>
                      <td>March 2024</td>
                    </tr>         
                    <!--</tbody>-->
                  </table>
                  </form>
            </div>
          </div>
</div>';
?>