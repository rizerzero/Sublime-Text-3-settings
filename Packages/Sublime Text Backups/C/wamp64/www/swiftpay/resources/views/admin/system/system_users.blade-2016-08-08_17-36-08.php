@extends('admin.layouts.layout')

@section('title', 'Page Title')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>
                    System Users
                    <small>
                        system users management
                    </small>
                </h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2> Listing</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="example" class="table table-striped responsive-utilities jambo_table">
                            <thead>
                                <tr class="headings">
                                     
                                    <th>Fullname </th>
                                    <th>Email Address </th>
                                    <th>phone</th>
                                    <th>address </th>
                                    <th>Status </th>
                                    <th class=" no-link last"><span class="nobr">Action</span>
                                    </th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            @<?php foreach ($allUsers as $user): ?>
                                <tr class="even pointer">
                                    <td class=" ">{{$user->name}}</td>
                                    <td class=" ">{{$user->email}}</td>
                                    <td class=" ">{{$user->phone}}</td>
                                    <td class=" ">{{$user->address}}</td>
                                    <td class=" ">{{$user->state}} <i class="success fa fa-long-arrow-up"></i>
                                    <td class=" ">Active</td>
                                    </td>
                            <?php endforeach ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <br />
            <br />
            <br />

        </div>
    </div>
    <!-- footer content -->
    @include('admin.layouts.footer')
    <!-- /footer content -->

</div>
<!-- /page content -->

@endsection