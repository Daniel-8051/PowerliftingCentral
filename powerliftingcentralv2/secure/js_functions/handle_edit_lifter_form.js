function handleFormSubmit(event) {
    event.preventDefault();

    const data = new FormData(event.target);

    const formJSON = Object.fromEntries(data.entries());

    const results = document.querySelector('.results pre');
    results.innerText = JSON.stringify(formJSON, null, 2);

    var final_data = JSON.stringify(formJSON, null, 2);

    // BASIC AUTH CREDENTIALS FOR API REQUEST
    var username = "admin";
    var password = "password123";

    // SEND DATA TO API USING PUT REQUEST
    var xhr = new XMLHttpRequest();
    var url = 'http://dmcauley21.lampt.eeecs.qub.ac.uk/powerliftingcentralv2/api/lifter/update.php';
    xhr.open('PUT', url);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.setRequestHeader('Authorization', 'Basic ' + btoa(unescape(encodeURIComponent(username + ':' + password))));

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            window.location.href = "success/editlifter_success.php";
        } else if (xhr.readyState == 4 && xhr.status == 400) {
            alert(xhr.responseText); // Returns a 400 error the submission is rejected.          
        } else if (xhr.readyState == 4 && xhr.status == 403) {
            alert(xhr.responseText); // Returns a 403 error if the portal isn't allowed to post submissions.           
        } else if (xhr.readyState == 4 && xhr.status == 404) {
            alert(xhr.responseText); //Returns a 404 error if the formGuid isn't found     
        }
    }

    // Sends the request

    xhr.send(final_data)
}

const form = document.querySelector('.edit-lifter-card');
form.addEventListener('submit', handleFormSubmit);