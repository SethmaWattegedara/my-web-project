<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>report</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<br>
<br>
<br>
<div class="container">


</div>
<div role="group" aria-label="Basic example"  class="btn btn-dark">
    <a href="{{ route('events.index')}}"><button class="btn btn-dark">Events</button></a>
    <a href="{{ route('menus.index')}}"><button class="btn btn-dark">Menus</button></a>
    <a href="/eitems"><button class="btn btn-dark">Event Items</button></a>
    <a href="/estaff"><button class="btn btn-dark">Manage Staff</button></a>
    <a href="/ereport"><button  class="btn btn-dark">Report</button></a>

</div>




<!--MAIN SECTION-->


<div class="row">
    <div class="col-sm-12">
        <br>
        <br>
        <br>
        <br>
        <center><h2>Event Management Report</h2></center>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            <br />
        @endif
        <form method="post" action="{{ route('ereport.update', $eventreport->id) }}">
            @method('PATCH')
            @csrf
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col" colspan="4" style="color:blue;">Event Information</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Customer name</td>
                    <td><input type="text" name="customer_name" value={{ $eventreport->customer_name }}> </td>
                    <td>Event date</td>
                    <td><input type="text" name="event_date" value={{ $eventreport->event_date }}> </td>
                <tr>
                    <td>Event time</td>
                    <td><input type="text" name="event_time" value={{ $eventreport->event_time }}> </td>
                    <td>Event Manager</td>
                    <td><input type="text" name="event_manager" value={{ $eventreport->event_manager }}> </td>
                </tr>
                </tr>
                <tr>

                    <td>Estimated No. of Attendence of guest for the Event </td>
                    <td><input type="text" name="attendence" value={{ $eventreport->attendence }} > </td>
                    <td>Proposed Registration cost for a each person</td>
                    <td><input type="text" name="cost" value={{ $eventreport->cost }} > </td>

                </tr>
                <tr>
                    <th colspan="4" style="color:blue;" >Budget Information</th>
                </tr>
                <tr>

                    <td colspan="2">Actual  Expence</td>
                    <td><input type="text" name="etotal" value={{ $eventreport->etotal }}> </td>
                    <td></td>
                </tr>

                <tr>
                    <td colspan="2">Budget Expence</td>
                    <td><input type="text" name="btotal"  value={{ $eventreport->btotal }}> </td>
                    <td></td>

                </tr>

                </tbody>

            </table>
            <input type="submit" value="Update" name="" class="btn btn-success"/>
            <div class="col-md-5" align="right">
                <a href="{{url('ereport/pdf')}}" class="btn btn-danger">Conver into PDF</a>

            </div>
        </form>

    </div>
    <!--MAIN SECTION-->


</div>
<script src="{{ asset('js/app.js') }}" type="text/js"></script>
</div>
<br>

</body>
</html>

