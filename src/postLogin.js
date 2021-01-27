window.studentPage;
window.teacherPage;
function post(){
    var xhttp = new XMLHttpRequest();
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var params = 'username=' + username + '&password=' + password;

    xhttp.open("POST", "https://web.njit.edu/~aes38/curl.php", true);
    xhttp.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhttp.send(params);

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var obj = JSON.parse(this.responseText);

            if (obj.dbanswer == "0") {
                document.getElementById('DBresponse').innerHTML = "You entered an incorrect UCID or Passsword";
            }
            if (obj.dbanswer == "1")//teacher
            {
                location.href = 'https://web.njit.edu/~aes38/teacher/home.html';
            }
            if (obj.dbanswer == "2")//student
            { 
                location.href = 'https://web.njit.edu/~aes38/student/home.html';
            }
        }
    };
}