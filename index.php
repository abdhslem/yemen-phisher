
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $time = date('Y-m-d H:i:s');
    
    // عرض البيانات مباشرة على الشاشة
    echo "<h3>Data Received:</h3>";
    echo "<p>Email: $email</p>";
    echo "<p>Password: $pass</p>";
    echo "<p>IP: $ip</p>";
    echo "<p>User-Agent: $user_agent</p>";
    echo "<p>Time: $time</p>";
}
?>
<form method="POST">
    <input name="email" placeholder="Enter Email">
    <input name="pass" placeholder="Enter Password" type="password">
    <input type="submit" value="Submit">
</form>
