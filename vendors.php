<?php include('includes/header.php'); ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Vendor/Supplier List</h2>
    <button class="btn btn-primary btn-sm">+ Add New Vendor</button>
</div>

<div class="card shadow-sm border-0">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-dark text-white">
                <tr>
                    <th>Vendor Name</th>
                    <th>Contact Info</th>
                    <th>Products Supplied</th>
                    <th>Last Shipment Date</th>
                    <th>Performance</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $vendors = [
                    ['name' => 'Shenzhen Electronics Co.', 'contact' => 'sales@shenzhen-elec.cn', 'items' => 'OLED Screens, Sensors', 'date' => '2023-11-02', 'perf' => '98%'],
                    ['name' => 'Global Straps Ltd.', 'contact' => 'info@globalstraps.com', 'items' => 'Silicone & Leather Bands', 'date' => '2023-10-28', 'perf' => '92%'],
                    ['name' => 'TechCore Lithium', 'contact' => 'support@techcore.jp', 'items' => 'Batteries', 'date' => '2023-11-05', 'perf' => '100%'],
                    ['name' => 'Precision Glass Inc.', 'contact' => 'orders@precision-glass.com', 'items' => 'Gorilla Glass Covers', 'date' => '2023-09-15', 'perf' => '85%'],
                ];

                foreach ($vendors as $v): ?>
                <tr>
                    <td><strong><?= $v['name'] ?></strong></td>
                    <td><?= $v['contact'] ?></td>
                    <td><small class="text-muted"><?= $v['items'] ?></small></td>
                    <td><?= $v['date'] ?></td>
                    <td>
                        <div class="progress" style="height: 10px; width: 100px;">
                          <div class="progress-bar bg-success" role="progressbar" style="width: <?= $v['perf'] ?>;"></div>
                        </div>
                        <small><?= $v['perf'] ?></small>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<div class="alert alert-info mt-4">
    <i class="bi bi-info-circle"></i> <strong>Pro-Tip:</strong> Vendors with performance below 90% are highlighted for review by the Procurement Manager.
</div>

<?php include('includes/footer.php'); ?>