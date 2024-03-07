<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h1 style="color:red;text-align:center">Crud</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form name="" method="POST" action="/update/{{$edit['id']}}">
                @csrf
                
                <p></p>
                <input type="text" style="margin-top:10px" value="{{$edit['first_name']}}" class="form-control" value="" name="first_name" placeholder="Enter First Name">
                <input type="text" style="margin-top:10px" value="{{$edit['last_name']}}" class="form-control" name="last_name" placeholder="Enter Last Name">
                <input type="text" style="margin-top:10px" value="{{$edit['mobile']}}" class="form-control" name="mobile" placeholder="Enter  Mobile No:">
                <input type="date" style="margin-top:10px" value="{{$edit['dob']}}" class="form-control" name="dob" placeholder="Enter  Dob:">
                  <input type ="submit" value="Save" style ="margin-top:10px" class="btn btn-info">  
                </form>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-7">
                  <table class="table table-borderd">
                    <thead>
                      <th>First name</th>
                      <th>Last name</th>
                      <th>Mobile</th>
                      <th>Dob</th>
                      <th>Action</th>
                      <thead>
                      <tbody>
                        @if (count($data)>0)
                          @foreach($data as $value)
                          <tr>
                          <td>{{ $value->first_name}}</td>
                          <td>{{ $value->last_name}}</td>
                          <td>{{ $value->mobile}}</td>
                          <td>{{ $value->dob}}</td>
                          <td>
                          <a href="/editData/{{$value->id}}"><button class="btn btn-info">Edit</buttom></a>
                          <a><button class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                        @endforeach
                        @endif
                      </tbody>
                  </table>
                </div>
        </div>
    </div>
</body>
</html>