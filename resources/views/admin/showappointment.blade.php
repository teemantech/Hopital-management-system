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
        <div class="container-fluid page-body-wrapper" style="margin:20px;"> 

        <div align='center' style='padding:50px;'>
        <table class="table table-striped">
            <tr style='background-color:black;'> 
                <th style='padding:10px;color:white;'>Patient name</th>
                <th style='padding:10px;color:white;'>Email</th>
                <th style='padding:10px;color:white;'>Patient number</th>
                <th style='padding:10px;color:white;'>Doctor name</th>
                <th style='padding:10px;color:white;'>Symptoms</th>
                <th style='padding:10px;color:white;'>Status</th>
                <th style='padding:10px;color:white;'>Approved</th>
                <th style='padding:10px;color:white;'>Canceled</th>
            </tr>
            @foreach($data as $appoint)
            <tr>
                <td style='color:white;'>{{$appoint->name}}</td>
                <td style='color:white;'>{{$appoint->email}}</td>
                <td style='color:white;'>{{$appoint->phone}}</td>
                <td style='color:white;'>{{$appoint->doctor}}</td>
                <td style='color:white;'>{{$appoint->symptoms}}</td>
                <td style='color:white;'>{{$appoint->status}}</td>
                <td style='color:white;'><a class='btn btn-success'  href="{{url('approved',$appoint->id)}}">Approved</td>
                <td style='color:white;'><a class='btn btn-danger'  href="{{url('canceled',$appoint->id)}}">Canceled</td>
            </tr>
            @endforeach
        </table>
    </div>

        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
     @include('admin.script')
  </body>
</html>