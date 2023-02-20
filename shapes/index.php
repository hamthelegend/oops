<?php

    require_once "Shape.php";

    $shapeOptions = array("Sphere", "Cube");

    $length = "";
    $surfaceArea = "";
    $volume = "";

    if (isset($_POST['submit'])){
        if (isset($_POST['shape']) && isset($_POST['length'])){
            $shapeType = $shapeOptions[$_POST['shape']];
            $length = $_POST['length'];

            if (is_numeric($length)){

                $shape = $shapeType == "Sphere" ? new Sphere(radius: $length) : new Cube(sideLength: $length);

                $length = ($shapeType == "Sphere" ? "Radius: " : "Side length: ") . $length;
                $surfaceArea = "Surface area: " . round($shape->getSurfaceArea(), 2);
                $volume = "Volume: " . round($shape->getVolume(), 2);
            } else {
                $length = "Your " . ($shapeType == "Sphere" ? "radius" : "side length") . " should be numeric.";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
              crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
                crossorigin="anonymous"></script>
    </head>
    <body>

        <div class="d-flex align-items-center justify-content-center vh-100" style="flex-direction: column;">
            <form method="POST">
                <div class="mb-3">
                    <label for="input-shape">Choose your shape</label>
                    <select id="input-shape" class="form-select" name="shape">
                        <?php foreach ($shapeOptions as $index => $shapeType): ?>
                            <option
                                    value="<?= $index ?>"
                                    <?= isset($_POST['shape']) && $_POST['shape'] == $index ? 'selected' : '' ?>>
                                <?= $shapeType ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label
                            for="input-length"
                            class="form-label"
                            id="input-length-label">Cube side length / sphere radius</label>
                    <input
                            id="input-length"
                            class="form-control"
                            type="text"
                            name="length"
                            required>
                </div>
                <div style="text-align: center; margin-top: 10px; margin-bottom: 10px">
                    <input name="submit" value="Submit" type="submit" class="btn btn-primary">
                </div>
            </form>
            <div style="text-align: center">
                <?php echo $length . "<br>" ?>
                <?php echo $surfaceArea . "<br>" ?>
                <?php echo $volume ?>
            </div>
        </div>

        <script>
            const inputShape = document.getElementById("input-shape");
            const inputLengthLabel = document.getElementById("input-length-label");

            if (inputShape.value == 0) {
                inputLengthLabel.innerText = "Sphere radius"
            } else {
                inputLengthLabel.innerText = "Cube side length"
            }

            inputShape.onchange = function () {
                if (inputShape.value == 0) {
                    inputLengthLabel.innerText = "Sphere radius"
                } else {
                    inputLengthLabel.innerText = "Cube side length"
                }
            }
        </script>

    </body>
</html>