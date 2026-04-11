<!DOCTYPE html>
<html>
<head>
  <style>
    h1 {text-align: center;}
p {text-align: center;}
    p{color: gray;}
    p {font-size: 15px;}
    form {text-align: center;}
    form {font-size: 20px;}
  </style>
  <title>Kolehiyo Ng Subic Maintenance Report System</title>
  <link rel="stylesheet" href="form.css">
</head>
<body>
  <h1>Kolehiyo Ng Subic Facility Maintenance Record Form</h1>
<p> Please fillout the form below </p>

  <form action="current.php" method="POST">
    <label>Name:</label>
    <input type="text" name="name" placeholder="Enter your name">
<br><br>
    <label for= "issue">Issue:</label>
    <select name="issue">
      <option value="" selected disabled>-- Select an Option --</option>
      <option>Electrical Issue</option>
      <option>Broken/Damaged Classroom Furniture</option>
      <option>Sanitation Issue</option>
      <option>Missing Classroom Furniture</option>
      <option>Other (describe below)</option>
    </select>
    <br><br>

    <label>Room/Building:</label>
    <input type="text" name="room" placeholder="ex. VTB1, JFK6, etc.">
<br><br>
    <label>Description:</label>
    <textarea name="description" rows="2"></textarea>
<br>
    <button type="submit">Submit Report</button>
  </form>

</body>
</html>