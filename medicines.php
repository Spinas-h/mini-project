<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Medicine Search</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body style="font-family:Arial,sans-serif; background-color:#f4f4f4; text-align:center;  height: 100vh; display: flex; justify-content: center; align-items:center; margin: 0;">

<div class="search-container">
    <h1 style=" margin-bottom: 20px; font-size:30px; font-family:Brush Script MT; color:black;"> <img src="images/logo2.png" alt="Logo" style="height: 100px; width:120px; vertical-align: middle; margin-right:0px;"><big>Search for Medicines</big></h1>
    <form method="POST" action="search.php" class="search-form">
        <div class="search-bar-container">
            <input type="text" id="search-bar" name="searchQuery" placeholder="Enter medicine name..." >
            <button type="submit" style="width: 15%; background-color: #4CAF50; border: none; cursor: pointer; border-radius: 0 50px 50px 0; color: white; display: flex;  justify-content: center; align-items: center;"><i class="fas fa-search"></i></button>
        </div>
    </form>
</div>
    
    <!-- Search Results -->
    <ul id="medicine-list">
        <?php if (!empty($results)): ?>
            <?php foreach ($results as $medicine): ?>
                <li><?php echo htmlspecialchars($medicine); ?></li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>


</body>
</html>