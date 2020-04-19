<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body  style="background-color:rgb(40, 3, 58);">
    <div class="container" style="text-align:center; position:relative; top:50px;">
    <div class="card">
  <div class="card-header" style="text-align:center; background-color: black">
    <div class="Enter" style="color:white; font-weight:400">ENTER BUS ID </div>
    <form action="delete.php" method="post">
        <input type="text" placeholder="Enter bus ID" name="ID">
        <button name="Search">Search</button>
    </form>
  </div>
  <div class="card-body">
    <h5 class="card-title">Update Bus Route</h5>
    <div class="scrollable" style="height:400px;overflow:scroll;">
    <table class="table table-hover table-dark">
  <thead >
    <tr>
      <th scope="col" style="position:sticky; top:0px; background-color:rgb(9,9,17);">Busname</th>
      <th scope="col" style="position:sticky; top:0px; background-color:rgb(9,9,17);">Source</th>
      <th scope="col" style="position:sticky; top:0px; background-color:rgb(9,9,17);">Destination</th>
      <th scope="col" style="position:sticky; top:0px; background-color:rgb(9,9,17);">Date</th>
      <th scope="col" style="position:sticky; top:0px; background-color:rgb(9,9,17);">Departure</th>
      <th scope="col" style="position:sticky; top:0px; background-color:rgb(9,9,17);">Arrival</th>
      <th scope="col" style="position:sticky; top:0px; background-color:rgb(9,9,17);">Cost</th>
      <th scope="col" style="position:sticky; top:0px; background-color:rgb(9,9,17);">Discount</th>
      <th scope="col" style="position:sticky; top:0px; background-color:rgb(9,9,17);">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Volvo</th>
      <td>BBS</td>
      <td>DHN</td>
      <td>21/01/2020</td>
      <td>10 AM</td>
      <td>5 PM</td>
      <td>Rs 730</td>
      <td>Rs 50</td>
      <td><button class="btn btn-danger badge-pill" name="delete">Update</button></td>
    </tr>

    <tr>
      <th scope="row">Volvo</th>
      <td>BBS</td>
      <td>DHN</td>
      <td>21/01/2020</td>
      <td>10 AM</td>
      <td>5 PM</td>
      <td>Rs 730</td>
      <td>Rs 50</td>
      <td><button class="btn btn-danger badge-pill" name="delete">Update</button></td>
    </tr>

    <tr>
      <th scope="row">Volvo</th>
      <td>BBS</td>
      <td>DHN</td>
      <td>21/01/2020</td>
      <td>10 AM</td>
      <td>5 PM</td>
      <td>Rs 730</td>
      <td>Rs 50</td>
      <td><button class="btn btn-danger badge-pill" name="delete">Update</button></td>
    </tr>

    <tr>
      <th scope="row">Volvo</th>
      <td>BBS</td>
      <td>DHN</td>
      <td>21/01/2020</td>
      <td>10 AM</td>
      <td>5 PM</td>
      <td>Rs 730</td>
      <td>Rs 50</td>
      <td><button class="btn btn-danger badge-pill" name="delete">Update</button></td>
    </tr>

    <tr>
      <th scope="row">Volvo</th>
      <td>BBS</td>
      <td>DHN</td>
      <td>21/01/2020</td>
      <td>10 AM</td>
      <td>5 PM</td>
      <td>Rs 730</td>
      <td>Rs 50</td>
      <td><button class="btn btn-danger badge-pill" name="delete">Update</button></td>
    </tr>

    <tr>
      <th scope="row">Volvo</th>
      <td>BBS</td>
      <td>DHN</td>
      <td>21/01/2020</td>
      <td>10 AM</td>
      <td>5 PM</td>
      <td>Rs 730</td>
      <td>Rs 50</td>
      <td><button class="btn btn-danger badge-pill" name="delete">Update</button></td>
    </tr>

    <tr>
      <th scope="row">Volvo</th>
      <td>BBS</td>
      <td>DHN</td>
      <td>21/01/2020</td>
      <td>10 AM</td>
      <td>5 PM</td>
      <td>Rs 730</td>
      <td>Rs 50</td>
      <td><button class="btn btn-danger badge-pill" name="delete">Update</button></td>
    </tr>
    

    <tr>
      <th scope="row">Volvo</th>
      <td>BBS</td>
      <td>DHN</td>
      <td>21/01/2020</td>
      <td>10 AM</td>
      <td>5 PM</td>
      <td>Rs 730</td>
      <td>Rs 50</td>
      <td><button class="btn btn-danger badge-pill" name="delete">Update</button></td>
    </tr>
  </tbody>
</table>
   </div>
  </div>
</div>
    </div>
</body>
</html>