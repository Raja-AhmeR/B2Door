@extends('admin-layout.admin-main')
@section('admin-section')
    <!-- ======= Register Section ======= -->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Register Distributor</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item">Register Distributor</li>
                    {{-- <li class="breadcrumb-item active">Completed Distributors</li> --}}
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Register Distributor</h5>
                                <p>Register new distributor here.</p>


                                <div class="form">
                                    <form action="#" method="post" role="form" class="php-email-form">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="text" name="name" class="form-control" id="name"
                                                    placeholder="Full Name" required>
                                            </div>
                                            <div class="form-group col-md-6 mt-3 mt-md-0">
                                                <input type="email" class="form-control" name="email" id="email"
                                                    placeholder="Email" required>
                                            </div>
                                        </div>
                                        {{-- <br> --}}
                                        <div class="row mt-3">
                                            <div class="form-group col-md-6">
                                                <input type="text" name="contactNumber" class="form-control" id="contactNumber"
                                                    placeholder="Contact Number" required>
                                            </div>
                                            <div class="form-group col-md-6 mt-3 mt-md-0">
                                                <input type="text" class="form-control" name="city" id="city"
                                                    placeholder="City" required>
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <input type="text" class="form-control" name="address" id="address"
                                                placeholder="Address" required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <input type="text" class="form-control" name="acNumber" id="acNumber"
                                                placeholder="Account Number" required>
                                        </div>
                                        {{-- <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div> --}}
                                        <div class="text-center mt-3"><button class="btn btn-primary"
                                                type="submit">Register Distributor</button></div>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
