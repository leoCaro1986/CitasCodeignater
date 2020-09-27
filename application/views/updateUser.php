<div class="container">
  <div class="row">
    <div class="col">
      <form method="POST" action="<?php echo base_url() . "controlClinica/update?id=".$appointment->id ?>">
        <div class="row form-group ">
          <div class="col"> 
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" value="<?php echo $appointment->name ?>" id="name" name="name" aria-describedby="emailHelp">
          </div>
          <div class="col form-group ">
            <label for="exampleInputEmail1">LastName</label>
            <input type="text" class="form-control" value="<?php echo $appointment->lastName?>" id="lastName" name="lastName"  aria-describedby="emailHelp">
          </div>
        </div>
        <div class="row form-group ">
          <div class="col">
            <label for="exampleInputEmail1">Identification</label>
            <input type="number" class="form-control" value="<?php echo $appointment->identification ?>" id="identification" name="identification" aria-describedby="emailHelp">
          </div>
          <div class="col form-group ">
            <label for="exampleInputEmail1">DateBirth</label>
            <input type="text" class="form-control" value="<?php echo $appointment->dateBirth ?>" id="datebirth" name="datebirth"  aria-describedby="emailHelp">
          </div>
        </div>
          <div class="row form-group ">
            <div class="col">
              <label for="exampleInputEmail1">City</label>
              <input type="text" class="form-control" value="<?php echo $appointment->city ?>" id="city" name="city"  aria-describedby="emailHelp">
            </div>
            <div class="col form-group ">
              <label for="exampleInputEmail1">District</label>
              <input type="text" class="form-control" value="<?php echo $appointment->district ?>" id="district" name="district" aria-describedby="emailHelp">
            </div>
            <div class="col form-group ">
              <label for="exampleInputPassword1">CellPhone</label>
              <input type="number" class="form-control" value="<?php echo $appointment->cellPhone ?>" id="cellphone" name ="cellphone">
            </div>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>