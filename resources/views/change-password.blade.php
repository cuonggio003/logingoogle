@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    
                        <h1>Request password</h1>
                        <p class="text-muted"> Please enter your login and password!</p> 
                      
                      
                     
                        <form action="{{ route('change.password') }}" method="post">
                            @csrf
                            
                            <div class="input-group mb-3">
                                <input type="text" id="email" class="form-control" name="email"
                                    placeholder="Email">
                                <div class="input-group-append">
        
                                    <span class="input-group-btn" id="eyeSlash">
                                        <button class="btn btn-default reveal" onclick="visibility()" type="button"><i
                                                class="fa fa-eye-slash"></i></button>
                                    </span>
                                    <span class="input-group-btn" id="eyeShow" style="display: none;">
                                        <button class="btn btn-default reveal" onclick="visibility()" type="button"><i
                                                class="fa fa-eye"></i></button>
                                    </span>
        
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" id="currentPassword" class="form-control" name="currentPassword"
                                    placeholder="Password">
                                <div class="input-group-append">
        
                                    <span class="input-group-btn" id="eyeSlash">
                                        <button class="btn btn-default reveal" onclick="visibility()" type="button"><i
                                                class="fa fa-eye-slash"></i></button>
                                    </span>
                                    <span class="input-group-btn" id="eyeShow" style="display: none;">
                                        <button class="btn btn-default reveal" onclick="visibility()" type="button"><i
                                                class="fa fa-eye"></i></button>
                                    </span>
        
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" id="newPassword" class="form-control" name="newPassword"
                                    placeholder="newPassword">
                                <div class="input-group-append">
        
                                    <span class="input-group-btn" id="eyeSlash1">
                                        <button class="btn btn-default reveal" onclick="visibility1()" type="button"><i
                                                class="fa fa-eye-slash"></i></button>
                                    </span>
                                    <span class="input-group-btn" id="eyeShow1" style="display: none;">
                                        <button class="btn btn-default reveal" onclick="visibility1()" type="button"><i
                                                class="fa fa-eye"></i></button>
                                    </span>
        
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" id="confirmPassword" class="form-control" name="confirmPassword"
                                    placeholder="confirmPassword">
                                <div class="input-group-append">
        
                                    <span class="input-group-btn" id="eyeSlash2">
                                        <button class="btn btn-default reveal" onclick="visibility2()" type="button"><i
                                                class="fa fa-eye-slash"></i></button>
                                    </span>
                                    <span class="input-group-btn" id="eyeShow2" style="display: none;">
                                        <button class="btn btn-default reveal" onclick="visibility2()" type="button"><i
                                                class="fa fa-eye"></i></button>
                                    </span>
        
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block">Change</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
        
        
                    </div>
                    <!-- /.login-card-body -->
                </div>
            </div>
            <!-- /.login-box -->
        
            <!-- jQuery -->
             <script src="{{ asset('js/plugins/jquery/jquery.min.js') }}"></script>
            <!-- Bootstrap 4 -->
            <script src="{{ asset('js/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
            <!-- AdminLTE App -->
            <script src="{{ asset('js/adminlte.min.js') }}"></script>
         
            <script>
                function visibility() {
                    var x = document.getElementById('currentPassword');
                    if (x.type === 'password') {
                        x.type = "text";
                        $('#eyeShow').show();
                        $('#eyeSlash').hide();
                    } else {
                        x.type = "password";
                        $('#eyeShow').hide();
                        $('#eyeSlash').show();
                    }
                }
            </script>
        
        
            <script>
                function visibility1() {
                    var x = document.getElementById('newPassword');
                    if (x.type === 'password') {
                        x.type = "text";
                        $('#eyeShow1').show();
                        $('#eyeSlash1').hide();
                    } else {
                        x.type = "password";
                        $('#eyeShow1').hide();
                        $('#eyeSlash1').show();
                    }
                }
            </script>
        
        
            <script>
                function visibility2() {
                    var x = document.getElementById('confirmPassword');
                    if (x.type === 'password') {
                        x.type = "text";
                        $('#eyeShow2').show();
                        $('#eyeSlash2').hide();
                    } else {
                        x.type = "password";
                        $('#eyeShow2').hide();
                        $('#eyeSlash2').show();
                    }
                }
            </script>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection