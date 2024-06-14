<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Photos</title>
    <link rel="stylesheet" href="css/admin.css"/>
</head>
<body>
    <h1 class="tit">Upload Your Photo</h1>
    <form action="#" method="post" enctype="multipart/form-data">
        <label for="photo">Choose a photo:</label><br><br>
        <input type="file" id="photo" name="photo" accept="image/*"><br><br>
        
        <label for="category">Select category:</label><br><br>
        <select id="category" name="category">
            <option value="Landscapes">Landscapes</option>
            <option value="Wildlife">Wildlife</option>
            <option value="CoastalBirds">Coastal Birds</option>
            <option value="Wedding">Wedding</option>
            <option value="Event">Event</option>
            <!-- Add more categories here -->
        </select><br><br><br>
        
        <input type="submit" value="Upload">
    </form>
</body>
</html>