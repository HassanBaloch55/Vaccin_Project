<?php
 include 'admin_Navbar.php';
?>
<?php


// Create connection
 include 'connect.php';
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Approve or deny request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $action = $_POST['action'];

    if ($action === 'approve') {
        $sql = "UPDATE parents_requests SET status='approved' WHERE id=?";
    } elseif ($action === 'deny') {
        $sql = "UPDATE parents_requests SET status='denied' WHERE id=?";
    }
    elseif ($action === 'Rejected') {
        $sql = "UPDATE parents_requests SET status='Rejected' WHERE id=?";
    }

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

// Fetch pending requests
$sql = "SELECT id, parents_name, email, status, request_date FROM parents_requests WHERE status !=''";
$result =mysqli_query($conn ,$sql);
?>
    <div class="container mt-5">
        <h3 class="mb-4 text-center"> Parents Ruquest For Account Registration</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="thead">Parents Name</th>
                    <th class="thead">Email</th>
                    <th class="thead">Messege</th>
                    <th class="thead">Request Date</th>
                    <th class="thead">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td class="tbody"><?= htmlspecialchars($row['parents_name']) ?></td>
                            <td class="tbody"><?= htmlspecialchars($row['email']) ?></td>
                            <td class="tbody"><?= htmlspecialchars($row['status']) ?></td>
                            <td class="tbody"><?= htmlspecialchars($row['request_date']) ?></td>
                            <td class="tbody">
                                <form method="post" class="d-inline">
                                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                    <button type="submit" name="action" value="approve" class="btn btn-success btn-sm">Approve</button>
                                    <button type="submit" name="action" value="deny" class="btn btn-warning btn-sm">Deny</button>
                                    <button type="submit" name="action" value="Rejected" class="btn btn-danger btn-sm">Reject</button>
                                </form>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center">No pending requests</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

