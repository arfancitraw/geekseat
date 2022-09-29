<div class="container">
    <br>
    <div class="container mt-20">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                      <b>
                          The story: Geekseat Witch Saga: Return of The Coder!
                      </b>
                  </div>
                  <div class="card-body">
                      <h6 class="card-title">
                          <p class="lead text-left">
                              Somewhere far far away, there is a village which is controlled by a dark and cunning witch. Coincidentally, this witch is also a die-hard programmer.<br>
                              The witch has power to control death and life of the villager. The witch will kill a number of villagers each year.<br>
                              Since the witch is a die hard programmer, she follow a specific rule to decide the number of villagers she should kill each year.<br>
                              On the 1st year she kills 1 villager<br>
                              On the 2nd year she kills 1 + 1 = 2 villagers<br>
                              On the 3rd year she kills 1 + 1 + 2 = 4 villagers<br>
                              On the 4th year she kills 1 + 1 + 2 + 3 = 7 villagers<br>
                              On the 5th year she kills 1 + 1 + 2 + 3 + 5 = 12 villagers And so on...<br>
                              The villagers are furious with the witch and want to get rid of her and there is one way to get rid of her.<br>
                              The witch will only leave if there is a brave programmer in the villager who can create a program to solve this problem:<br>
                              If given two people whose age of death and year of death are known, find the average number of people the witch killed on year of birth of those people<br>
                              Example:<br>
                              Given:<br>
                              • Person A: Age of death = 10, Year of Death = 12<br>
                              • Person B: Age of death = 13, Year of Death = 17<br>
                              Answer:<br>
                              • Person A born on Year = 12 – 10 = 2, number of people killed on year 2 is 2. <br>
                              • Person B born on Year = 17 – 13 = 4, number of people killed on year 4 is 7. <br>
                              • So the average is ( 7 + 2 )/2 = 4.5<br>
                              If you give invalid data (i.e. negative age, person who born before the witch took control) the program should return -1.<br>
                              So, if a villager who can create a program to solve the problem, the witch will leave, and the killing will be stopped.<br>
                              There was one programmer who was able to solve the problem, but the witch did not like the code because the code was messy and make her angry.<br>
                              She then proceeded to kill the programmer. Now the villagers know that they also need to make the code clean and structured.<br>
                              Now you are asked by the villager to make the code by previous programmer cleaner and beautifully structured.<br>
                          </p>
                      </h6>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12 order-md-1">
                <h4 class="mb-3"><b>Save The Villagers</b></h4>
                <form class="needs-validation" novalidate="" id="witchForm" method="post">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="col-md-6">
                            <label><b>Person A:</b> Age of Death</label>
                            <input type="number" class="form-control" name="person[1][age]" required="">
                        </div>
                        <div class="col-md-6">
                            <label ><b>Person A:</b> Year of Death</label>
                            <input type="number" class="form-control" name="person[1][year]" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label><b>Person B:</b> Age of Death</label>
                            <input type="number" class="form-control" name="person[2][age]" required="">
                        </div>
                        <div class="col-md-6">
                            <label ><b>Person B:</b> Year of Death</label>
                            <input type="number" class="form-control" name="person[2][year]" required="">
                        </div>
                    </div>
                    <br>
                    <div class="card" id="result" style="display: none;">
                        <div class="card-body">
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Given</b></li>
                            <li class="list-group-item">Person A: Age of death = <input name="person[1][show_age]" style="border: none; border-color: transparent;" size="1" readonly>, Year of Death = <input name="person[1][show_year]" style="border: none; border-color: transparent;" size="1" readonly> </li>
                            <li class="list-group-item">Person B: Age of death = <input name="person[2][show_age]" style="border: none; border-color: transparent;" size="1" readonly>, Year of Death = <input name="person[2][show_year]" style="border: none; border-color: transparent;" size="1" readonly> </li>
                            <li class="list-group-item"><b>Answer:</b></li>
                            <li class="list-group-item">Person A born on Year =<input name="person[1][show_year]" style="border: none; border-color: transparent;" size="1" readonly>- <input name="person[1][show_age]" style="border: none; border-color: transparent;" size="1" readonly>=<input name="person[1][killed_year]" style="border: none; border-color: transparent;" size="1" readonly>, number of people killed on year <input name="person[1][killed_year]" style="border: none; border-color: transparent;" size="1" readonly>is <input name="person[1][killed_number]" style="border: none; border-color: transparent;" size="3" readonly>. </li>
                            <li class="list-group-item">Person B born on Year =<input name="person[2][show_year]" style="border: none; border-color: transparent;" size="1" readonly>- <input name="person[2][show_age]" style="border: none; border-color: transparent;" size="1" readonly>=<input name="person[2][killed_year]" style="border: none; border-color: transparent;" size="1" readonly>, number of people killed on year <input name="person[2][killed_year]" style="border: none; border-color: transparent;" size="1" readonly>is <input name="person[2][killed_number]" style="border: none; border-color: transparent;" size="3" readonly>.</li>
                            <li class="list-group-item"><b>Average</b></li>
                            <li class="list-group-item"><span id="showResult">0/0 = 0</span></li>
                        </ul>
                    </div>
                </div>
                </form>
                <hr>
                <button class="btn btn-success btn-lg btn-block" type="button" onClick="submit()">Submit</button>
            </div>
        </div>
    </div>
    <br>
</div>