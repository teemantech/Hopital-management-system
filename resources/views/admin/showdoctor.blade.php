<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
   <div class="container-fluid page-body-wrapper" style="margin:50px;"> 

   <div align='center' style='padding:50px;'>
        <table class="table table-striped">
            <tr style='background-color:black;'> 
                <th style='padding:10px;color:white;'>Doctor name</th>
                <th style='padding:10px;color:white;'>Phone</th>
                <th style='padding:10px;color:white;'>Speciality</th>
                <th style='padding:10px;color:white;'>Room No</th>
                <th style='color:white;'>Image</th>
                <th style='padding:10px;color:white;'>Update</th>
                <th style='padding:10px;color:white;'>Delete</th>
                
            </tr>
            @foreach($data as $doctor)
            <tr>
                <td style='color:white;'>{{$doctor->name}}</td>
                <td style='color:white;'>{{$doctor->phone}}</td>
                <td style='color:white;'>{{$doctor->speciality}}</td>
                <td style='color:white;'>{{$doctor->room}}</td>
                <td><img height='100px' src='doctorimage/{{$doctor->image}}'></td>
                <td style='color:white;'><a class='btn btn-success'  href="{{url('deletedoctor',$doctor->id)}}">Update</a></td>
                <td style='color:white;'><a class='btn btn-danger'  onclick="return confirm('Are you sure about deleting')" href="{{url('deletedoctor',$doctor->id)}}" >Delete</a></td>
               
            </tr>
            @endforeach
</div>  
   </div> 
    <!-- container-scroller -->
    <!-- plugins:js -->
     @include('admin.script')
  </body>
</html>