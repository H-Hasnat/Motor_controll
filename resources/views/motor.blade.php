{{--


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5/1/5K1U5B4m4b5yABBlgVD4Iq6VVcWVm1bXg4K3" crossorigin="anonymous"></script>
<!-- Axios -->
 <script src="https://cdn.jsdelivr.net/npm/axios@1.3.3/dist/axios.min.js"></script>

<script src="motor.js"></script>

</head>
<body>

    <h2>Motor Speed Control</h2>
{{-- <label for="motorSpeed">Motor Speed: <span id="speedValue">50</span></label> --}}
{{-- <input type="range" id="speed" name="speed" min="0" max="255" value="0"  oninput="Submit(this.value)"> --}}

     {{-- <div>
        @csrf
        <label for="speed">Set Motor Speed (0-100):</label>
        <input type="number" id="speed" name="speed">
        <button type="submit" onclick="Submit()">Submit</button>


    </div>

</body>
</html>  --}}



{{-- main code  --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Motor Speed Control</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5/1/5K1U5B4m4b5yABBlgVD4Iq6VVcWVm1bXg4K3" crossorigin="anonymous"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios@1.3.3/dist/axios.min.js"></script>

    <script src="motor.js"></script>

</head>






<body class="bg-light">


    <div class="container  p-4 my-5">




        <div class="text-center">
            <button class="btn btn-primary me-2" onclick="Off()">OFF</button>
            <button class="btn btn-danger" id="disconnected">Disconnected</button>
        </div>


    </div>


    <div class="card text-center mx-auto" style="width: 24rem; p-5">

            <div class=" p-5 ">
                <label for="speed" class="form-label">Set Motor Speed (0-255):</label><br><br>
                <input type="number" id="speed" name="speed" class="form-control" min="0" max="255" placeholder="Enter speed">
            </div>
            <button type="button" class="btn btn-success col-4 mx-auto my-3" onclick="Submit()">Submit</button>


    </div>





    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> --}}




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Motor Speed Control</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <!-- Axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios@1.3.3/dist/axios.min.js"></script>

    <script src="motor.js"></script>
</head>
<body class="bg-light">

    <div class="container p-4 my-5">
        <div class="text-center">
            <button class="btn btn-primary me-2" id="off" >OFF</button>
            <button class="btn btn-danger" id="connectionStatus">Disconnected</button>
        </div>
    </div>

    <div class="card text-center mx-auto" style="width: 24rem;">
        <div class="p-5">
            <label for="speed" class="form-label">Set Motor Speed (0-255):</label><br><br>
            <input type="number" id="speed" name="speed" class="form-control" min="0" max="255" placeholder="Enter speed">
        </div>
        <button type="button" class="btn btn-success col-4 mx-auto my-3" onclick="Submit()">Submit</button>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
