// Fungsi untuk mengirim pesan
function sendMessage() {
    var username = document.getElementById("username").value;
    var message = document.getElementById("message").value;

    if (username.trim() === "" || message.trim() === "") {
        return;
    }

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "index.php?action=sendMessage", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.status === "success") {
                document.getElementById("message").value = "";
                getMessages();
            } else {
                alert("Terjadi kesalahan saat mengirim pesan.");
            }
        }
    };
    xhr.send("username=" + encodeURIComponent(username) + "&message=" + encodeURIComponent(message));
}

// Fungsi untuk mendapatkan pesan secara berkala
function getMessages() {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "index.php?action=getMessages", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("chatbox").innerHTML = xhr.responseText;
            scrollToBottom();
        }
    };
    xhr.send();
}

// Fungsi untuk men-scroll ke bawah chatbox
function scrollToBottom() {
    var chatbox = document.getElementById("chatbox");
    chatbox.scrollTop = chatbox.scrollHeight;
}

// Panggil fungsi getMessages setiap 3 detik
setInterval(getMessages, 3000);

// Tambahkan event listener untuk mengirim pesan saat tombol "Enter" ditekan
document.getElementById("message").addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        sendMessage();
    }
});