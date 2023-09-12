<?php
session_start();

require "../classes/User.php";

$user_obj = new User;

$all_users = $user_obj->getAllUsers();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../assets/css/style.css">

    <title>Dashboard</title>
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark" style="margin-bottom: 80px">
        <div class="container">
            <a href="dashboard.php" class="navbar-brand">
                <h1 class="h3">The Company</h1>
            </a>

            <div class="navbar-nav">
                <span class="navbar-text">
                    <?= $_SESSION['full_name'] ?>
                </span>
                <form action="../actions/logout.php" method="post" class="d-flex ms-2">
                    <button type="submit" class="text-danger bg-transparent border-0">Log out</button>
                </form>
            </div>
        </div>
    </nav>

    <main class="row justify-content-center gx-0">
        <div class="col-6">
            <h2 class="text-center">USER LIST</h2>

            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($user = $all_users->fetch_assoc()) {
                        ?>
                        <tr>
                            <td>
                                <?php
                                if ($user['photo']) {
                                    ?>
                                    <img src="../assets/images/<?= $user['photo'] ?>" alt="<?= $user['photo'] ?>"
                                        class="d-block mx-auto dashboard-photo"
                                        style="width: 3.5em; height: 3.5em; object-fit: cover">

                                    <?php
                                } else {
                                    ?>

                                    <i class="fa-solid fa-user text-secondary d-block text-center dashboard-icon"></i>

                                <?php } ?>
                            </td>
                            <td>
                                <?= $user['id'] ?>
                            </td>
                            <td>
                                <?= $user['first_name'] ?>
                            </td>
                            <td>
                                <?= $user['last_name'] ?>
                            </td>
                            <td>
                                <?= $user['username'] ?>
                            </td>
                            <td>
                                <?php
                                if ($_SESSION['id'] == $user['id']) {
                                    ?>
                                    <a href="edit-user.php" class="btn btn-outline-warning">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>

                                    <a href="delete-user.php" class="btn btn-outline-danger">
                                        <i class="fa-regular fa-trash-can"></i>
                                    </a>
                                    <?php
                                }
                                ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>

</body>

</html>