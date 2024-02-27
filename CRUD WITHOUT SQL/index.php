<!DOCTYPE html>
<html>
<body>
<div class="container">
    <a href="add.php" class="btn btn-primary">Add</a>
    <table class="table table-bordered table-striped" style="margin-top:20px;">
        <tbody>
            <?php
                //fetch data from json
                $data = file_get_contents('usuarios.json');
                //decode into php array
                $data = json_decode($data);

                $index = 0;
                foreach($data as $row){
                    echo "
                        <tr>
                            <td>".$row->id."</td>
                            <td>".$row->nome."</td>
                            <td>".$row->email."</td>
                            <td>
                                <a href='edit.php?index=".$index."' class='btn btn-success btn-sm'>Edit</a>
                                <a href='delete.php?index=".$index."' class='btn btn-danger btn-sm'>Delete</a>
                            </td>
                        </tr>
                    ";

                    $index++;
                }
            ?>
        </tbody>
    </table>
</div>
</body>
</html>