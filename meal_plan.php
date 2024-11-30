<?php
    echo '<form action="meal_plan_submit.php" method="post">
    <h2>Meal plan</h2>
    <div class="container my-4">
    <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Breakfast</h5>
          <p class="card-text">Daily routine below here.</p>

        <!--r1-->
          <!--text area start here-->
          <div class="form-floating mb-3">
              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareaDisabled"id="b1"name="b1"value="" disabled></textarea>
              <label for="floatingTextareaDisabled"><b>1 large whole egg,omelet(61 g)</b></label>
           </div>
           <!--text area end here-->

           <!--select start here-->
          <div class="input-group mb-3">
            <button type="submit" class="btn btn-primary"id="s1" name="s1" value="">+</button>
            <select class="form-select" aria-label="Default select example" id="breakfastop1" name="breakfastop1" value="">
                <option selected>Add new food equivalent</option>
                <option value="1">Cereal,hot,oats,quick:old mill,dry,Robin Hood</option>
                <option value="2">Acerola juice,raw</option>
                <option value="3">Lemon juice,canned or bottled</option>
                <option value="4">Pork,loin,sirloin chop,bone-in,lean,braised</option>
                <option value="5">Beans,mung,mature seeds,sprouted,bean sqrouts,raw</option>
                <option value="6">Peas,mature seeds,sprouted,bean sprouts,boiled,drained</option>
                <option value="7">Seaweed,dulse(laver,nori),raw</option>
                <option value="8">Beets,canned,drained solids</option>
                <option value="9">Pepper,sweet,green,boiled,drained</option>
                <option value="10">Pepper,sweet,green,boiled,drained,with salt</option>
            </select>
            <!--select end here-->
            <button type="submit" class="btn btn-primary" type="reset" id="r1" name="r1"value="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                </svg>
            </button>
          </div>
          <br>
          <!--r2-->
          <!--text area start here-->
          <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareaDisabled"id="b2"name="b2"value="" disabled></textarea>
                <label for="floatingTextareaDisabled"><b>slices of mushrooms,white,raw(70 g)</b></label>
           </div>
           <!--text area end here-->

           <!--select start here-->
          <div class="input-group mb-3">
          <button type="submit" class="btn btn-primary"id="s2" name="s2"value="">+</button>
            <select class="form-select" aria-label="Default select example" id="breakfastop2" name="breakfastop2" value="">
                <option selected>Add new food equivalent</option>
                <option value="1">Cereal,hot,oats,quick:old mill,dry,Robin Hood</option>
                <option value="2">Acerola juice,raw</option>
                <option value="3">Lemon juice,canned or bottled</option>
                <option value="4">Pork,loin,sirloin chop,bone-in,lean,braised</option>
                <option value="5">Beans,mung,mature seeds,sprouted,bean sqrouts,raw</option>
                <option value="6">Peas,mature seeds,sprouted,bean sprouts,boiled,drained</option>
                <option value="7">Seaweed,dulse(laver,nori),raw</option>
                <option value="8">Beets,canned,drained solids</option>
                <option value="9">Pepper,sweet,green,boiled,drained</option>
                <option value="10">Pepper,sweet,green,boiled,drained,with salt</option>
            </select>
            <!--select end here-->
            <button type="submit" class="btn btn-primary" type="reset" id="r2" name="r2"value="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                </svg>
            </button>
          </div>
          <br>
          <!--r3-->
          <!--text area start here-->
          <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareaDisabled"id="b3"name="b3"value="" disabled></textarea>
                <label for="floatingTextareaDisabled"><b>1 cup chopped of red peppers,sauteed(106 g)</b></label>
           </div>
           <!--text area end here-->

           <!--select start here-->
          <div class="input-group mb-3">
          <button type="submit" class="btn btn-primary"id="s3" name="s3"value="">+</button>
            <select class="form-select" aria-label="Default select example" id="breakfastop3" name="breakfastop3" value="">
                <option selected>Add new food equivalent</option>
                <option value="1">Cereal,hot,oats,quick:old mill,dry,Robin Hood</option>
                <option value="2">Acerola juice,raw</option>
                <option value="3">Lemon juice,canned or bottled</option>
                <option value="4">Pork,loin,sirloin chop,bone-in,lean,braised</option>
                <option value="5">Beans,mung,mature seeds,sprouted,bean sqrouts,raw</option>
                <option value="6">Peas,mature seeds,sprouted,bean sprouts,boiled,drained</option>
                <option value="7">Seaweed,dulse(laver,nori),raw</option>
                <option value="8">Beets,canned,drained solids</option>
                <option value="9">Pepper,sweet,green,boiled,drained</option>
                <option value="10">Pepper,sweet,green,boiled,drained,with salt</option>
            </select>
            <!--select end here-->
            <button type="submit" class="btn btn-primary" type="reset" id="r3" name="r3"value="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                </svg>
            </button>
          </div>
          <br>
          <!--r4-->
          <!--select start here-->
          <div class="input-group mb-3">
          <button type="submit" class="btn btn-primary"id="s3" name="s3"value="">+</button>
            <select class="form-select" aria-label="Default select example" id="breakfastop4" name="breakfastop4" value="">
                <option selected>Add new food</option>
                <option value="1">Cereal,hot,oats,quick:old mill,dry,Robin Hood</option>
                <option value="2">Acerola juice,raw</option>
                <option value="3">Lemon juice,canned or bottled</option>
                <option value="4">Pork,loin,sirloin chop,bone-in,lean,braised</option>
                <option value="5">Beans,mung,mature seeds,sprouted,bean sqrouts,raw</option>
                <option value="6">Peas,mature seeds,sprouted,bean sprouts,boiled,drained</option>
                <option value="7">Seaweed,dulse(laver,nori),raw</option>
                <option value="8">Beets,canned,drained solids</option>
                <option value="9">Pepper,sweet,green,boiled,drained</option>
                <option value="10">Pepper,sweet,green,boiled,drained,with salt</option>
            </select>
            <!--select end here-->
            </div>
            <br>
            <!--r5-->
            <p>Notes</p>
            <div class="input-group mb-3">
                <input type="text" class="form-control" aria-label="Recipients username" aria-describedby="button-addon2" id="breakfastnotes" name="breakfastnotes" value="">
                <button type="submit" class="btn btn-primary" type="reset" id="r4" name="r4"value="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                    </svg>
                </button>
            </div>

          
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Morning snaks</h5>
          <p class="card-text">Morning snaks routine here below</p>
          <!--r1-->
          <!--text area start here-->
          <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareaDisabled"id="m1"name="m1"value="" disabled></textarea>
                <label for="floatingTextareaDisabled"><b>1 oz(22 whole kernels)of nuts,almonds,dry roasted,with salt added(28 g)</b></label>
           </div>
           <!--text area end here-->

           <!--select start here-->
          <div class="input-group mb-3">
          <button type="submit" class="btn btn-primary"id="ms1" name="ms1"value="">+</button>
            <select class="form-select" aria-label="Default select example" id="msnaksop1" name="msnaksop1" value="">
                <option selected>Add new food equivalent</option>
                <option value="1">Cereal,hot,oats,quick:old mill,dry,Robin Hood</option>
                <option value="2">Acerola juice,raw</option>
                <option value="3">Lemon juice,canned or bottled</option>
                <option value="4">Pork,loin,sirloin chop,bone-in,lean,braised</option>
                <option value="5">Beans,mung,mature seeds,sprouted,bean sqrouts,raw</option>
                <option value="6">Peas,mature seeds,sprouted,bean sprouts,boiled,drained</option>
                <option value="7">Seaweed,dulse(laver,nori),raw</option>
                <option value="8">Beets,canned,drained solids</option>
                <option value="9">Pepper,sweet,green,boiled,drained</option>
                <option value="10">Pepper,sweet,green,boiled,drained,with salt</option>
            </select>
            <!--select end here-->
            <button type="submit" class="btn btn-primary" type="reset" id="mr1" name="mr1"value="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                </svg>
            </button>
          </div>
          <br>
          <!--r2-->
          <!--select start here-->
          <div class="input-group mb-3">
          <button type="submit" class="btn btn-primary"id="ms2" name="ms2"value="">+</button>
            <select class="form-select" aria-label="Default select example" id="msnaksop2" name="msnaksop2" value="">
                <option selected>Add new food </option>
                <option value="1">Cereal,hot,oats,quick:old mill,dry,Robin Hood</option>
                <option value="2">Acerola juice,raw</option>
                <option value="3">Lemon juice,canned or bottled</option>
                <option value="4">Pork,loin,sirloin chop,bone-in,lean,braised</option>
                <option value="5">Beans,mung,mature seeds,sprouted,bean sqrouts,raw</option>
                <option value="6">Peas,mature seeds,sprouted,bean sprouts,boiled,drained</option>
                <option value="7">Seaweed,dulse(laver,nori),raw</option>
                <option value="8">Beets,canned,drained solids</option>
                <option value="9">Pepper,sweet,green,boiled,drained</option>
                <option value="10">Pepper,sweet,green,boiled,drained,with salt</option>
            </select>
            <!--select end here-->
            </div>
            <br>
            <!--r3-->
            <p>Notes</p>
            <div class="input-group mb-3">
                <input type="text" class="form-control" aria-label="Recipients username" aria-describedby="button-addon2" id="msnaksnotes" name="msnaksnotes" value="">
                <button type="submit" class="btn btn-primary" type="reset" id="mr2" name="mr2"value="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                    </svg>
                </button>
            </div>





        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Lunch</h5>
          <p class="card-text">Lunch routine below here.</p>
        <p>appetizer</p>
        <!--r1-->
          <!--text area start here-->
          <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareaDisabled"id="l1"name="l1"value="" disabled></textarea>
                <label for="floatingTextareaDisabled"><b>Avocados(136 g)</b></label>
           </div>
           <!--text area end here-->

           <!--select start here-->
          <div class="input-group mb-3">
          <button type="submit" class="btn btn-primary"id="ls1" name="ls1"value="">+</button>
            <select class="form-select" aria-label="Default select example" id="lappetizerop1" name="lappetizerop1" value="">
                <option selected>Add new food equivalent</option>
                <option value="1">Cereal,hot,oats,quick:old mill,dry,Robin Hood</option>
                <option value="2">Acerola juice,raw</option>
                <option value="3">Lemon juice,canned or bottled</option>
                <option value="4">Pork,loin,sirloin chop,bone-in,lean,braised</option>
                <option value="5">Beans,mung,mature seeds,sprouted,bean sqrouts,raw</option>
                <option value="6">Peas,mature seeds,sprouted,bean sprouts,boiled,drained</option>
                <option value="7">Seaweed,dulse(laver,nori),raw</option>
                <option value="8">Beets,canned,drained solids</option>
                <option value="9">Pepper,sweet,green,boiled,drained</option>
                <option value="10">Pepper,sweet,green,boiled,drained,with salt</option>
            </select>
            <!--select end here-->
            <button type="submit" class="btn btn-primary" type="reset" id="lr1" name="lr1"value="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                </svg>
            </button>
          </div>
          <br>
          <!--r2-->
          <!--text area start here-->
          <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareaDisabled"id="l2"name="l2"value="" disabled></textarea>
                <label for="floatingTextareaDisabled"><b>1 whole egg,poached(50 g)</b></label>
           </div>
           <!--text area end here-->

           <!--select start here-->
          <div class="input-group mb-3">
          <button type="submit" class="btn btn-primary"id="ls2" name="ls2"value="">+</button>
            <select class="form-select" aria-label="Default select example" id="lappetizerop2" name="lappetizerop2" value="">
                <option selected>Add new food equivalent</option>
                <option value="1">Cereal,hot,oats,quick:old mill,dry,Robin Hood</option>
                <option value="2">Acerola juice,raw</option>
                <option value="3">Lemon juice,canned or bottled</option>
                <option value="4">Pork,loin,sirloin chop,bone-in,lean,braised</option>
                <option value="5">Beans,mung,mature seeds,sprouted,bean sqrouts,raw</option>
                <option value="6">Peas,mature seeds,sprouted,bean sprouts,boiled,drained</option>
                <option value="7">Seaweed,dulse(laver,nori),raw</option>
                <option value="8">Beets,canned,drained solids</option>
                <option value="9">Pepper,sweet,green,boiled,drained</option>
                <option value="10">Pepper,sweet,green,boiled,drained,with salt</option>
            </select>
            <!--select end here-->
            <button type="submit" class="btn btn-primary" type="reset" id="lr2" name="lr2"value="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                </svg>
            </button>
          </div>
          <br>
          <!--r3-->
          <!--select start here-->
          <div class="input-group mb-3">
          <button type="submit" class="btn btn-primary"id="ls3" name="ls3"value="">+</button>
            <select class="form-select" aria-label="Default select example" id="lappetizerop3" name="lappetizerop3" value="">
                <option selected>Add new food</option>
                <option value="1">Cereal,hot,oats,quick:old mill,dry,Robin Hood</option>
                <option value="2">Acerola juice,raw</option>
                <option value="3">Lemon juice,canned or bottled</option>
                <option value="4">Pork,loin,sirloin chop,bone-in,lean,braised</option>
                <option value="5">Beans,mung,mature seeds,sprouted,bean sqrouts,raw</option>
                <option value="6">Peas,mature seeds,sprouted,bean sprouts,boiled,drained</option>
                <option value="7">Seaweed,dulse(laver,nori),raw</option>
                <option value="8">Beets,canned,drained solids</option>
                <option value="9">Pepper,sweet,green,boiled,drained</option>
                <option value="10">Pepper,sweet,green,boiled,drained,with salt</option>
            </select>
            <!--select end here-->
            </div>
            <br>
            <p>Dish</p>
            <!--r1-->
            <!--text area start here-->
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareaDisabled"id="d1"name="d1"value="" disabled></textarea>
                <label for="floatingTextareaDisabled"><b>chicken breast,skinless cooked,grilled(85 g)</b></label>
            </div>
             <!--text area end here-->

             <!--select start here-->
            <div class="input-group mb-3">
              <button type="submit" class="btn btn-primary"id="ds1" name="ds1"value="">+</button>
              <select class="form-select" aria-label="Default select example" id="ldishop1" name="ldishop1" value="">
                <option selected>Add new food equivalent</option>
                <option value="1">Cereal,hot,oats,quick:old mill,dry,Robin Hood</option>
                <option value="2">Acerola juice,raw</option>
                <option value="3">Lemon juice,canned or bottled</option>
                <option value="4">Pork,loin,sirloin chop,bone-in,lean,braised</option>
                <option value="5">Beans,mung,mature seeds,sprouted,bean sqrouts,raw</option>
                <option value="6">Peas,mature seeds,sprouted,bean sprouts,boiled,drained</option>
                <option value="7">Seaweed,dulse(laver,nori),raw</option>
                <option value="8">Beets,canned,drained solids</option>
                <option value="9">Pepper,sweet,green,boiled,drained</option>
                <option value="10">Pepper,sweet,green,boiled,drained,with salt</option>
              </select>
            <!--select end here-->
              <button type="submit" class="btn btn-primary" type="reset" id="dr1" name="dr1"value="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                </svg>
              </button>
            </div>
            <br>
            <!--r2-->
             <!--text area start here-->
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareaDisabled"id="d2"name="d2"value="" disabled></textarea>
                <label for="floatingTextareaDisabled"><b>1 tbsp of caesar dressing(15 g)</b></label>
            </div>
            <!--text area end here-->

            <!--select start here-->
            <div class="input-group mb-3">
              <button type="submit" class="btn btn-primary"id="ds2" name="ds2"value="">+</button>
              <select class="form-select" aria-label="Default select example" id="ldishop2" name="ldishop2" value="">
                <option selected>Add new food equivalent</option>
                <option value="1">Cereal,hot,oats,quick:old mill,dry,Robin Hood</option>
                <option value="2">Acerola juice,raw</option>
                <option value="3">Lemon juice,canned or bottled</option>
                <option value="4">Pork,loin,sirloin chop,bone-in,lean,braised</option>
                <option value="5">Beans,mung,mature seeds,sprouted,bean sqrouts,raw</option>
                <option value="6">Peas,mature seeds,sprouted,bean sprouts,boiled,drained</option>
                <option value="7">Seaweed,dulse(laver,nori),raw</option>
                <option value="8">Beets,canned,drained solids</option>
                <option value="9">Pepper,sweet,green,boiled,drained</option>
                <option value="10">Pepper,sweet,green,boiled,drained,with salt</option>
              </select>
            <!--select end here-->
              <button type="submit" class="btn btn-primary" type="reset" id="dr2" name="dr2"value="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                </svg>
              </button>
            </div>
            <br>
            <!--r3-->
            <!--text area start here-->
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareaDisabled"id="d3"name="d3"value="" disabled></textarea>
                <label for="floatingTextareaDisabled"><b>1 tbsp of cheese,parmesan(5 g)</b></label>
            </div>
            <!--text area end here-->

            <!--select start here-->
            <div class="input-group mb-3">
              <button type="submit" class="btn btn-primary"id="ds3" name="ds3"value="">+</button>
               <select class="form-select" aria-label="Default select example" id="ldishop3" name="ldishop3" value="">
                <option selected>Add new food equivalent</option>
                <option value="1">Cereal,hot,oats,quick:old mill,dry,Robin Hood</option>
                <option value="2">Acerola juice,raw</option>
                <option value="3">Lemon juice,canned or bottled</option>
                <option value="4">Pork,loin,sirloin chop,bone-in,lean,braised</option>
                <option value="5">Beans,mung,mature seeds,sprouted,bean sqrouts,raw</option>
                <option value="6">Peas,mature seeds,sprouted,bean sprouts,boiled,drained</option>
                <option value="7">Seaweed,dulse(laver,nori),raw</option>
                <option value="8">Beets,canned,drained solids</option>
                <option value="9">Pepper,sweet,green,boiled,drained</option>
                <option value="10">Pepper,sweet,green,boiled,drained,with salt</option>
               </select>
            <!--select end here-->
              <button type="submit" class="btn btn-primary" type="reset" id="dr3" name="dr3"value="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                </svg>
              </button>
            </div>
            <br>
            <!--r4-->
            <!--text area start here-->
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareaDisabled"id="d4"name="d4"value="" disabled></textarea>
                <label for="floatingTextareaDisabled"><b>1 teaspoon of oil,olive(3 g)</b></label>
            </div>
            <!--text area end here-->

            <!--select start here-->
            <div class="input-group mb-3">
              <button type="submit" class="btn btn-primary"id="ds4" name="ds4"value="">+</button>
               <select class="form-select" aria-label="Default select example" id="ldishop4" name="ldishop4" value="">
                <option selected>Add new food equivalent</option>
                <option value="1">Cereal,hot,oats,quick:old mill,dry,Robin Hood</option>
                <option value="2">Acerola juice,raw</option>
                <option value="3">Lemon juice,canned or bottled</option>
                <option value="4">Pork,loin,sirloin chop,bone-in,lean,braised</option>
                <option value="5">Beans,mung,mature seeds,sprouted,bean sqrouts,raw</option>
                <option value="6">Peas,mature seeds,sprouted,bean sprouts,boiled,drained</option>
                <option value="7">Seaweed,dulse(laver,nori),raw</option>
                <option value="8">Beets,canned,drained solids</option>
                <option value="9">Pepper,sweet,green,boiled,drained</option>
                <option value="10">Pepper,sweet,green,boiled,drained,with salt</option>
               </select>
            <!--select end here-->
              <button type="submit" class="btn btn-primary" type="reset" id="dr4" name="dr4"value="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                </svg>
              </button>
            </div>
            <br>
            <!--r5-->
            <!--text area start here-->
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareaDisabled"id="d5"name="d5"value="" disabled></textarea>
                <label for="floatingTextareaDisabled"><b>1 unit of bacon rashers,back,grilled(25 g)</b></label>
            </div>
            <!--text area end here-->

            <!--select start here-->
            <div class="input-group mb-3">
              <button type="submit" class="btn btn-primary"id="ds5" name="ds5"value="">+</button>
               <select class="form-select" aria-label="Default select example" id="ldishop5" name="ldishop5" value="">
                <option selected>Add new food equivalent</option>
                <option value="1">Cereal,hot,oats,quick:old mill,dry,Robin Hood</option>
                <option value="2">Acerola juice,raw</option>
                <option value="3">Lemon juice,canned or bottled</option>
                <option value="4">Pork,loin,sirloin chop,bone-in,lean,braised</option>
                <option value="5">Beans,mung,mature seeds,sprouted,bean sqrouts,raw</option>
                <option value="6">Peas,mature seeds,sprouted,bean sprouts,boiled,drained</option>
                <option value="7">Seaweed,dulse(laver,nori),raw</option>
                <option value="8">Beets,canned,drained solids</option>
                <option value="9">Pepper,sweet,green,boiled,drained</option>
                <option value="10">Pepper,sweet,green,boiled,drained,with salt</option>
               </select>
            <!--select end here-->
              <button type="submit" class="btn btn-primary" type="reset" id="dr5" name="dr5"value="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                </svg>
              </button>
            </div>
            <br>
            <!--r6-->
            <!--select start here-->
            <div class="input-group mb-3">
              <button type="submit" class="btn btn-primary"id="ds6" name="ds6"value="">+</button>
               <select class="form-select" aria-label="Default select example" id="ldishop6" name="ldishop6" value="">
                <option selected>Add new food</option>
                <option value="1">Cereal,hot,oats,quick:old mill,dry,Robin Hood</option>
                <option value="2">Acerola juice,raw</option>
                <option value="3">Lemon juice,canned or bottled</option>
                <option value="4">Pork,loin,sirloin chop,bone-in,lean,braised</option>
                <option value="5">Beans,mung,mature seeds,sprouted,bean sqrouts,raw</option>
                <option value="6">Peas,mature seeds,sprouted,bean sprouts,boiled,drained</option>
                <option value="7">Seaweed,dulse(laver,nori),raw</option>
                <option value="8">Beets,canned,drained solids</option>
                <option value="9">Pepper,sweet,green,boiled,drained</option>
                <option value="10">Pepper,sweet,green,boiled,drained,with salt</option>
               </select>
            <!--select end here-->
            </div>
            <br>
            <p>Dessert</p>
            <!--r1-->
            <!--select start here-->
            <div class="input-group mb-3">
              <button type="submit" class="btn btn-primary"id="des1" name="des1"value="">+</button>
               <select class="form-select" aria-label="Default select example" id="ldessert" name="ldessert" value="">
                <option selected>Add new food</option>
                <option value="1">Cereal,hot,oats,quick:old mill,dry,Robin Hood</option>
                <option value="2">Acerola juice,raw</option>
                <option value="3">Lemon juice,canned or bottled</option>
                <option value="4">Pork,loin,sirloin chop,bone-in,lean,braised</option>
                <option value="5">Beans,mung,mature seeds,sprouted,bean sqrouts,raw</option>
                <option value="6">Peas,mature seeds,sprouted,bean sprouts,boiled,drained</option>
                <option value="7">Seaweed,dulse(laver,nori),raw</option>
                <option value="8">Beets,canned,drained solids</option>
                <option value="9">Pepper,sweet,green,boiled,drained</option>
                <option value="10">Pepper,sweet,green,boiled,drained,with salt</option>
               </select>
            <!--select end here-->
            </div>
            <br>
            <p>Beverage</p>
            <!--r1-->
            <!--text area start here-->
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareaDisabled"id="be1"name="be1"value="" disabled></textarea>
                <label for="floatingTextareaDisabled"><b>1 glass of water</b></label>
            </div>
             <!--text area end here-->

             <!--select start here-->
            <div class="input-group mb-3">
              <button type="submit" class="btn btn-primary"id="bes1" name="bes1"value="">+</button>
              <select class="form-select" aria-label="Default select example" id="lbeverageop1" name="lbeverageop1" value="">
                <option selected>Add new food equivalent</option>
                <option value="1">Cereal,hot,oats,quick:old mill,dry,Robin Hood</option>
                <option value="2">Acerola juice,raw</option>
                <option value="3">Lemon juice,canned or bottled</option>
                <option value="4">Pork,loin,sirloin chop,bone-in,lean,braised</option>
                <option value="5">Beans,mung,mature seeds,sprouted,bean sqrouts,raw</option>
                <option value="6">Peas,mature seeds,sprouted,bean sprouts,boiled,drained</option>
                <option value="7">Seaweed,dulse(laver,nori),raw</option>
                <option value="8">Beets,canned,drained solids</option>
                <option value="9">Pepper,sweet,green,boiled,drained</option>
                <option value="10">Pepper,sweet,green,boiled,drained,with salt</option>
              </select>
            <!--select end here-->
              <button type="submit" class="btn btn-primary" type="reset" id="ber1" name="ber1"value="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                </svg>
              </button>
            </div>
            <br>
            <!--r2-->
            <!--select start here-->
            <div class="input-group mb-3">
              <button type="submit" class="btn btn-primary"id="bes2" name="bes2"value="">+</button>
               <select class="form-select" aria-label="Default select example" id="lbeverageop2" name="lbeverageop2" value="">
                <option selected>Add new food</option>
                <option value="1">Cereal,hot,oats,quick:old mill,dry,Robin Hood</option>
                <option value="2">Acerola juice,raw</option>
                <option value="3">Lemon juice,canned or bottled</option>
                <option value="4">Pork,loin,sirloin chop,bone-in,lean,braised</option>
                <option value="5">Beans,mung,mature seeds,sprouted,bean sqrouts,raw</option>
                <option value="6">Peas,mature seeds,sprouted,bean sprouts,boiled,drained</option>
                <option value="7">Seaweed,dulse(laver,nori),raw</option>
                <option value="8">Beets,canned,drained solids</option>
                <option value="9">Pepper,sweet,green,boiled,drained</option>
                <option value="10">Pepper,sweet,green,boiled,drained,with salt</option>
               </select>
            <!--select end here-->
            </div>
            <br>
            <!--r3-->
            <p>Notes</p>
            <div class="input-group mb-3">
                <input type="text" class="form-control" aria-label="Recipients username" aria-describedby="button-addon2" id="lbeveragenotes" name="lbeveragenotes" value="">
                <button type="submit" class="btn btn-primary" type="reset" id="ber3" name="ber3"value="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                    </svg>
                </button>
            </div>





        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Afternoon snack</h5>
          <p class="card-text">Afternoon snack routine below here.</p>
          <!--r1-->
          <!--text area start here-->
          <div class="form-floating mb-3">
              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareaDisabled"id="a1"name="a1"value="" disabled></textarea>
              <label for="floatingTextareaDisabled"><b>1 portion of brazil nuts,kernel only(10 g)</b></label>
          </div>
           <!--text area end here-->

           <!--select start here-->
          <div class="input-group mb-3">
            <button type="submit" class="btn btn-primary"id="as1" name="as1"value="">+</button>
            <select class="form-select" aria-label="Default select example" id="afsnackop1" name="afsnackop1" value="">
              <option selected>Add new food equivalent</option>
              <option value="1">Cereal,hot,oats,quick:old mill,dry,Robin Hood</option>
              <option value="2">Acerola juice,raw</option>
              <option value="3">Lemon juice,canned or bottled</option>
              <option value="4">Pork,loin,sirloin chop,bone-in,lean,braised</option>
              <option value="5">Beans,mung,mature seeds,sprouted,bean sqrouts,raw</option>
              <option value="6">Peas,mature seeds,sprouted,bean sprouts,boiled,drained</option>
              <option value="7">Seaweed,dulse(laver,nori),raw</option>
              <option value="8">Beets,canned,drained solids</option>
              <option value="9">Pepper,sweet,green,boiled,drained</option>
              <option value="10">Pepper,sweet,green,boiled,drained,with salt</option>
            </select>
          <!--select end here-->
            <button type="submit" class="btn btn-primary" type="reset" id="ar1" name="ar1"value="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
              </svg>
            </button>
          </div>
          <br>
          <!--r2-->
          <!--select start here-->
          <div class="input-group mb-3">
            <button type="submit" class="btn btn-primary"id="as2" name="as2"value="">+</button>
             <select class="form-select" aria-label="Default select example" id="afsnackop2" name="afsnackop2" value="">
              <option selected>Add new food</option>
              <option value="1">Cereal,hot,oats,quick:old mill,dry,Robin Hood</option>
                <option value="2">Acerola juice,raw</option>
                <option value="3">Lemon juice,canned or bottled</option>
                <option value="4">Pork,loin,sirloin chop,bone-in,lean,braised</option>
                <option value="5">Beans,mung,mature seeds,sprouted,bean sqrouts,raw</option>
                <option value="6">Peas,mature seeds,sprouted,bean sprouts,boiled,drained</option>
                <option value="7">Seaweed,dulse(laver,nori),raw</option>
                <option value="8">Beets,canned,drained solids</option>
                <option value="9">Pepper,sweet,green,boiled,drained</option>
                <option value="10">Pepper,sweet,green,boiled,drained,with salt</option>
             </select>
          <!--select end here-->
          </div>
          <br>
          <!--r3-->
          <p>Notes</p>
          <div class="input-group mb-3">
              <input type="text" class="form-control" aria-label="Recipients username" aria-describedby="button-addon2" id="afsnacknotes" name="afsnacknotes" value="">
              <button type="submit" class="btn btn-primary" type="reset" id="ar3" name="ar3"value="">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                      <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                  </svg>
              </button>
          </div>





        </div>
      </div>
    </div>
    <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Dinner</h5>
        <p class="card-text">Dinner routine below here.</p>
      <br>
      <p>Appetizer</p>
      <!--r1-->
          <!--text area start here-->
          <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareaDisabled"id="din1"name="din1"value="" disabled></textarea>
                <label for="floatingTextareaDisabled"><b>1 small portion of soup,vegetable,homemade(150 g)</b></label>
           </div>
           <!--text area end here-->

           <!--select start here-->
          <div class="input-group mb-3">
          <button type="submit" class="btn btn-primary"id="dins1" name="dins1"value="">+</button>
            <select class="form-select" aria-label="Default select example" id="dappetizerop1" name="dappetizerop1" value="">
                <option selected>Add new food equivalent</option>
                <option value="1">Cereal,hot,oats,quick:old mill,dry,Robin Hood</option>
                <option value="2">Acerola juice,raw</option>
                <option value="3">Lemon juice,canned or bottled</option>
                <option value="4">Pork,loin,sirloin chop,bone-in,lean,braised</option>
                <option value="5">Beans,mung,mature seeds,sprouted,bean sqrouts,raw</option>
                <option value="6">Peas,mature seeds,sprouted,bean sprouts,boiled,drained</option>
                <option value="7">Seaweed,dulse(laver,nori),raw</option>
                <option value="8">Beets,canned,drained solids</option>
                <option value="9">Pepper,sweet,green,boiled,drained</option>
                <option value="10">Pepper,sweet,green,boiled,drained,with salt</option>
            </select>
            <!--select end here-->
            <button type="submit" class="btn btn-primary" type="reset" id="dinr1" name="dinr1"value="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                </svg>
            </button>
          </div>
          <br>
          <!--r2-->
          <!--select start here-->
          <div class="input-group mb-3">
          <button type="submit" class="btn btn-primary"id="dins2" name="dins2"value="">+</button>
            <select class="form-select" aria-label="Default select example" id="dappetizerop2" name="dappetizerop2" value="">
                <option selected>Add new food</option>
                <option value="1">Cereal,hot,oats,quick:old mill,dry,Robin Hood</option>
                <option value="2">Acerola juice,raw</option>
                <option value="3">Lemon juice,canned or bottled</option>
                <option value="4">Pork,loin,sirloin chop,bone-in,lean,braised</option>
                <option value="5">Beans,mung,mature seeds,sprouted,bean sqrouts,raw</option>
                <option value="6">Peas,mature seeds,sprouted,bean sprouts,boiled,drained</option>
                <option value="7">Seaweed,dulse(laver,nori),raw</option>
                <option value="8">Beets,canned,drained solids</option>
                <option value="9">Pepper,sweet,green,boiled,drained</option>
                <option value="10">Pepper,sweet,green,boiled,drained,with salt</option>
            </select>
            <!--select end here-->
            </div>
            <br>
            <p>Dish</p>
            <!--r1-->
            <!--text area start here-->
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareaDisabled"id="di1"name="di1"value="" disabled></textarea>
                <label for="floatingTextareaDisabled"><b>salmon,atlantic,wild,cooked,dry heat(85 g)</b></label>
            </div>
             <!--text area end here-->

             <!--select start here-->
            <div class="input-group mb-3">
              <button type="submit" class="btn btn-primary"id="dis1" name="dis1"value="">+</button>
              <select class="form-select" aria-label="Default select example" id="ddishop1" name="ddishop1" value="">
                <option selected>Add new food equivalent</option>
                <option value="1">Cereal,hot,oats,quick:old mill,dry,Robin Hood</option>
                <option value="2">Acerola juice,raw</option>
                <option value="3">Lemon juice,canned or bottled</option>
                <option value="4">Pork,loin,sirloin chop,bone-in,lean,braised</option>
                <option value="5">Beans,mung,mature seeds,sprouted,bean sqrouts,raw</option>
                <option value="6">Peas,mature seeds,sprouted,bean sprouts,boiled,drained</option>
                <option value="7">Seaweed,dulse(laver,nori),raw</option>
                <option value="8">Beets,canned,drained solids</option>
                <option value="9">Pepper,sweet,green,boiled,drained</option>
                <option value="10">Pepper,sweet,green,boiled,drained,with salt</option>
              </select>
            <!--select end here-->
              <button type="submit" class="btn btn-primary" type="reset" id="dir1" name="dir1"value="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                </svg>
              </button>
            </div>
            <br>
            <!--r2-->
             <!--text area start here-->
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareaDisabled"id="di2"name="di2"value="" disabled></textarea>
                <label for="floatingTextareaDisabled"><b>Lemon juice</b></label>
            </div>
            <!--text area end here-->

            <!--select start here-->
            <div class="input-group mb-3">
              <button type="submit" class="btn btn-primary"id="dis2" name="dis2"value="">+</button>
              <select class="form-select" aria-label="Default select example" id="ddishop2" name="ddishop2" value="">
                <option selected>Add new food equivalent</option>
                <option value="1">Cereal,hot,oats,quick:old mill,dry,Robin Hood</option>
                <option value="2">Acerola juice,raw</option>
                <option value="3">Lemon juice,canned or bottled</option>
                <option value="4">Pork,loin,sirloin chop,bone-in,lean,braised</option>
                <option value="5">Beans,mung,mature seeds,sprouted,bean sqrouts,raw</option>
                <option value="6">Peas,mature seeds,sprouted,bean sprouts,boiled,drained</option>
                <option value="7">Seaweed,dulse(laver,nori),raw</option>
                <option value="8">Beets,canned,drained solids</option>
                <option value="9">Pepper,sweet,green,boiled,drained</option>
                <option value="10">Pepper,sweet,green,boiled,drained,with salt</option>
              </select>
            <!--select end here-->
              <button type="submit" class="btn btn-primary" type="reset" id="dir2" name="dir2"value="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                </svg>
              </button>
            </div>
            <br>
            <!--r3-->
            <!--text area start here-->
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareaDisabled"id="di3"name="di3"value="" disabled></textarea>
                <label for="floatingTextareaDisabled"><b>Asparagus,boiled in unsalted water(25 g)</b></label>
            </div>
            <!--text area end here-->

            <!--select start here-->
            <div class="input-group mb-3">
              <button type="submit" class="btn btn-primary"id="dis3" name="dis3"value="">+</button>
               <select class="form-select" aria-label="Default select example" id="ddishop3" name="ddishop3" value="">
                <option selected>Add new food equivalent</option>
                <option value="1">Cereal,hot,oats,quick:old mill,dry,Robin Hood</option>
                <option value="2">Acerola juice,raw</option>
                <option value="3">Lemon juice,canned or bottled</option>
                <option value="4">Pork,loin,sirloin chop,bone-in,lean,braised</option>
                <option value="5">Beans,mung,mature seeds,sprouted,bean sqrouts,raw</option>
                <option value="6">Peas,mature seeds,sprouted,bean sprouts,boiled,drained</option>
                <option value="7">Seaweed,dulse(laver,nori),raw</option>
                <option value="8">Beets,canned,drained solids</option>
                <option value="9">Pepper,sweet,green,boiled,drained</option>
                <option value="10">Pepper,sweet,green,boiled,drained,with salt</option>
               </select>
            <!--select end here-->
              <button type="submit" class="btn btn-primary" type="reset" id="dir3" name="dir3"value="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                </svg>
              </button>
            </div>
            <br>
            <!--r4-->
            <!--select start here-->
            <div class="input-group mb-3">
              <button type="submit" class="btn btn-primary"id="dis4" name="dis4"value="">+</button>
               <select class="form-select" aria-label="Default select example" id="ddishop4" name="ddishop4" value="">
                <option selected>Add new food</option>
                <option value="1">Cereal,hot,oats,quick:old mill,dry,Robin Hood</option>
                <option value="2">Acerola juice,raw</option>
                <option value="3">Lemon juice,canned or bottled</option>
                <option value="4">Pork,loin,sirloin chop,bone-in,lean,braised</option>
                <option value="5">Beans,mung,mature seeds,sprouted,bean sqrouts,raw</option>
                <option value="6">Peas,mature seeds,sprouted,bean sprouts,boiled,drained</option>
                <option value="7">Seaweed,dulse(laver,nori),raw</option>
                <option value="8">Beets,canned,drained solids</option>
                <option value="9">Pepper,sweet,green,boiled,drained</option>
                <option value="10">Pepper,sweet,green,boiled,drained,with salt</option>
               </select>
            <!--select end here-->
            </div>
            <br>
            <p>Dessert</p>
            <!--r1-->
            <!--text area start here-->
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareaDisabled"id="des1"name="des1"value="" disabled></textarea>
                <label for="floatingTextareaDisabled"><b>1 average pot of yogurt,greek style,plain(125 g)</b></label>
            </div>
             <!--text area end here-->

             <!--select start here-->
            <div class="input-group mb-3">
              <button type="submit" class="btn btn-primary"id="dess1" name="dess1"value="">+</button>
              <select class="form-select" aria-label="Default select example" id="ddessertop1" name="ddessertop1" value="">
                <option selected>Add new food equivalent</option>
                <option value="1">Cereal,hot,oats,quick:old mill,dry,Robin Hood</option>
                <option value="2">Acerola juice,raw</option>
                <option value="3">Lemon juice,canned or bottled</option>
                <option value="4">Pork,loin,sirloin chop,bone-in,lean,braised</option>
                <option value="5">Beans,mung,mature seeds,sprouted,bean sqrouts,raw</option>
                <option value="6">Peas,mature seeds,sprouted,bean sprouts,boiled,drained</option>
                <option value="7">Seaweed,dulse(laver,nori),raw</option>
                <option value="8">Beets,canned,drained solids</option>
                <option value="9">Pepper,sweet,green,boiled,drained</option>
                <option value="10">Pepper,sweet,green,boiled,drained,with salt</option>
              </select>
            <!--select end here-->
              <button type="submit" class="btn btn-primary" type="reset" id="desr1" name="desr1"value="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                </svg>
              </button>
            </div>
            <br>
            <!--r2-->
            <!--select start here-->
            <div class="input-group mb-3">
              <button type="submit" class="btn btn-primary"id="dess1" name="dess2"value="">+</button>
               <select class="form-select" aria-label="Default select example" id="ddessertop2" name="ddessertop2" value="">
                <option selected>Add new food</option>
                <option value="1">Cereal,hot,oats,quick:old mill,dry,Robin Hood</option>
                <option value="2">Acerola juice,raw</option>
                <option value="3">Lemon juice,canned or bottled</option>
                <option value="4">Pork,loin,sirloin chop,bone-in,lean,braised</option>
                <option value="5">Beans,mung,mature seeds,sprouted,bean sqrouts,raw</option>
                <option value="6">Peas,mature seeds,sprouted,bean sprouts,boiled,drained</option>
                <option value="7">Seaweed,dulse(laver,nori),raw</option>
                <option value="8">Beets,canned,drained solids</option>
                <option value="9">Pepper,sweet,green,boiled,drained</option>
                <option value="10">Pepper,sweet,green,boiled,drained,with salt</option>
               </select>
            <!--select end here-->
            </div>
            <br>
            <p>Beverage</p>
            <!--r1-->
            <!--text area start here-->
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextareaDisabled"id="bev1"name="bev1"value="" disabled></textarea>
                <label for="floatingTextareaDisabled"><b>1 glass of water</b></label>
            </div>
             <!--text area end here-->

             <!--select start here-->
            <div class="input-group mb-3">
              <button type="submit" class="btn btn-primary"id="bevs1" name="bevs1"value="">+</button>
              <select class="form-select" aria-label="Default select example" id="dbeverageop1" name="dbeverageop1" value="">
                <option selected>Add new food equivalent</option>
                <option value="1">Cereal,hot,oats,quick:old mill,dry,Robin Hood</option>
                <option value="2">Acerola juice,raw</option>
                <option value="3">Lemon juice,canned or bottled</option>
                <option value="4">Pork,loin,sirloin chop,bone-in,lean,braised</option>
                <option value="5">Beans,mung,mature seeds,sprouted,bean sqrouts,raw</option>
                <option value="6">Peas,mature seeds,sprouted,bean sprouts,boiled,drained</option>
                <option value="7">Seaweed,dulse(laver,nori),raw</option>
                <option value="8">Beets,canned,drained solids</option>
                <option value="9">Pepper,sweet,green,boiled,drained</option>
                <option value="10">Pepper,sweet,green,boiled,drained,with salt</option>
              </select>
            <!--select end here-->
              <button type="submit" class="btn btn-primary" type="reset" id="bevr1" name="bevr1"value="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                </svg>
              </button>
            </div>
            <br>
            <!--r2-->
            <!--select start here-->
            <div class="input-group mb-3">
              <button type="submit" class="btn btn-primary"id="bevs2" name="bevs2"value="">+</button>
               <select class="form-select" aria-label="Default select example" id="dbeverageop2" name="dbeverageop2" value="">
                <option selected>Add new food</option>
                <option value="1">Cereal,hot,oats,quick:old mill,dry,Robin Hood</option>
                <option value="2">Acerola juice,raw</option>
                <option value="3">Lemon juice,canned or bottled</option>
                <option value="4">Pork,loin,sirloin chop,bone-in,lean,braised</option>
                <option value="5">Beans,mung,mature seeds,sprouted,bean sqrouts,raw</option>
                <option value="6">Peas,mature seeds,sprouted,bean sprouts,boiled,drained</option>
                <option value="7">Seaweed,dulse(laver,nori),raw</option>
                <option value="8">Beets,canned,drained solids</option>
                <option value="9">Pepper,sweet,green,boiled,drained</option>
                <option value="10">Pepper,sweet,green,boiled,drained,with salt</option>
               </select>
            <!--select end here-->
            </div>
            <br>
            <!--r3-->
            <p>Notes</p>
            <div class="input-group mb-3">
                <input type="text" class="form-control" aria-label="Recipients username" aria-describedby="button-addon2" id="dbeveragenotes" name="dbeveragenotes" value="">
                <button type="submit" class="btn btn-primary" type="reset" id="bevr3" name="bevr3"value="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                    </svg>
                </button>
            </div>



      </div>
    </div>
  </div>
  <div class="col">
  <div class="card">
    <svg class="bd-placeholder-img card-img-top" width="100%" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text></svg>
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
  </div>
</div>
  </div>
  </div>
  <center><button type="submit" class="btn btn-primary"  id="submit" name="submit" value="Submit">Submit</button></center>
  </form>';

?>