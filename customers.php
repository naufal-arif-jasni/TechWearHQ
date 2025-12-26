<?php include('includes/header.php'); ?>
<h2>Customer List</h2>
<div class="card shadow-sm">
    <table class="table">
        <thead><tr><th>Name</th><th>Email</th><th>LTV</th><th>Action</th></tr></thead>
        <tbody>
            <tr>
                <td>Alice Johnson</td><td>alice@example.com</td><td>$1,450</td>
                <td><button class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#custModal">Edit Profile</button></td>
            </tr>
        </tbody>
    </table>
</div>

<div class="modal fade" id="custModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header"><h6>Edit Customer Information</h6></div>
      <div class="modal-body">
        <div class="mb-2"><label>Email</label><input type="text" class="form-control" value="alice@example.com"></div>
        <div class="mb-2"><label>Membership Level</label>
            <select class="form-select"><option>Standard</option><option>VIP</option></select>
        </div>
        <button class="btn btn-info w-100 text-white" data-bs-dismiss="modal" onclick="alert('Customer Profile Updated!')">Save Changes</button>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>