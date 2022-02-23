<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Specific Vaccine Instance</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card ">
                    <div class="card-header  kabarak-card-header">
                        <h5><i class="fas fa-edit"></i>&nbsp; EDIT {{ $data->vaccine_name }}
                        </h5>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="quickForm" method="POST" action="{{url('/editLecturer')}}" class="form">
                        {{csrf_field()}}
                        <input type="hidden" name="child_id" value="{{ $data['id'] }}">
                        <div class="card-body">
                            <div class="form-group">
{{--                                    <label for="lecturer">First Name</label>--}}
                                <input value="{{ $data["id"] }}" type="hidden" id="lec_id"
                                       class="form-control" name="lec_id"  required>
                            </div>
                            <div class="form-group">
                                <label for="lecturer">Vaccine Name</label>
                                <input value="{{ $data["name"] }}" type="text" id="name"
                                       class="form-control" name="name" placeholder="Child name" required>
                            </div>

                        </div>

                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</body>
</html>