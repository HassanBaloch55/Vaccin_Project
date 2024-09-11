 //   faqs section code
document.addEventListener('DOMContentLoaded', function() {
  let questions = document.querySelectorAll('.faq-question');
  
  questions.forEach(question => {
    question.addEventListener('click', function() {
        let answer = document.querySelector(this.getAttribute('data-target'));
        
        // Toggle the visibility of the answer
        if (answer.style.display === 'none' || answer.style.display === '') {
            answer.style.display = 'block';
        } else {
            answer.style.display = 'none';
        }
    });
  });
  });
  // end faqs section code
//  admin section  chat & menu
let chatSection = document.getElementById('chatSection');
let chatToggleBtn = document.getElementById('chat_Btn');

chatToggleBtn.addEventListener('click', () => {
    chatSection.classList.toggle('open');
});

let AllLinks = document.getElementById('AllLinks');
let Menu_btn = document.getElementById('Menu_btn');
 Menu_btn.addEventListener('click',function(){
  if(AllLinks.classList.toggle('AllLinks')) {
    AllLinks.classList.toggle('move');
  }
  else {
    AllLinks.classList.toggle('move')
  }
 })
  // end  admin section  chat & menu

let btn = document.getElementById('Add_new_btn');
let Add_vaccine = document.getElementById('Add_vaccine');
let Add_record = document.getElementById('Add_record');
 btn.addEventListener('click',function(){
  if(Add_vaccine.style.display === 'none' ||  Add_record.style.display === 'block' ) {
     Add_vaccine.style.display = 'block';
     Add_record.style.display = 'none';
  }
  else {
   Add_vaccine.style.display ='none'
   Add_record.style.display = 'block';
  }
 })  

 
 