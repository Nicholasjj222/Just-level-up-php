<???php

// Fake dynamic data (simulate backend)
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$user = "new age ";
$status = "ACTIVE";
$projects = [
    ["name" => "CoreX Engine", "status" => "Running"],
    ["name" => "TaskFlow System", "status" => "Queued"],
    ["name" => "VibeCore", "status" => "Live"]
];

function statusColor($status) {
    return match($status) {
        "Running" => "#00ff88",
        "Queued" => "#ffaa00",
        "Live" => "#00ccff",
        default => "#ffffff"
    };
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>NeonPanel</title>

<style>
body {
    margin: 0;
    background: #0a0a0a;
    color: #eaeaea;
    font-family: "Courier New", monospace;
}

.header {
    padding: 20px;
    background: linear-gradient(90deg, #00ffcc, #0066ff);
    color: black;
    font-weight: bold;
}

.container {
    padding: 30px;
}

.card {
    background: #111;
    border: 1px solid #00ffcc;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0,255,204,0.2);
}

h1 {
    margin: 0;
}

.project {
    padding: 10px;
    border-bottom: 1px solid #222;
}

.status {
    float: right;
    font-weight: bold;
}

.footer {
    text-align: center;
    padding: 20px 200px;
    color: #555;
}
</style>

</head>
<body>

<div class class="header">
    NeonPanel — PHP System Dashboard
</div>

<div class="container">

    <div class="card">
        <h1>Welcome, <?php echo $user; ?></h1>
        <p>Status: <strong style="color:#00ff88;"><?php echo $status; ?></strong></p>
    </div>

    <div class="card">
        <h2>Projects</h2>

        <?php foreach ($projects as $project): ?>
            <div class="project">
                <?php echo $project['name']; ?>
                <span class="status" style="color: <?php echo statusColor($project['status']); ?>">
                    <?php echo $project['status']; ?>
                </span>
            </div>
        <?php endforeach; ?>

    </div>

</div>

<div class="footer">
    Built with pure PHP 
</div>

</body>
</html>