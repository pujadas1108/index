<?php

echo ' <div class="container">
        <form action="information_p.php" method="post">
            <div>
                <div class="card_p1">
                    <div class="container1">
                    <h4><b>Nutrition assessment form</b></h4> 
                    <p>Send the survey to your client to have the information automatically added to their profile</p>
                    </div>
                </div>

                <br>

                <div class="row row-cols-1 row-cols-md-2 g-4">
                    
                    <div class="card_p2">
                        <div class="container">
                            <h4><b>Appointment information</b></h4>
                            <p>Motivation and expectations for the follow up</p>
                            
                                <table border="0">
                                    <tr>
                                        <div class="input-group mb-1">
                                            <span class="input-group-text">Reason for appointment</span>
                                            <textarea class="form-control" id="appointinrfatext" name="appointinrfatext" value="" aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="input-group mb-1">
                                            <span class="input-group-text">Expectations</span>
                                            <textarea class="form-control" id="appointinexpectatext" name="appointinexpectatext" value="" aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Clinical goals</span>
                                            <select class="form-select choose-toggle" id="appointinclinical" name="appointinclinical[]" value="" >
                                                <option disabled selected>None</option>
                                                <option value="Decrease activity duration">Decrease activity duration</option>
                                                <option value="Decrease activity intensity">Decrease activity intensity</option>
                                                <option value="Decrease body fat">Decrease body fat</option>
                                                <option value="Decrease body weigth">Decrease body weigth</option>
                                                <option value="Decrease calcium intake">Decrease calcium intake</option>
                                                <option value="Improve smallowing">Improve smallowing</option>
                                                <option value="Increase activity duration">Increase activity duration</option>
                                                <option value="Increase activity intensity">Increase activity intensity</option>
                                                <option value="Increase body fat">Increase body fat</option>
                                                <option value="Increase body weigth">Increase body weigth</option>
                                                <option value="Increase calcium intake">Increase calcium intake</option>
                                                <option value="Maintain body weigth">Maintain body weigth</option>
                                            </select>
                                            <textarea class="form-control" id="appointinclinicaltext" name="appointinclinicaltext" value=" " aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="input-group mb-1">
                                            <span class="input-group-text">Other information</span>
                                            <textarea class="form-control" id="appointinothintext" name="appointinothintext" value=" " aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                </table>
                        </div>
                    </div>

                    <br>
                    
                    <div class="card_p3">   
                        <div class="container">
                            <h4><b>Personal and social history</b></h4> 
                            <p>Information and physiological and social habits of the client</p>
                            
                                <table border="0">
                                    <tr>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Bowel movements</span>
                                            <select class="form-select choose-toggle" id="persocialbowel" name="persocialbowel[]" value="" >
                                                <option disabled selected>None</option>
                                                <option value="Normal">Normal</option>
                                                <option value="Constipation">Constipation</option>
                                                <option value="Diarrhoea">Diarrhoea</option>
                                                <option value="Irregular">Irregular</option>
                                            </select>
                                            <textarea class="form-control" id="persocialboweltext" name="persocialboweltext" value=" " aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Sleep quality</span>
                                            <select class="form-select choose-toggle" id="persocialsleep" name="persocialsleep[]" value="" >
                                                <option disabled selected>None</option>
                                                <option value="Less than 5 hour/night">Less than 5 hour/night</option>
                                                <option value="About 5 hour/night">About 5 hour/night</option>
                                                <option value="About 6 hour/night">About 6 hour/night</option>
                                                <option value="About 7 hour/night">About 7 hour/night</option>
                                                <option value="About 8 hour/night">About 8 hour/night</option>
                                                <option value="About 9 hour/night">About 9 hour/night</option>
                                                <option value="About 10 hour/night">About 10 hour/night</option>
                                                <option value="More than 10 hour/night">More than 10 hour/night</option>
                                            </select>
                                            <textarea class="form-control" id="persocialsleeptext" name="persocialsleeptext" value=" " aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Smoker</span>
                                            <select class="form-select choose-toggle" id="persocialsmoker" name="persocialsmoker[]" value=" " >
                                                <option disabled selected>None</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                            <textarea class="form-control" id="persocialsmokertext" name="persocialsmokertext" value=" " aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Alcohol consumption</span>
                                            <select class="form-select choose-toggle" id="persocialalcohol" name="persocialalcohol[]" value=" " >
                                                <option disabled selected>None</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                            <textarea class="form-control" id="persocialalcoholtext" name="persocialalcoholtext" value=" " aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Marital status</span>
                                            <select class="form-select choose-toggle" id="persocialmarital" name="persocialmarital[]" value=" " >
                                                <option disabled selected>None</option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Divorced">Divorced</option>
                                                <option value="Widower">Widower</option>
                                            </select>
                                            <textarea class="form-control" id="persocialmaritaltext" name="persocialmaritaltext" value=" " aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="input-group mb-1">
                                            <span class="input-group-text">Phisycal activity</span>
                                            <textarea class="form-control" id="persocialpersocialphisytext" name="persocialphisytext" value=" " aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Race</span>
                                            <select class="form-select choose-toggle" id="persocialrace" name="persocialrace[]" value=" " >
                                                <option disabled selected>None</option>
                                                <option value="Caucasian">Caucasian</option>
                                                <option value="Black">Black</option>
                                                <option value="Asian">Asian</option>
                                            </select>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="input-group mb-1">
                                            <span class="input-group-text">Other information</span>
                                            <textarea class="form-control" id="persocialothintext" name="persocialothintext" value=" " aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                </table>
                        </div>
                    </div>

                    <br>
                    
                    <div class="card_p4">
                        <div class="container">
                            <h4><b>Dietary history</b></h4> 
                            <p>Habits and food preferences of the client</p>
                            
                                <table border="0">
                                    <tr>
                                        <div class="input-group mb-1">
                                            <span class="input-group-text">Usual wake up time</span>
                                            <textarea class="form-control" id="dietaryuwuptimetext" name="dietaryuwuptimetext" value=" " aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="input-group mb-1">
                                            <span class="input-group-text">Usual bedtime</span>
                                            <textarea class="form-control" id="dietaryubedtimetext" name="dietaryubedtimetext" value=" " aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Types of diet</span>
                                            <select class="form-select choose-toggle" id="dietarytofd" name="dietarytofd[]" value=" " >
                                                <option disabled selected>None</option>
                                                <option value="DASH">DASH</option>
                                                <option value="Low-card">Low-card</option>
                                                <option value="Low-fat">Low-fat</option>
                                                <option value="Halal">Halal</option>
                                                <option value="Mediterranean">Mediterranean</option>
                                                <option value="Ovo-vegetarian">Ovo-vegetarian</option>
                                                <option value="Paleo">Paleo</option>
                                                <option value="Vegan">Vegan</option>
                                                <option value="Red meat avoider">Red meat avoider</option>
                                                <option value="Vegetarian">Vegetarian</option>
                                                <option value="Other">Other</option>
                                            </select>
                                            <textarea class="form-control" id="dietarytofdtext" name="dietarytofdtext" value=" " aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="input-group mb-1">
                                            <span class="input-group-text">Favorite food</span>
                                            <textarea class="form-control" id="dietaryfavfoodtext" name="dietaryfavfoodtext" value=" " aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="input-group mb-1">
                                            <span class="input-group-text">Dislike food</span>
                                            <textarea class="form-control" id="dietarydisfoodtext" name="dietarydisfoodtext" value=" " aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Allergies</span>
                                            <select class="form-select choose-toggle" id="dietaryallergies" name="dietaryallergies[]" value=" " >
                                                <option disabled selected>None</option>
                                                <option value="Celery">Celery</option>
                                                <option value="Crustacean">Crustacean</option>
                                                <option value="Egg">Egg</option>
                                                <option value="Fish">Fish</option>
                                                <option value="Lupin">Lupic</option>
                                                <option value="Milk">Milk</option>
                                                <option value="Molluse">Molluse</option>
                                                <option value="Mustard">Mustard</option>
                                                <option value="Gluten">Gluten</option>
                                                <option value="Natural latex">Natural latex</option>
                                                <option value="Peanut">Peanut</option>
                                                <option value="Sesame">Sesame</option>
                                                <option value="Soybeans">Soybeans</option>
                                                <option value="Sulphur dioxide">Sulphur dioxide</option>
                                                <option value="Wheat">Wheat</option>
                                                <option value="Tree nut">Tree nut</option>
                                            </select>
                                            <textarea class="form-control" id="dietaryallergiestext" name="dietaryallergiestext" value=" " aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Food intolerances</span>
                                            <select class="form-select choose-toggle" id="dietaryfoodint" name="dietaryfoodint[]" value=" " >
                                                <option disabled selected>None</option>
                                                <option value="Alcohol">Alcohol</option>
                                                <option value="Amines">Amines</option>
                                                <option value="Artificial sweeteners">Artificial sweeteners</option>
                                                <option value="Caffeine">Caffeine</option>
                                                <option value="FODMAPs">FODMAPs</option>
                                                <option value="Food coloring">Food coloring</option>
                                                <option value="Fructose">Fructose</option>
                                                <option value="Gluten">Gluten</option>
                                                <option value="Histamine">Histamine</option>
                                                <option value="Lactose">Lactose</option>
                                                <option value="MSG">MSG</option>
                                                <option value="Salicylates">Salicylates</option>
                                                <option value="Sulfites">Sulfites</option>
                                                <option value="Wheat">Wheat</option>
                                                <option value="Yeast">Yeast</option>
                                            </select>
                                            <textarea class="form-control" id="dietaryfoodinttext" name="dietaryfoodinttext" value=" " aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="input-group mb-1">
                                            <span class="input-group-text">Nutritional deficiencies</span>
                                            <textarea class="form-control" id="dietarynutridefitext" name="dietarynutridefitext" value=" " aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="dietarywaterintake">Water intake</label>
                                            <select class="form-select" id="dietarywaterintake" name="dietarywaterintake[]" value=" ">
                                                <option disabled selected>None</option>
                                                <option value="Less than o.5 liters">Less than o.5 liters</option>
                                                <option value="Between 0.5 and 1 litre">Between 0.5 and 1 litre</option>
                                                <option value="Between 1 and 1.5 litre">Between 0.5 and 1 litre</option>
                                                <option value="Between 1.5 and 2 litre">Between 0.5 and 1 litre</option>
                                                <option value="Between 2 and 2.5 litre">Between 0.5 and 1 litre</option>
                                                <option value="Between 2.5 and 3 litre">Between 0.5 and 1 litre</option>
                                                <option value="More than 3 liters">More than 3 liters</option>
                                            </select>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="input-group mb-1">
                                            <span class="input-group-text">Other information</span>
                                            <textarea class="form-control" id="dietaryothintext" name="dietaryothintext" value=" " aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                </table>
                        </div>
                    </div>
                    
                    <br>
                    
                    <div class="card_p5">
                        <div class="container">
                            <h4><b>Medical history</b></h4>
                            <p>Pathologies, medication and personal and family history</p>
                            
                                <table border="0">
                                    <tr>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Diseases</span>
                                            <select class="form-select choose-toggle" id="medicaldiseases" name="medicaldiseases[]" value=" ">
                                                <option disabled selected>None</option>
                                                <option value="Anaemia">Anaemia</option>
                                                <option value="Angina">Angina</option>
                                                <option value="Celiac disease">Celiac disease</option>
                                                <option value="Dyslipidaemia">Dyslipidaemia</option>
                                                <option value="High cholesterol">High cholesterol</option>
                                                <option value="Hypertension">Hypertension</option>
                                                <option value="IBD">IBD</option>
                                                <option value="Kidnev disease">Kidnev disease</option>
                                                <option value="Musculoskeletal problem">Musculoskeletal problem</option>
                                                <option value="Obesity">Obesity</option>
                                                <option value="Peripheral artery disease">Peripheral artery disease</option>
                                                <option value="Previous MI">Previous MI</option>
                                                <option value="Previous stroke">Previous stroke</option>
                                                <option value="Type 1 diabetes">Type 1 diabetes</option>
                                                <option value="Type 2 diabetes">Type 2 diabetes</option>
                                            </select>
                                            <textarea class="form-control" id="medicaldiseasestext" name="medicaldiseasestext" value=" " aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="input-group mb-1">
                                            <span class="input-group-text">Medication</span>
                                            <textarea class="form-control" id="medicalmedicatext" name="medicalmedicatext" value=" " aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="input-group mb-1">
                                            <span class="input-group-text">Personal history</span>
                                            <textarea class="form-control" id="medicalpershisttext" name="medicalpershisttext" value=" " aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="input-group mb-1">
                                            <span class="input-group-text">Family history</span>
                                            <textarea class="form-control" id="medicalfamhisttext" name="medicalfamhisttext" value=" " aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="input-group mb-1">
                                            <span class="input-group-text">Other information</span>
                                            <textarea class="form-control" id="medicalothintext" name="medicalothintext" value=" " aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                </table>
                        </div>
                    </div>
                    
                    <br>
                    
                    <div class="card_p6">
                        <div class="container">
                            <p align="center"><b>Pregnancy history</b><br>Create or update clients history record</p>
                            <table border="0">
                                <tr>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="pregnancytypeofrecord">Type of record</label>
                                        <select class="form-select" id="pregnancytypeofrecord" name="pregnancytypeofrecord[]" value=" " >
                                            <option value="Pregnancy and Lactation">Pregnancy and lactation</option>
                                            <option value="Pregnancy">Pregnancy</option>
                                            <option value="Lactation">Lactation</option>
                                        </select>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="pregnancygestatype">Gestation type</label>
                                        <select class="form-select" id="pregnancygestatype" name="pregnancygestatype[]" value=" " >
                                            <option value="Singular pregnancy">Singular pregnancy</option>
                                            <option value="Multiple pregnancy">Multiple pregnancy</option>
                                        </select>
                                    </div>
                                </tr>
                                <tr>
                                    <label for="pregnancylastmpin">Last menstrual period</label>
                                    <input type="date" id="pregnancylastmpin" name="pregnancylastmpin" value=" " placeholder="MM/DD/YYYY">
                                </tr>
                                <tr>
                                    <label for="pregnancyboflacin">Beginning of Lactation</label>
                                    <input type="date" id="pregnancyboflacin" name="pregnancyboflacin" value=" " placeholder="MM/DD/YYYY">
                                </tr>
                                <tr>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">Duration of lactation in months</span>
                                        <input type="text" class="form-control" id="pregnancydoflacimin" value=" " name="pregnancydoflacimin" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" fdprocessedid="ybrj9">
                                    </div>
                                </tr>
                                <tr>
                                    <div class="input-group">
                                        <span class="input-group-text">Observations</span>
                                        <textarea class="form-control" id="pregnancyobservtext" name="pregnancyobservtext" value=" " aria-label="With textarea"></textarea>
                                    </div>
                                </tr>
                            </table>
                        </div>
                    </div>
                    
                    <br>

                    <div class="card_p7">
                        <div class="container">
                            <p align="center"><b>Observations</b><br>Log your clients observations</p>
                            
                                <table border="0">
                                    <tr>
                                        <label for="observationregdatein">Registration Date</label>
                                        <input type="date" id="observationregdatein" name="observationregdatein" value=" " placeholder="MM/DD/YYYY">
                                    </tr>
                                    <tr>
                                        <div class="input-group">
                                            <span class="input-group-text">Observations</span>
                                            <textarea class="form-control" id="observationobservtext" name="observationobservtext" value=" " aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                </table>
                        </div>
                    </div>
                
                    <br>

                    <div class="card_p8">
                        <div class="container">
                                <p align="center"><b>Food Diary</b><br>Log your clients food diary</p>
                            
                                <table border="0"> 
                                    <tr>
                                        <label for="foodiaryregdatein">Registration Date</label>
                                        <input type="date" id="foodiaryregdatein" name="foodiaryregdatein" value=" " placeholder="MM/DD/YYYY">
                                    </tr>
                                    <tr>
                                        <div class="input-group mb-3">
                
                                            <select class="form-select choose-toggle" id="foodiaryselect" name="foodiaryselect[]" value=" " >
                                                <option disabled selected>Add meal</option>
                                                <option value="Breakfast">Breakfast</option>
                                                <option value="Brunch">Brunch</option>
                                                <option value="Morning snack">Morning snack</option>
                                                <option value="Lunch">Lunch</option>
                                                <option value="Afternoon snack">Afternoon snack</option>
                                                <option value="Pre-workout snack">Pre-workout snack</option>
                                                <option value="Post-workout snack">Post-workout snack</option>
                                                <option value="Dinner">dinner</option>
                                                <option value="Supper">Supper</option>
                                            </select>
                                            <input type="text" class="form-control" id="foodiarytext" name="foodiarytext" value=" " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" fdprocessedid="ybrj9">
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="input-group">
                                            <span class="input-group-text">Observations</span>
                                            <textarea class="form-control" id="foodiaryobservtext" name="foodiaryobservtext" value=" " aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                </table> 
                        </div>
                    </div>
                
                    <br>
                
                    <div class="card_p9">
                        <div class="container">
                            <p align="center"><b>Eating behaviour</b><br>Log your clients eating behaviour</p>
                        
                                <table border="0">
                                    <tr>
                                        <label for="eatbehavregdatein">Registration Date</label>
                                        <input type="date" id="eatbehavregdatein" name="eatbehavregdatein" value=" " placeholder="MM/DD/YYYY">
                                    </tr>
                                    <tr>
                                        <div class="input-group">
                                        <span class="input-group-text">Eating behaviours</span>
                                        <textarea class="form-control" id="eatbehavtext" name="eatbehavtext" value=" " aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                </table>
                        </div>
                    </div>
                
                    <br>
                
                    <div class="card_p10">
                        <div class="container">
                                <p align="center"><b>Goal</b><br>Its a good way to keep your client motivated</p>
                        
                                <table border="0">
                                    <tr>
                                        <div class="input-group mb-3">
                                            <label class="input-group-text" for="goaltype">Goal type</label>
                                            <select class="form-select" id="goaltype" name="goaltype[]" value=" " >
                                                <option value="Generic(sports and food routines,among others)">Generic(sports and food routines,among others)</option>
                                                <option value="Measured(anthropometric data, analytical data, body composition)">Measured(anthropometric data, analytical data, body composition)</option>
                                            </select>
                                        </div>
                                    </tr>
                                    
                                    <tr>
                                        <div class="input-group m-1">
                                        <span class="input-group-text">Description</span>
                                        <textarea class="form-control" id="goaldescriptext" name="goaldescriptext" value=" " aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                    
                                    <tr>
                                        
                                        <label for="deadline">Deadline</label>
                                        <input type="date" id="goaldeadlinein" name="goaldeadlinein" value=" " placeholder="MM/DD/YYYY">
                                    </tr>
                                    
                                </table>
                        </div>
                    </div>
                
                    <br>
                
                    <!--<div class="card_p11">
                        <div class="container">
                                <p align="center"><b>File</b><br>Attach a file to this clients profile</p>
                            
                                <table border="0">
                                    <tr>
                                        <div class="input-group m-1">
                                            <input type="file" class="form-control" id="fileinput" name="fileinput" value=" " aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="input-group m-1">
                                            <span class="input-group-text">Name</span>
                                            <input type="text" id="filename" name="filename" value=" " aria-label="First name" class="form-control" fdprocessedid="g5m61a">
                                        </div>
                                    </tr>
                                    <tr>
                                        <div class="input-group m-1">
                                        <span class="input-group-text">Description</span>
                                        <textarea class="form-control" id="filedescriptext" name="filedescriptext" value=" " aria-label="With textarea"></textarea>
                                        </div>
                                    </tr>
                                    <tr>
                                        <label for="filedate">Date</label>
                                        <input type="date" id="filedate" name="filedate" value=" " placeholder="MM/DD/YYYY">
                                    </tr>
                                
                                    <tr>
                                        <div class="input-group mb-3 m-1">
                                            <label class="input-group-text" for="filecategory">Category</label>
                                            <select class="form-select" id="filecategory" name="filecategory[]" value=" " >
                                                <option disabled selected>none</option>
                                                <option value="Photo">Photo</option>
                                                <option value="Meal plan">Meal Plan</option>
                                                <option value="Biochemistry">Lactation</option>
                                                <option value="Privacy/consent">Privacy/Consent</option>
                                                <option value="Patient informations">Patient informations</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </tr>
                                </table>
                        </div>
                    </div>--!>
                </div>
                <table border="0">
                    <tr>
                       <td>
                             <div class="butn">
                                <button type="submit" id="submit" name="submit" value="Submit">Submit</button>
                            </div>
                        </td>
                        <td>
                            <div class="butn">
                                <button type="reset" id="reset" name="reset" value="Reset">Reset</button>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
        </div>
        ';
?>

