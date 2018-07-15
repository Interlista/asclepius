@extends('layouts.dashboardlayout')

@section ('title')
Patient Management Clinic
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
              <h3 class="box-title">Register New Patient Clinic</h3>
            </div>
            <!-- /.box-header -->
            
            <form action="/postpatientclinic" method="post" class="form-horizontal">
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
                            <input type="text" class="form-control" id="inputPassword3" placeholder="Name" name="patientname_clinic" required>
                          </div>
                        </div>
        
        
       
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Age</label>
        
                          <div class="col-sm-4">
                            <input type="number" class="form-control" id="inputPassword3" placeholder="Age" name="patientage_clinic" required>
                          </div>

                            <label for="inputPassword3" class="col-sm-2 control-label">Gender</label>
          
                            <div class="col-sm-4">
                              <select class="form-control form-control-sm" name="patientgender_clinic" required>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                              </select> 
                            </div>
                          </div>


                          <div class="form-group">
                              <label for="inputPassword3" class="col-sm-2 control-label">Occupation</label>
            
                              <div class="col-sm-4">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="Occupation" name="patientoccupation_clinic" required>
                              </div>
                           
                              
                                <label for="inputPassword3" class="col-sm-2 control-label">Home Town </label>
              
                                <div class="col-sm-4">
                                 
                                    <input type="text" class="form-control" id="inputPassword3" placeholder="Home Town" name="patienthometown_clinic" required>
                          
                                  </select>
                                </div>
                              </div>
          
          
          
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">GI Unit </label>
          
                            <div class="col-sm-10">
                              <select class="form-control select2" multiple="multiple" data-placeholder="Select GI"
                                      style="width: 100%;" name="patientgi_clinic" required>
                                      @foreach ($giunit as $gi)
                                      <option>{{$gi['giunit']}}</option>
                                    @endforeach
                              </select>
                            </div>
                          </div>


                          <div class="form-group">
                              <label for="inputPassword3" class="col-sm-2 control-label">Diagnosis </label>
            
                              <div class="col-sm-10">
                                <select class="form-control select2" multiple="multiple" data-placeholder="Select Diagnosis"
                                        style="width: 100%;" name="patientdiagnosis_clinic" required>
                                        @foreach ($Diagnosis as $Diag)
                                        <option>{{$Diag['diagnosis']}}</option>
                                      @endforeach
                                </select>
                              </div>
                            </div>


                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Year of Diagnosis</label>
              
                                <div class="col-sm-10">
                                  <input type="date" class="form-control" id="inputPassword3" placeholder="Date" name="patientyearofdiagnosis_clinic" required>
                                </div>
                              </div>

          
          
          
                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Complications</label>

                            <div class="col-sm-5">
                                <select class="form-control form-control-sm" name="patientcomplication_clinic" required>
                                    @foreach ($Complications as $Comp)
                                    <option>{{$Comp['complications']}}</option>
                                  @endforeach
                                </select> 
                              </div>

                            <div class="col-sm-5">
                                <select class="form-control select2" multiple="multiple" data-placeholder="Complications Type"
                                        style="width: 100%;" name="patientcomplicationtype_clinic" required>
                                        @foreach ($ComplicationsType as $CompType)
                                        <option>{{$CompType['complicationstype']}}</option>
                                      @endforeach
                                </select>
                              </div>

                          </div>


                          <div class="form-group">
                              <label  class="col-sm-2 control-label">Investigations</label>
            
                              <div class="col-sm-10">
                                  <div class="nav-tabs-custom">
                                      <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab_1" data-toggle="tab">Haematological</a></li>
                                        <li><a href="#tab_2" data-toggle="tab">Imaging</a></li>
                                        <li><a href="#tab_3" data-toggle="tab">Endoscopy</a></li>
                                        <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                                      </ul>
                                      <div class="tab-content">
                                        <div class="tab-pane active" id="tab_1">
                                          
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">Hamatological</label>
                              
                                                <div class="col-sm-10">
                                                  <input type="text" class="form-control" id="inputPassword3" placeholder="patienthaematological_clinic" name="patienthaematological_clinic" required>
                                                </div>
                                              </div>
                              
                                
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_2">
                                          
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">Imaging</label>
                              
                                                <div class="col-sm-10">
                                                  <input type="text" class="form-control" id="inputPassword3" placeholder="Imaging" name="patientimaging_clinic" required>
                                                </div>
                                              </div>
                              

                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="tab_3">
                                          
                                            <div class="form-group">
                                                <label for="inputPassword3" class="col-sm-2 control-label">Endoscopy</label>
                              
                                                <div class="col-sm-10">
                                                  <input type="text" class="form-control" id="inputPassword3" placeholder="Endoscopy" name="patientendoscopy_clinic" required>
                                                </div>
                                              </div>
                              

                                        </div>
                                        <!-- /.tab-pane -->
                                      </div>
                                      <!-- /.tab-content -->
                                    </div>  
                                </div>
                            </div>
            

                                
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Body weight</label>
  
                          <div class="col-sm-5">
                            <!-- /.box-header -->
                            <input type="number" class="form-control" id="inputPassword3" placeholder="Body Weight" name="patientbodyweight_clinic" required>
                          <!-- /.box -->
                          </div>
      
      
                      </div>


                      <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Patient complains</label>
    
       
                            <div class="col-sm-10">
                                <!-- /.box-header -->
                                <div class="box-body pad">
                                        <textarea id="editor1" name="patientcomplains_clinic" rows="10" cols="80" required>
                                            Patient complains
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
                  <table id="example2" class="table table-bordered table-striped">
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
                      <td>{{$row['patientname_clinic']}}</td>
                      <td>{{$row['patientgender_clinic']}}</td>
                      <td>{{$row['patientage_clinic']}}</td>
                      <td>{{$row['patienthometown_clinic']}}</td>
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
          
                  </div>

                  
      <!-- /.row -->
    </section>


    
<!-- /.content -->


@endsection
