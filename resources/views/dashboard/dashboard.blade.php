@extends('layouts.app')

@section('style')
<!-- Add any additional stylesheets needed for your dashboard -->
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- /.col-lg-6 -->

                <div class="col-lg-12">
                    <!-- New card for Expense Bar Chart -->
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Monthly Expenses</h3>
                               
                            </div>
                        </div>
                        <div class="card-body">
                          <div class="position-relative mb-4">
                            <table class="table table-sm table-striped table-hover">
                              <thead>
                                <tr class="table-primary text-center">
                                  <th>#</th>
                                  <th>Name</th>
                                  <th>Amount</th>
                                  <th>Date</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($monthlyExpenses as $value)
                                <tr>
                                  <td>{{$value->id}}</td>
                                  <td>{{$value->detail}}</td>
                                  <td>{{$value->amount}}</td>
                                  <td>{{$value->date}}</td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                        
                        <!-- Custom CSS -->
                        <style>
                          .table {
                            border-collapse: separate;
                            border-spacing: 0 10px;
                          }
                        
                          .table th,
                          .table td {
                            border: none;
                            vertical-align: middle;
                          }
                        
                          .table thead tr {
                            background-color: #007bff;
                            color: #fff;
                            border-radius: 8px;
                          }
                        
                          .table thead th {
                            font-size: 1.1rem;
                            padding: 15px;
                            border-bottom: 2px solid #007bff;
                          }
                        
                          .table tbody tr {
                            background-color: #f8f9fa;
                            transition: background-color 0.3s;
                            border-radius: 8px;
                            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                          }
                        
                          .table tbody tr:hover {
                            background-color: #e9ecef;
                          }
                        
                          .table td {
                            font-size: 0.9rem;
                            padding: 12px;
                            text-align: center;
                          }
                        
                          .table-striped tbody tr:nth-of-type(odd) {
                            background-color: #f2f2f2;
                          }
                        
                          .table-hover tbody tr:hover {
                            background-color: #dcdcdc;
                          }
                        
                          .card-body {
                            background-color: #ffffff;
                            padding: 20px;
                            border-radius: 12px;
                            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
                            margin: 20px;
                          }
                        
                          .position-relative {
                            position: relative;
                          }
                        
                          .mb-4 {
                            margin-bottom: 1.5rem;
                          }
                        </style>
                        
                          
                    </div>
                    <!-- /.card -->

                    <!-- Existing card for Online Store Overview -->
              
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Function to fetch data from server
        function fetchData() {
            return fetch('/api/monthly-expenses') // Replace with your Laravel API endpoint
                .then(response => response.json())
                .then(data => data)
                .catch(error => console.error('Error fetching data:', error));
        }

        // Function to process data and update chart
        async function updateChart() {
            try {
                const data = await fetchData();

                // Extracting labels and data from fetched data
                const labels = data.map(item => item.month);
                const expenseData = data.map(item => item.total_expense);

                // Expenses Chart
                let ctxExpenses = document.getElementById('expenses-chart').getContext('2d');
                let expensesChart = new Chart(ctxExpenses, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Monthly Expenses',
                            data: expenseData,
                            backgroundColor: '#007bff', // Example color
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {
                            display: false,
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true,
                                    callback: function(value) { return '$' + value; }
                                }
                            }]
                        },
                        title: {
                            display: true,
                            text: 'Monthly Expenses Overview'
                        }
                    }
                });
            } catch (error) {
                console.error('Error updating chart:', error);
            }
        }

        // Initial load of chart
        updateChart();
    });
</script>
@endsection
