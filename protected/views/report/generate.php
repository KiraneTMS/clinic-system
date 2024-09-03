<?php
$this->breadcrumbs=array(
    'Reports'=>array('index'),
    'Generate',
);

$this->menu=array(
    array('label'=>'Back to Reports', 'url'=>array('index')),
);

?>

<h1>Generated Report</h1>

<!-- Example of displaying a report summary -->
<p>Report Summary:</p>

<?php if (!empty($reportData)): ?>
    <div>
        <h3>Data Overview</h3>
        <!-- Example data display -->
        <table>
            <tr>
                <th>Field 1</th>
                <th>Field 2</th>
                <th>Field 3</th>
            </tr>
            <?php foreach ($reportData as $data): ?>
                <tr>
                    <td><?php echo CHtml::encode($data['field1']); ?></td>
                    <td><?php echo CHtml::encode($data['field2']); ?></td>
                    <td><?php echo CHtml::encode($data['field3']); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <!-- Example of displaying a chart (replace with actual chart rendering code) -->
    <div>
        <h3>Chart</h3>
        <!-- Add code to render a chart using a library like Chart.js or Highcharts -->
        <canvas id="reportChart" width="400" height="200"></canvas>
    </div>
<?php else: ?>
    <p>No data available for the report.</p>
<?php endif; ?>

<script>

document.addEventListener('DOMContentLoaded', function () {
    var ctx = document.getElementById('reportChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Label1', 'Label2', 'Label3'],
            datasets: [{
                label: 'Dataset',
                data: [12, 19, 3],
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
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
});
</script>
