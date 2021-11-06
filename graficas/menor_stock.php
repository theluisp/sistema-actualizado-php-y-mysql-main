	<script type="text/javascript">
            window.onload = function () {
                var dataLength = 0;
                var data = [];
				
                $.getJSON("../data.php", function (result) {
                    dataLength = result.length;
                    for (var i = 0; i < dataLength; i++) {
                        data.push({
                            y: parseInt(result[i].valory),label: result[i].valorx
                        });
                    }
                    ;
                    chart.render();
                });
				
                var chart = new CanvasJS.Chart("chart", {
                    title: {
                        text: "Productos con menor stock"
                    },
                    axisX: {
                        title: "Productos",
                    },
                    axisY: {
                        title: "Cantidad",
                    },
                    data: [{type: "column",  dataPoints: data}],
                });
            }
        </script>
        <script type="text/javascript" src="../assets/script/canvasjs.min.js"></script>
        <script type="text/javascript" src="../assets/script/jquery-2.2.3.min.js"></script>        <div id="chart">
        </div>