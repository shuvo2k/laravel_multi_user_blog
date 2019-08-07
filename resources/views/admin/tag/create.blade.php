@extends('layouts.backend.app')

@section('title', 'Tag')

@push('css')
@endpush


@section('content')
    <div class="container-fluid">



        <!-- #END# Vertical Layout -->
        <!-- Vertical Layout | With Floating Label -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            ADD NEW TAG

                        </h2>

                    </div>
                    <div class="body">
                        <form>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="email_address" class="form-control">
                                    <label class="form-label">Email Address</label>
                                </div>
                            </div>

                           <br>
                            <button type="button" class="btn btn-primary m-t-15 waves-effect">LOGIN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Vertical Layout | With Floating Label -->

    </div>
@endsection


@push('js')
    @endpush