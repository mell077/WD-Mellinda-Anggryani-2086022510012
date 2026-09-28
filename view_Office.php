<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Office List</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <div class="nav">
            <a href="controller.php?page=employee">Employee</a> |
            <a href="controller.php?page=office">Office</a> |
            <a href="controller.php?page=relation">Office-Employees</a>
        </div>

        <div class="content">
            <h2>Office List</h2>

            <table>
                <thead>
                    <tr>
                        <th style="width: 70%;">Office Name</th>
                        <th style="width: 30%;">City</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($offices)): ?>
                    <?php foreach ($offices as $office): ?>
                    <tr>
                        <td><?= htmlspecialchars($office['office_name']) ?></td>
                        <td><?= htmlspecialchars($office['city']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                    <?php else: ?>
                    <tr>
                        <td colspan="2" style="text-align: center;">Belum ada data</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>

            <h2>Tambah Office</h2>

            <form action="controller.php?page=office&action=store" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="office_name" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" id="phone" name="phone">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="note">Note</label>
                    <input type="text" id="note" name="note">
                </div>

                <button type="submit" class="btn-save">SAVE</button>
            </form>
        </div>
    </div>

</body>

</html>