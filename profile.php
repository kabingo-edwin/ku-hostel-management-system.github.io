
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile Card</title>
<style>
.profile-card {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 20px;
    width: 300px;
    margin: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.profile-card img {
    width: 100%;
    border-radius: 5px;
    margin-bottom: 10px;
}

.profile-card h2 {
    margin-bottom: 5px;
}

.profile-card p {
    margin-bottom: 10px;
}
</style>
</head>
<body>

<form action="profile.inc.php" method="GET">
<label for="nameTag">Enter Name:</label>
        <input type="text" id="nameTag" name="nameTag">
        <button type="submit">Search</button>
</form>

</body>
</html>