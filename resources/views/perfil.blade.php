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
              <!-- exames -->
              <div class="row gutters-sm">
              <div class="col-lg mb-3 mt-3">
                  <div class="card">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Lista de exames</h6>
                      <!-- Adcionar link que acessa -->
                        @foreach($exames as $exame)
                        <a href="{{ route('getImage') }}"><p>{{ $exame->nome }}</p></a>
                        @endforeach
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
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ Auth::user()->email }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ Auth::user()->telefone }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ Auth::user()->endereco }}
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
                        <a href="{{ route('edit') }}"> <input type="submit" value="Edit" class="btn btn-lg btn-success" style="background-color: #036F52; border: #036F52;"></a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- status do exame -->
              <div class="row gutters-sm">
                <div class="col-lg mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Exames Status</h6>
                      <small>Web Design</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
            </div>
        </div>
    </div>
@endsection
