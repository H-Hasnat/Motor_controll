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

     <div>
        @csrf
        <label for="speed">Set Motor Speed (0-100):</label>
        <input type="number" id="speed" name="speed">
        <button type="submit" onclick="Submit()">Submit</button>


    </div>

</body>
</html>


{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motor Control</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5/1/5K1U5B4m4b5yABBlgVD4Iq6VVcWVm1bXg4K3" crossorigin="anonymous"></script>

<!-- Axios -->
<script src="https://cdn.jsdelivr.net/npm/axios@1.3.3/dist/axios.min.js"></script>


    <style>
        .range-value {
            font-size: 1.5rem;
        }
        .control-buttons .btn {
            min-width: 120px;
        }
    </style>


</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">DC Motor Control</h1>

            <!-- Connect Button -->
            <div class="text-center">
                <button id="connectBtn" class="btn btn-danger">Disconnected</button>
            </div>
        </div>

        <!-- Range Input for Speed -->
        <div class="my-4 text-center">
            <label for="speed" class="form-label range-value">
                Motor Speed: <span id="speedval"></span>
            </label>

            <input type="range" class="form-range" name="speed" min="0" max="255" step="1" id="speed" value="0" oninput="range(this.value)">
            <button  class="btn btn-warning mx-2" onclick="Submit()">Done</button>
        </div>

        <!-- Clockwise and Anticlockwise Buttons -->
        <div class="text-center control-buttons mb-3">
            <button id="clockwiseBtn" class="btn btn-primary mx-2">Clockwise</button>
            <button id="anticlockwiseBtn" class="btn btn-secondary mx-2">Anticlockwise</button>
        </div>




    <!-- Bootstrap JS (for future JavaScript functionality if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="motor.js"></script>

    <!-- Optional JavaScript to update the speed value -->
     <script>
        const speedRange = document.getElementById('speedRange');
        const speedValue = document.getElementById('speedValue');

        // speed.addEventListener('input', function () {
        //     speedval = speed.value;
        //     speed.innerText= speedval;
        // });


    </script>

</body>
</html> --}}
