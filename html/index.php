<?php

    require_once "Car.php";
    use html\Car;

    $msg = "";
    $carOptions = array(
            new Car('Honda', 'Civic', 2022),
            new Car('Toyota', 'Corolla', 2022),
            new Car('Ford', 'Mustang', 2022),
    );

    if (isset($_POST['submit'])) {
        if (isset($_POST['car'])) {
            $carIndex = $_POST['car'];
            $car = $carOptions[$carIndex];
            $msg = "Selected car: ".$car;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>
    <body>

        <div class="d-flex align-items-center justify-content-center vh-100" style="flex-direction: column;">
            <form method="POST">
                <label>Choose a car
                    <select class="form-select" name="car">
                        <?php foreach ($carOptions as $index => $car): ?>
                            <option
                                    value="<?= $index ?>"
                                    <?= isset($_POST['car']) && $_POST['car'] == $index ? 'selected': ''?>>
                                <?= $car ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <div style="text-align: center; margin-top: 10px">
                    <input name="submit" value="Submit" type="submit" class="btn btn-primary">
                </div>
            </form>
            <div style="text-align: center">
                <?php echo $msg?>
            </div>
        </div>

    </body>
</html>