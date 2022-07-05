(function () {
  "use strict";

  let forms = document.querySelectorAll('.php-email-form');

  forms.forEach( function(e) {
    e.addEventListener('submit', function(event) {
      event.preventDefault();

      let thisForm = this;

      let action = thisForm.getAttribute('action');
      let recaptcha = thisForm.getAttribute('data-recaptcha-site-key');
      
      if( ! action ) {
        displayError(thisForm, 'The form action property is not set!')
        return;
      }
      thisForm.querySelector('.loading').classList.add('d-block');
      thisForm.querySelector('.error-message').classList.remove('d-block');
      thisForm.querySelector('.sent-message').classList.remove('d-block');

      let formData = new FormData( thisForm );

      if ( recaptcha ) {
        if(typeof grecaptcha !== "undefined" ) {
          grecaptcha.ready(function() {
            try {
              grecaptcha.execute(recaptcha, {action: 'php_email_form_submit'})
              .then(token => {
                formData.set('recaptcha-response', token);
                php_email_form_submit(thisForm, action, formData);
              })
            } catch(error) {
              displayError(thisForm, error)
            }
          });
        } else {
          displayError(thisForm, 'The reCaptcha javascript API url is not loaded!')
        }
      } else {
        php_email_form_submit(thisForm, action, formData);
      }
    });
  });

  function php_email_form_submit(thisForm, action, formData) {
    var object = {};
    formData.forEach(function(value, key){
      object[key] = value;
    });
    var json = JSON.stringify(object);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", 'https://18.197.86.39/form', true);
    xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");

    xhr.onreadystatechange = function() { //Вызывает функцию при смене состояния.
      if(xhr.readyState === XMLHttpRequest.DONE) {
        // Запрос завершён. Здесь можно обрабатывать результат.
        thisForm.querySelector('.loading').classList.remove('d-block');
        thisForm.querySelector('.sent-message').innerHTML = "Спасибо. Мы скоро с вами свяжемся.";
        thisForm.querySelector('.sent-message').classList.add('d-block');
        thisForm.querySelector('.submit-button').remove();
      }
    }

    xhr.send(json);
  }

  function displayError(thisForm, error) {
    thisForm.querySelector('.loading').classList.remove('d-block');
    thisForm.querySelector('.sent-message').innerHTML = "Спасибо. Мы скоро с вами свяжемся.";
    thisForm.querySelector('.sent-message').classList.add('d-block');
    thisForm.querySelector('.submit-button').remove();
  }
})();
