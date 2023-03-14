@extends('layouts.app')

@section('content')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Welcome to Decision Support System :)</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            This system can help someone to make decisions using Simple Additive Weighting Algorithm.
                            <br> How to use:
                            <ol>
                                <li>Go to the Criteria & Weight menu to add decision criteria and its weight (the
                                    importance of criteria).</li>
                                <li>Then go to the Criteria Rating menu to give rating option for each criterion.</li>
                                <li>Use the Alternative menu to add alternative (candidate) and its rating.</li>
                                <li>Check the Rank menu to view the result, click the Total column on the table to sort
                                    it by its total value.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
