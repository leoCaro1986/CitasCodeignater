<div class="container">
  <div class="row">
    <div class="col">
      <form class="p-3 mb-2 bg-primary text-white" id="color" method="POST" action="<?php echo base_url() . "controlClinica/save" ?>">
        <div class="row form-group ">
          <div class="col">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
          </div>
          <div class="col form-group ">
            <label for="exampleInputEmail1">LastName</label>
            <input type="text" class="form-control" id="lastName" name="lastName"  aria-describedby="emailHelp">
          </div>
        </div>
        <div class="row form-group ">
          <div class="col">
            <label for="exampleInputEmail1">Identification</label>
            <input type="number" class="form-control" id="identification" name="identification" aria-describedby="emailHelp">
          </div>
          <div class="col form-group ">
            <label for="exampleInputEmail1">DateBirth</label>
            <input type="text" class="form-control" id="datebirth" name="datebirth"  aria-describedby="emailHelp">
          </div>
        </div>
          <div class="row form-group ">
            <div class="col">
              <label for="exampleInputEmail1">City</label>
              <input type="text" class="form-control" id="city" name="city"  aria-describedby="emailHelp">
            </div>
            <div class="col form-group ">
              <label for="exampleInputEmail1">District</label>
              <input type="text" class="form-control" id="district" name="district" aria-describedby="emailHelp">
            </div>
            <div class="col form-group ">
              <label for="exampleInputPassword1">CellPhone</label>
              <input type="number" class="form-control" id="cellphone" name ="cellphone">
            </div>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>