<!DOCTYPE html>
<html>
<head>
   <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css' type='text/css'>
   <title>Find a Car</title>
</head>
<body>
   <div class='container'>
       <h1>Find a Car!</h1>
       <form action='/car'>
           <div class='form-group'>
               <label for='price'>Enter Maximum Price:</label>
               <input id='price' name='price' class='form-control' type='number'>
               <label for='mileage'>Enter Max Miles:</label>
               <input id='mileage' name='mileage' class='form-control' type='number'>
           </div>
           <button type='submit' class='btn-success'>Submit</button>
       </form>
   </div>
</body>
</html>
