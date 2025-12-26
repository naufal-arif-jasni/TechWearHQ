<?php include('includes/header.php'); ?>
<h2>Order History</h2>
<div class="card shadow-sm border-0 mt-3">
    <table class="table table-striped mb-0">
        <thead class="table-dark">
            <tr><th>Order ID</th><th>Customer</th><th>Total</th><th>Status</th><th>Action</th></tr>
        </thead>
        <tbody>
            <tr>
                <td>#1051</td><td>Jane Smith</td><td>$89.00</td>
                <td><span class="badge bg-warning">Pending</span></td>
                <td><button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#statusModal">Update Status</button></td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Status Update Modal -->
<div class="modal fade" id="statusModal" tabindex="-1">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header"><h6>Change Status</h6></div>
      <div class="modal-body">
        <select class="form-select mb-3">
            <option>Pending</option><option>Shipped</option><option>Delivered</option><option>Cancelled</option>
        </select>
        <button class="btn btn-primary w-100" data-bs-dismiss="modal" onclick="alert('Order Status Updated!')">Apply</button>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>