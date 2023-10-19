
@extends('admin.layout')
@section('content')
{{-- 
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script> --}}

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

        {{-- <form action="{{('addgeo')}}" method="POST" enctype="multipart/form-data"> --}}
            

            @if(count($errors)>0)
            <div class="alert alert-danger">

                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$errors}}</li>
                    @endforeach
                </ul>

            </div>

            @endif

            @if(session()->has('message'))

            <div class="alert alert-success">
                <button type="button"class="close" data-dismiss="alert">
                x
                </button>
                {{session()->get('message')}}
            </div>
            
            @endif

        <form action="{{('upload')}}" method="POST" enctype="multipart/form-data">
          {{-- @csrf --}}

          {{csrf_field()}}
      <div class="modal-body">

          <div class="form-group">
              <label>OUTLET CODE</label>
              <input type="number" name="ocode" class="form-control" placeholder="Enter Outlet Code">
          </div>

          <div class="form-group">
            <label>OWNER'S NAME</label>
            <input type="text" name="oname" class="form-control" placeholder="Enter Owner's Name">
        </div>

        <div class="form-group">
          <label>FACILITY NAME</label>
          <input type="text" name="fname" class="form-control" placeholder="Enter the Facility Name">
        </div>

      <div class="form-group">
        <label>TELEPHONE NUMBER</label>
        <input type="number" name="outcode" class="form-control" placeholder="Enter Outlet Code">
      </div>

    <div class="form-group">
      <label>UPLOAD IMAGE</label>
      <input type="number" name="telephone" class="form-control" placeholder="Enter Telephone Number">
    </div>


    <div class="form-group">
      <label>REGION</label>
      <input type="text" name="region" class="form-control" placeholder="Enter Region Here">
  </div>

  <div class="form-group">
    <label>CITY</label>
    <input type="text" name="city" class="form-control" placeholder="Enter City Here">
</div>

<div class="form-group">
  <label>LOCALITY</label>
  <input type="text" name="locality" class="form-control" placeholder="Enter Outlet Code">
</div>

<div class="form-group">
  <label>LANDMARK</label>
  <input type="number" name="landmark" class="form-control" placeholder="Enter LandMark Here">
</div>

<div class="form-group">
  <label>CHANNEL TYPE</label>
  <input type="number" name="ctype" class="form-control" placeholder="Enter Channel Type">
</div>

<div class="form-group">
  <label>OUTLET TYPE</label>
  <input type="number" name="outcode" class="form-control" placeholder="Enter Outlet Code">
</div>

<div class="form-group">
  <label>OUTLET VISIBILITY</label>
  <input type="number" name="ovisibility" class="form-control" placeholder="Outlet Visibility">
</div>

<div class="form-group">
  <label>OUTLET LIFE SPAN</label>
  <input type="number" name="olspan" class="form-control" placeholder="Outlet Life Span">
</div>

<div class="form-group">
  <label>UTILITY AVAILABLE</label>
  <input type="text" name="uavailable" class="form-control" placeholder="Unavailability">
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
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>

    </form>
    </div>
  </div>
</div>

<!-- End Add-Modal -->





<!-- Start EDIT-Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">ADD DETAILS HERE</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
  
          {{-- <form action="{{('addgeo')}}" method="POST" enctype="multipart/form-data"> --}}
          
          
            {{-- <form action="{{(' editgeodata')}}" method="POST" enctype="multipart/form-data"> --}}
           
              @if(count($errors)>0)
              <div class="alert alert-danger">
  
                  <ul>
                      @foreach($errors->all() as $error)
                      <li>{{$error}}</li>
                      @endforeach
                  </ul>
  
              </div>
  
              @endif
  
              @if(session()->has('message'))
  
              <div class="alert alert-success">
                  <button type="button"class="close" data-dismiss="alert">
                  x
                  </button>
                  {{session()->get('message')}}
              </div>
              
              @endif
{{--   
          <form action="{{ route('editgeodata') }}" method="POST" id="editForm" enctype="multipart/form-data"> --}}
            <form action="{{ route('editgeodata', ['id' => $id]) }}" method="POST" id="editForm" enctype="multipart/form-data">

            {{-- @csrf --}}
            
            {{ csrf_field() }}
            {{ method_field('PUT') }}
        <div class="modal-body">
          
          
          
          <!-- Start Add-Modal BODY -->
          
            {{-- <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div> --}}
  
            <div class="form-group">
                <label>OUTLET CODE</label>
                <input type="number" name="ocode" id="ocode" class="form-control" placeholder="Enter Outlet Code">
            </div>
  
            <div class="form-group">
              <label>OWNER'S NAME</label>
              <input type="text" name="oname" id="oname" class="form-control" placeholder="Enter Owner's Name">
          </div>
  
          <div class="form-group">
            <label>FACILITY NAME</label>
            <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter the Facility Name">
          </div>
  
        <div class="form-group">
          <label>TELEPHONE NUMBER</label>
          <input type="number" name="outcode" id="outcode" class="form-control" placeholder="Enter Outlet Code">
        </div>
  
      <div class="form-group">
        <label>UPLOAD IMAGE</label>
        <input type="number" name="telephone" id="telephone" class="form-control" placeholder="Enter Telephone Number">
      </div>
  
  
      <div class="form-group">
        <label>REGION</label>
        <input type="text" name="region" id="region" class="form-control" placeholder="Enter Region Here">
    </div>
  
    <div class="form-group">
      <label>CITY</label>
      <input type="text" name="city"  id="city" class="form-control" placeholder="Enter City Here">
  </div>
  
  <div class="form-group">
    <label>LOCALITY</label>
    <input type="text" name="locality" id="locality" class="form-control" placeholder="Enter Outlet Code">
  </div>
  
  <div class="form-group">
    <label>LANDMARK</label>
    <input type="number" name="landmark" id="landmark" class="form-control" placeholder="Enter LandMark Here">
  </div>
  
  <div class="form-group">
    <label>CHANNEL TYPE</label>
    <input type="number" name="ctype"  id="ctype" class="form-control" placeholder="Enter Channel Type">
  </div>
  
  <div class="form-group">
    <label>OUTLET TYPE</label>
    <input type="number" name="outcode" id="outcode" class="form-control" placeholder="Enter Outlet Code">
  </div>
  
  <div class="form-group">
    <label>OUTLET VISIBILITY</label>
    <input type="number" name="ovisibility" id="ovisibility" class="form-control" placeholder="Outlet Visibility">
  </div>
  
  <div class="form-group">
    <label>OUTLET LIFE SPAN</label>
    <input type="number" name="olspan" id="olspan" class="form-control" placeholder="Outlet Life Span">
  </div>
  
  <div class="form-group">
    <label>UTILITY AVAILABLE</label>
    <input type="text" name="uavailable" id="uavailable" class="form-control" placeholder="Unavailability">
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
          <button type="submit" class="btn btn-primary">Update Data</button>
        </div>
  
      </form>
      </div>
    </div>
  </div>
  
  <!-- End EDIT-Modal -->
  

