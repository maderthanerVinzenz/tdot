document.addEventListener("DOMContentLoaded", function () {
    var ctx = document.getElementById("myChart").getContext("2d");

    fetch('index.php')
        .then(response => response.json())
        .then(data => {
            console.log(data);
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: data.chart.labels,
                    datasets: [{
                        data: data.chart.values,
                        backgroundColor: data.chart.colors
                    }]
                },
                options: {
                    title: {
                        display: true,
                        text: 'My Tortendiagramm'
                    }
                }
            });            

            var plzContainer = document.getElementById('plzList');
            data.plz.forEach(plz => {
                var li = document.createElement('li');
                li.appendChild(document.createTextNode(plz));
                plzContainer.appendChild(li);
            });
        })
        .catch(error => console.error('Error fetching data:', error));
});
