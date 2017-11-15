<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form AI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Input Data AI</h2>
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="age">Age:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="age" placeholder="Enter Age" name="age">
      </div>
    </div>

    <div class="form-group">
    <label for="workclass">Work Class:</label>
    <select class="form-control" id="workclass">
      <option value="private">1. Private</option>
      <option value="seni">2. Self-emp-not-inc</option>
      <option value="sei">3. Self-emp-inc</option>
      <option value="fg">4. Federal-gov</option>
      <option value="lg">5. Local-gov</option>
      <option value="sg">6. State-gov</option>
      <option value="wp">7. Without-pay</option>
      <option value="nw">8. Never-worked</option>
    </select>
    </div> 

    <div class="form-group">
      <label class="control-label col-sm-2" for="fnlwgt">Fnlwgt:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="fnlwgt" placeholder="Enter fnlwgt" name="email">
      </div>
    </div>

    <div class="form-group">
    <label for="education">Work Class:</label>
    <select class="form-control" id="education">
      <option value="bachelors">1. Bachelors</option>
      <option value="somecollege">2. Some-College</option>
      <option value="11th">3. 11th</option>
      <option value="hsgrad">4. HS-grad</option>
      <option value="profschool">5. Prof-School</option>
      <option value="assocacdm">6. Assoc-acdm</option>
      <option value="assocvoc">7. Assoc-voc</option>
      <option value="9th">8. 9th</option>
      <option value="7th-8th">9. 7th-8th</option>
      <option value="12th">10. 12th</option>
      <option value="masters">11. Masters</option>
      <option value="1st-4th">12. 1st-4th</option>
      <option value="10th">13. 10th</option>
      <option value="doctorate">14. Doctorate</option>
      <option value="5th-6th">15. 5th-6th</option>
      <option value="preschool">16. Preschool</option>
    </select>
    </div> 
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="educationnum">Education Num:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="educationnum" placeholder="Enter Education Num" name="email">
      </div>
    </div>

    <div class="form-group">
    <label for="maritalstatus">Marital-status:</label>
    <select class="form-control" id="maritalstatus">
      <option value="marriedcivspouse">1. Married-civ-Spouse</option>
      <option value="divorced">2. Divorced</option>
      <option value="nevermarried">3. Never-Married</option>
      <option value="separated">4. Separated</option>
      <option value="widowed">5. Widowed</option>
      <option value="marriedspouseabsent">6. Married-spouse-absent</option>
      <option value="marriedafspouse">7. Married-AF-spouse</option>
    </select>
    </div> 

    <div class="form-group">
    <label for="occupation">Occupation:</label>
    <select class="form-control" id="occupation">
      <option value="techsupport">1. Tech-Support</option>
      <option value="craftrepair">2. Craft-repair</option>
      <option value="otherservice">3. Other-service</option>
      <option value="sales">4. Sales</option>
      <option value="execmanagerial">5. Exec-managerial</option>
      <option value="profspecialty">6. Prof-specialty</option>
      <option value="handlerscleaners">7. Handlers-cleaner</option>
      <option value="machineopinspct">8. Machine-op-inspct</option>
      <option value="admclerical">9. Adm-clerical</option>
      <option value="farmingfishing">10. Farming-Fishing</option>
      <option value="transportmoving">11. Transport-moving</option>
      <option value="privhouseserv">12. Priv-house-serv</option>
      <option value="protectiveserv">13. Protective-serv</option>
      <option value="armdforces">14. Armed-Forces</option>
    </select>
    </div> 
    
    <div class="form-group">
    <label for="relationship">Relationship:</label>
    <select class="form-control" id="occupation">
      <option value="wife">1. Wife</option>
      <option value="ownchild">2. Own-child</option>
      <option value="husband">3. Husband</option>
      <option value="notinfamily">4. Not-in-family</option>
      <option value="otherrelative">5. Other-relative</option>
      <option value="unmarried">6. Unmarried</option>
    </select>
    </div> 

    <div class="form-group">
    <label for="race">Race:</label>
    <select class="form-control" id="race">
      <option value="white">1. White</option>
      <option value="api">2. Asian-Pac-Islander</option>
      <option value="amerindianeskimo">3. Amer-Indian-Eskimo</option>
      <option value="black">4. Black</option>
      <option value="other">5. Other</option>
    </select>
    </div> 

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div><div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div><div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div><div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div><div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div><div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
    
    
  </form>
</div>

</body>
</html>
