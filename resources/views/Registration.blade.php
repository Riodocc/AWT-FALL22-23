<form action="/doregistration" method="POST">
    {{csrf_field()}}
    <div class="container">
      <h1>Register</h1>

      <hr>
    <div>
      <label for="state"><b>State</b></label>
      <input type="text" placeholder="Enter State" name="State" id="State" > <br> <br>

        @if($errors->has ('State'))
            <b>{{$errors->first('State')}}</b> <br><br>
        @endif
    </div>

      <div>
      <label for="city"><b>City</b></label>
      <input type="text" placeholder="Enter City" name="City" id="City" > <br> <br>

        @if($errors->has ('City'))
            <b>{{$errors->first('City')}}</b> <br><br>
        @endif
      </div>

      <div>
      <label for="country"><b>Country</b></label>
      <input type="text" placeholder="Enter Country" name="Country" id="Country" > <br> <br>

        @if($errors->has ('Country'))
            <b>{{$errors->first('Country')}}</b> <br><br>
        @endif
      </div>

      <div>
      <label for="address"><b>Address</b></label>
      <input type="text" placeholder="Enter Address" name="Address" id="Address"> <br> <br>

       @if($errors->has ('Address'))
            <b>{{$errors->first('Address')}}</b> <br><br>
        @endif
      </div>

      <div>
      <label for="post office number"><b>Post Office Number</b></label>
      <input type="password" placeholder="Enter Post Office Number" name="Post Office Number" id="Post Office Number"> <br> <br>

      @if($errors->has ('Post Office Number'))
         <b>{{$errors->first('Post Office Number')}}</b> <br> <br>
     @endif


      </div>

      <hr>


      <button type="submit" class="registerbtn">Register</button>
    </div>






  </form>
