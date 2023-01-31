@extends('layouts.app')

@section('content')
<div class="container">
    <div class="main-body">

          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <!-- card foto -->
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{ Auth::user()->foto }}" alt="{{ Auth::user()->name . '_pfp'}}" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{ strstr(Auth::user()->name, ' ', true) }}</h4>
                      <p class="text-secondary mb-1">Paciente</p>
                      <p class="text-muted font-size-sm">{{ Auth::user()->cidade }}</p>
                      <p>
                        <div class="">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- informações -->
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ Auth::user()->name }}
                    </div>
                  </div>
                  <hr>
                  <form action="{{ route('update') }}" method="POST">
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" name="email" class="form-control"  placeholder="Email">
                        </div>
                    </div>
                    <hr>
                  @csrf
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Phone</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" name="telefone" class="form-control" placeholder="Phone">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" name="endereco" class="form-control" placeholder="Address">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">CPF</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ Auth::user()->cpf }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="{{ route('update') }}"> <input type="submit" value="Salvar Alterações" class="btn btn-lg btn-success" style="background-color: #036F52; border: #036F52;"></a>
                        </div>
                    </div>
                  </form>
                </div>
              </div>

          </div>
            </div>
        </div>
    </div>
@endsection
