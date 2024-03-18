@extends('Backend.layout.app')
@section('content')
    <div class="px-12 mt-12">
        <canvas id="myChart">

        </canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'May', 'June', 'july','Aug','Sep','Oct','Nov','Dec'],
                datasets: [{
                    label: 'Totals Visitors',
                    data: [12, 19, 20, 5, 8, 3,9,25,10],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
