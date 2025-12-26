<?php include('includes/header.php'); ?>
<h2>Inventory Management</h2>
<div class="card shadow-sm border-0 mt-3">
    <table class="table table-hover mb-0">
        <thead>
            <tr><th>Product</th><th>Current Stock</th><th>Location</th><th>Action</th></tr>
        </thead>
        <tbody>
            <tr>
                <td>ActiveFit Band</td><td>8</td><td>Aisle 2</td>
                <td><button class="btn btn-sm btn-dark" data-bs-toggle="modal" data-bs-target="#stockModal">Update Stock Count</button></td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Stock Update Modal -->
<div class="modal fade" id="stockModal" tabindex="-1">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header"><h6>Add/Subtract Stock</h6></div>
      <div class="modal-body">
        <input type="number" class="form-control mb-3" placeholder="Enter quantity">
        <button class="btn btn-success w-100" data-bs-dismiss="modal" onclick="alert('Inventory Adjusted!')">Confirm Update</button>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>