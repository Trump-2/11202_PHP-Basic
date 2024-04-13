<style>
    table,
    td,
    th {
        border: 1px solid orange;

    }

    table {
        border-collapse: collapse;
        text-align: center;
    }

    td,
    th {
        padding: 3px 9px;
    }
</style>
<h2>九九乘法表</h2>
<table>
    <?php for ($i = 1; $i <= 9; $i++) : ?>
        <tr>
            <?php for ($j = 1; $j <= 9; $j++) : ?>
                <td><?= "$i x $j = " . $i * $j ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
<hr>

<table>
    <tr>

        <th></th>
        <?php for ($i = 1; $i <= 9; $i++) : ?>
            <th><?= $i ?></th>
        <?php endfor; ?>
    </tr>

    <?php for ($i = 1; $i <= 9; $i++) : ?>
        <tr>
            <th><?= $i ?></th>
            <?php for ($j = 1; $j <= 9; $j++) : ?>
                <td><?= $i * $j ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>