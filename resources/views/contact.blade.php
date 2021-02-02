<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prod_styl.css') }}">
</head>

<body>
    <div class="container mt-5">

        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

        <form action="" method="put" action="{{ route('contact.store') }}">

    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <div class="row">
        <div class="column form-group">
            <label>Project Number</label>
            <input type="text" class="form-control {{ $errors->has('pro_no') ? 'error' : '' }}" name="pro_no" id="pro_no">

            <!-- Error -->
            @if ($errors->has('pro_no'))
            <div class="error">
                {{ $errors->first('pro_no') }}
            </div>
            @endif
        </div>    
    
        <div class="column form-group">
            <label>Project Name</label>
            <input type="text" class="form-control {{ $errors->has('pro_na') ? 'error' : '' }}" name="pro_na" id="pro_na">

            @if ($errors->has('pro_na'))
            <div class="error">
                {{ $errors->first('pro_na') }}
            </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="column form-group">
            <label>Project Lead</label>
            <input type="text" class="form-control {{ $errors->has('pro_le') ? 'error' : '' }}" name="pro_le" id="pro_le">

            @if ($errors->has('pro_le'))
            <div class="error">
                {{ $errors->first('pro_le') }}
            </div>
            @endif
        </div>

        <div class="column form-group">
            <label>Status</label>
            <input type="text" class="form-control {{ $errors->has('stat') ? 'error' : '' }}" name="stat"
                id="stat">

            @if ($errors->has('stat'))
            <div class="error">
                {{ $errors->first('stat') }}
            </div>
            @endif
        </div>
    </div>
    <div class="row">
    <div class="column form-group">
        <label>Price</label>
        <input type="text" class="form-control {{ $errors->has('price') ? 'error' : '' }}" name="price"
                id="price">
        

        @if ($errors->has('price'))
        <div class="error">
            {{ $errors->first('price') }}
        </div>
        @endif
    </div>
    </div>
    <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
</form>
    </div>
</body>

</html>