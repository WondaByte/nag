
@extends('admin.layout')
@section('content')

<div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Data From The Field </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Geo Data</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Data table</li>
                </ol>
              </nav>
            </div>

            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add Geo Data 
</button>

<!-- Start Add-Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">ADD DETAILS HERE</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

        <form action="{{('addGeodata')}}" method="POST" enctype="multipart/form-data">
          @csrf
      <div class="modal-body">
        <!-- Start Add-Modal BODY -->
        
          {{-- <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div> --}}

          <div class="form-group">
              <label>OUTLET CODE</label>
              <input type="number" name="outcode" class="form-control" placeholder="Enter Outlet Code">
          </div>

          <div class="form-group">
            <label>OWNER'S NAME</label>
            <input type="number" name="outcode" class="form-control" placeholder="Enter Outlet Code">
        </div>

        <div class="form-group">
          <label>FACILITY NAME</label>
          <input type="number" name="outcode" class="form-control" placeholder="Enter Outlet Code">
        </div>

      <div class="form-group">
        <label>TELEPHONE NUMBER</label>
        <input type="number" name="outcode" class="form-control" placeholder="Enter Outlet Code">
      </div>

    <div class="form-group">
      <label>UPLOAD IMAGE</label>
      <input type="number" name="outcode" class="form-control" placeholder="Enter Outlet Code">
    </div>


    <div class="form-group">
      <label>REGION</label>
      <input type="number" name="outcode" class="form-control" placeholder="Enter Outlet Code">
  </div>

  <div class="form-group">
    <label>CITY</label>
    <input type="number" name="outcode" class="form-control" placeholder="Enter Outlet Code">
</div>

<div class="form-group">
  <label>LOCALITY</label>
  <input type="number" name="outcode" class="form-control" placeholder="Enter Outlet Code">
</div>

<div class="form-group">
  <label>LANDMARK</label>
  <input type="number" name="outcode" class="form-control" placeholder="Enter Outlet Code">
</div>

<div class="form-group">
  <label>CHANNEL TYPE</label>
  <input type="number" name="outcode" class="form-control" placeholder="Enter Outlet Code">
</div>

<div class="form-group">
  <label>OUTLET TYPE</label>
  <input type="number" name="outcode" class="form-control" placeholder="Enter Outlet Code">
</div>

<div class="form-group">
  <label>OUTLET VISIBILITY</label>
  <input type="number" name="outcode" class="form-control" placeholder="Enter Outlet Code">
</div>

<div class="form-group">
  <label>OUTLET LIFE SPAN</label>
  <input type="number" name="outcode" class="form-control" placeholder="Enter Outlet Code">
</div>

<div class="form-group">
  <label>UTILITY AVAILABLE</label>
  <input type="number" name="outcode" class="form-control" placeholder="Enter Outlet Code">
</div>




          {{-- <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
          </div> --}}

          {{-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button> --}}
        


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>

    </form>
    </div>
  </div>
</div>

<!-- End Add-Modal -->
            {{-- <div class="card">
              <div class="card-body">
                <h4 class="card-title">Data table</h4>
                <div class="row">
                  <div class="col-12">
                    <div class="table-responsive">
                      <table id="order-listing" class="table">
                        <thead>
                          <tr>
                            <th>Order #</th>
                            <th>Purchased On</th>
                            <th>Customer</th>
                            <th>Ship to</th>
                            <th>Base Price</th>
                            <th>Purchased Price</th>
                            <th>Status</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>2012/08/03</td>
                            <td>Edinburgh</td>
                            <td>New York</td>
                            <td>$1500</td>
                            <td>$3200</td>
                            <td>
                              <label class="badge badge-info">On hold</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>2015/04/01</td>
                            <td>Doe</td>
                            <td>Brazil</td>
                            <td>$4500</td>
                            <td>$7500</td>
                            <td>
                              <label class="badge badge-danger">Pending</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>2010/11/21</td>
                            <td>Sam</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                              <label class="badge badge-success">Closed</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>2016/01/12</td>
                            <td>Sam</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                              <label class="badge badge-success">Closed</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>2017/12/28</td>
                            <td>Sam</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                              <label class="badge badge-success">Closed</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>6</td>
                            <td>2000/10/30</td>
                            <td>Sam</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                              <label class="badge badge-info">On-hold</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>7</td>
                            <td>2011/03/11</td>
                            <td>Cris</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                              <label class="badge badge-success">Closed</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>8</td>
                            <td>2015/06/25</td>
                            <td>Tim</td>
                            <td>Italy</td>
                            <td>$6300</td>
                            <td>$2100</td>
                            <td>
                              <label class="badge badge-info">On-hold</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>9</td>
                            <td>2016/11/12</td>
                            <td>John</td>
                            <td>Tokyo</td>
                            <td>$2100</td>
                            <td>$6300</td>
                            <td>
                              <label class="badge badge-success">Closed</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                          </tr>
                          <tr>
                            <td>10</td>
                            <td>2003/12/26</td>
                            <td>Tom</td>
                            <td>Germany</td>
                            <td>$1100</td>
                            <td>$2300</td>
                            <td>
                              <label class="badge badge-danger">Pending</label>
                            </td>
                            <td>
                              <button class="btn btn-outline-primary">View</button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}
          </div>


 @endsection