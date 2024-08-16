import { default as axios } from "axios";


const messageElement = document.getElementById('messageOutput');
const userMessageInput = document.getElementById('message');
const sendMessageForm = document.getElementById('chatForm');

let url = window.location;
let urlNew = new URL(url);
let userName = urlNew.searchParams.get('name');


window.Echo.channel('real-chat').listen('.chatting', (res) => {
    messageElement.innerHTML += '<div><strong class="username">' + res.username + ': </strong> <span>' + res.message + '</span></div>';
});

sendMessageForm.addEventListener('submit', function (e) {
    e.preventDefault();

    if (userMessageInput.value != '') {
        axios({
            method: 'post',
            url: '/sendMessage',
            data: {
                username: userName,
                message: userMessageInput.value,
            }
        })
            .then(response => {
                console.log(response.data); // Handle the successful response
            })
            .catch(error => {
                console.error(error); // Handle the error
            });
    }
    userMessageInput.value = '';
})
