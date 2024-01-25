function searchAccount() {
    var username = document.getElementById('username').value;

    // Send username to backend
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'temp1.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Display the backend response in the result container
            document.getElementById('resultContainer').innerHTML = xhr.responseText;
        }
    };

    // Send the username as POST data
    xhr.send('username=' + username);
}
