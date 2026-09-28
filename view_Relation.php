<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Office Employees</title>
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
            <h2>Office Employees</h2>

            <table>
                <thead>
                    <tr>
                        <th>Employee</th>
                        <th>Office</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($relations)): ?>
                    <?php foreach ($relations as $row): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['employee_name']) ?></td>
                        <td><?= htmlspecialchars($row['office_name']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                    <?php else: ?>
                    <tr>
                        <td colspan="2" style="text-align: center;">Belum ada data</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>

            <form action="controller.php?page=relation&action=store" method="POST">
                <div class="form-group">
                    <label for="employee">Employee</label>
                    <select name="employee_id" id="employee" required>
                        <?php foreach ($employees as $emp): ?>
                        <option value="<?= $emp['id'] ?>"><?= htmlspecialchars($emp['nama'] ?? $emp['name']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="office">Office</label>
                    <select name="office_id" id="office" required>
                        <?php foreach ($offices as $off): ?>
                        <option value="<?= $off['id'] ?>"><?= htmlspecialchars($off['office_name']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <button type="submit" class="btn-save">SAVE</button>
            </form>
        </div>
    </div>

</body>

</html>