@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                <!--
                    |
                    | Se o id==0 => que non está na taboa do seu rol, polo que amosamos o formulario de reg
                    |{{$id}}{{Auth::User()->rol}}
                -->
                @if($id===0)
                    <div class="panel-heading">Complete Register</div>

                    <div class="panel-body">
                    <!--
                    |
                    | Se o rol é Empregado, completar formulario Empregado
                    |
                    -->
                    @if(Auth::User()->rol == 'Empregado')
                    <h6>You are an Employee</h6>
                        <form class="form-horizontal" method="POST" action="{{ route('empregado') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('NIF') ? ' has-error' : '' }}">
                                <label for="NIF" class="col-md-4 control-label">NIF</label>

                                <div class="col-md-6">
                                    <input id="NIF" type="text" class="form-control" name="NIF" required>

                                    @if ($errors->has('NIF'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('NIF') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ Auth::User()->name }}" required autofocus>

                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('apelido1') ? ' has-error' : '' }}">
                                <label for="apelido1" class="col-md-4 control-label">Surname 1</label>

                                <div class="col-md-6">
                                    <input id="apelido1" type="text" class="form-control" name="apelido1" value="{{ old('apelido1') }}" required>

                                    @if ($errors->has('apelido1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apelido1') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('apelido2') ? ' has-error' : '' }}">
                                <label for="apelido2" class="col-md-4 control-label">Surname 2</label>

                                <div class="col-md-6">
                                    <input id="apelido2" type="text" class="form-control" name="apelido2" required>

                                    @if ($errors->has('apelido2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apelido2') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                                <label for="direccion" class="col-md-4 control-label">Address</label>

                                <div class="col-md-6">
                                    <input id="direccion" type="text" class="form-control" name="direccion" required>

                                    @if ($errors->has('direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                                <label for="telefono" class="col-md-4 control-label">Telephone</label>

                                <div class="col-md-6">
                                    <input id="telefono" type="tel" class="form-control" name="telefono" required>

                                    @if ($errors->has('telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <input id="rol" type="hidden" value="{{ Auth::User()->rol }}" name="rol">

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>

                        </form>
                        @endif
                        <!--
                        |
                        | Se o rol é Familiar, completar formulario Familiar
                        |
                        -->
                        @if(Auth::User()->rol == 'Familiar')
                        <h6>You are a Relative</h6>
                        <form class="form-horizontal" method="POST" action="{{ route('familiar') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('NIF') ? ' has-error' : '' }}">
                                <label for="NIF" class="col-md-4 control-label">NIF</label>

                                <div class="col-md-6">
                                    <input id="NIF" type="text" class="form-control" name="NIF" required>

                                    @if ($errors->has('NIF'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('NIF') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ Auth::User()->name }}" required autofocus>

                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('apelido1') ? ' has-error' : '' }}">
                                <label for="apelido1" class="col-md-4 control-label">Surname 1</label>

                                <div class="col-md-6">
                                    <input id="apelido1" type="text" class="form-control" name="apelido1" value="{{ old('apelido1') }}" required>

                                    @if ($errors->has('apelido1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apelido1') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('apelido2') ? ' has-error' : '' }}">
                                <label for="apelido2" class="col-md-4 control-label">Surname 2</label>

                                <div class="col-md-6">
                                    <input id="apelido2" type="text" class="form-control" name="apelido2" required>

                                    @if ($errors->has('apelido2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apelido2') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                                <label for="direccion" class="col-md-4 control-label">Address</label>

                                <div class="col-md-6">
                                    <input id="direccion" type="text" class="form-control" name="direccion" required>

                                    @if ($errors->has('direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                                <label for="telefono" class="col-md-4 control-label">Telephone</label>

                                <div class="col-md-6">
                                    <input id="telefono" type="tel" class="form-control" name="telefono" required>

                                    @if ($errors->has('telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('CCC') ? ' has-error' : '' }}">
                                <label for="CCC" class="col-md-4 control-label">CCC</label>

                                <div class="col-md-6"> <!-- Facer validación e formato-->
                                    <input id="CCC" type="text" class="form-control" name="CCC" required>

                                    @if ($errors->has('CCC'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('CCC') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <input id="rol" type="hidden" value="{{ Auth::User()->rol }}" name="rol">

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>

                        </form>
                        @endif
                        <!--
                        |
                        | Se o rol é Empresa, completar formulario Empresa
                        |
                        -->
                        @if(Auth::User()->rol == 'Empresa')
                        <h6>You are a Company</h6>
                        <form class="form-horizontal" method="POST" action="{{ route('empresa') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('CIF') ? ' has-error' : '' }}">
                                <label for="CIF" class="col-md-4 control-label">CIF</label>

                                <div class="col-md-6">
                                    <input id="CIF" type="text" class="form-control" name="CIF" required>

                                    @if ($errors->has('CIF'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('CIF') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ Auth::User()->name }}" required autofocus>

                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('nomeContacto') ? ' has-error' : '' }}">
                                <label for="nomeContacto" class="col-md-4 control-label">Contact Name</label>

                                <div class="col-md-6">
                                    <input id="nomeContacto" type="text" class="form-control" name="nomeContacto" value="{{ old('nomeContacto') }}" required>

                                    @if ($errors->has('nomeContacto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nomeContacto') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                                <label for="direccion" class="col-md-4 control-label">Address</label>

                                <div class="col-md-6">
                                    <input id="direccion" type="text" class="form-control" name="direccion" required>

                                    @if ($errors->has('direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                                <label for="telefono" class="col-md-4 control-label">Telephone</label>

                                <div class="col-md-6">
                                    <input id="telefono" type="tel" class="form-control" name="telefono" required>

                                    @if ($errors->has('telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('lat') ? ' has-error' : '' }}">
                                <label for="lat" class="col-md-4 control-label">Latitude</label>

                                <div class="col-md-6">
                                    <input id="lat" type="text" class="form-control" name="lat" required>

                                    @if ($errors->has('lat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lat') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('long') ? ' has-error' : '' }}">
                                <label for="long" class="col-md-4 control-label">Longitude</label>

                                <div class="col-md-6">
                                    <input id="long" type="text" class="form-control" name="long" required>

                                    @if ($errors->has('long'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('long') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <input id="rol" type="hidden" value="{{ Auth::User()->rol }}" name="rol">

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>

                        </form>
                        @endif

                    </div>
                @endif
                
                </div>
                <!--
                |
                |   Poñelo bonito para recibir Usuarios com rexistro completo, poñer links e botons exclusivos para eles
                |
                -->
                @if($id!=0)
                    <h3>Wel Come {{ Auth::User()->rol }}s, <strong><em>{{ Auth::User()->name }}</em></strong></h3>

                    @if(Auth::User()->rol == 'Empregado')
                        <div class="panel-heading">What to do</div>
                        <div class="panel-body">
                            <div class="panel-body">
                                <button class="btn btn-primary" >See Profile</button>
                                <button class="btn btn-primary" >Delete Profile</button>
                                <button class="btn btn-primary" >Edit Profile</button>
                            </div>
                            <div class="panel-body">
                                <button class="btn btn-primary" >List All Your Treatments</button>
                                <button class="btn btn-primary" >List Treatments by User</button>
                                <button class="btn btn-primary" >List Users</button>
                            </div>
                        </div>
                    @endif

                    @if(Auth::User()->rol == 'Familiar')
                        <div class="panel-heading">What to do</div>
                        <div class="panel-body">
                            <div class="panel-body">
                                <button class="btn btn-primary" >Add Relative</button>
                                <button class="btn btn-primary" >Delete Relative</button>
                                <button class="btn btn-primary" >Edit Relative</button>
                                <button class="btn btn-primary" >List Relatives</button>
                                <button class="btn btn-primary" >List Your Relative's Treatments</button>
                            </div>
                            <div class="panel-body">
                                <button class="btn btn-primary" >Edit Profile</button>
                                <button class="btn btn-primary" >Delete Profile</button>
                            </div>
                            <div class="panel-body">
                                <button class="btn btn-primary" >List Treatments</button>
                                <button class="btn btn-primary" >Ask for Treatment</button>
                            </div>
                        </div>
                    @endif

                    @if(Auth::User()->rol == 'Empresa')
                        <div class="panel-heading">What to do</div>
                        <div class="panel-body"> 
                            <div class="panel-heading col-md-10">Employees</div>
                            <div class="panel-body col-md-10"> 
                                <button class="btn btn-primary col-md-6" >Add Employee</button>
                                <button class="btn btn-primary col-md-6" >Delete Employee</button>
                                <button class="btn btn-primary col-md-6" >List Your Employee</button>
                            </div>
                            <div class="panel-heading col-md-10">Profile</div>
                            <div class="panel-body col-md-10"> 
                                <button class="btn btn-primary col-md-6" >See Profile</button>
                                <button class="btn btn-primary col-md-6" >Edit Profile</button>
                                <button class="btn btn-primary col-md-6" >Delete Profile</button>
                            </div>
                            <div class="panel-heading col-md-10">Services</div>
                            <div class="panel-body col-md-10"> 
                                <button class="btn btn-primary col-md-6" >Add Service</button>
                                <button class="btn btn-primary col-md-6" >List All Services</button>
                                <button class="btn btn-primary col-md-6" >List Your Services</button>
                            </div>
                            <div class="panel-heading col-md-10">Treatments</div>
                            <div class="panel-body col-md-10"> 
                                <button class="btn btn-primary col-md-6" >Add Treatment</button>
                                <button class="btn btn-primary col-md-6" >Edit Treatment</button>
                                <button class="btn btn-primary col-md-6" >Delete Treatment</button>
                                <button class="btn btn-primary col-md-6" >List Your Treatments</button>
                                <button class="btn btn-primary col-md-6" >List Treatments by User</button>
                                <button class="btn btn-primary col-md-6" >List Treatments by Employee</button>
                                <button class="btn btn-primary col-md-6" >List Treatments by Service</button>
                            </div>
                        </div>
                    @endif
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
