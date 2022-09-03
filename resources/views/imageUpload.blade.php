<!DOCTYPE html>
<html>
   <head>
      <title>Laravel 9 S3 File Upload Tutorial With Example </title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   </head>
   <body>
      <div class="container">
      <div class="jumbotron">
         <h1>Laravel 0 S3 File Upload Tutorial With Example</h1>
      </div>
      <div class="panel panel-primary">
         <div class="jumbotron">
            <div class="panel-body">
               @if ($message = Session::get('success'))
               <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>{{ $message }}</strong>
               </div>
               <img src="{{ Session::get('image') }}" style="width:800px">
               @endif
               @if (count($errors) > 0)
               <div class="alert alert-danger">
                  <strong>Whoops!</strong> There were some problems with your input.
                  <ul>
                     @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                     @endforeach
                  </ul>
               </div>
               @endif
               <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                     <div class="col-md-6">
                        <input type="file" name="file" class="form-control">
                     </div>
                     <div class="col-md-6">
                        <button type="submit" class="btn btn-success">Upload</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </body>
</html>