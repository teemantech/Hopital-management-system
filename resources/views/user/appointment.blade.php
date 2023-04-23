<section class="book_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col">
          <form action="{{url('appointment')}}" method='POST'>
            @csrf
            <h4>
              BOOK <span>APPOINTMENT</span>
            </h4>
            <div class="form-row ">
              <div class="form-group col-lg-4">
                <label for="inputPatientName">Patient Name </label>
                <input type="text" name='name' class="form-control" id="inputPatientName" placeholder="">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDoctorName">Doctor's Name</label>
                <select name="doctor" class="form-control wide" id="inputDoctorName">
                  <option>--select doctor--</option>
                  @foreach($doctor as $doctors)
                  <option value="{{$doctors->name}}{{$doctors->speciality}}">{{$doctors->name}}---speciality---{{$doctors->speciality}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDepartmentName">Patient email </label>
              
             <input type="text" name='email' class="form-control" id="inputPatientName" placeholder="">
                
              </div>
            </div>
            <div class="form-row ">
              <div class="form-group col-lg-4">
                <label for="inputPhone">Phone Number</label>
                <input type="text"  name='number' class="form-control" id="inputPhone" placeholder="XXXXXXXXXX">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputSymptoms">Symptoms</label>
                <input type="text" name='symptoms' class="form-control" id="inputSymptoms" placeholder="">
              </div>
              <div class="form-group col-lg-4">
                <label for="inputDate">Choose Date </label>
                <div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">
                  <input type="text" name='date' class="form-control" readonly>
                  <span class="input-group-addon date_icon">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="btn-box">
              <button type="submit" class="btn ">Submit Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