<br><br>



<!--Tabel-->
<table  id="datatable" class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Outlet Code</th>
            <th scope="col">Owner's Name</th>
            <th scope="col">Facility Name</th>
            <th scope="col">Telephone Number</th>
            <th scope="col">Region</th>
            <th scope="col">City</th>
            <th scope="col">Locality</th>
            <th scope="col">Channel Type</th>
            <th scope="col">LandMark</th>
            <th scope="col">Outlet Visibility</th>
            <th scope="col">Utility Available</th>
            <th scope="col">Action</th>
          </tr>
        </thead>

        <tfoot>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Outlet Code</th>
              <th scope="col">Owner's Name</th>
              <th scope="col">Facility Name</th>
              <th scope="col">Telephone Number</th>
              <th scope="col">Region</th>
              <th scope="col">City</th>
              <th scope="col">Locality</th>
              <th scope="col">Channel Type</th>
              <th scope="col">LandMark</th>
              <th scope="col">Outlet Visibility</th>
              <th scope="col">Utility Available</th>
              <th scope="col">Action</th>
            </tr>
        </tfoot>

        


        
    
            
                
        <tbody>
            @foreach($data as $gdata)
          <tr>
            <td>{{$gdata->id}}</td>
            <td>{{$gdata->ocode}}</td>
            <td>{{$gdata->oname}}</td>
            <td>{{$gdata->fname}}</td>
            <td>{{$gdata->telephone}}</td>
            <td>{{$gdata->region}}</td>
            <td>{{$gdata->city}}</td>
            <td>{{$gdata->locality}}</td>
            <td>{{$gdata->ctype}}</td>
            <td>{{$gdata->landmark}}</td>
            <td>{{$gdata->ovisibility}}</td>
            <td>{{$gdata->uavailable}}</td>
            {{-- <td>
                <a class="btn btn-success" href="{{url('approved',$gdata->id)}}">Approved</a>
            </td>
            
            <td>
                
                <a class="btn btn-danger" href="{{url('cancelled',$gdata->id)}}">Cancelled</a>
            
            </td> --}}
            <td>
                
                <a href ="editgeodata" class="btn btn-success edit">EDIT</a>
                <a href ="deleteGeodata" class="btn btn-danger delete">DELETE</a>
            
            </td>
            
           
          </tr>
         
          @endforeach
        </tbody>
      
  </table>







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


<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script src=" https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css"></script>
         
         <script type="text/javascript">

         
            $(document).ready(function() {
                // Your JavaScript code for handling the "Edit" modal here
                    var table = $('#datatable').DataTable();

                    //Start Edit Record

                    table.on('click', '.edit', function()
                    {
                        $tr =$(this).closest('tr');
                        if ($($tr).hasClass('child')){
                            $tr =$tr.prev('.parent');
                        }

                        var data = table.row($tr).data();
                        console.log(data);

                        $('#ocode').val(data[1]);
                        $('#oname').val(data[2]);
                        $('#fname').val(data[3]);
                        $('#telephone').val(data[4]);
                        $('#region').val(data[5]);
                        $('#city').val(data[6]);
                        $('#locality').val(data[7]);
                        $('#landmark').val(data[8]);
                        $('#type').val(data[9]);
                        $('#ovisibility').val(data[10]);
                        $('#uavailable').val(data[11]);


                        $('#editForm').attr('action', '/employee/'+data[0]);
                        $('#editModal').modal('show');


                    });

                    // End Edit Record

                // // For example, you can show the modal when a button is clicked:
                // $('#editButton').click(function() {
                //     $('#editModal').modal('show'); // Assuming you have an Edit Modal with the ID 'editModal'
                // });
        
                // Add more functionality here as needed
            });
        </script> 


{{-- <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script> --}}

        
 @endsection