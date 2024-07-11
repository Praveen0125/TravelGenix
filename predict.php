// predict.php
<?php
if (isset($_POST['inputData'])) {
    $data = $_POST['inputData'];
    // Call the Python script with the input data
    $command = escapeshellcmd("tour.py" . escapeshellarg(json_encode($data)));
    $prediction = shell_exec($command);
    echo $prediction;
}
?>