<!DOCTYPE html>
<html>
<head>
    <title>ItsolutionStuff.com</title>
</head>
<body>
    <div class="kt-portlet__body">

        <!--begin: Datatable -->
        <h3>Daily Report</h3>
        <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
            <thead>
                <tr>
                   
                    <th>User Name</th>
                    <th>Quiz Nmae</th>
                    <th>Correct Answer</th>
                    <th>Incorrect Answer</th>
                    <th>Percentage %</th>
                 
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($results as $result)
               {{-- {{ddd( $result);}} --}}
            
                <tr>
                    <td>{{$result['user_name']}}</td>
                    <td>{{$result['quiz_name']}}</td>
                    <td>{{$result['correct']}}</td>
                    <td>{{$result['in_correct']}}</td>
                    <td>{{$result['percentage']}}</td>
             
                    
                    {{-- <td><a href="{{route('view-client',[$client->id])}}" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">                          <i class="la la-edit"></i>                        </a></td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>

        <!--end: Datatable -->
    </div>
</body>
</html>