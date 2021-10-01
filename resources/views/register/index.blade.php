@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-register">
        <h1 class="h3 mb-3 fw-normal text-center">Register Form</h1>
          <form>
            <div class="form-floating">
              <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="name">
              <label for="name">Name</label>
            </div>
            <div class="form-floating">
              <input type="username" name="username" class="form-control" id="username" placeholder="username">
              <label for="Username">Username</label>
            </div>
            <div class="form-floating">
              <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
              <label for="email">Email address</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control rounded-bottom" id="password" placeholder="Password">
              <label for="password">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
          </form>
          <small class="d-block text-center mt-3">Already registered? <a href="/login">Login now!</a></small>
        </main>
    </div>
</div>
@endsection