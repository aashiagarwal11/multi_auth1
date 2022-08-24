@include('header')
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col md-2">
          @include('sidebar')
        </div>

        <div class="col-md-10">
          <div class="row">
            <div class="col-md-1">
              {{-- blank --}}
            </div>

            <div class="col-md-10">


              <!--Form with header-->
            <form role="form" action="{{route('post_OrderDetails')}}" method="post">
              {!! csrf_field() !!}
              <div class="card border-primary rounded-0">
                  <div class="card-header p-0">
                      <div class="bg-info text-white text-center py-2">
                          <h3>Cashfree Payment Gateway Integration in Laravel</h3>
                      </div>
                  </div>
                  <div class="card-body p-3">
                      <div class="row">
                          <div class="col-sm-12">

                              @if(Session::has('successMessage'))
                                  <div class="alert alert-success">
                                      <a class="close" data-dismiss="alert">×</a>
                                      <strong>Alert </strong> {!!Session::get('successMessage')!!}
                                  </div>
                              @endif

                                  @if(Session::has('errorMessage'))
                                      <div class="alert alert-success">
                                          <a class="close" data-dismiss="alert">×</a>
                                          <strong>Alert </strong> {!!Session::get('errorMessage')!!}
                                      </div>
                                  @endif


                              <div class="form-group">
                                  <label for="name">Customer Name</label>
                                  <input type="text" class="form-control" name="customerName" placeholder="Customer Name"  value="{{ old('customerName') }}">
                                  @if ($errors->has('customerName'))
                                      <span style="color: red;">{{ $errors->first('customerName') }}</span>
                                  @endif
                              </div>

                              <div class="form-group">
                                  <label for="name">Customer Phone</label>
                                  <input type="text" class="form-control" name="customerPhone" placeholder="Customer Name"  value="{{ old('customerPhone') }}">
                                  @if ($errors->has('customerPhone'))
                                      <span style="color: red;">{{ $errors->first('customerPhone') }}</span>
                                  @endif
                              </div>

                              <div class="form-group">
                                  <label for="name">Customer Email</label>
                                  <input type="text" class="form-control" name="customerEmail" placeholder="Customer Name"  value="{{ old('customerEmail') }}">
                                  @if ($errors->has('customerEmail'))
                                      <span style="color: red;">{{ $errors->first('customerEmail') }}</span>
                                  @endif
                              </div>

                              <div class="form-group">
                                  <label for="name">Amount</label>
                                  <input type="text" class="form-control" name="amount" placeholder="Amount"  value="{{ old('amount') }}">
                                  @if ($errors->has('amount'))
                                      <span style="color: red;">{{ $errors->first('amount') }}</span>
                                  @endif
                              </div>

                          </div>
                      </div>

                      <div class="text-center">
                          <button type="submit" class="btn btn-info btn-block rounded-0 py-2">Submit</button>
                      </div>
                  </div>

              </div>
          </form>
          <!--Form with header-->
            </div>

            <div class="col-md-1">
              {{-- blank --}}
            </div>
          </div>
        </div>
      </div>     
    </div>
    <br>    
    <br>    
    <br>    
    <br>    
  </body>
</html>

