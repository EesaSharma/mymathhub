<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Graphing Calculator - MyMathHub</title>
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="calculator.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/graph_fav.png" type="image/x-icon">

</head>
<body >
    <?php include 'navbar.php'; ?>
    <center>
        <h1>Graphing Calculator</h1>
        <p>Enter Equations (comma-separated):</p>
        <p>Supported Functions: sin, cos, tan, sqrt, log, exp, pi, e, and more. Press 'GRAPH' to get the result.</p>
    </center>

    <div id="calculator-container">
    <!-- Calculator Section -->
    <section id="calculator" class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form id="calculatorForm">
                    <div class="form-group">
                        <input type="text" class="form-control" id="equations" placeholder="e.g., y = x^2, y = sin(x)" required>
                    </div>
                    <div class="form-group">
                        <label for="minX">Min X:</label>
                        <input type="number" class="form-control" id="minX" value="-10">
                    </div>
                    <div class="form-group">
                        <label for="maxX">Max X:</label>
                        <input type="number" class="form-control" id="maxX" value="10">
                    </div>
                    <div class="form-group">
                        <label for="graphType">Graph Type:</label>
                        <select class="form-control" id="graphType">
                            <option value="line">Line Chart</option>
                            <option value="scatter">Scatter Plot</option>
                            <option value="bar">Bar Chart</option>
                            <option value="pie">Pie Chart</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Graph</button>
                    <div class="reset-container">
                        <button type="reset" class="btn btn-outline-secondary">Reset Equation</button>
                        <button type="button" class="btn btn-info" id="resetBtn">Reset Graph</button>
                    </div>
                </form>

            </div>
        </div>
        <div class="row mt-4 graphic-container">
            <div class="col-md-12">
                <canvas id="graph" class="w-100"></canvas>
            </div>
        </div>
    </section>
    <p>Looking for a <a href="calculator.php">Normal Calculator</a>?</p>
</div>

    <!-- Bootstrap & jQuery JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Calculator JS -->
    <script src="calculator.js"></script>
    <?php include 'footer.php'; ?>
</body>
</html>