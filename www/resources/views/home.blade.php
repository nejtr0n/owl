@extends('layouts.admin')

@section('data')
    <h1>Reports list</h1>
    <div class="table-responsive">
    <table class="table table-responsive w-100 d-block d-md-table">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">User Name</th>
            <th scope="col">Report type</th>
            <th scope="col">Sensor sum</th>
            <th scope="col">Address</th>
            <th scope="col">Country</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Attr 8</th>
            <th scope="col">Attr 9</th>
            <th scope="col">Attr 10</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reports->items() as $report)
            <tr>
                <td>{{ $report->name }}</td>
                <td><b>{{ $report->user_name }}</b></td>
                <td><b>{{ $report->report_type_name }}</b></td>
                <td><b>{{ $report->sensor_log_sum }}</b></td>
                <td>{{ $report->address }}</td>
                <td>{{ $report->country }}</td>
                <td>{{ $report->phone_number }}</td>
                <td>{{ $report->attr_8 }}</td>
                <td>{{ $report->attr_9 }}</td>
                <td>{{ $report->attr_10 }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    {{ $reports->links() }}
@endsection
