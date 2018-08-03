@extends('layouts.dashboardlayout')

@section ('title')
Patient Management
@endsection


@section ('body')

@if (session()->has('message'))
 <div class="alert alert-success">
   {{ session()->get('message')}}
 </div>
@endif
<!-- Main content -->
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Register New Patient</h3>
            </div>
            <!-- /.box-header -->
            
            <form action="/postpatienthospital" method="post" class="form-horizontal">
              @csrf
                <div class="box-body">

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">ID</label>
      
                        <div class="col-sm-10">
                          <input type="text" class="form-control" disabled="" id="inputEmail3" placeholder="ID" name="id" required>
                        </div>
                      </div>



                      <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Name</label>
        
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3" placeholder="Name" name="patientname" required>
                          </div>
                        </div>
        
        
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Date</label>
        
                          <div class="col-sm-10">
                            <input type="date" class="form-control" id="inputPassword3" placeholder="Date" name="patientdate" required>
                          </div>
                        </div>
        
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Age</label>
        
                          <div class="col-sm-10">
                            <input type="number" class="form-control" id="inputPassword3" placeholder="Age" name="patientage" required>
                          </div>
                        </div>
                        

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Gender</label>
          
                            <div class="col-sm-10">
                              <select class="form-control form-control-sm" name="patientsex" required>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                              </select> 
                            </div>
                          </div>
          
          
          
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">GI Unit / BHT </label>
          
                            <div class="col-sm-10">
                              <select class="form-control select2" multiple="multiple" data-placeholder="Select GI/BHT"
                                      style="width: 100%;" name="patient_gi_bht" required>  
                              @foreach ($giunit as $gi)
                                <option>{{$gi['giunit']}}</option>
                              @endforeach
                              </select>
                            </div>
                          </div>
                          

          
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Proceedure</label>
          
                            <div class="col-sm-10">
                              <select class="form-control select2" multiple="multiple" data-placeholder="Select Proceedure"
                                      style="width: 100%;" name="patientproceedure" required>
                                      @foreach ($Proceedure as $proc)
                                      <option>{{$proc['proceedure']}}</option>
                                    @endforeach
                              </select>
                            </div>
                          </div>

                          
                <div class="form-group">
                    <label  class="col-sm-2 control-label">Indication</label>
  
                    <div class="col-sm-10">
                        <!-- /.box-header -->
                        <div class="box-body pad">
                                <textarea id="editor1" name="patientindication" rows="10" cols="80" required>
                                  Edit Indication here .
                                </textarea>                          
                        </div>
                      <!-- /.box -->
                      </div>
                  </div>


                  <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Operator</label>
    
                      <div class="col-sm-10">
                        <select class="form-control select2" multiple="multiple" data-placeholder="Select Operator"
                                style="width: 100%;" name="patientoperator" required>
                                @foreach ($Operator as $opera)
                                <option>{{$opera['operator']}}</option>
                              @endforeach
                        </select>
                      </div>  
                    </div>
    
    
    
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Finding / Intervention</label>
    
                      <div class="col-sm-10">
                          <!-- /.box-header -->
                          <div class="box-body pad">
                                  <textarea id="editor2" name="patientfinding_intervention" rows="10" cols="80" required>
                                    Edit Finding / Intervention here .
                                  </textarea>                            
                          </div>
                        <!-- /.box -->
                        </div>
                    </div>




                </div>

               <!-- /.box-body -->
              <div class="box-footer">
                  <button type="submit" class="btn btn-default">Cancel</button>
                  <button type="submit" class="btn btn-info pull-right">Register</button>
                  
                </div>
                <!-- /.box-footer -->
              </form>

          </div>

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

          <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Search Patient Details</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Gender</th>
                          <th>Age</th>
                          <th>HomeTown</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach($flights as $row)
                        <tr>
                          <td>{{$row['id']}}</td>
                          <td>{{$row['patientname']}}</td>
                          <td>{{$row['patientsex']}}</td>
                          <td>{{$row['patientage']}}</td>
                          <td>{{$row['patientoperator']}}</td>
                        </tr>
                        @endforeach
    
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>HomeTown</th>
                        </tr>
                        </tfoot>
                      </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->


        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
<!-- /.content -->


@endsection
