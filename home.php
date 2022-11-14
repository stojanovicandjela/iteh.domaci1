
<!doctype html>
<html lang="en">
  <head>
  	<title>Home page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="css/home_style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section" style="color: white;">Welcome someone</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-dark">
						    <tr>
						      <th>ID no.</th>
						      <th>First Name</th>
						      <th>Last Name</th>
                                <th>Age</th>
                                <th>Weight</th>
                                <th></th>
						    </tr>
						  </thead>
						  <tbody class="tableBody">

						  </tbody>
						</table>
                       
					</div>
                  
				</div>
			</div>
          
		</div>
        <div style="display: block; margin-top: 100px; align-items: center;">
        <button style="width: 60%; height: 20%; cursor: pointer; border-radius: 30px; color: black;" data-toggle="modal" data-target="#myModal">Add new client</button>
        <button style="width: 60%; height: 20%; cursor: pointer; border-radius: 30px; color: black;">Sort by client's name</button>
        <br>
        <button style="width: 60%; height: 20%; cursor: pointer; border-radius: 30px; color: black;">Find by client's name</button>
        <br>
        <input id = "myInput" type="text" style="border-radius: 30px; width: 60%; height: 15%;">
        <br>
        <button style="width: 60%; height: 20%; cursor: pointer; border-radius: 30px; color: black;">Delete client</button>
        <br>
        <button style="width: 60%; height: 20%; cursor: pointer; border-radius: 30px; color: black;">Show all</button>
      </div>
       
	</section>

   <a><button style="position: absolute; top: 10px; right: 10px; cursor: pointer; width: 10%; height: 5%; color: black;">Logout</button></a> 

    
    <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color: black;">Input data</h4>
      </div>
      <div class="modal-body" style="display: block;">
        <form class="addingForm" id="add" method="post" action="">
            <input name="name" type="text" style="width: 50%;" required placeholder="Name">
            <br>
            <br>
            <input name="lastName" type="text" style="width: 50%;" required placeholder="Last name">
            <br>
            <br>
            <input name="age" type="text" style="width: 50%;" required placeholder="Age">
            <br>
            <br>
            <input name="weight" type="text" style="width: 50%;" required placeholder="Weight">
            <br>
            <br>
            <input class = "sub" type="submit" name = "submit" value = "Add" style="color: black; width: 50%; border-radius: 30px;">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

  <input id = "id" style="opacity: 0;" type="text">

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>


	</body>
</html>