function log()
{

    var name = document.getElementById('name').value;
    var password = document.getElementById('password').value;

if(name ==="admin" && password ==="123" )
{
    alert("Log in sucessfully");
    alert("Welcome for our site");
    header("Location: admin1.php"); // Redirect to home.php
    exit();
}
else if(name=="" || password=="")
{
    alert("failed");
}
else
{
    alert("Failed: Incorrect username or password");

}

}

