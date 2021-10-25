<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>


<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <form action="{{ url('/store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="container">
            <div class="form-group">
                <label for="Name">Your Name</label>
                <input name='name' type="text" class="form-control" id="Name" aria-describedby="emailHelp"
                    placeholder="ex: Emad Naeim">

            </div>
            <div class="form-group">
                <label for="Email">Your Email</label>
                <input name='email' type="email" class="form-control" id="Email" placeholder="ex: emad@gmail.com">
            </div>


            <div class="form-group">
                <label for="password">Your Password</label>
                <input name='password' type="password" class="form-control" id="password" placeholder="ex: 123456789">
            </div>

            <div class="form-group">
                <label for="Address">Your Address</label>
                <input name='address' type="text" class="form-control" id="Address" placeholder="ex: 2 souq street">
            </div>

            <div class="form-group">
                <input type="radio" id="male" name="gender" value="male">
                <label for="html">Male</label><br>
                <input type="radio" id="female" name="gender" value="female">
                <label for="css">Female</label><br>
            </div>

            <div class="form-group">
                <label for="link">Your LinkedIn URL</label>
                <input name='link' type="url" class="form-control" id="link" placeholder="ex: linkedin/profile/123">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>



        </div>




        </div>

    </form>
</body>

</html>