@extends('layouts.dashboardlayout')

@section ('title')
Admin
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
              <h3 class="box-title">Add GI Unit</h3>
            </div>
            <!-- /.box-header -->
            
            <form action="/addgiunit" method="post" class="form-horizontal">
              @csrf
                <div class="box-body">

                  

                      <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Name</label>
        
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3" placeholder="add gi unit" name="addgiunit" required>
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
        
                  <div class="box box-info">
                    <div class="box-header with-border">
                      <h3 class="box-title">Add BHT</h3>
                    </div>
                    <!-- /.box-header -->
                    
                    <form action="/addbht" method="post" class="form-horizontal">
                      @csrf
                        <div class="box-body">
        
                          
        
                              <div class="form-group">
                                  <label for="inputPassword3" class="col-sm-2 control-label">Name</label>
                
                                  <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword3" placeholder="Name" name="addbht" required>
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
        <!--/.col (right) -->
      </div>




      <div class="row">
          <!-- left column -->
          <div class="col-md-6">
  
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Add Proceeduret</h3>
              </div>
              <!-- /.box-header -->
              
              <form action="/addproceedure" method="post" class="form-horizontal">
                @csrf
                  <div class="box-body">
  
                    
  
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Name</label>
          
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputPassword3" placeholder="Name" name="addproceedure" required>
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
          
                    <div class="box box-info">
                      <div class="box-header with-border">
                        <h3 class="box-title">Add Operator</h3>
                      </div>
                      <!-- /.box-header -->
                      
                      <form action="/addoperator" method="post" class="form-horizontal">
                        @csrf
                          <div class="box-body">
          
                            
          
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Name</label>
                  
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="inputPassword3" placeholder="Name" name="addoperator" required>
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
          <!--/.col (right) -->
        </div>




        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
    
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Add Diagnosis</h3>
                </div>
                <!-- /.box-header -->
                
                <form action="/adddiagnosis" method="post" class="form-horizontal">
                  @csrf
                    <div class="box-body">
    
                      
    
                          <div class="form-group">
                              <label for="inputPassword3" class="col-sm-2 control-label">Name</label>
            
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword3" placeholder="Name" name="adddiagnosis" required>
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
            

            
                    </div>
            <!--/.col (right) -->
          </div>





          <div class="row">
              <!-- left column -->
              <div class="col-md-6">
      
                <div class="box box-info">
                  <div class="box-header with-border">
                    <h3 class="box-title">Add Complications</h3>
                  </div>
                  <!-- /.box-header -->
                  
                  <form action="/addcomplications" method="post" class="form-horizontal">
                    @csrf
                      <div class="box-body">
      
                        
      
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Name</label>
              
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="inputPassword3" placeholder="Name" name="addcomplication" required>
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
              
                        <div class="box box-info">
                          <div class="box-header with-border">
                            <h3 class="box-title">Add Complications Type</h3>
                          </div>
                          <!-- /.box-header -->
                          
                          <form action="/addcomplicationstype" method="post" class="form-horizontal">
                            @csrf
                              <div class="box-body">
              
                                
              
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-2 control-label">Name</label>
                      
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="inputPassword3" placeholder="Name" name="addcomplicationstype" required>
                                        </div>
                                      </div>addcomplicationstype
                      
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
              <!--/.col (right) -->
            </div>

            


            


      <!-- /.row -->
    </section>
<!-- /.content -->


@endsection
