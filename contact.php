<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css"> <!-- Link to the CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Link to Font Awesome for icons -->
</head>

<body>
    <?php
    include 'connection.php';
    include 'sidebar.php';
    ?>
    <!-- Show contact detail in table -->
    <div class="main-content">
        <div class="header">
            <div class="search-bar">
                <input type="text" placeholder="Search...">
            </div>
            <div class="notifications">
                <i class="fas fa-bell"></i>
                <i class="fas fa-envelope"></i>
                <i class="fas fa-user"></i>
            </div>
        </div>
        <h1>Contact Detail</h1>
        <table>
            <tr>
                <th>SN</th>
                <th>Message</th>
                <th>Visitor ID</th>
                <th>Action</th>
            </tr>
            <tbody>
                <?php
                // Query to fetch messages
                $sql = "SELECT * FROM `message`";
                $result = mysqli_query($conn, $sql);

                if ($result && mysqli_num_rows($result) > 0) {
                    $sn = 1; // Serial number counter
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                <td>" . $sn++ . "</td>
                                <td>" . htmlspecialchars($row['description']) . "</td>
                                <td>" . htmlspecialchars($row['visitor_id']) . "</td>
                                <td> 
                                                                <a href='delete_message.php?id=" . $row['id'] . "' onclick=\"return confirm('Are you sure you want to delete this message?');\" class='delete-btn'>Delete</a>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No messages found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>


    <?php
    include 'right-sidebar.php';
    ?>

    <script>
        function logout() {
            // Redirect to login page
            window.location.href = 'login.php';
        }
    </script>
</body>

</html>