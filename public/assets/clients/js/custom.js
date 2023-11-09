const optionMenu = document.querySelector(".select-menu"),
       selectBtn = optionMenu.querySelector(".select-btn"),
       options = optionMenu.querySelectorAll(".option"),
       sBtn_text = optionMenu.querySelector(".sBtn-text");
selectBtn.addEventListener("click", () => optionMenu.classList.toggle("active"));       
options.forEach(option =>{
    option.addEventListener("click", ()=>{
        let selectedOption = option.querySelector(".option-text").innerText;
        sBtn_text.innerText = selectedOption;
        optionMenu.classList.remove("active");
    });
});

// function scrollValue() {
//     var navbar = document.getElementById('box-main');
//     var scroll = window.scrollY;
//     if (scroll < 200) {
//         navbar.classList.remove('box-main-changeBgColour');
//     } else {
//         navbar.classList.add('box-main-changeBgColour');
//     }
// }

// window.addEventListener('scroll', scrollValue);


// document.addEventListener('scroll', ()=>
// {
//     const header = document.querySelector('box-main');
    
//     if(window.scrollY > 0)
//     {
//         header.classList.add('scrolled');
//     }
//     else{
//         header.classList.remove('scrolled');
//     }
// })

// $(document).ready(function () {
//     var scroll_pos = 0;
//     $("#box-main").scroll(function () {
//         scroll_pos = $(this).scrollTop();
//         if (scroll_pos > 210) {
//             $("#box-main").css('background-color', '#1A1A1A');
//         } else {
//             $("#box-main").css('background-color', 'red');
//         }
//         console.log(scroll_pos);
//     });
// });

// const images = document.querySelector('.content');
// images.addEventListener('click', handleClick, false);

// function handleClick(e) {
//     if (e.target.matches('img')) {
//       const { src } = e.target;
//       document.getElementById("content").style.backgroundImage = `url(${src})`;
//     }
//   }
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  // Close the dropdown if the user clicks outside of it
//   window.onclick = function(event) {
//     if (!event.target.matches('.box-main-registered-avatar')) {
//       var dropdowns = document.getElementsByClassName("box-main-registered-avatar-main-menu");
//       var i;
//       for (i = 0; i < dropdowns.length; i++) {
//         var openDropdown = dropdowns[i];
//         if (openDropdown.classList.contains('show'))
//          {
//           openDropdown.classList.remove('show');
//          }
//       }
//     }
//   }