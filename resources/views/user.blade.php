<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <title>Document</title>
</head>

<body class="relative w-full h-full">
    <h1>User</h1>

    <h2>{{ $user->name }}</h2>

    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="file_input">File input</label>
            <input type="file" id="file_input" name="file_input" required>
        </div>
        <button type="submit">Simpan</button>
    </form>

    <canvas id="myChart" style="width:100%;max-width:700px"></canvas>

    <div>
        <button id="button-buka" class="bg-blue-300 ml-6 p-3">Buka</button>
        <div id="alert"
            class="fixed hidden top-0 bottom-0 left-0 right-0 justify-center items-center bg-transparent">
            <div class="flex flex-col bg-gray-300 w-1/4 h-1/3 items-center justify-center space-y-20">
                <p>test</p>
                <button id="button-tutup" class="bg-blue-300">Tutup</button>
            </div>
        </div>
    </div>

    <script>
        let alert = document.getElementById('alert')
        let button_buka = document.getElementById('button-buka')
        let button_tutup = document.getElementById('button-tutup')

        button_buka.addEventListener('click', function() {
            alert.classList.remove('hidden');
            alert.classList.add('flex')
        });

        button_tutup.addEventListener('click', function(){
            alert.classList.add('hidden')
            alert.classList.remove('flex')
        })
    </script>

    <script>
        let xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
        let yValues = [55, 49, 44, 24, 15];
        let barColors = ["red", "green", "blue", "orange", "brown"];

        new Chart("myChart", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                }]
            },
            options: {
                legend: {
                    display: false
                },
                title: {
                    display: true,
                    text: "Penujualan",
                    position: "left",
                }
            }
        });
    </script>

</body>

</html>
