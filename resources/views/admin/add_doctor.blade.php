<!DOCTYPE html>
<html lang="en">
  <head>

  <style type="text/css">
     
     label{
       display: inline-block;
       width:200px;
     }
  </style>
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
    <div class="container-fluid page-body-wrapper">

     
     
       <div class='container' align="center" style="padding-top: 100px;">

       @if(session()->has('message'))

<div class="alert alert-success">
   
  <button type="button" class="close" data-dismiss="alert">
    x
  </button>
  {{session()->get('message')}}

</div>

@endif

         <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
             @csrf
            <div style="padding:15px;"> 
               <label> Name</label>
               <input type="text"  style="color:black;" name="name" placeholder="write the name" required="">
            </div>
            <div style="padding:15px;"> 
               <label> Phone</label>
               <input type="text"  style="color:black;" name="number" placeholder="write the nnumber" required="">
            </div>
            <div style="padding:15px;"> 
               <label> Speciality</label>
               <select name="speciality" style="color:black;width:200px;" required="">
                 <option>--Select--</option>
                 <option value="General practice">General practice</option>
                 <option value="Intensive care">Intensive care</option>
                 <option value="Emergency">Emergency</option>
                 <option value="Surgery">Surgery</option>
               </select>
            </div>
            <div style="padding:15px;"> 
               <label> Room No</label>
               <input type="text"  style="color:black;" name="room" placeholder="write the room number" required="">
            </div>
            <div style="padding:15px;"> 
               <label> Image</label>
               <input type="file"  name="file" required="">
            </div>
            <div style="padding:15px;"> 
               
               <input type="submit"  class="btn btn-success">
            </div>

         </form>

       </div>

    </div>
    
    <!-- container-scroller -->
    <!-- plugins:js -->
     @include('admin.script')
  </body>
</html>