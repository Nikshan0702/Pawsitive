
alert("Join with us");
function register() {
    var full_name = document.getElementById('full_name').value;
    var contactno = document.getElementById('contactno').value;
    var password = document.getElementById('password').value;
    var email = document.getElementById('email').value;
    var confirm_password = document.getElementById('confirm_password').value;

    if (full_name === "" || email === "" || contactno === "" || password === "" || confirm_password === "") {
        alert("Check credentials");
        return false;
    } 
    else if (password.length<6 )
         
    {
       
        
        alert("Enter a password with at least six characters");
        return false;
       
    } 
    
    else if (confirm_password !== password)
    {
        alert("Passwords do not match");
        return false;

     } 
     
    else
   {
        alert("Created successfully");
        return true;
        
     }
}
