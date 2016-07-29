<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Hotel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<form method="post" action="{{url('hotelpost')}}">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div class="form-group">
        <label for="exampleInputEmail1">Hotel Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name" name="name">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Addess</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Addess" name="address">
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Hotel Price</label>
        <input type="number" id="exampleInputFile" name="price" placeholder="Price">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
</form>
</body>
</html>