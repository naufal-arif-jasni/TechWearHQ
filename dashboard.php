<?php include('includes/header.php'); ?>

<h2>Performance Hub</h2>
<p class="text-muted">Welcome back, E-Commerce Manager.</p>

<!-- KPI Cards -->
<div class="row mb-4">
    <div class="col-md-4">
        <div class="card shadow-sm border-0 bg-primary text-white">
            <div class="card-body text-center">
                <h6>Total Revenue</h6>
                <h3>$142,500.00</h3>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm border-0 bg-success text-white">
            <div class="card-body text-center">
                <h6>Total Orders</h6>
                <h3>1,240</h3>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm border-0 bg-info text-white">
            <div class="card-body text-center">
                <h6>Average Order Value (AOV)</h6>
                <h3>$114.92</h3>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Line Chart: Monthly Revenue Trend -->
    <div class="col-md-8 mb-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title">Monthly Revenue Trend (Last 12 Months)</h5>
                <canvas id="revenueChart"></canvas>
            </div>
        </div>
    </div>
    <!-- Pie Chart: Sales by Product Category -->
    <div class="col-md-4 mb-4">
        <div class="card shadow-sm">
            <div class="card-body text-center">
                <h5 class="card-title">Sales by Category</h5>
                <canvas id="categoryChart"></canvas>
            </div>
        </div>
    </div>
</div>

<script>
    // Revenue Line Chart
    const ctx1 = document.getElementById('revenueChart').getContext('2d');
    new Chart(ctx1, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Revenue ($)',
                data: [8000, 9500, 11000, 10500, 13000, 15000, 14000, 16500, 15500, 18000, 22000, 25000],
                borderColor: '#0d6efd',
                tension: 0.3,
                fill: true,
                backgroundColor: 'rgba(13, 110, 253, 0.1)'
            }]
        }
    });

    // Category Pie Chart
    const ctx2 = document.getElementById('categoryChart').getContext('2d');
    new Chart(ctx2, {
        type: 'pie',
        data: {
            labels: ['Smart Watches', 'Fitness Trackers', 'Accessories'],
            datasets: [{
                data: [55, 30, 15],
                backgroundColor: ['#0d6efd', '#198754', '#ffc107']
            }]
        }
    });
</script>

<?php include('includes/footer.php'); ?>