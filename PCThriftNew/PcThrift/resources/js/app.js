import './bootstrap';

const link = document.querySelector('.change_profile_picture_link');
const input = document.querySelector('#profile_picture_input');

link.addEventListener('click', (event)=>{
    event.preventDefault();
    input.click();
});

