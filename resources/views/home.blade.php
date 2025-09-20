@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3><i class="fa fa-dashboard"></i> EA Expense Manager Dashboard</h3>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-info">
                                <h4><i class="icon fa fa-info"></i> Welcome to EA Expense Manager!</h4>
                                <p>Professional financial management system developed by <strong>EA Soft Lab</strong> - A sister concern of EA Inc.</p>
                                <p>Track your expenses, manage income, and generate comprehensive financial reports with our multi-currency support system.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info-box">
                                <span class="info-box-icon bg-green"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Income Tracking</span>
                                    <span class="info-box-number">Multi-source</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info-box">
                                <span class="info-box-icon bg-red"><i class="fa fa-arrow-circle-left"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Expense Management</span>
                                    <span class="info-box-number">Categorized</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info-box">
                                <span class="info-box-icon bg-blue"><i class="fa fa-line-chart"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Financial Reports</span>
                                    <span class="info-box-number">Analytics</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Quick Actions</h3>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a href="{{ route('admin.expenses.create') }}" class="btn btn-primary btn-block">
                                                <i class="fa fa-plus"></i> Add Expense
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="{{ route('admin.incomes.create') }}" class="btn btn-success btn-block">
                                                <i class="fa fa-plus"></i> Add Income
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="{{ route('admin.monthly_reports.index') }}" class="btn btn-info btn-block">
                                                <i class="fa fa-chart-line"></i> View Reports
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="{{ route('admin.currencies.index') }}" class="btn btn-warning btn-block">
                                                <i class="fa fa-gear"></i> Manage Currencies
                                            </a>
                                        </div>
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
