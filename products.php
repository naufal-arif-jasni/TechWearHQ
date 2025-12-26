<?php include('includes/header.php'); ?>
<div class="d-flex justify-content-between mb-3">
    <h2>Product Catalog</h2>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">+ Add New Product</button>
</div>

<div class="card shadow-sm">
    <table class="table align-middle mb-0">
        <thead class="table-light">
            <tr>
                <th>Product</th><th>SKU</th><th>Price</th><th>Status</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>TechPro X1 Watch</td><td>TW-001</td><td>$199</td>
                <td><span class="badge bg-success">In Stock</span></td>
                <td><button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editProductModal">Edit Price/Status</button></td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Add Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"><h5 class="modal-title">Add New Product</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
      <div class="modal-body">
        <form>
            <div class="mb-3"><label>Product Name</label><input type="text" class="form-control"></div>
            <div class="mb-3"><label>Price</label><input type="number" class="form-control"></div>
            <div class="mb-3"><label>Initial Stock</label><input type="number" class="form-control"></div>
            <button type="button" class="btn btn-primary w-100" data-bs-dismiss="modal" onclick="alert('Mock: Product Added!')">Save Product</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editProductModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"><h5 class="modal-title">Edit Product</h5><button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
      <div class="modal-body">
        <form>
            <div class="mb-3"><label>Update Price</label><input type="text" class="form-control" value="$199"></div>
            <div class="mb-3"><label>Stock Status</label>
                <select class="form-select"><option>In Stock</option><option>Low Stock</option><option>Out of Stock</option></select>
            </div>
            <button type="button" class="btn btn-success w-100" data-bs-dismiss="modal" onclick="alert('Mock: Update Successful!')">Update Product</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>