<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title></title>
            <meta name="description" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="../../css/login.css">
           
    </head>
    <body>
        <p>
            <h3 id="title">Add a Volunteer</h3>
            <div id="loginbox">
                <form action="../../php/profile/add_Volunteer.php" method="post">
                    <div class="form-group">
                        <label for="id">Person ID:</label>
                        <input type="number" class="form-control" id="id" name="id" placeholder="Enter person ID">
                        <small id="id" class="form-text text-muted">Enter the id of a person, who will turn into a volunteer</small>
                    </div>
                    <div class="form-group">
                        <label for="spec">Specialization</label>
                        <input type="text" class="form-control" id="spec" name="spec" placeholder="Enter Specialization">
                    </div>
                    <div class="form-group">
                        <label for="sd">Start Date</label>
                        <input type="date" class="form-control" id="sd" name="sd" placeholder="YYYY-MM-DD">
                    </div>
                    <div class="form-group">
                        <label for="sid">Supervisor ID:</label>
                        <input type="number" class="form-control" id="sid" name="sid" placeholder="Enter supervisor ID">
                    </div>
                    <div class="form-group">
                        <label for="snum">Shelter Number:</label>
                        <input type="number" class="form-control" id="snum" name="snum" placeholder="Enter shelter number">
                    </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div> 
        </p>
        <script src="" async defer></script>
    </body>

</html>
