@extends('layouts.main')
@section('content')
    <br><br><br>

    <h1 align="center">Create Page</h1>
    <!-- Default form register -->

    <div class="container" style="width: 40%">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif
        <form class="text-center border border-light p-5" action="{{ route('store') }}" method="POST">
            {{ csrf_field() }}
            <p class="h4 mb-4">Add Student</p>

            <div class="form-row mb-4">
                <div class="col">
                    <!-- First name -->
                    <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name" name="firstname">
                </div>
                <div class="col">
                    <!-- Last name -->
                    <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name" name="lastname">
                </div>
            </div>

            <!-- E-mail -->
            <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" name="email">

            <!-- Password -->
{{--            <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">--}}
{{--            <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">--}}
{{--                At least 8 characters and 1 digit--}}
{{--            </small>--}}

            <!-- Phone number -->
            <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock" name="phone">
{{--            <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">--}}
{{--                Optional - for two step authentication--}}
{{--            </small>--}}

            <!-- Newsletter -->
{{--            <div class="custom-control custom-checkbox">--}}
{{--                <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">--}}
{{--                <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our newsletter</label>--}}
{{--            </div>--}}

            <!-- Sign up button -->
            <button class="btn btn-info my-4 btn-block" type="submit">Add Data</button>

            <!-- Social register -->
{{--            <p>or sign up with:</p>--}}

{{--            <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>--}}
{{--            <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>--}}
{{--            <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>--}}
{{--            <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>--}}

            <hr>

            <!-- Terms of service -->
{{--            <p>By clicking--}}
{{--                <em>Sign up</em> you agree to our--}}
{{--                <a href="" target="#">terms of service</a>--}}

        </form>
        <!-- Default form register -->
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection
