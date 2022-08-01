<?php
/**
 * Created by PhpStorm for itreg
 * User: Vincent Guyo
 * Date: 6/17/2020
 * Time: 5:07 AM
 */

?>
@extends('layouts.app')

@section('template_title')
    Desktop Info
@endsection

@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Desktops</h4>
                        <span>Desktop Details</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{url('/home')}}"> <i class="feather icon-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{url('/desktops')}}">Desktops</a></li>
                        <li class="breadcrumb-item"><a href="#!">Desktop Info</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->

    <!-- Page-body start -->
    <div class="page-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card product-detail-page">
                    <div class="card-header">
                        <h5>{{$desktop->assettag}} Details</h5>
                        <span>Desktop assigned to {{$yuser->first_name}} {{$yuser->last_name}}</span>
                        <div class="card-header-right">
                            <a href="{{ url('/desktops') }}" class="btn btn-round btn-light float-right">
                                <i class="feather icon-chevrons-left" aria-hidden="true"></i>
                                Back to Desktops
                            </a>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="card-block">
                            <div class="row">
                                <div class="col-lg-12 col-xs-12 product-detail" id="product-detail">
                                    <div class="col-lg-12">
                                        <span class="txt-muted d-inline-block">Desktop Asset Tag: <strong>{{$desktop->assettag}}</strong> </span>
                                        <span class="f-right">Asset Age : {{$asset->age}} </span>
                                    </div>
                                    <div class="col-lg-12">
                                        <h4 class="pro-desc">{{$asset->model}}</h4>
                                    </div>
                                    <div class="col-lg-12">
                                        <table>
                                            <tr>
                                                <td>Assigned to :</td>
                                                <td><strong>{{$yuser->first_name}} {{$yuser->last_name}}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Serial Number :</td>
                                                <td><strong>{{$asset->serial}}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>RAM :</td>
                                                <td><strong>{{$desktop->ram}}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Hard drive :</td>
                                                <td><strong>{{$desktop->hdd}}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Antivirus :</td>
                                                <td><strong>{{$desktop->antivirus}}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Operating System :</td>
                                                <td><strong>{{$desktop->os}}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Office :</td>
                                                <td><strong>{{$desktop->office}}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Purchased On :</td>
                                                <td><strong>{{$asset->purchased}}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Warranty :</td>
                                                <td><strong>{{$asset->warranty}}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Added On :</td>
                                                <td><strong>{{$asset->created_at}}</strong></td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="col-lg-12">
                                        <hr>
                                        <h6 class="f-16 f-w-600 m-t-10 m-b-10">Additional Info</h6>
                                        <p>{{$asset->notes}}</p>
                                        <hr>
                                        <table>
                                            @if($desktop->has_monitor)
                                            <tr>
                                                <td>Has Monitor :</td>
                                                <td><strong>Yes </strong></td>
                                            </tr>
                                            <tr>
                                                <td>Monitor :</td>
                                                <td><strong>{{$desktop->monitor_name}}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Monitor Serial Number :</td>
                                                <td><strong>{{$desktop->monitor_serial}}</strong></td>
                                            </tr>
                                            @endif
                                                @if($desktop->has_keyboard)
                                            <tr>
                                                <td>Has Keyboard :</td>
                                                <td><strong>Yes</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Keyboard :</td>
                                                <td><strong>{{$desktop->keyboard_name}}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Keyboard Serial Number :</td>
                                                <td><strong>{{$desktop->keyboard_serial}}</strong></td>
                                            </tr>
                                                @endif
                                                @if($desktop->has_mouse)
                                            <tr>
                                                <td>Has Mouse :</td>
                                                <td><strong>Yes</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Mouse :</td>
                                                <td><strong>{{$desktop->mouse_name}}</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Mouse Serial Number:</td>
                                                <td><strong>{{$desktop->mouse_serial}}</strong></td>
                                            </tr>
                                                    @endif
                                        </table>
                                        <hr>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    @include('modals.modal-delete')

@endsection

@section('footer_scripts')

@endsection
